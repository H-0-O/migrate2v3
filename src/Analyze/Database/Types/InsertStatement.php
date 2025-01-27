<?php

namespace Migrate2v3\Analyze\Database\Types;

use Exception;
use Migrate2v3\Analyze\Database\Enums\InsertStatementTypes;
use Migrate2v3\Analyze\Database\Exceptions\CanNotFindColumnsINInsert;
use Migrate2v3\Analyze\Database\Exceptions\CanNotFindTableNameINInsert;
use Migrate2v3\Utils\UnimplementedState;
use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\InterpolatedStringPart;
use PhpParser\Node\Scalar\String_;

class InsertStatement extends AbstractStatement
{
    private array $columns;
    private array $bindings;

    /**
     * Summary of type
     * @var int
     */
    private string $type;

    public static function  isProcessable(string $query)
    {
        $pattern = '/^\s*INSERT\s+INTO\s+\w+\s*\([\w\s,]*\)\s*VALUES\s*\(.*|\s*SET\s+.+/is';
        return preg_match($pattern, $query) === 1;
    }


    //TODO must have kind to hold that insert wrote by VALUES or SET in sql 
    public function open($tableName)
    {
        $this->tableName = $tableName;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function bind($var, $dim = null)
    {
        $this->bindings[] = [
            'var' => $var,
            'dim' => $dim
        ];
    }

    public function close() {}


    /**
     * 
     * just supported zero index of it
     * @param array $params
     * @throws \Migrate2v3\Utils\UnimplementedState
     * @return InsertStatement
     */
    public static function process(...$params)
    {
        $insertStatement = new InsertStatement;

        list($node) = $params;

        foreach ($node as $expr) {
            if ($expr instanceof InterpolatedStringPart) {

                $insertStatement->tableName == null &&
                    $insertStatement->extractInsertDatabaseColumns($expr->value);
            } elseif ($expr instanceof ArrayDimFetch) {
                if ($expr->var instanceof Variable && $expr->dim instanceof String_) {
                    $insertStatement->bind($expr->var->name, $expr->dim->value);
                }
                //TODO probably later must add the indexed array here
            } elseif ($expr instanceof Variable) {
                $insertStatement->bind($expr->name);
            } else {
                throw new UnimplementedState();
            }
            // Match the table name
            // //TODO it must extract more complex things like when a variable is used for column name
            // $insertStatement->setColumns($columns);
        }

        return $insertStatement;
    }

    private function extractInsertDatabaseColumns($insertStatementText)
    {

        preg_match('/insert\s+into\s+([a-zA-Z0-9_]+)/i', $insertStatementText, $tableMatches);

        if (empty($tableMatches[1])) {
            //TODO complete the message of this
            throw new CanNotFindTableNameINInsert("");
        }
        $this->tableName = $tableMatches[1];

        if (preg_match('/\bVALUES\b/i', $insertStatementText)) {
            $this->type = InsertStatementTypes::VALUES;
            $this->columns = $this->extractColumnsFromValues($insertStatementText);
        } elseif (preg_match('/\bSET\b/i', $insertStatementText)) {
            $this->type = InsertStatementTypes::SET;
            $this->columns = $this->extractColumnsFromSet($insertStatementText);
        } else {
            //TODO later must change to custom exception  
            throw new Exception();
        }
    }

    private function extractColumnsFromValues($insertStatementText){

        preg_match('/\((.*?)\)/s', $insertStatementText, $columnMatches);
        $columns = trim($columnMatches[1] ?? "");
        $columns = explode(",", $columns);

        if (empty($columns)) {
            //TODO complete the message of this
            throw new CanNotFindColumnsINInsert("");
        }

        return $columns;
    }

    private function extractColumnsFromSet($insertStatementText){
        
    }
}
