<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $endpoint = $this->baseUrl() . '/admin/managers/';
        $managersResource = $this->apiRequest()->getApi($endpoint);
        $managers = json_decode($managersResource, false)->data;
        return view('pages.managers.index', compact('managers'));
    }


    public function add()
    {
        return view ('pages.managers.add');
    }

    public function store(Request $request)
    {
        $managersResource = $this->apiRequest()->storeBranch($request->all());
        if(!$managersResource->success){
            return redirect()->back();
        }

//        $branch = $managersResourceResponse->data;
        //TODO: FLASH MESSAGE
        return redirect('/admin/managers')->with('success', $managersResource->message);
    }
}
