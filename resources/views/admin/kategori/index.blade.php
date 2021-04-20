@extends('admin.layout.master')

@section('content')

<link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/admin/assets/css/style.css')}}">

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>$170,750</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
          

        <script src="{{asset('public/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/main.js')}}"></script>


    <script src="{{asset('public/admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>


@endsection