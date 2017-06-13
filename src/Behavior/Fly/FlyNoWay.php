<?php

namespace Simuduck\Behavior\Fly;

class FlyNoWay implements FlyBehavior
{
  public function fly()
  {
    return "I can't fly";
  }
}

