<?php

namespace Simuduck\Behavior\Fly;

use PHPUnit\Framework\TestCase;

class FlyNoWayTest extends TestCase
{
  const FLY_MSG = "I can't fly";

  public function setUp()
  {
    $this->target = new FlyNoWay();
  }

  public function test_fly()
  {
    $this->assertEquals(self::FLY_MSG, $this->target->fly());
  }
}

