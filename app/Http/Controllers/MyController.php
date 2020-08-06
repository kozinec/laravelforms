<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MyController extends BaseController
{
    // не понял, зачем это надо, в чем идея?
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
