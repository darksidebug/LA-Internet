@extends('layout.admin.main-layout')

@section('content')
    <div class="container-fluid mt-5">
        @if(!$errors->isEmpty())
        <div class="alert alert-warning alert-dismissible fade show pb-0" role="alert">
            <strong>{{Str::plural('Error',$errors->count())}} found! </strong> 
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form method="POST" action="{{route('new-customer.store')}}" class="user">
             @csrf
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>CUSTOMER NAME</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-9">

                            <input type="text" name='first_name' class="form-control form-control-user" id="first_name" value="{{old('first_name')}}" placeholder="First name">
                            <input type="text" name='middle_name' class="form-control form-control-user mt-1" id="middl_ename" value="{{old('middle_name')}}" placeholder="Middle name">
                            <input type="text" name='last_name' class="form-control form-control-user mt-1" id="last_name" value="{{old('last_name')}}" placeholder="Last name">

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

                            <select type="text" id="Municipality" class="form-control rounded-sm text-secondary" name="municipality"  value="{{ old('municipality') }}" style="height: 43px;">
                            </select>
                            <select type="text" id="Barangay" class="form-control mt-1 rounded-sm text-secondary" name="barangay"  value="{{ old('barangay') }}" style="height: 43px;">
                            </select>
                            <input type="text" name='street' class="form-control form-control-user mt-1" id="Street" value="{{old('street')}}" placeholder="Sitio/Street/Purok">

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

                            <input type="text" name='contact_number' class="form-control form-control-user" id="exampleInputUser" value="{{old('username')}}" placeholder="09xxxxxxxxx">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-12">
                    <div class="text-left pb-3">
                        <h2 class="h5 text-gray mb-0"><strong>CONNECTION PLAN</strong></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 pt-2">

                            <select type="text" name="plan_id" id="Plans" class="form-control" name="connection_plan" value="{{ old('connection_plan') }}">
                                <option value="">Select Plan</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-8">

                            <button type="submit" class="btn btn-success btn-md rounded-sm d-flex justify-content-between align-items-center">
                            <i data-feather="check" width="20" class="mr-1"></i>Save Customer Info</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="{{asset('js/r8.js')}}"></script>
@endsection
