@extends('layout.template')

@section('title')
    Input Arsip
@endsection

@section('titlePage')
    <h1 class="m-0">Input Arsip</h1>
@endsection

@section('content')

    @if (session('pesan'))
    @endif
    <form action="/inputarsip/tambahData" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card" style="width: 18rem; width:100%;">
                       <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">Kode Klasifikasi</div>
                          <div class="card-text">
                              <select id="k_kepegawaian" name="k_kepegawaian" class="form-select form-select-lg mb3 @error('k_kepegawaian') is-invalid @enderror" aria-label=".form-select-lg example" style="height: 2rem; border-radius:5px;">
                                @foreach ($iniKlasifikasi as $kKlasifikasi)
                                <option placeholder="Select" value="{{$kKlasifikasi->k_kepegawaian}}">{{$kKlasifikasi->k_kepegawaian}}</option>
                                @endforeach
                                </select>
                               <select id="k_formasi" name="k_formasi" class="form-select form-select-lg mb3 @error('k_formasi') is-invalid @enderror" aria-label=".form-select-lg example" style="height: 2rem; border-radius:5px;">
                                    @foreach ($iniKlasifikasi as $kKlasifikasi)
                                    <option placeholder="Select" value="{{$kKlasifikasi->k_formasi}}">{{$kKlasifikasi->k_formasi}}</option>
                                    @endforeach
                                </select>
                                @error('k_kepegawaian')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea class="form-control @error('ket_klasifikasi') is-invalid @enderror" name="ket_klasifikasi" placeholder="Leave a comment here" id="ket_klasifikasi" style="height: 7em; margin-top:2%;">{{$kKlasifikasi->id_klasifikasi?$kKlasifikasi->ket:''}}</textarea>
                        </div>
                       </div>
                    </div>
                    <div class="card" style="width: 18rem; width:100%;">
                        <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">Uraian/Informasi Arsip</div>
                          <div class="card-text">
                              <textarea class="form-control @error('uraian') is-invalid @enderror" name="uraian" placeholder="Masukkan Uraian Arsip" id="uraian" style="height: 7em;"></textarea>
                              <div class="text-danger">
                                @error('uraian')
                                    {{ $message }}
                                @enderror
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; width:100%;">
                        <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">Keamanan & Akses Arsip</div>
                          <div class="card-text">
                              <select name="akses_arsip" class="form-select form-select-lg mb3 @error('akses_arsip') is-invalid @enderror" aria-label=".form-select-lg example" style="height: 2rem; border-radius:5px;">
                                <option value="Biasa">Biasa</option>
                                <option value="Rahasia">Rahasia</option>
                                <option value="Sangat Rahasia">Sangat Rahasia</option>
                              </select>
                              <div class="text-danger">
                                @error('akses_arsip')
                                    {{ $message }}
                                @enderror
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="width: 18rem; width:100%;">
                        <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">Tanggal</div>
                          <div class="card-text">
                            <input class="@error('tgl') is-invalid @enderror" type="date" id="tanggal" name="tgl" value="{{old('tgl')}}" style="border-radius: 5px; border-size:2px;">
                            <div class="text-danger">
                                @error('tgl')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; width:100%;">
                        <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">No. Berkas</div>
                          <div class="card-text">
                            <input class="form-control @error('no_berkas') is-invalid @enderror" style="width: 20%" type="text" name="no_berkas" placeholder="No. Berkas" value="{{old('no_berkas')}}" aria-label="default input example">
                            <div class="text-danger">
                                @error('no_berkas')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; width:100%;">
                        <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">No. Item Arsip</div>
                          <div class="card-text">
                            <input class="form-control @error('no_item') is-invalid @enderror" style="width: 20%" type="text" value="{{old('no_item')}}" name="no_item" placeholder="No. Item Arsip" aria-label="default input example">
                            <div class="text-danger">
                                @error('no_item')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; width:100%;">
                        <div class="card-body align-items-center">
                          <div class="card-title" style="margin-bottom:2%;">Jumlah Lembar Surat</div>
                          <div class="card-text">
                            <input class="form-control @error('jml') is-invalid @enderror" style="width: 20%" type="text" value="{{old('jml')}}" name="jml" placeholder="1, 2, 3, ..." aria-label="default input example">
                            <div class="text-danger">
                                @error('jml')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary simpan">Simpan</button>
                </div>
            </div>

        </div>
    </form>

@endsection
