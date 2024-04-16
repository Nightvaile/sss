@extends('backend.layout.layout')
@section('title')
    Beden Ekle
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
                            <h4 class="card-title">bedenler</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-validation">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Beden Ekle</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    {{--beden ekleme--}}
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            @if(session('success'))
                                                                <div
                                                                    class="alert alert-success">{{session('success')}}</div>
                                                            @elseif(session('fail'))
                                                                <div
                                                                    class="alert alert-danger">{{session('fail')}}</div>
                                                            @endif
                                                            <form class="form-valide" action="{{route('EkleBeden')}}"
                                                                  method="post">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label"
                                                                           for="val-username">Beden
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control"
                                                                               id="val-username" name="beden_adi"
                                                                               placeholder="Beden giriniz.">
                                                                    </div>
                                                                </div>
                                                                {{--<div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label"
                                                                           for="val-skill">Üst beden
                                                                    </label>
                                                                    <div class="col-lg-6">
                                                                        <select class="form-control" id="val-skill"
                                                                                name="ust_beden">
                                                                            <option value="">Üst beden varsa
                                                                                seçiniz.
                                                                            </option>
                                                                            @if(!empty($bedenler) && count($bedenler)>0)
                                                                                @foreach($bedenler as $beden)
                                                                                    <option
                                                                                        value="{{$beden->beden_ID ?? 'gelmedi'}}">{{$beden->beden_adi ?? 'gelmedi'}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>--}}
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
                        {{--beden gösterme--}}
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Beden Listesi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Beden Adı</th>
                                                <th scope="col">İşlemler</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($bedenler) && count($bedenler)>0)
                                                @foreach($bedenler as $beden)
                                                    <tr>
                                                        <td>{{$beden->beden_ID}}</td>
                                                        <td>{{$beden->beden_adi}}</td>
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

