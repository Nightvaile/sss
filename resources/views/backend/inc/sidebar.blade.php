<!--**********************************
        Sidebar start
    ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Ana Menü</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Paneller</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('pIndex')}}">Gösterge paneli</a></li>
                    <li><a href="{{route('pKullanicilar')}}">Kullanıcılar Paneli</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-form"></i><span class="nav-text">Formlar</span></a>
                <ul aria-expanded="false">
                    {{--<li><a href="{{route('fEkle')}}"> Formu</a></li>
                    <li><a href="{{route('fEkle')}}"> Formu</a></li>--}}

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Yönetici Formları</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('fEkleKullanici')}}">Kullanıcı Formu</a></li>
                            <li><a href="{{route('fEkleRol')}}">Rol Formu</a></li>
                            <li><a href="{{route('fEkleSube')}}">Şube Formu</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-form"></i><span class="nav-text">Ürün Formları</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('fEkleBeden')}}">Beden Formu</a></li>
                            <li><a href="{{route('fEkleRenk')}}">Renk Formu</a></li>
                            <li><a href="{{route('fEkleMarka')}}">Marka Formu</a></li>
                            <li><a href="{{route('fEkleKategori')}}">Kategori Formu</a></li>
                            <li><a href="{{route('fEkleSeri')}}">Seri Formu</a></li>
                            <li><a href="{{route('fEkleUrun')}}">Ürün Formu</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Stok Yönetim Formları</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#{{--route('fEkleStok')--}}">Stok Formu</a></li>
                            <li><a href="#{{--route('fEkleStokHaraket')--}}">Stok Hareketi Formu</a></li>
                            {{--<li><a href="{{route('fEkle')}}"> Formu</a></li>
                            <li><a href="{{route('fEkle')}}"> Formu</a></li>--}}
                        </ul>
                    </li>
                </ul>

            </li>

        </ul>
    </div>


</div>
<!--**********************************
    Sidebar end
***********************************-->
