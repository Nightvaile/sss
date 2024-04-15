<ol class="dd-list">
    @foreach($kategoriler as $altKategori)
        @if($altKategori->ust_kategori == $ustKategoriID)
            <li class="dd-item" data-id="{{$altKategori->kategori_ID}}">
                <div class="row">
                    <div class="col-md-7 dd-handle">{{$altKategori->kategori_adi}}</div>
                    <div class="col-md-2 mr-2"><button class="btn btn-primary">Düzenle</button></div>
                    <div class="col-md-2"><button class="btn btn-danger">Sil</button></div>
                </div>
                @include('backend.inc.altKategori', ['altKategoriler' => $altKategoriler, 'ustKategoriID' => $altKategori->kategori_ID])
            </li>
        @endif
    @endforeach
</ol>

