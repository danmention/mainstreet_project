<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanApplicationsController extends Controller
{
    //
    public function index()
    {
        $loansResource = json_decode($this->apiRequest()->fetchLoans(), false);
       
        if (!$loansResource->success) {
            return redirect()->back()->with('error', $loansResource->errors);
        }

        return $loansResource->data;
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        $loansResource = json_decode($this->apiRequest()->storeLoan($payload), false);

        if (!$loansResource->success) {
            return redirect()->back()->with('error', $loansResource->errors);
        }

        return $loansResource->data;
    }
}
