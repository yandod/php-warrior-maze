<?php

use \PHPWarrior;

namespace PHPWarriorMaze;


class Game extends \PHPWarrior\Game {

  public function tower_paths() {
    return glob(__DIR__ .'/../../towers/*');
  }

}
