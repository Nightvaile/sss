
@extends('backend.layout.layout')
@section('title')
    Kullanıcı Ekle
@endsection
@section('head_in')
    <!-- Nestable -->
    <link href="{{asset('backend')}}/vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, (isim) welcome back!</h4>
                    </div>
                </div>
            </div>
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
                                        @if(session('success'))
                                            <div class="alert alert-success">{{session('success')}}</div>
                                        @endif
                                        <form class="form-valide" action="{{route('EkleKategori')}}" method="post">
                                            @csrf
                                            <div class="col-md-6">
                                                <div class="col-xl-12">
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
                                                                <option
                                                                    value="">Üst Kategori Varsa seçiniz.
                                                                </option>
                                                                @if(!empty($kategoriler))
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
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card-content">
                                                            <div class="nestable">
                                                                <div class="dd" id="nestable">
                                                                    <ol class="dd-list">
                                                                        @if(!empty($kategoriler))
                                                                            @foreach($kategoriler as $kategori)
                                                                                @if($kategori->ust_kategori === null)
                                                                                    <li class="dd-item"
                                                                                        data-id="{{$kategori->kategori_ID}}">
                                                                                        <div
                                                                                            class="dd-handle"> {{$kategori->kategori_adi}} </div>
                                                                                        @include('backend.inc.altKategori')
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                        {{--<li class="dd-item" data-id="2">
                                                                            <div class="dd-handle">Item 2</div>
                                                                            <ol class="dd-list">
                                                                                <li class="dd-item" data-id="3">
                                                                                    <div class="dd-handle">Item 3
                                                                                    </div>
                                                                                </li>
                                                                                <li class="dd-item" data-id="4">
                                                                                    <div class="dd-handle">Item 4
                                                                                    </div>
                                                                                </li>
                                                                                <li class="dd-item" data-id="5">
                                                                                    <div class="dd-handle">Item 5
                                                                                    </div>
                                                                                    <ol class="dd-list">
                                                                                        <li class="dd-item"
                                                                                            data-id="6">
                                                                                            <div class="dd-handle">
                                                                                                Item 6
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="dd-item"
                                                                                            data-id="7">
                                                                                            <div class="dd-handle">
                                                                                                Item 7
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="dd-item"
                                                                                            data-id="8">
                                                                                            <div class="dd-handle">
                                                                                                Item 8
                                                                                            </div>
                                                                                        </li>
                                                                                    </ol>
                                                                                </li>
                                                                                <li class="dd-item" data-id="9">
                                                                                    <div class="dd-handle">Item 9
                                                                                    </div>
                                                                                </li>
                                                                                <li class="dd-item" data-id="10">
                                                                                    <div class="dd-handle">Item 10
                                                                                    </div>
                                                                                </li>
                                                                            </ol>
                                                                        </li>--}}
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

