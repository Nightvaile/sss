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
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Kategori Ekle</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    {{--Kategori ekleme--}}
                                                    <div class="col-md-12">
                                                        <div class="col-xl-12">
                                                            @if(session('success'))
                                                                <div
                                                                    class="alert alert-success">{{session('success')}}</div>
                                                            @elseif(session('fail'))
                                                                <div
                                                                    class="alert alert-danger">{{session('fail')}}</div>
                                                            @endif
                                                            <form class="form-valide" action="{{--{{route('EkleSecenek')}}--}}"
                                                                  method="post">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-lg-6 col-form-label"
                                                                           for="val-username">Seçenek
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control"
                                                                               id="val-username" name="secenek_adi"
                                                                               placeholder="Seçenek giriniz.">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-lg-6 ml-auto">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Kaydet
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{--Kategori gösterme--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Kategori Listesi</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Kategori Adı</th>
                                                            <th scope="col">Üst Kategorsi</th>
                                                            <th scope="col">İşlemler</th>
                                                            {{--<th scope="col">Label</th>
                                                            <th scope="col">Action</th>--}}
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Air Conditioner</td>
                                                            {{--<td>
                                                                <div class="progress" style="background: rgba(127, 99, 244, .1)">
                                                                    <div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Apr 20,2018</td>--}}
                                                            <td><span class="badge badge-primary">70%</span>
                                                            </td>
                                                            <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Textiles</td>
                                                            {{--<td>
                                                                <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                                                    <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>May 27,2018</td>--}}
                                                            <td><span class="badge badge-success">70%</span>
                                                            </td>
                                                            <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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

