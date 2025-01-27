<?php

namespace Migrate2v3\Database;

use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\InterpolatedStringPart;
use PhpParser\Node\Scalar\InterpolatedString;
use PhpParser\Node\Scalar\String_;
use PhpParser\NodeVisitorAbstract;

class Query extends NodeVisitorAbstract
{
  protected array $selects = [];
  protected array $inserts = [];
  protected array $updates = [];
  protected array $deletes = [];

  protected \PhpParser\Node $node;

  public function enterNode(\PhpParser\Node $node)
  {
    $this->node = $node;
    $this->variableQuery();
  }

  public function afterTraverse(array $nodes)
  {
    /*var_dump($this->inserts);*/
    /*die();*/
  }

  private function variableQuery()
  {
    $node = $this->node;

    if ($node instanceof Assign) {

      if ($node->var instanceof Variable && $node->var->name === 'query') {


        if ($node->expr instanceof String_) {

          if (strpos($node->expr->value, "select") !== false) {
            $this->selects[] = &$node->expr;
          }
        }
      } elseif ($node->expr instanceof InterpolatedString) {
        foreach ($node->expr->parts as $part) {

          if ($part instanceof InterpolatedStringPart) {
          }
        }
      }
    }

    // var_dump($this->selects);
    // die();
  }
}
