<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoIpController extends Controller
{
    public function __invoke()
    {
        // TODO Make this actually use GeoIP
        return redirect('/uk/');
    }
}
