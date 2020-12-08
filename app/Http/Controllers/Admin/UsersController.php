<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreAdminUserRequest;
use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usersResource = $this->apiRequest()->fetchAdminUsers();
        $usersResourceResponse = json_decode($usersResource, false);
        if (!$usersResourceResponse->success) {
            return redirect()->back()->withErrors('error', $usersResourceResponse->errors);
        }
        $users = $usersResourceResponse->data;
        return view('pages.users.index', compact('users'));
    }

    public function add()
    {
        return view('pages.users.add');
    }

    public function edit($id) {
        //print $id;
        $data = DB::table('admins')->where(['id'=>$id])->get();
        //var_dump($data);
        return view('pages.users.edit', ['id'=>$id, 'firstname'=>$data[0]->first_name, 'lastname'=>$data[0]->last_name, 'email'=>$data[0]->email, 'phone'=>$data[0]->phone]);
    }

    public function store(StoreAdminUserRequest $request)
    {
        $usersResource = $this->apiRequest()->storeAdminUser($request->all());
        if (!$usersResource->success) {
            return redirect()->back();
        }

        $usersResourceResponse = json_decode($usersResource, false);
        $users = $usersResourceResponse->data;
        return view('pages.users.index', compact('users'));
    }
}
