@extends('layout.customer.mainLayout')

@section('content')
    <div class="container customer pb-3">
        <div class="row">
            <div class="col-md-12 pl-md-0">
                <h5>MY DASHBOARD</h5>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-4 col-md-6">
                <div class="card o-hidden border border-success shadow-none rounded mt-2 bg-success p-3">
                    <div class="card-body p-0">
                        <span class="text-white">Outstanding:</span>
                        <h5 class="text-white mt-0 mb-4"><strong>PHP 0.00</strong></h5>
                        <span class="text-white">Due Date:</span>
                        <h5 class="text-white mt-0"><strong>June 06, 2021</strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pl-md-1">
                <div class="card o-hidden border border-secondary shadow-none rounded mt-2 bg-secondary p-3">
                    <div class="card-body p-0">
                        <span class="text-white">Advance Payment:</span>
                        <h5 class="text-white mt-0 mb-4"><strong>PHP 0.00</strong></h5>
                        <span class="text-white">Date Paid:</span>
                        <h5 class="text-white mt-0"><strong>June 06, 2021</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-md-2">
            <div class="col-lg-4 col-md-6">
                <div class="card o-hidden border border-success shadow-none rounded mt-2 bg-white p-3">
                    <div class="card-body p-0">
                        <span class="text-secondary">Previous Payment:</span>
                        <h5 class="text-success mt-0 mb-4"><strong>PHP 0.00</strong></h5>
                        <span class="text-secondary">Date Paid:</span>
                        <h5 class="text-success mt-0"><strong>June 06, 2021</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('customer-payment-history') }}" class="text-secondary">See billing history</a>
            </div>
        </div>
    </div>
    @include('templates.footer')
    
@endsection