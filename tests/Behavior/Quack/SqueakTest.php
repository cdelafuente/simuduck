<?php

namespace Simuduck\Behavior\Quack;

use PHPUnit\Framework\TestCase;

class SqueackTest extends TestCase
{
  const QUACK_SOUND = 'squeak';

  /** @var Squeak */
  private $target;

  public function setUp()
  {
    $this->target = new Squeak();
  }

  public function test_squeak()
  {
    $this->assertEquals(self::QUACK_SOUND, $this->target->quack());
  }
}

