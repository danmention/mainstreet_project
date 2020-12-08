<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LoansController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // $loansResource = $this->apiRequest()->fetchLoans();
        //$loans = json_decode($loansResource, false)->data;
        $loans = DB::table('loans')
                    ->join('customers', 'customers.id', '=', 'loans.customer_id')
                    ->select('loans.*', 'customers.first_name AS borrower')
                    ->get();
        return view('pages.loan.index', compact('loans'));
    }

    public function edit($id)
    {
        // $loansResource = $this->apiRequest()->fetchLoans();
        //$loans = json_decode($loansResource, false)->data;
        $loanProducts = json_decode($this->apiRequest()->fetchLoanProducts(), false)->data;
        $customers = json_decode($this->apiRequest()->fetchCustomers(), false)->data;
        $loans = DB::table('loans')
                    ->join('customers', 'customers.id', '=', 'loans.customer_id')
                    ->select('loans.*', 'customers.first_name AS borrower')
                    ->where(['loans.id'=>$id])
                    ->get();
        return view('pages.loan.edit', compact('loans', 'loanProducts', 'customers'));
    }

    public function add()
    {
        $loanProducts = json_decode($this->apiRequest()->fetchLoanProducts(), false)->data;
        $customers = json_decode($this->apiRequest()->fetchCustomers(), false)->data;
    //    dd($customers);

        return view ('pages.loan.add', compact('loanProducts', 'customers'));
    }

    public function store(Request $request)
    {

        $payload = $request->all();
        $loansResource = $this->apiRequest()->storeLoan($payload);

        if (!$loansResource->success) {
            return redirect()->back()->withErrors($loansResource->errors);
        }

        return redirect()->route('admin.loans.index')->with('success', $loansResource->message);


    }
}
