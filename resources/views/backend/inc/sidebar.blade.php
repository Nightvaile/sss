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
                    <li><a href="{{route('fEkleKullanici')}}">Kullanıcı Ekleme Formu</a></li>
                    <li><a href="{{route('fEkleKategori')}}">Kategori Ekleme Formu</a></li>
                    <li><a href="{{route('fEkleSecenek')}}">Seçenek Ekleme Formu</a></li>
                    <li><a href="{{route('fEkleSube')}}">Şube Ekleme Formu</a></li>
                    <li><a href="{{route('fEkleUrun')}}">Ürün Ekleme Formu</a></li>
                    <li><a href="{{route('fEkleRol')}}">Rol Ekleme Formu</a></li>
                    {{--<li><a href="{{route('fEkle')}}"> Ekleme Formu</a></li>
                    <li><a href="{{route('fEkle')}}"> Ekleme Formu</a></li>--}}
                </ul>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
    Sidebar end
***********************************-->
