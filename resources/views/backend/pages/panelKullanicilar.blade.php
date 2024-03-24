@extends('backend.layout.layout')
@section('title')
    Kullanıcı Paneli
@endsection
@section('head_in')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend')}}/images/favicon.png">
    <!-- Datatable -->
    <link href="{{asset('backend')}}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('backend')}}/css/style.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Merhaba, (isim) Hoşgeldiniz!</h4>
                    </div>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Personel Tablosu</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>Kimlik No</th>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Telefon No</th>
                                        <th>E-posta</th>
                                        <th>Pozisyon</th>
                                        <th>Adres</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for($i=0; $i<5; $i++)
                                        <tr>
                                            <td>01234567890</td>
                                            <td>Mehmet Harun</td>
                                            <td>Kaya</td>
                                            <td>+905123456789</td>
                                            <td>harun.1kyq@gmail.com</td>
                                            <td>Yönetici</td>
                                            <td>Çanakkale</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Kimlik No</th>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Telefon No</th>
                                        <th>E-posta</th>
                                        <th>Pozisyon</th>
                                        <th>Adres</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('backend/js/quixnav-init.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>



    <!-- Datatable -->
    <script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
@endsection
