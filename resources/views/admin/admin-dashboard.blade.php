<!doctype html>
<html lang="en">

@include('admin.layout.head')

<body data-topbar="dark">

    <div id="layout-wrapper">

        @include('admin.layout.header')

        @include('admin.layout.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    @yield('content')
                </div>

            </div>

            @include('admin.layout.footer')

        </div>

    </div>
  

    <div class="rightbar-overlay"></div>

    <script src="{{ asset('admin-dashboard/assets/libs/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('admin-dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('admin-dashboard/assets/libs/metismenu/metisMenu.min.js') }} "></script>
    <script src="{{ asset('admin-dashboard/assets/libs/simplebar/simplebar.min.js') }} "></script>
    <script src="{{ asset('admin-dashboard/assets/libs/node-waves/waves.min.js') }} "></script>


    <!-- apexcharts -->
    <script src="{{ asset('admin-dashboard/assets/libs/apexcharts/apexcharts.min.js') }} "></script>

    <!-- jquery.vectormap map -->
    <script
        src="{{ asset('admin-dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }} ">
    </script>
    <script
        src="{{ asset('admin-dashboard/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }} ">
    </script>








        <!-- Required datatable js -->
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net/js/jquery.dataTables.min.js') }} "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}  "></script>
        <!-- Buttons examples -->
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/jszip/jszip.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/pdfmake/build/pdfmake.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/pdfmake/build/vfs_fonts.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}  "></script>

        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}  "></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}  "></script>
        <script src="{{ asset('admin-dashboard/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}  "></script>

        <!-- Datatable init js -->
        <script src="{{ asset('admin-dashboard/assets/js/pages/datatables.init.js') }}  "></script>





<!--tinymce js-->
    <script src="{{ asset('admin-dashboard/assets/libs/tinymce/tinymce.min.js') }}  "></script>
    <script src="{{ asset('admin-dashboard/assets/js/pages/dashboard.init.js') }} "></script>
  <!-- init js -->
  <script src="{{ asset('admin-dashboard/assets/js/pages/form-editor.init.js') }}"></script>
  <script src="{{ asset('admin-dashboard/assets/libs/dropzone/min/dropzone.min.js') }} "></script>
    <!-- App js -->
    <script src="{{ asset('admin-dashboard/assets/js/app.js') }} "></script>
   

    @yield('script')
    
    



</body>

</html>
