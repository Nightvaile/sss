@extends('backend.layout.layout')
{{----------------------title START-------------------------}}
@section('title')Stok Ekle @endsection
{{----------------------title END-------------------------}}
{{----------------------head_in START-------------------------}}
@section('head_in')
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
                            <h4 class="card-title">Stok Ekleme</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{route('EkleStok')}}" method="post">
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">ürün Adı
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="urun_ID">
                                                        <option value="">Lütfen seçim yapınız</option>
                                                        @if(!empty($urunler) && count($urunler)>0)
                                                            @foreach($urunler as $urun)
                                                                <option
                                                                    value="{{$urun->urun_ID ?? 'gelmedi'}}">{{$urun->barkod_NO}} {{$urun->seri->seri_kodu}} {{$urun->seri->urun_adi ?? 'gelmedi'}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Şube Adı
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="sube_ID">
                                                        <option value="">Lütfen seçim yapınız</option>
                                                        @if(!empty($subeler) && count($subeler)>0)
                                                            @foreach($subeler as $sube)
                                                                <option
                                                                    value="{{$sube->sube_ID ?? 'gelmedi'}}">{{$sube->sube_ID}} {{$sube->sube_adi ?? 'gelmedi'}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-currency">Fiyat
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="₺299.99">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-number">Adet sayısı<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-number" name="val-number" placeholder="150">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-number">Min adet bildirimi
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-number" name="val-number" placeholder="10">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
    <!-- Jquery Validation -->
    <script src="{{asset('backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{asset('backend/js/plugins-init/jquery.validate-init.js')}}"></script>
@endsection
{{-----------------------scripts END--------------------------}}
