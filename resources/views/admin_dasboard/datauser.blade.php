@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Admin</h3>
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
              <h2>Admin</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">
                Menampilkan Data-data Admin</code>
              </p>
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Paasword</th>
                    <th>Level</th>
                    <th>Gambar</th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td><a href="#" class="buttonNext btn btn-success">Next</a> <a href="#" class="buttonPrevious buttonDisabled btn btn-primary">Previous</a></td>
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

