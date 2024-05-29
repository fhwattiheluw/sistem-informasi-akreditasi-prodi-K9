@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="{{route('ipk_lulusan.index')}}">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.9 IPK Lulusan</p>
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

            IPK Lulusan</h4>

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
            <label class="col-sm-3 col-form-label">Tahun Lulus <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="number" name="tahun_lulus" value="{{ isset($item->tahun_lulus) ? $item->tahun_lulus : old('tahun_lulus') }}" class="form-control @error('tahun_lulus') is-invalid @enderror" placeholder="Ketik disini">
              @error('tahun_lulus')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah Lulusan <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="number" name="jumlah_lulusan" value="{{ isset($item->jumlah_lulusan) ? $item->jumlah_lulusan : old('jumlah_lulusan') }}" class="form-control @error('jumlah_lulusan') is-invalid @enderror" placeholder="Ketik disini">
              @error('jumlah_lulusan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Indeks Prestasi Kumulatif (IPK) <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-4">
                  <label class="col-form-label">Minimum <span class="text-danger">*</span></label>
                  <input type="number" name="ipk_min" value="{{ isset($item->ipk_min) ? $item->ipk_min : old('ipk_min') }}" class="form-control @error('ipk_min') is-invalid @enderror" placeholder="Ketik disini">
                  @error('ipk_min')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-4">
                  <label class="col-form-label">Rata-Rata <span class="text-danger">*</span></label>
                  <input type="number" name="ipk_rata_rata" value="{{ isset($item->ipk_rata_rata) ? $item->ipk_rata_rata : old('ipk_rata_rata') }}" class="form-control @error('ipk_rata_rata') is-invalid @enderror" placeholder="Ketik disini">
                  @error('ipk_rata_rata')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-4">
                  <label class="col-form-label">Maksimum <span class="text-danger">*</span></label>
                  <input type="number" name="ipk_max" value="{{ isset($item->ipk_max) ? $item->ipk_max : old('ipk_max') }}" class="form-control @error('ipk_max') is-invalid @enderror" placeholder="Ketik disini">
                  @error('ipk_max')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tautan</label>
            <div class="col-sm-9">
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

