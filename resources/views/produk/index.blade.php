@extends('layout.masterAdmin')
@section('header')
    <!-- DataTables -->
    <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

    @stop
@section('content')

        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Data Produk</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Tambah Data Produk</button>
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data Produk</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Overflowing text to show scroll behavior</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Link Tokopedia</th>
                                        <th>Notes</th>
                                        <th>Gambar 1</th>
                                        <th>Gambar 2</th>
                                        <th>Gambar 3</th>
                                        <th>Gambar 4</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data_produk as $produk)
                                    <tr>
                                        <td>{{$produk -> nama_produk}}</td>
                                        <td>{{$produk -> category_id}}</td>
                                        <td>{{$produk -> deskripsi}}</td>
                                        <td>{{$produk -> harga}}</td>
                                        <td>{{$produk -> stock}}</td>
                                        <td>{{$produk -> link_tokopedia}}</td>
                                        <td>{{$produk -> notes}}</td>
                                        <td>{{$produk -> gambar1}}</td>
                                        <td>{{$produk -> gambar2}}</td>
                                        <td>{{$produk -> gambar3}}</td>
                                        <td>{{$produk -> gambar4}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
    @stop

@section('footer')
    <!-- Required datatable js -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- Datatable init js -->
    <script src="{{asset('admin/pages/datatables.init.js')}}"></script>
    @stop