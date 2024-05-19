@extends('backend.layout.layout')
@section('title')Urun Ekle @endsection
@section('head_in')
    <!-- Nestable -->
    <link href="{{asset('backend')}}/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Urun Düzenle</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{route('DuzenleUrun',$veri->urun_ID)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Barkod
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-username" name="barkod_NO" value="{{$veri->barkod_NO}}" placeholder="Barkod giriniz.">
                                                </div>
                                            </div>
                                            {{--<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Fiyat
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="val-username" name="fiyat" value="{{$veri->fiyat}}" placeholder="Fiyat giriniz.">
                                                </div>
                                            </div>--}}
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Seri
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="seri_id">
                                                        <option value="">Seçim yapınız.</option>
                                                        @if(!empty($seriler) && count($seriler)>0)
                                                            @foreach($seriler as $seri)
                                                                <option
                                                                    value="{{$seri->seri_ID ?? 'gelmedi'}}"
                                                                    @if($seri->seri_ID == $veri->seri_id) selected @endif>{{$seri->seri_kodu ?? 'gelmedi'}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Beden
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="beden_id">
                                                        <option value="">Seçim yapınız.</option>
                                                        @if(!empty($bedenler) && count($bedenler)>0)
                                                            @foreach($bedenler as $beden)
                                                                <option
                                                                    value="{{$beden->beden_ID ?? 'gelmedi'}}"
                                                                    @if($beden->beden_ID == $veri->beden_id) selected @endif>{{$beden->beden_adi ?? 'gelmedi'}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-skill">Renk
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="val-skill" name="renk_id">
                                                        <option value="">Seçim yapınız.</option>
                                                        @if(!empty($renkler) && count($renkler)>0)
                                                            @foreach($renkler as $renk)
                                                                <option
                                                                    value="{{$renk->renk_ID ?? 'gelmedi'}}"
                                                                    @if($renk->renk_ID == $veri->renk_id) selected @endif>{{$renk->renk_adi ?? 'gelmedi'}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
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
@section('scripts')
    <!-- Jquery Validation -->
    <script src="{{asset('backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{asset('backend/js/plugins-init/jquery.validate-init.js')}}"></script>
@endsection

