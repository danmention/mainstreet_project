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
            <li class="breadcrumb-item active" aria-current="page">All Loans</li>
        </ol>
    </nav>

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">All Loans</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Borrower</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Tenor</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($loans as $loan)
                                    <tr>
                                        <td>{{ $loan->borrower ?? '-'  }}</td>
                                        <td>{{ $loan->duration }}</td>
                                        <td>{{ number_format($loan->amount, 2) }}</td>
                                        <td>{{ $loan->duration }} months</td>
                                        <td><span class="badge badge-grey">{{ $loan->loan_status }}</span></td>
                                        <td>
                                            <a href="{{ url('admin/loans/edit/'.$loan->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon-pencil"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="View"> <i
                                                    class="icon-eye"></i> </a>
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Borrower</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Tenor</th>
                                    <th>Status</th>
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

