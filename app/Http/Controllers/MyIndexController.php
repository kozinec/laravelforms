<?php

//зачем это надо
declare(strict_types=1);

namespace App\Http\Controllers;


class MyIndexController
{
    //зачем это надо
    public function __invoke()
    {
        return view('welcome');
    }
}
