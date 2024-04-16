@extends('backend.layout.layout')
@section('title')
    Kategori Ekle
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
                            <h4 class="card-title">Kategoriler</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Kategori Ekle</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    {{--Kategori ekleme--}}
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            @if(session('success'))
                                                                <div
                                                                    class="alert alert-success">{{session('success')}}</div>
                                                            @elseif(session('fail'))
                                                                <div
                                                                    class="alert alert-danger">{{session('fail')}}</div>
                                                            @endif
                                                            <form class="form-valide" action="{{route('EkleKategori')}}"
                                                                  method="post">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label"
                                                                           for="val-username">Kategori
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control"
                                                                               id="val-username" name="kategori_adi"
                                                                               placeholder="Kategori giriniz.">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label"
                                                                           for="val-skill">Üst Kategori
                                                                    </label>
                                                                    <div class="col-lg-6">
                                                                        <select class="form-control" id="val-skill"
                                                                                name="ust_kategori">
                                                                            <option value="">Üst kategori varsa
                                                                                seçiniz.
                                                                            </option>
                                                                            @if(!empty($kategoriler) && count($kategoriler)>0)
                                                                                @foreach($kategoriler as $kategori)
                                                                                    <option
                                                                                        value="{{$kategori->kategori_ID ?? 'gelmedi'}}">{{$kategori->kategori_adi ?? 'gelmedi'}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-lg-8 ml-auto">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Kaydet
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{--Kategori gösterme--}}
                                                    {{--<div class="col-md-6">
                                                        <div class="card-content">
                                                            <div class="nestable">
                                                                <div class="dd" id="nestable">
                                                                    <ol class="dd-list">
                                                                        @if(!empty($kategoriler) && count($kategoriler)>0)
                                                                            @foreach($kategoriler as $kategori)
                                                                                @if($kategori->ust_kategori === null)
                                                                                    <li class="dd-item"
                                                                                        data-id="{{$kategori->kategori_ID}}">
                                                                                        <div class="row">
                                                                                            <div class="col-md-7">
                                                                                                <div class="dd-handle"> {{$kategori->kategori_adi}} </div>
                                                                                            </div>
                                                                                            <div class="col-md-2 mr-2"><button class="btn btn-primary">Düzenle</button></div>
                                                                                            <div class="col-md-2"><button class="btn btn-danger">Sil</button></div>
                                                                                        </div>
                                                                                        @include('backend.inc.altKategori', ['altKategoriler' => $kategoriler, 'ustKategoriID' => $kategori->kategori_ID])
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Kategori Listesi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Kategori Adı</th>
                                                <th scope="col">Üst Kategorsi</th>
                                                <th scope="col">İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($kategoriler) && count($kategoriler)>0)
                                                @foreach($kategoriler as $kategori)
                                                    <tr>
                                                        <td>{{$kategori->kategori_ID}}</td>
                                                        <td>{{$kategori->kategori_adi}}</td>
                                                        <td>@if($kategori->ust_kategori)
                                                                {{$kategori->ustKategori->kategori_adi}}
                                                                {{--@dd($kategori)--}}{{--Burda kullandığımız classın adıyla bağlı olduğu veriyi çektik--}}
                                                            @else
                                                                Yok
                                                            @endif</td>
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

