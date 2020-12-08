<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $dashboardData = $this->apiRequest()->fetchAdminDashboard();
        $data = json_decode($dashboardData, false)->data;
        return view('pages.index', compact('data'));
    }
}
