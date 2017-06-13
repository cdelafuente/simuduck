<?php

namespace Simuduck;

use PHPUnit\Framework\TestCase;
use Simuduck\Behavior\Fly\FlyBehavior;
use Simuduck\Behavior\Fly\FlyWithWings;
use Simuduck\Behavior\Quack\Quack;
use Simuduck\Behavior\Quack\QuackBehavior;

class RedHeadDuckTest extends TestCase
{
  /** @var  FlyBehavior */
  private $flyBehavior;

  /** @var  QuackBehavior */
  private $quackBehavior;

  /** @var Duck */
  private $target;

  public function setUp()
  {
    $this->flyBehavior = new FlyWithWings();
    $this->quackBehavior = new Quack();
    $this->target = new RedHeadDuck($this->flyBehavior, $this->quackBehavior);
  }

  public function test_quack()
  {
    $this->assertEquals('quack', $this->target->quack());
  }

  public function test_fly()
  {
    $this->assertEquals('flying with wings', $this->target->fly());
  }

  public function test_swim()
  {
    $this->assertEquals("I'm swimming", $this->target->swim());
  }

  public function test_display()
  {
    $this->assertEquals("I'm a red head duck", $this->target->display());
  }
}
