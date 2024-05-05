@extends('backend.layout.layout')
{{----------------------title START-------------------------}}
@section('title')
    Seri Ekle
@endsection
{{----------------------title END-------------------------}}
{{----------------------head_in START-------------------------}}
@section('head_in')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend')}}/images/favicon.png">
    <!-- Datatable -->
    <link href="{{asset('backend')}}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('backend')}}/css/style.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="{{asset('backend')}}/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet">
@endsection
{{-----------------------head_in END--------------------------}}
{{----------------------content START-------------------------}}
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Seriler</h4>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Seri Ekle</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-validation">
                                        @if(session('success'))
                                            <div
                                                class="alert alert-success">{{session('success')}}</div>
                                        @elseif(session('fail'))
                                            <div
                                                class="alert alert-danger">{{session('fail')}}</div>
                                        @endif
                                        <form class="form-valide" action="{{route('DuzenleSeri',$veri->seri_ID)}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Ürün
                                                            Adi
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" id="val-username"
                                                                   name="urun_adi" placeholder="Ürün adı giriniz." value="{{$veri->urun_adi}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-username">Seri
                                                            Kodu
                                                            {{--<span class="text-danger">*</span>--}}
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" id="val-username"
                                                                   name="seri_kodu"
                                                                   placeholder="Seri kodu varsa giriniz." value="{{$veri->seri_kodu}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-suggestions">Ürün
                                                            açıklaması
                                                            {{--<span class="text-danger">*</span>--}}
                                                        </label>
                                                        <div class="col-lg-6">
                                                    <textarea class="form-control" id="val-suggestions"
                                                              name="urun_aciklama" rows="1"
                                                              placeholder="Ürün açıklması giriniz.(Opsiyonel)">{{$veri->urun_aciklama}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-skill">Kategori
                                                            seçiniz.
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" id="val-skill"
                                                                    name="kategori_id">
                                                                <option value="">Lütfen seçim yapınız.</option>
                                                                @if(!empty($kategoriler) && count($kategoriler)>0)
                                                                    @foreach($kategoriler as $kategori)
                                                                        <option
                                                                            value="{{$kategori->kategori_ID ?? 'gelmedi'}}" @if($kategori->kategori_ID == $veri->kategori_id) selected @endif>{{$kategori->kategori_adi ?? 'gelmedi'}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-skill">Marka
                                                            seçiniz.
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" id="val-skill" name="marka_id">
                                                                <option value="">Lütfen seçim yapınız.</option>
                                                                @if(!empty($markalar) && count($markalar)>0)
                                                                    @foreach($markalar as $marka)
                                                                        <option
                                                                            value="{{$marka->marka_ID ?? 'gelmedi'}}" @if($marka->marka_ID == $veri->marka_id) selected @endif>{{$marka->marka_adi ?? 'gelmedi'}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-8 ml-auto">
                                                            <button type="submit" class="btn btn-primary">Kaydet
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Seri Listesi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                            <tr>
                                                <th>Ürün Adı</th>
                                                <th>Seri Kodu</th>
                                                <th>Ürün Açıklaması</th>
                                                <th>Kategori</th>
                                                <th>Marka</th>
                                                <th>İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($seriler) && count($seriler)>0)
                                                @foreach($seriler as $seri)
                                                    <tr>
                                                        <td> {{$seri->seri_kodu ?? 'Gelmedi'}}</td>
                                                        <td> {{$seri->urun_adi ?? 'Gelmedi'}}</td>
                                                        <td> {{$seri->urun_aciklama ?? 'Gelmedi'}}</td>
                                                        <td> {{$seri->kategori->kategori_adi ?? 'Gelmedi'}}</td>
                                                        <td> {{$seri->marka->marka_adi ?? 'Gelmedi'}}</td>
                                                        <td>
                                                    <span><a href="#--}}{{--route('fDuzenleSeri',$seri->seri_ID)--}}{{--" class="mr-4" data-toggle="tooltip"
                                                             data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="#--}}{{--route('SilSeri',$seri->seri_ID)--}}{{--" data-toggle="tooltip" data-placement="top"
                                                           title="Close"><i
                                                                class="fa fa-close color-red"></i></a></span></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Ürün Adı</th>
                                                <th>Seri Kodu</th>
                                                <th>Ürün Açıklaması</th>
                                                <th>Kategori</th>
                                                <th>Marka</th>
                                                <th>İşlemler</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-----------------------content END--------------------------}}

{{----------------------scripts START-------------------------}}
@section('scripts')
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Jquery Validation -->
    <script src="{{asset('backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
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
{{-----------------------scripts END--------------------------}}
