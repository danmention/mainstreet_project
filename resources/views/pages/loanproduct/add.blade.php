@extends('layouts.master')
@push('styles')
    <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item active" aria-current="page">Create New Loan</li>
        </ol>
    </nav>


                    <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Add New Loan Product</h5>
                            <p class="mb-25">Create new Loan Product</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form action= "{{route ('admin.loans.products.store') }}" method= "post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="Name">Name</label>
                                                <input class="form-control" id="Name" placeholder="name of loan product" name="name" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="Rate">Rate</label>
                                                <input class="form-control" id="Rate" placeholder="interest rate" name="rate" type="number">
                                            </div>
                                        </div>



                                        <hr>
                                        <button class="btn btn-primary" type="submit">Create New</button>
                                    </form>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <!-- /Row -->
@endsection
