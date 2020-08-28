<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class LineBot
{
  protected static function getFacadeAccessor()
  {
      return 'line-bot';
  }

}
