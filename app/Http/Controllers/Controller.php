<?php

namespace App\Http\Controllers; //normal namespace

use Illuminate\Foundation\Bus\DispatchesJobs; //use is like importing the module into the current file
use Illuminate\Routing\Controller as BaseController; //you can even give him an alias
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
