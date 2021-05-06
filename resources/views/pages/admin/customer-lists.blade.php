@extends('layout.admin.main-layout')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-left pb-3">
                    <h2 class="h5 text-gray mb-0"><strong>LISTS OF CUSTOMERS</strong></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-8">
                        <form method="POST" action="" class="user">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="mt-1 mr-1">Search</label>
                                <input type="text" name='username' class="form-control form-control-search rounded-sm" value="{{old('username')}}" placeholder="Account number">
                                <button type="submit" class="btn btn-success btn-search rounded-sm ml-1 d-flex justify-content-between align-items-center">
                                <i data-feather="search" width="20" class="mr-1"></i>View</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card o-hidden border shadow-none rounded-sm mt-2">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hovered mb-0">
                                        <thead>
                                            <tr>
                                                <td class="border-top-0">ACCOUNT NO</td>
                                                <td class="border-top-0">CUSTOMER NAME</td>
                                                <td class="border-top-0">ADDRESS</td>
                                                <td class="border-top-0">CONTACT</td>
                                                <td class="border-top-0">REGISTRATION DATE</td>
                                                <td class="border-top-0">PLAN TYPE</td>
                                                <td class="border-top-0">ACTIONS</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pt-1 pb-1">448</td>
                                                <td class="pt-1 pb-1">Benigno E. Ambus Jr.</td>
                                                <td class="pt-1 pb-1">Bogasong Libagon So. Leyte</td>
                                                <td class="pt-1 pb-1">09755100321</td>
                                                <td class="pt-1 pb-1">May 06, 2021</td>
                                                <td class="pt-1 pb-1">PLAN 5</td>
                                                <td class="pt-1 pb-1">
                                                    <a href="" class="text-info mr-1"><i data-feather="search" width="20"></i></a>
                                                    <a href="" class="text-info mx-1"><i data-feather="edit-3" width="20"></i></a>
                                                    <a href="" class="text-danger ml-1"><i data-feather="x" width="20"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pt-1 pb-1">404</td>
                                                <td class="pt-1 pb-1">Nobegin Masob</td>
                                                <td class="pt-1 pb-1">Bogasong Libagon So. Leyte</td>
                                                <td class="pt-1 pb-1">09367653842</td>
                                                <td class="pt-1 pb-1">May 06, 2021</td>
                                                <td class="pt-1 pb-1">PLAN 15</td>
                                                <td class="pt-1 pb-1">
                                                    <a href="" class="text-info mr-1"><i data-feather="search" width="20"></i></a>
                                                    <a href="" class="text-info mx-1"><i data-feather="edit-3" width="20"></i></a>
                                                    <a href="" class="text-danger ml-1"><i data-feather="x" width="20"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pt-1 pb-1">440</td>
                                                <td class="pt-1 pb-1">Nhobey Areten Masob</td>
                                                <td class="pt-1 pb-1">Bogasong Libagon So. Leyte</td>
                                                <td class="pt-1 pb-1">09665317258</td>
                                                <td class="pt-1 pb-1">May 06, 2021</td>
                                                <td class="pt-1 pb-1">PLAN 10</td>
                                                <td class="pt-1 pb-1">
                                                    <a href="" class="text-info mr-1"><i data-feather="search" width="20"></i></a>
                                                    <a href="" class="text-info mx-1"><i data-feather="edit-3" width="20"></i></a>
                                                    <a href="" class="text-danger ml-1"><i data-feather="x" width="20"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection