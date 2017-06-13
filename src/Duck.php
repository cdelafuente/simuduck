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

  /**
   * @param FlyBehavior $flyBehavior
   * @param QuackBehavior $quackBehavior
   */
  public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
  {
    $this->flyBehavior = $flyBehavior;
    $this->quackBehavior = $quackBehavior;
  }

  abstract public function display();

  /**
   * @return string 
   */
  public function fly()
  {
    return $this->flyBehavior->fly();
  }

  /**
   * @return string 
   */
  public function quack()
  {
    return $this->quackBehavior->quack();
  }

  /**
   * @return string 
   */
  public function swim()
  {
    return "I'm swimming!";
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
}

