<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class IndexController
{
    public function __invoke()
    {
        return view('welcome');
    }
}
