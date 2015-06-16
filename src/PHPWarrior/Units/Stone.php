<?php

namespace PHPWarrior\Units;

class Stone extends Base {
  public function __construct() {
    $this->bind();
  }
  public function max_health() {
    return 100;
  }
  public function character() {
    return "+";
  }
}
