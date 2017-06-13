<?php

namespace Simuduck;

use PHPUnit\Framework\TestCase;
use Simuduck\Behavior\Fly\FlyBehavior;
use Simuduck\Behavior\Fly\FlyNoWay;
use Simuduck\Behavior\Quack\QuackBehavior;
use Simuduck\Behavior\Quack\Squeak;

class RubberDuckTest extends TestCase
{
  /** @var  FlyBehavior */
  private $flyBehavior;

  /** @var  QuackBehavior */
  private $quackBehavior;

  /** @var Duck */
  private $target;

  public function setUp()
  {
    $this->flyBehavior = new FlyNoWay();
    $this->quackBehavior = new Squeak();
    $this->target = new RubberDuck($this->flyBehavior, $this->quackBehavior);
  }

  public function test_quack()
  {
    $this->assertEquals('squeak', $this->target->quack());
  }

  public function test_fly()
  {
    $this->assertEquals("I can't fly", $this->target->fly());
  }

  public function test_display()
  {
    $this->assertEquals("I'm a rubber duck", $this->target->display());
  }

  public function test_swim()
  {
    $this->assertEquals("I'm swimming", $this->target->swim());
  }
}

