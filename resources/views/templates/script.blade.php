<!-- Bootstrap core JavaScript-->
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
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('[data-toggle-tooltip="tooltip"]').tooltip()
    })
</script>

<!-- data feather -->
<script rel='prefetch prerender' src="{{asset('js/feather.min.js')}}"></script>
<script>
    feather.replace()
</script>