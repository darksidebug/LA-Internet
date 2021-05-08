@extends('layout.customer.mainLayout')

@section('content')
    <div class="container customer pb-5">
        <div class="row">
            <div class="col-md-6 px-md-0 d-flex justify-content-start align-items-center">
                <h5>BILLING HISTORY</h5>
            </div>
            <div class="col-md-6 px-md-0 d-flex justify-content-md-end align-items-center">
                <div class="mr-3">
                    Sort by: 
                    <select name="" id="" class="ml-2 border-0 text-success outline-0">
                        <option value="">Latest to Oldest &nbsp;</option>
                        <option value="">Oldest to Latest &nbsp;</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-5 col-md-8 px-sm-0">
                <div class="card o-hidden border border-gray shadow-none rounded-sm mt-2 bg-white p-3">
                    <div class="card-body p-0">
                        <h5 class="text-success h6"><span class="text-secondary h6">Amount Paid: </span><strong>PHP 0.00</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Date Paid: </span><strong>June 06, 2021</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Outstanding: </span><strong>PHP 0.00</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Advance Payment: </span><strong>PHP 0.00</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-5 col-md-8 px-sm-0">
                <div class="card o-hidden border border-gray shadow-none rounded-sm mt-2 bg-white p-3">
                    <div class="card-body p-0">
                        <h5 class="text-success h6"><span class="text-secondary h6">Amount Paid: </span><strong>PHP 0.00</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Date Paid: </span><strong>June 06, 2021</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Outstanding: </span><strong>PHP 0.00</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Advance Payment: </span><strong>PHP 0.00</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-5 col-md-8 px-sm-0">
                <div class="card o-hidden border border-gray shadow-none rounded-sm mt-2 bg-white p-3">
                    <div class="card-body p-0">
                        <h5 class="text-success h6"><span class="text-secondary h6">Amount Paid: </span><strong>PHP 0.00</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Date Paid: </span><strong>June 06, 2021</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Outstanding: </span><strong>PHP 0.00</strong></h5>
                        <h5 class="text-success h6"><span class="text-secondary h6">Advance Payment: </span><strong>PHP 0.00</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('templates.footer')
@endsection