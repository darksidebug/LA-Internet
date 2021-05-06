@extends('layout.admin.main-layout')

@section('content')
    <div class="container-fluid mt-0">
        <form method="POST" action="" class="user">
             @csrf
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>CUSTOMER NAME</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-9">
                            
                            <input type="text" name='username' class="form-control form-control-user" id="exampleInputUser" value="{{old('username')}}" placeholder="First name">
                            <input type="text" name='username' class="form-control form-control-user mt-1" id="exampleInputUser" value="{{old('username')}}" placeholder="Middle name">
                            <input type="text" name='username' class="form-control form-control-user mt-1" id="exampleInputUser" value="{{old('username')}}" placeholder="Last name">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>CUSTOMER ADDRESS</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-9">

                            <input type="text" name='username' class="form-control form-control-user" id="exampleInputUser" value="{{old('username')}}" placeholder="Sitio/Street/Purok">
                            <input type="text" name='username' class="form-control form-control-user mt-1" id="exampleInputUser" value="{{old('username')}}" placeholder="Barangay">
                            <input type="text" name='username' class="form-control form-control-user mt-1" id="exampleInputUser" value="{{old('username')}}" placeholder="Municipality">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>CONTACT NUMBER</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-9">

                            <input type="text" name='username' class="form-control form-control-user" id="exampleInputUser" value="{{old('username')}}" placeholder="09xxxxxxxxx">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>CURRENT STATE</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-8 pt-2">

                            <input type="checkbox" class="mt-1 mr-2">Within Sogod
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-8">

                            <button type="submit" class="btn btn-success btn-md rounded-sm d-flex justify-content-between align-items-center">
                            <i data-feather="check" width="20" class="mr-1"></i>Save</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection