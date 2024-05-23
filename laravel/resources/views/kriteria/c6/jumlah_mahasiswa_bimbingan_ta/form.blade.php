@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.6 Jumlah Mahasiswa Bimbingan Tugas Akhir atau Skripsi dan Frekuensi Pertemuan</p>
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <form class="card forms-sample" action="{{isset($item->id) ?  route('pemerolehan_dana.update', ['id' => Crypt::encryptString($item->id)])  : route('pemerolehan_dana.store')}}" method="post">
        @if(isset($item->id))
          @method('PUT')
        @endif  
        @csrf
        <div class="card-body">
          <h4 class="card-title">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(4) === 'edit')
            Edit data
            @endif

            Jumlah Mahasiswa Bimbingan Tugas Akhir atau Skripsi dan Frekuensi Pertemuan</h4>

          @if ($errors->any())
              <div>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li style="color: red;">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
          <hr>

          <div class="form-group row">
            <label class="col-sm-1 col-form-label">No</label>
            <div class="col-sm-1">
              <input type="number" name="no" value="{{ isset($item->no) ? $item->no : old('no') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-2 col-form-label">Nama Dosen Pembimbing Tugas Akhir</label>
            <div class="col-sm-4">
              <input type="text" name="nama_dosen_pembimbing_tugas_akhir" value="{{ isset($item->nama_dosen_pembimbing_tugas_akhir) ? $item->nama_dosen_pembimbing_tugas_akhir : old('nama_dosen_pembimbing_tugas_akhir') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-2 col-form-label">Di PS Sendiri</label>
            <div class="col-sm-2">
              <input type="number" name="di_ps_sendiri_ts2" value="{{ isset($item->di_ps_sendiri_ts2) ? $item->di_ps_sendiri_ts2 : old('di_ps_sendiri_ts2') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-1 col-form-label">Rata-Rata</label>
            <div class="col-sm-1">
              <input type="number" name="di_ps_sendiri_rata_rata" value="{{ isset($item->di_ps_sendiri_rata_rata) ? $item->di_ps_sendiri_rata_rata : old('di_ps_sendiri_rata_rata') }}" class="form-control" placeholder="Ketik disini">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-1 col-form-label">TS-2</label>
            <div class="col-sm-1">
              <input type="number" name="di_ps_lain_ts2" value="{{ isset($item->di_ps_lain_ts2) ? $item->di_ps_lain_ts2 : old('di_ps_lain_ts2') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-2 col-form-label">TS-1</label>
            <div class="col-sm-2">
              <input type="number" name="di_ps_lain_ts1" value="{{ isset($item->di_ps_lain_ts1) ? $item->di_ps_lain_ts1 : old('di_ps_lain_ts1') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-1 col-form-label">TS</label>
            <div class="col-sm-1">
              <input type="number" name="di_ps_lain_ts" value="{{ isset($item->di_ps_lain_ts) ? $item->di_ps_lain_ts : old('di_ps_lain_ts') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-1 col-form-label">Rata-Rata</label>
            <div class="col-sm-1">
              <input type="number" name="di_ps_lain_rata_rata" value="{{ isset($item->di_ps_lain_rata_rata) ? $item->di_ps_lain_rata_rata : old('di_ps_lain_rata_rata') }}" class="form-control" placeholder="Ketik disini">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Rata-Rata Jumlah  Bimbingan di semua Program</label>
            <div class="col-sm-2">
              <input type="number" name="rata_rata_jumlah_bimbingan_di_semua_program" value="{{ isset($item->rata_rata_jumlah_bimbingan_di_semua_program) ? $item->rata_rata_jumlah_bimbingan_di_semua_program : old('rata_rata_jumlah_bimbingan_di_semua_program') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-2 col-form-label">Rata-Rata Banyaknya Pertemuan</label>
            <div class="col-sm-2">
              <input type="number" name="rata_rata_banyaknya_pertemuan" value="{{ isset($item->rata_rata_banyaknya_pertemuan) ? $item->rata_rata_banyaknya_pertemuan : old('rata_rata_banyaknya_pertemuan') }}" class="form-control" placeholder="Ketik disini">
            </div>
            <label class="col-sm-2 col-form-label">Tautan</label>
            <div class="col-sm-2">
              <input type="text" name="tautan" value="{{ isset($item->tautan) ? $item->tautan : old('tautan') }}" class="form-control" placeholder="Ketik disini">
            </div>
          </div>


          </div>

          <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="button">
              @if (Request::segment(3) === 'create')
              Tambah data
              @elseif (Request::segment(4) === 'edit')
              Update data
              @endif
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- last row starts here -->

  </div>
  <script>
    document.getElementById('nilai2').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        e.target.value = value;
    });
    document.getElementById('nilai1').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        e.target.value = value;
    });
    document.getElementById('nilai').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        e.target.value = value;
    });
</script>

  @endsection

