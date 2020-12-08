<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanProductController extends Controller
{
    public function index()
    {
        $loanProductsResource = $this->apiRequest()->fetchLoanProducts();
        $loanProducts = json_decode($loanProductsResource, false)->data;
        return view('pages.loanproduct.index', compact('loanProducts'));
    }


    public function add()
    {
        return view ('pages.loanproduct.add');
    }

    public function store(Request $request)
    {
        $loanProductsResource = $this->apiRequest()->storeLoanProducts($request->all());
        if (!$loanProductsResource->success) {
            return redirect()->back();
        }

        //TODO: FLASH MESSAGE
        return redirect('/admin/loans/products')->with('success', $loanProductsResource->message);
    }

    public function show($id)
    {
        $loanProductsResource = json_decode($this->apiRequest()->showLoanProduct($id), false);
        if (!$loanProductsResource->success) {
            return redirect()->back();
        }

        $loanProducts = $loanProductsResource->data;


        //TODO: FLASH MESSAGE
        return view('pages.loanproduct.show', compact('loanProducts'));

    }
}
