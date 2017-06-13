<?php

namespace Simuduck\Behavior\Quack;

use PHPUnit\Framework\TestCase;

class MuteQuackTest extends TestCase
{
  const QUACK_SOUND = '';

  /** @var MuteQuack */
  private $target;

  public function setUp()
  {
    $this->target = new MuteQuack();
  }

  public function test_quack()
  {
    $this->assertEquals(self::QUACK_SOUND, $this->target->quack());
  }
}

