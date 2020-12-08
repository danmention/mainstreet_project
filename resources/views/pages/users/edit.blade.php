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
            <!-- <li class="breadcrumb-item"><a href="#">Manage Branches</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Edit Admin User</li>
        </ol>
    </nav>


                    <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Edit Admin User</h5>
                            <p class="mb-25">Edit User</p>
                            @include('errors.list')
                            <div class="row">
                                <div class="col-sm">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none">
                                        <strong>Success!</strong> User edited successfully.
                                    </div>
                                    <form class= "" method="post" id="edit-admin-user">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">First name</label>
                                                <input class="form-control" id="firstName" placeholder="" name="first_name" value="{{ $firstname }}" type="text">
                                                <span class="err">*Required</span>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Last name</label>
                                                <input class="form-control" id="lastName" placeholder="" value="{{ $lastname }}" name="last_name" type="text">
                                                <span class="err">*Required</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Email</label>
                                                <input class="form-control" id="email" placeholder="you@example.com" value="{{ $email }}" name="email" type="text">
                                                <span class="err">*Required</span>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Phone</label>
                                                <input class="form-control" id="phone" placeholder="phonenumber" value="{{ $phone }}" name="phone" type="text">
                                                <span class="err">*Required</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Password</label>
                                                <input class="form-control" id="password" placeholder="password" name="password" type="password">
                                                <span class="err">*Required</span>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Confirm Password</label>
                                                <input class="form-control" id="confirm_password" placeholder="confirm_password" name="password_confirmation" type="password">
                                                <span class="err">*Required</span>
                                            </div>
                                        </div>


                                        <hr>
                                        <input value="{{ url('admin') }}" class="url" type="hidden" />
                                        <input value="{{ $id }}" class="id" type="hidden" />
                                        <button class="btn btn-primary" type="submit">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <!-- /Row -->
@endsection
