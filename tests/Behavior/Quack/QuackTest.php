<?php

namespace Simuduck\Behavior\Quack;

use PHPUnit\Framework\TestCase;

class QuackTest extends TestCase
{
  const QUACK_SOUND = 'quack';

  /** @var Quack */
  private $target;

  public function setUp()
  {
    $this->target = new Quack();
  }

  public function test_quack()
  {
    $this->assertEquals(self::QUACK_SOUND, $this->target->quack());
  }
}
