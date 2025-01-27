<?php

namespace Migrate2v3;

use Exception;
use Migrate2v3\Analyze\Database\Query as AnalyzeDatabaseQuery;
use Migrate2v3\Database\Query;
use PhpParser\NodeTraverser;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter;

class App
{
  private $parser;
  private $statements;

  private $prettyPrinter;

  public function __construct()
  {
    $this->prettyPrinter = new PrettyPrinter\Standard();
  }


  /**
   * @param string $pattern
   *
   * @return void
   */
  public function prepare($pattern)
  {
    $code = file_get_contents($pattern);
    $this->parser = (new ParserFactory)->createForHostVersion();
    try {
      $this->statements = $this->parser->parse($code);
    } catch (Exception $exception) {
      echo "Parse Error: ", $exception->getMessage(), PHP_EOL;
    }
  }

  public function analyze()
  {
    $trv = new NodeTraverser(
      new AnalyzeDatabaseQuery
    );
    $trv->traverse($this->statements);
    var_dump(Analyze\Database\Query::$insertStatements);
    die();
  }

  public function parse()
  {
    $trv = new NodeTraverser(
      new Query
    );
    $this->statements = $trv->traverse($this->statements);
  }
}
