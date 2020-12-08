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
            <!-- <li class="breadcrumb-item"><a href="#">Manage Branches</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">All Branches</li>
        </ol>
    </nav>

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">All Branches</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($branch as $branchs)
                                    <tr>
                                        <td>{{ $branchs->name }}</td>
                                        <td>{{ $branchs->address }}</td>
                                        <td>
                                            <a href="{{ url('admin/branch/edit/'.$branchs->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon-pencil"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="View"> <i
                                                    class="icon-eye"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Action</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
@endsection

@push('scripts')
    @include('includes.datatables')
@endpush

