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
            <li class="breadcrumb-item active" aria-current="page">All Loan Products</li>
        </ol>
    </nav>

    <!-- Row -->
    <div class="row">
{{--    <a button class="btn btn-primary"  href="{{ route ('admin.loans.products.add') }}" type="submit">Create New Loan Product</button></a>--}}
    <!-- <button class="btn btn-primary btn-sm" id="button">Delete selected row</button> -->

        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">All Loan Products</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Rate</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($loanProducts as $loanprod)
                                    <tr>
                                        <td>{{ $loanprod->name }}</td>
                                        <td>{{ $loanprod->rate }}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Rate</th>


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

