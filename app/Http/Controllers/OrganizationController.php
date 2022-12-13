<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * @Route("Route", name="RouteName")
     */
    public function index()
    {
        return view('organization.index');
    }
}
