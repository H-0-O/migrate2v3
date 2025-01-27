<?php

namespace Migrate2v3\Analyze\Database\Types;


abstract class AbstractStatement {
    
    protected ?string $tableName = null;   

    /**
     * Summary of isProcessable
     * @return bool
     */
    abstract public static function isProcessable(string $query);
    
    abstract public static function process(...$params);

    abstract public function open($tableName);

    abstract public function close();

}