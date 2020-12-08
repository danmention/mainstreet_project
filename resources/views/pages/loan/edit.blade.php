@extends('layouts.master')
@push('styles')
    <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item active" aria-current="page">Create New Loan Application</li>
        </ol>
    </nav>


    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Add New Loan Application</h5>
                <p class="mb-25">Create new Loan</p>
                @include('errors.list')
                <div class="row">
                    <div class="col-sm">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none">
                            <strong>Success!</strong> Loan created successfully.
                        </div>
                        <form action="" method="POST" id="add-loan">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">

                                    <label for="amount">Amount</label>
                                    <input class="form-control" id="amount" name="amount" value="{{ $loans[0]->amount }}" placeholder="Enter amount" type="text">
                                    <span class="err">*Required</span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="duration">Duration</label>
                                    <input class="form-control" name="duration"value="{{ $loans[0]->duration }}" id="duration" placeholder="Enter a duration"
                                           name="duration" type="number">
                                    <span class="err">*Required</span>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="country">Loan Product</label>
                                    <select class="form-control custom-select d-block w-100" id="product_id" name="loan_product_id">
                                        <option value="">Choose...</option>
                                        @foreach($loanProducts as $loanProduct)
                                            <option value="{{$loanProduct->id}}" @if($loanProduct->id == $loans[0]->loan_product_id) selected @endif >{{$loanProduct->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="err">*Required</span>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="customer">Customer</label>
                                    <select class="form-control custom-select d-block w-100" id="customer"
                                            name="customer_id">
                                        <option value="">Choose...</option>
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}" @if($customer->id == $loans[0]->customer_id) selected @endif>{{$customer->full_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="err">*Required</span>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="customer">Description</label>
                                    <textarea class="form-control custom-select d-block w-100" id="desc" name="description">{{ $loans[0]->description }}</textarea>
                                    <span class="err">*Required</span>
                                </div>
                            </div>


                            <hr>
                            <input value="{{ url('admin') }}" class="url" type="hidden" />
                            <button class="btn btn-primary" type="submit">Create New</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- /Row -->
@endsection
