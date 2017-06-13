<?php

namespace Simuduck;

use Simuduck\Behavior\FlyBehavior;
use Simuduck\Behavior\QuackBehavior;

abstract class Duck
{
  /** @var FlyBehavior */
  private $flyBehavior;

  /** @var QuackBehavior */
  private quackBehavior;

  public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
  {
    $this->flyBehavior = $flyBehavior;
    $this->quackBehavior = $quackBehavior;
  }

  abstract public function display();

  /**
   * @return Duck
   */
  public function fly()
  {
    $this->flyBehavior->fly();
    return $this;
  }

  /**
   * @return Duck
   */
  public function quack()
  {
    $this->quackBehavior->quack();
    return $this;
  }

  /**
   * @param FlyBehavior $flyBehavior
   * @return Duck
   */
  public function setFlyBehavior(FlyBehavior $flyBehavior)
  {
    $this->flyBehavior = $flyBehavior;
    return $this;
  }

  /**
   * @param QuackBehavior $quackBehavior
   * @return Duck
   */
  public function setQuackBehavior(QuackBehavior $quackBehavior)
  {
    $this->quackBehavior = $quackBehavior;
    return $this;
  }

  /**
   * @return Duck
   */
  public function swim()
  {
    print "I'm swimming!";
    return $this;
  }
}
