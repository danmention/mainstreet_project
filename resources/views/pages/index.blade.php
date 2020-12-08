@extends('layouts.master')
@push('styles')
    <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <nav class="hk-breadcrumb mb-20" aria-label="breadcrumb">

    </nav>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-sm-12">
                    <div class="card-group hk-dash-type-2">

                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-5">
                                    <div>
                                        <span class="d-block font-15 text-dark font-weight-500">Borrowers</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{ $data->totalBorrowers }}</span></span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-5">
                                    <div>
                                        <span class="d-block font-15 text-dark font-weight-500">Recovery Rate</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block display-4 text-dark mb-5">{{ $data->recoveryRate }}%</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-5">
                                    <div>
                                        <span class="d-block font-15 text-dark font-weight-500">Loans Disbursed</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block display-4 text-dark mb-5">₦{{ number_format($data->disbursedLoans, 2) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-5">
                                    <div>
                                        <span class="d-block font-15 text-dark font-weight-500">Past Due</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block display-4 text-dark mb-5">₦{{ number_format($data->passedDue, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hk-row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header card-header-action">
                            <h6>Open Loans</h6>
                        </div>
                        <div class="card-body">
                            <div id="e_chart_6" class="echart" style="height:250px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header card-header-action">
                            <h6>Due Principal Balance</h6>
                        </div>
                        <div class="card-body">
                            <div id="e_chart_7" class="echart" style="height:250px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->


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

                                @foreach($data->loan_applications as $loan)
                                    <tr>
                                        <td>{{ $loan->borrower  }}</td>
                                        <td>{{ $loan->loan_product }}</td>
                                        <td>{{ number_format($loan->amount, 2) }}</td>
                                        <td>{{ $loan->duration }} months</td>
                                        <td><span class="badge badge-grey">{{ $loan->status }}</span></td>
                                        <td>
                                            <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
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
