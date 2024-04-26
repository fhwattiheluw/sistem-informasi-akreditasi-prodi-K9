@extends('template')

@section('content-wrapper')
<div class="content-wrapper pb-0">
  <div class="page-header flex-wrap">
    <div class="header-left">
      <a href="/kriteria4/beban_kerja_dosen_dtps">
        <button class="btn btn-secondary mb-2 mb-md-0 mr-2"> Kembali </button>
      </a>
    </div>
    <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
      <div class="d-flex align-items-center">
        <a href="#">
          <p class="m-0 pr-3">Data Kuantitatif</p>
        </a>
        <a class="pl-3 mr-4" href="#">
          <p class="m-0">K.4 Sumber Daya Manusia</p>
          
        </a>
      </div>

    </div>
  </div>
  <!-- first row starts here -->
  <div class="row">
    <div class="col grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            @if (Request::segment(3) === 'create')
            Tambah data
            @elseif (Request::segment(4) === 'edit')
            Edit data
            @endif

            Beban Kerja Dosen DTPS
          </h4>

          <p class="card-description">K.4 Sumber Daya Manusia</p>
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
          <form action="{{isset($item->id) ?  route('beban_kerja_dosen_dtps.update', ['id' => Crypt::encryptString($item->id)])  : route('beban_kerja_dosen_dtps.store')}}" method="post">
            @if(isset($item->id))
              @method('PUT')
            @endif
            @csrf

            <table class="table table-bordered">
              <tr>
                <td><label class="col-form-label">Nama Lengkap Dosen Tetap</label></td>
                <td colspan="2">
                <select name="nidn_nidk" id="nidn_nidk" class="form-control">
                  <option value="" disabled>Pilih</option>
                  @if(isset($item->nidn_nidk))
                    <option value="{{$item->nidn_nidk}}" selected>{{$item->nidn_nidk}} | {{$item->dosen->nama}}</option>
                  @else
                    @foreach($dosens as $dosen)
                    <option value="{{$dosen->nidn_nidk}}">
                        {{$dosen->nama}}
                    </option>
                    @endforeach
                  @endif
              </select>
                </td>
              </tr>
              <tr>
                <td rowspan ="4">
                  <h5>sks Pembelajaran pada</h5>
                </td>
              </tr>
              <tr>
                <td><label class="col-form-label">PS Sendiri (S1, S2, dan S3)</label></td>
                <td><input type="text" name="sks_ps_sendiri" value="{{isset($item->sks_ps_sendiri) ? $item->sks_ps_sendiri : old('sks_ps_sendiri')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">PS Lain di PT Sendiri</label></td>
                <td><input type="text" name="sks_ps_luar" value="{{isset($item->sks_ps_luar) ? $item->sks_ps_luar : old('sks_ps_luar')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">PT Lain</label></td>
                <td><input type="text" name="sks_pt_luar" value="{{isset($item->sks_pt_luar) ? $item->sks_pt_luar : old('sks_pt_luar')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">sks Penelitian</label></td>
                <td colspan="2"><input type="text" name="sks_penelitian" value="{{isset($item->sks_penelitian) ? $item->sks_penelitian : old('sks_penelitian')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">sks P2M</label></td>
                <td colspan="2"><input type="text" name="sks_p2m" value="{{isset($item->sks_p2m) ? $item->sks_p2m : old('sks_p2m')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td rowspan ="3">
                  <h5>sks Manajemen	</h5>
                </td>
              </tr>
              <tr>
                <td><label class="col-form-label">PT Sendiri</label></td>
                <td><input type="text" name="sks_manajemen_sendiri" value="{{isset($item->sks_manajemen_sendiri) ? $item->sks_manajemen_sendiri : old('sks_manajemen_sendiri')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
              <tr>
                <td><label class="col-form-label">PT Lain</label></td>
                <td><input type="text" name="sks_manajemen_luar" value="{{isset($item->sks_manajemen_luar) ? $item->sks_manajemen_luar : old('sks_manajemen_luar')}}" class="form-control"  placeholder="Belum di isi"></td>
              </tr>
            </table>

            @if (Request::segment(3) === 'create')
            <button type="submit" class="btn btn-primary mr-2"> Tambah data</button>
            @elseif (Request::segment(4) === 'edit')
            <button type="submit" class="btn btn-primary mr-2"> Update data</button>
            @endif

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- last row starts here -->

</div>
@endsection
