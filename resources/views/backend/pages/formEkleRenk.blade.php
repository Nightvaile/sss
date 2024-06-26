@extends('backend.layout.layout')
@section('title')
    Renk Ekle
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
                            <h4 class="card-title">Renkler</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Renk Ekle</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    {{--renk ekleme--}}
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            @if(session('success'))
                                                                <div
                                                                    class="alert alert-success">{{session('success')}}</div>
                                                            @elseif(session('fail'))
                                                                <div
                                                                    class="alert alert-danger">{{session('fail')}}</div>
                                                            @endif
                                                            <form class="form-valide" action="{{route('EkleRenk')}}"
                                                                  method="post">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label"
                                                                           for="val-username">renk
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control"
                                                                               id="val-username" name="renk_adi"
                                                                               placeholder="Renk giriniz.">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        {{--renk gösterme--}}
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Renk Listesi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Renk Adı</th>
                                                <th scope="col">İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($renkler) && count($renkler)>0)
                                                @foreach($renkler as $renk)
                                                    <tr>
                                                        <td>{{$renk->renk_ID}}</td>
                                                        <td>{{$renk->renk_adi}}</td>
                                                        <td>
                                                            <span>
                                                                <a href="{{route('fDuzenleRenk',$renk->renk_ID)}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="fa fa-pencil color-muted"></i>
                                                                </a>
                                                                <a href="{{route('SilRenk',$renk->renk_ID)}}" data-toggle="tooltip" data-placement="top" title="Close">
                                                                    <i class="fa fa-close color-danger"></i>
                                                                </a>
                                                            </span>
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

