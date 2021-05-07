@extends('layout.admin.main-layout')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>SEARCH CUSTOMER</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-8">
                            <form method="POST" action="" class="user">
                                @csrf
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="mt-1 mr-1">Search</label>
                                    <input type="text" name='username' class="form-control form-control-search rounded-sm" value="{{old('username')}}" placeholder="Account number">
                                    <button type="submit" class="btn btn-success btn-search rounded-sm ml-1 d-flex justify-content-between align-items-center">
                                    <i data-feather="search" width="20" class="mr-1"></i>Search </button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <form method="POST" action="" class="user">
             @csrf
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-2"><strong>OUTSTANDING BALANCE: </strong> <span class="text-success h4"><strong>0.00</strong></span></h2>
                        <h2 class="h5 text-gray mb-0"><strong>ADVANCE PAYMENT: </strong> <span class="text-success h4"><strong>0.00</strong></span></h2>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 pt-2">

                            <input type="checkbox" class="mt-1 mr-2">Use advance payment
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>PAYMENT AMOUNT</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-9">

                            <input type="number" name='username' class="form-control form-control-user"  placeholder="0.00">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>TOTAL: </strong> <span class="text-success h4"><strong>0.00</strong></span></h2>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-8">

                            <button type="submit" class="btn btn-success btn-md rounded-sm d-flex justify-content-between align-items-center">
                            <i data-feather="check" width="20" class="mr-1"></i>Save Payment </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection