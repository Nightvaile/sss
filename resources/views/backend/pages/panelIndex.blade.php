@extends('backend.layout.layout')
@section('title')
    Gösterge Paneli
@endsection
@section('head_in')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend')}}/images/favicon.png">
    <!-- Datatable -->
    <link href="{{asset('backend')}}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('backend')}}/css/style.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Personel Tablosu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Kimlik No</th>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Telefon No</th>
                                        <th>E-posta</th>
                                        <th>Pozisyon</th>
                                        <th>Adres</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-0">
                                            <img style="max-width: 50px; max-height: 50px;" src="https://demo.themefisher.com/mono-bootstrap/images/products/products-xs-01.jpg" alt="Product Image">
                                        </td>
                                        <td>27</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>18</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @if(!empty($urunler) && count($urunler)>0)
                                        @foreach($urunler as $urun)
                                            <tr>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>{{--$urun-> ?? 'Gelmedi'--}}</td>
                                                <td>
                                                    <span><a href="#" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-red"></i></a></span></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Kimlik No</th>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Telefon No</th>
                                        <th>E-posta</th>
                                        <th>Pozisyon</th>
                                        <th>Adres</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('backend/js/quixnav-init.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>



    <!-- Datatable -->
    <script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
@endsection
