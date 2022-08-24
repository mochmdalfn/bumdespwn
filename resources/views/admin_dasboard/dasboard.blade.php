@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Admin</span>
              <div class="count">2500</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Mitra</span>
              <div class="count">2500</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Jenis Usaha</span>
              <div class="count">2500</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Produk Pertanian</span>
              <div class="count">2500</div>
            </div>
          </div>
        </div>
          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              </div>
            </div>
          </div>
@endsection
