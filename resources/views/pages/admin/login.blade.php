<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ asset('assets/image/icons/logo_01.png') }}">

    <title>LA Internet and Customer Relation Management</title>

    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body id="page-top">

    <div class="container mt-5 login">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <h2 class="text-center text-success"><strong>LA Internet and Customer Mgt</strong></h1>
                <div class="card rounded-sm mt-5">
                    <div class="card-body">
                        <form action="" method="post" class="p-3">
                            <h3 class="text-center text-secondary mb-3"><strong>USER CREDENTIALS</strong></h3>
                            <label class="mb-1">Username</label>
                            <input type="text" name='username' class="form-control form-control-user mt-0 rounded-sm" id="username" value="{{old('username')}}" placeholder="Username">
                            <label class="mb-1 mt-2">Password</label>
                            <input type="password" name='password' class="form-control form-control-user mt-0 rounded-sm" id="password" value="{{old('password')}}" placeholder="Password">
                            <center>
                                <button class="btn btn-success rounded-sm mt-4"><i data-feather="key" width="20"></i> Login</button>
                            </center>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('templates.footer')
            </div>
        </div>
    </div>

    @include('templates.script')

    
</body>
</html>