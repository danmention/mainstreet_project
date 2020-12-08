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
            <!-- <li class="breadcrumb-item"><a href="#">Manage Loans</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">All Users</li>
        </ol>
    </nav>

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">All Admin Users</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a style="color: #9e9e9e" href="{{ url('admin/users/edit/'.$user->id) }}">
                                                Edit
                                            </a>
                                            |
                                            <a style="color: #9e9e9e" href="{{ url('admin/users/delete/'.$user->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
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

