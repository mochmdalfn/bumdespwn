@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Indikator Angka</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Indikator Angka</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">
                Menampilkan Data-data Indikator Angka</code>
              </p>
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Angka Mitra</th>
                    <th>Angka jenis Usaha</th>
                    <th>Angka Investasi</th>
                    <th>Angka Omzet</th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    @foreach ($indikator as )
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $indikator->ang_mitra }}</td>
                        <td>{{ $indikator->ang_jnsusaha }}</td>
                        <td>{{ $indikator->ang_investasi }}</td>
                        <td>{{ $indikator->ang_omzet }}</td>
                        <td>
                            <a href="{{ route('admin.indikator.edit', $indikator->id) }}" class="buttonNext btn btn-warning">Edit</a>
                            <form action="{{ route('admin.indikator.destory', $indikator->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="buttonPrevious buttonDisabled btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
          </div>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  @endsection

