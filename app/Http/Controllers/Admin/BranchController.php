<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreAdminBranchRequest;
use Illuminate\Http\Request;
use DB;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $endpoint = $this->baseUrl() . '/admin/branches';
        $branchResource = $this->apiRequest()->getApi($endpoint);
        $branch = json_decode($branchResource, false)->data;
        return view('pages.branch.index', compact('branch'));
    }


    public function add()
    {
        return view('pages.branch.add');
    }

    public function edit($id)
    {
        $data = DB::table('branches')->where(['id'=>$id])->get();
        return view('pages.branch.edit', ['name'=>$data[0]->name, 'address'=>$data[0]->address, 'id'=>$id]);
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        $branchResource = $this->apiRequest()->storeBranch($payload);
        if (!$branchResource->success) {
            return redirect()->back()->withErrors($branchResource->errors)->withInput($request->all());
        }

//        $branch = $branchResourceResponse->data;
        //TODO: FLASH MESSAGE
        return redirect('/admin/branch')->with('success', $branchResource->message);
    }
}
