<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MetricController extends Controller
{

    /**
     * Find metrics by params
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->method = 'setMetrics';
        $this->_setParams($request);
    }
}
