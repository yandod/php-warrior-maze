<?php
// -----------
// |@+ + +     |
// | +   + +++ |
// |   +++     |
// | +     +++ |
// | + +++ +   |
// | + +   +++ |
// | + +++ + +>|
// -----------

$this->description("Find stair to escape from maze.");
$this->tip("Call \$warrior->walk() to walk forward in the Player 'play_turn' method.");
$this->time_bonus(15);
$this->ace_score(10);
$this->size(11, 7);
$this->stairs(10, 6);
$this->warrior(0, 0, ':east')->add_abilities(['walk','feel','pivot']);

$maze = [
[0,1,0,1,0,1,0,0,0,0,0],
[0,1,0,0,0,1,0,1,1,1,0],
[0,0,0,1,1,1,0,0,0,0,0],
[0,1,0,0,0,0,0,1,1,1,0],
[0,1,0,1,1,1,0,1,0,0,0],
[0,1,0,1,0,0,0,1,1,1,0],
[0,1,0,1,1,1,0,1,0,1,0],
[0,0,0,0,0,0,0,0,0,1,0]
];

$y = 0;
foreach ($maze as $line) {
  $x = 0;
  foreach ($line as $cell) {
    if ($cell) {
      $this->unit(':stone', $x, $y, ':west');
    }
    $x++;
  }
  $y++;
}
