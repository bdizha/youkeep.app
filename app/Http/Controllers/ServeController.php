<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServeController extends Controller
{
    /**
     * Find stores
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->method = '_setServes';
        return $this->_setParams($request);
    }
}
