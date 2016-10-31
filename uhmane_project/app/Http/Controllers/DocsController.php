<?php

namespace Uhmane\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Uhmane\Http\Requests;
use Uhmane\Http\Controllers\Controller;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('api.docs.index');
    }
}
