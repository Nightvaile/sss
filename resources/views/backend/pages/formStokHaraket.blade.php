@extends('backend.layout.layout')
{{----------------------title START-------------------------}}
@section('title')Stok Haraketi @endsection
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
                            <h4 class="card-title">Form Validation</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{route('EkleStokHaraket')}}" method="post">
                                    <div class="row">

                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Ürün Adı
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="urun_id">
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
                                                    <select class="form-control" id="val-skill" name="sube_id">
                                                        <option value="">Lütfen seçim yapınız</option>
                                                        @if(!empty($subeler) && count($subeler)>0)
                                                            @foreach($subeler as $sube)
                                                                <option
                                                                    value="{{$sube->sube_ID ?? 'gelmedi'}}">{{$sube->sube_adi ?? 'gelmedi'}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Teslim alan adı
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name=teslim_alan">
                                                        <option value="">Lütfen seçim yapınız</option>
                                                        @if(!empty($teslim_alanlar) && count($teslim_alanlar)>0)
                                                            @foreach($teslim_alanlar as $teslim_alan)
                                                                <option
                                                                    value="{{$teslim_alan->id ?? 'gelmedi'}}">{{$teslim_alan->id}} {{$teslim_alan->name}} {{$teslim_alan->surname}} </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">İşlem Tipi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="tedarikci">
                                                        <option value="">Lütfen seçim yapınız</option>
                                                        @if(!empty($tedarikciler) && count($tedarikciler)>0)
                                                            @foreach($tedarikciler as $tedarikci)
                                                                <option
                                                                    value="{{$tedarikci->tedarikci_ID ?? 'gelmedi'}}">{{$tedarikci->firma_adi}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Tedarikçi firma
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="tedarikci">
                                                        <option value="Alış">Alış</option>
                                                        <option value="Satış">Satış</option>
                                                        <option value="İade">İade</option>
                                                        <option value="Transfer">Transfer</option>
                                                        <option value="Değişim">Değişim</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-digits">Stok Adeti <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-digits" name="stok_adeti" placeholder="100">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-currency">Fiyat
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-currency" name="birim_fiyat" placeholder="₺299.99">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-digits">Total Fiyat
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-digits" name="total_fiyat" placeholder="5">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-suggestions">Not
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="val-suggestions" name="not" rows="1" placeholder="Not Giriniz. (Opsiyonel)"></textarea>
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
