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
            <li class="breadcrumb-item active" aria-current="page">Create New Branch</li>
        </ol>
    </nav>


                    <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Add New manager</h5>
                            <p class="mb-25">Create new Manager</p>
                            <div class="row">
                                <div class="col-sm">
                                <form class= "" action="{{ route ('adminbranch.store') }}" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Email</label>
                                                <input class="form-control" id="firstName" placeholder="Email" name="name" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Address</label>
                                                <input class="form-control" id="lastName" placeholder="Address" name="address" type="text">
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