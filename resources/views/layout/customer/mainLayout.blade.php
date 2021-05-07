

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Welcome to the world of EXTRAORDINARY AND HEROIC Professionals of the Future. Where your potentials and possibilites are beyond imagining.">
    <meta name="keywords" content="pofsis,professionals,extraordinary,heroic,POF,paymeshare">
    <meta name="developer" content="darksidebug">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="POF Chat">
    <link rel="icon" href="{{ asset('assets/image/system_logo/3.png') }}">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="POFSIS Business and Chat Support">
    <link rel="apple-touch-icon" href="{{ asset('assets/image/icons/logo_01.png') }}">

    <title>LA-Internet & CM</title>

    <!-- manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <link rel='stylesheet prefetch prerender' href="{{ asset('css/style.css') }}" type='text/css'>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkbox.css') }}">

</head>
<body style="background: #fff">

    <!-- navigation -->
    
    @include('templates.navbardesktop')
    @include('templates.navbarmobile')

    <!-- main content -->
    @yield('content')
    
    <!-- data feather -->
    <script rel='prefetch prerender' src="{{asset('js/feather.min.js')}}"></script>
    <script>
        feather.replace()
    </script>

    <!-- offline links -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/js/demo/datatables-demo.js') }}"></script>

    <script type="text/javascript">
        // if ('serviceWorker' in navigator) {
        //     window.addEventListener('load', () => {
        //         navigator.serviceWorker.register("{{ asset('service-worker.js') }}")
        //             .then(reg => {
        //                 console.log('Registration succeeded. Scope is ' + reg.scope);
        //             })
        //             .catch(registrationError => {
        //                 console.log('SW registration failed: ', registrationError);
        //             });
        //     });
        // }

        var deferredPrompt;
        window.addEventListener('beforeinstallpromt', function(event){
            event.preventDefault();
            deferredPrompt = event;
            return false;
        })

        function addToHomeScreen(){
            if(deferredPrompt){
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then(function(choiceResult){
                    console.log(choiceResult.outcome);
                    if(choiceResult.outcome){
                        console.log("User cancelled installation");
                    }
                    else{
                        console.log("User added 'PayMeShare' app to home screen");
                    }
                });
                deferredPrompt = null;
            }
        }
    </script>
</body>
</html>