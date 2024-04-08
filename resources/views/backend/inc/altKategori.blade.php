<ol class="dd-list">
    @foreach($kategoriler as $altKategori)
        @if($altKategori->ust_kategori == $ustKategoriID)
            <li class="dd-item" data-id="{{$altKategori->kategori_ID}}">
                <div class="dd-handle">{{$altKategori->kategori_adi}}</div>
                @include('backend.inc.altKategori', ['altKategoriler' => $altKategoriler, 'ustKategoriID' => $altKategori->kategori_ID])
            </li>
        @endif
    @endforeach
</ol>
