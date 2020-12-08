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
            <li class="breadcrumb-item active" aria-current="page">Edit Branch</li>
        </ol>
    </nav>


    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Edit Branch</h5>
                <p class="mb-25">Edit Branch</p>
                @include('errors.list')
                <div class="row">
                    <div class="col-sm">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none">
                            <strong>Success!</strong> Branch edited successfully.
                        </div>
                        <form class="" id="edit-branch" method="post">
                            {{csrf_field()}}
                            <div class="row">

                                <div class="col-md-6 form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" id="name" placeholder="Name" name="name" type="text"
                                           value="{{ $name }}">
                                    <span class="err">*Required</span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="address">Address</label>
                                    <input class="form-control" id="address" placeholder="Address" name="address"
                                           type="text"  value="{{$address }}">
                                           <span class="err">*Required</span>

                                </div>
                            </div>


                            <hr>
                            <input value="{{ url('admin') }}" class="url" type="hidden" />
                            <input value="{{ $id }}" class="id" type="hidden" />
                            <button class="btn btn-primary" type="submit">Create New</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- /Row -->
@endsection
