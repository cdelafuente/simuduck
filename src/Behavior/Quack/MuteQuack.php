<?php

namespace Simuduck\Behavior\Quack;

class MuteQuack implements QuackBehavior
{
  public function quack()
  {
    return '';
  }
}

