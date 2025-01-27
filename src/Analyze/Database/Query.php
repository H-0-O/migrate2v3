<?php

namespace Migrate2v3\Analyze\Database;

use Migrate2v3\Analyze\Database\Exceptions\CanNotFindTableNameINInsert;
use Migrate2v3\Analyze\Database\Types\InsertStatement;
use Migrate2v3\Analyze\Database\Types\InsertType;
use Migrate2v3\Utils\UnimplementedState;
use PhpParser\Node;
use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\InterpolatedStringPart;
use PhpParser\Node\Scalar\InterpolatedString;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\NodeVisitorAbstract;

class Query extends NodeVisitorAbstract
{

  private Node $node;

  /**
   *  array of InsertType
   * @var array<InsertStatement>
   */
  static array $insertStatements = [];


  public function beforeTraverse(array $nodes)
  {
    return null;
  }

  public function enterNode(Node $node)
  {
    $this->node = $node;

    if ($node instanceof Expression) {
      if ($node->expr instanceof Assign) {
        if ($node->expr->var instanceof Variable && $node->expr->var->name == "query") {
          $this->collectVariableWithQuery($node->expr->expr);
        }
      }
    }

    return null;
  }


  public function leaveNode(Node $node)
  {
    return null;
  }

  public function afterTraverse(array $nodes)
  {
    return null;
  }


  private function collectVariableWithQuery(Node $node)
  {
    $this->isInterpolatedString($node) && $this->extractBindingsFromInterpolatedString($node->parts);
  }



  private function isInterpolatedString(Node $node)
  {
    return $node instanceof InterpolatedString;
  }

  private function extractBindingsFromInterpolatedString(array $node)
  {
    if (InsertStatement::isProcessable($node[0]->value)) {
      self::$insertStatements[] = InsertStatement::process($node);
    }
  }
}
