<?php

namespace Simuduck;

use PHPUnit\Framework\TestCase;
use Simuduck\Behavior\Fly\FlyBehavior;
use Simuduck\Behavior\Fly\FlyNoWay;
use Simuduck\Behavior\Quack\MuteQuack;
use Simuduck\Behavior\Quack\QuackBehavior;

class DecoyDuckTest extends TestCase
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
    $this->quackBehavior = new MuteQuack();
    $this->target = new DecoyDuck($this->flyBehavior, $this->quackBehavior);
  }

  public function test_quack()
  {
    $this->assertEquals('', $this->target->quack());
  }

  public function test_fly()
  {
    $this->assertEquals("I can't fly", $this->target->fly());
  }

  public function test_display()
  {
    $this->assertEquals("I'm a decoy duck", $this->target->display());
  }

  public function test_swim()
  {
    $this->assertEquals("I'm swimming", $this->target->swim());
  }
}

