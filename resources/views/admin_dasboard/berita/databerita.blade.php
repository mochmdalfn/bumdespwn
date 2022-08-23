@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Berita</h3>
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
              <h2>Berita Artikel</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">
                Menampilkan Data-data Berita Artikel</code>
              </p>
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Tulisan Berita</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->author->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->deskripsi }}</td>
                        <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y'); }}</td>
                        <td>
                          @if($post->photo)
                            <img src="{{ url('images/'.$post->photo) }}"
                              style="width: 75px; height: 75px;">
                          @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.berita.edit', $post->id) }}" class="buttonNext btn btn-warning">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="buttonPrevious buttonDisabled btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
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

