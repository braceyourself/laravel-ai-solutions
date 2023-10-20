<?php

namespace Braceyourself\AiSolution\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Braceyourself\AiSolution\AiSolution
 */
class AiSolution extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Braceyourself\AiSolution\AiSolution::class;
    }
}
