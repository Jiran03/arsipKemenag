@extends('layout.template')

@section('title')
    Cetak
@endsection

@section('titlePage')
    <h1 class="m-0">Cetak Daftar Isi Berkas</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width:100%;">
                <div class="card-body align-items-center">
                    <form method="POST" enctype="multipart/form-data">
                        <span>Pilih Kode Pegawai</span>
                        <select id="k_kepegawaian" name="k_kepegawaian" class="form-select form-select-lg mb3 @error('k_kepegawaian') is-invalid @enderror" aria-label=".form-select-lg example" style="height: 2rem; border-radius:5px;">
                            @foreach ($indexDIB as $kode)
                            <option placeholder="Select" value="{{$kode->k_kepegawaian}}">{{$kode->k_kepegawaian}}</option>
                            @endforeach
                        </select>
                        <button type="submit" name="cariDIB" class="btn btn-secondary me-md-2 cariDIB" style="margin: 0 5%; width:25%;">Cari</button>
                        <button type="submit" name="cetakDIB" class="btn btn-primary me-md-2 cariDIB" style="margin: 0 5%; width:25%;">Cetak</button>
                    </form>
                </div>
            </div>
        </div>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>@yield('title')</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
          </head>
          <body>
          <div class="wrapper">
            <!-- Main content -->
            <section class="invoice">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h2 class="page-header">
                    <small class="float-right">@php
                        echo date('d-m-Y');
                    @endphp</small>
                  </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info justify-content-center">
                <div class="col-sm-4 invoice-col" style="text-align: center; margin:1px;">
                    <div style="">
                        <h5>DAFTAR ISI BERKAS</h5>
                        <h5>@php
                            echo "TAHUN ".date('Y');
                        @endphp</h5>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- info row -->
              <div class="row invoice-info ">
                <div class="col-sm-4 invoice-col" style="text-align: left; margin:1px;">
                    <div style="">
                        <h6>Unit Pengolah: Sub Bagian Umum</h6>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped" border="1px">
                    <thead style="text-align: center">
                    <tr>
                      <th>No</th>
                      <th>Nomor Berkas</th>
                      <th>No Item Arsip</th>
                      <th>Kode Klasifikasi</th>
                      <th>Uraian/Informasi Arsip</th>
                      <th>Tanggal</th>
                      <th>Jumlah</th>
                      <th>Ket. Klasifikasi Keamanan & Akses Arsip</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($indexDIB as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->no_berkas}}</td>
                        <td>{{$item->no_item}}</td>
                        <td>{{$item->k_kepegawaian}}.{{$item->k_formasi}}</td>
                        <td>{{$item->uraian}}</td>
                        <td>{{$item->tgl}}</td>
                        <td>{{$item->jml}} Lembar</td>
                        <td>{{$item->akses_arsip}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
          <!-- ./wrapper -->
          <!-- Page specific script -->
          <script>
            window.addEventListener("load", window.print("Landscape"));
          </script>
          </body>
    </div>
@endsection
