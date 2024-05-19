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
{{--    @dd($stokharaketleri)--}}
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Stok Haraketi Tablosu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ürün Adı</th>
                                        <th>Teslim Alan</th>
                                        <th>Tedarikçi</th>
                                        <th>Şube Adı</th>
                                        <th>İşlem Tipi</th>
                                        <th>Stok</th>
                                        <th>Birim Fiyatı</th>
                                        <th>Total Fiyatı</th>
                                        <th>Not</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--<tr>
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
                                    </tr>--}}
                                    @if(!empty($stokhar) && count($stokhar)>0)
                                        @foreach($stokhar as $stokharaketi)
                                            <tr>
                                                <td>{{$stokharaketi->stok_haraketi_ID ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->urun->barkod_NO ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->kullanici->name ?? 'Gelmedi'}} {{$stokharaketi->kullanici->surname ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->tedarikci->firma_adi ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->sube->sube_adi ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->haraket_tipi ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->stok_adeti ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->birim_fiyat ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->total_fiyat ?? 'Gelmedi'}}</td>
                                                <td>{{$stokharaketi->not ?? 'Gelmedi'}}</td>
                                                <td>
                                                    <span><a href="{{--route('fDuzenlestokharaketi',$stokharaketi->stokharaketi_ID)--}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="{{--route('Silstokharaketi',$stokharaketi->stokharaketi_ID)--}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-red"></i></a></span></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ürün Adı</th>
                                        <th>Teslim Alan</th>
                                        <th>Tedarikçi</th>
                                        <th>Şube Adı</th>
                                        <th>İşlem Tipi</th>
                                        <th>Stok</th>
                                        <th>Birim Fiyatı</th>
                                        <th>Total Fiyatı</th>
                                        <th>Not</th>
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
{{--
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
--}}
    <script src="{{asset('backend/js/quixnav-init.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>



    <!-- Datatable -->
    <script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
@endsection
