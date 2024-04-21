@extends('backend.layout.layout')
@section('title')
    Şube Ekle
@endsection
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
                            <h4 class="card-title">Şubeler</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Şube Ekle</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    {{--sube ekleme--}}
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            @if(session('success'))
                                                                <div
                                                                    class="alert alert-success">{{session('success')}}</div>
                                                            @elseif(session('fail'))
                                                                <div
                                                                    class="alert alert-danger">{{session('fail')}}</div>
                                                            @endif
                                                            <form class="form-valide" action="{{route('EkleSube')}}"
                                                                  method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        {{--Şube Adı--}}
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-4 col-form-label"
                                                                                   for="val-username">Şube Adı
                                                                                <span class="text-danger">*</span>
                                                                            </label>
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="form-control"
                                                                                       id="val-username" name="sube_adi"
                                                                                       placeholder="Şube adı giriniz.">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-4 col-form-label"
                                                                                   for="val-username">Şube Adresi
                                                                                <span class="text-danger">*</span>
                                                                            </label>
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="form-control"
                                                                                       id="val-username" name="adres"
                                                                                       placeholder="Şube adresi giriniz.">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        {{--Şube Adı--}}
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-4 col-form-label"
                                                                                   for="val-username">Şube Tel
                                                                                <span class="text-danger">*</span>
                                                                            </label>
                                                                            <div class="col-lg-6">
                                                                                <input type="text" class="form-control"
                                                                                       id="val-username" name="sube_tel"
                                                                                       placeholder="Şube telefonu giriniz.">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-4 col-form-label" for="val-skill">Yetkili Kişi
                                                                                <span class="text-danger">*</span>
                                                                            </label>
                                                                            <div class="col-lg-6">
                                                                                <select class="form-control" id="val-skill"
                                                                                        name="yetkili_kisi">
                                                                                    <option value="">Yetkili seçiniz.
                                                                                    </option>
                                                                                    @if(!empty($yetkililer) && count($yetkililer)>0)
                                                                                        @foreach($yetkililer as $yetkili)
                                                                                            <option
                                                                                                value="{{$yetkili->id ?? 'gelmedi'}}">{{$yetkili->name ?? 'gelmedi'}} {{$yetkili->surname}}</option>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        {{--Kaydet--}}
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-8 ml-auto">
                                                                                <button type="submit" class="btn btn-primary">
                                                                                    Kaydet
                                                                                </button>
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
                            </div>
                            </form>
                        </div>
                        {{--sube gösterme--}}
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Şube Listesi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Şube Adı</th>
                                                <th scope="col">Adres</th>
                                                <th scope="col">Şube Tel</th>
                                                <th scope="col">Yetkili Kişi</th>
                                                <th scope="col">Yetkili E-mail</th>
                                                <th scope="col">Yetkili Pozisyonu</th>
                                                <th scope="col">İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($subeler) && count($subeler)>0)
                                                @foreach($subeler as $sube)
                                                    <tr>
                                                        <td>{{$sube->sube_ID ?? 'Veri Yok'}}</td>
                                                        <td>{{$sube->sube_adi ?? 'Veri Yok'}}</td>
                                                        <td>{{$sube->adres ?? 'Veri Yok'}}</td>
                                                        <td>{{$sube->sube_tel ?? 'Veri Yok'}}</td>
                                                        <td>{{$sube->yetkili->name ?? 'Veri Yok'}} {{$sube->yetkili->surname ?? 'Veri Yok'}}</td>
                                                        <td>{{$sube->yetkili->email ?? 'Veri Yok'}}</td>
                                                        <td>{{$sube->yetkili->rol->rol_adi?? 'Veri Yok'}}</td>
                                                        <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
    <!-- Nestable -->
    <script src="{{asset('backend')}}/vendor/nestable2/js/jquery.nestable.min.js"></script>
    <!-- All init script -->
    <script src="{{asset('backend')}}/js/plugins-init/nestable-init.js"></script>
@endsection

