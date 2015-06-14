<?php
use \PHPWarrior;

namespace PHPWarriorMaze;

class Runner extends \PHPWarrior\Runner {

  public function __construct( $arguments, $stdin, $stdout ) {
    $this->arguments = $arguments;
    $this->stdin = $stdin;
    $this->stdout = $stdout;
    $this->game = new Game();
  }

}
