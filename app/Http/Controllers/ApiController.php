<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function add_admin_user(Request $request) {
        $usersResource = $this->apiRequest()->storeAdminUser($request->all());
        return response()->json($usersResource);
    }

    public function edit_admin_user(Request $request) {
        $usersResource = $this->apiRequest()->editAdminUser($request->all());
        return response()->json($usersResource);
        //return response()->json($request->all());
    }

    public function edit_branch(Request $request) {
        $branchResource = $this->apiRequest()->editBranch($request->all());
        return response()->json($branchResource);
        //return response()->json($request->all());
    }

    public function add_loan(Request $request) {
        $loanResource = $this->apiRequest()->addLoan($request->all());
        return response()->json($loanResource);
    }
}
