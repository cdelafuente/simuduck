<?php

namespace Simuduck\Behavior\Fly;

use PHPUnit\Framework\TestCase;

class FlyWithWingsBehaviorTest extends TestCase
{
  const FLY_MSG = "flying with wings";

  public function setUp()
  {
    $this->target = new FlyWithWings();
  }

  public function test_fly()
  {
    $this->assertEquals(self::FLY_MSG, $this->target->fly());
  }
}

