@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Formulir Indikator Angka</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Silahkan Isi Data Indikator Angka</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
				<br />
					<form action="{{ route('admin.berita.store') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Judul Berita <span class="required"></span> </label>
						    <div class="col-md-6 col-sm-6 ">
							    <input type="text" name="title" id="first-name" required="required" class="form-control ">
							</div>
					    </div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Slug <span class="required"></span> </label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="last-name" name="slug" required="required" class="form-control">
						    </div>
						</div>
                        <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Deskripsi Berita <span class="required"></span> </label>
							<div class="col-md-6 col-sm-6 ">
								<textarea id="last-name" name="dekripsi" required="required" class="form-control"></textarea>
                           </div>
						</div>
                        <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Deskripsi Berita <span class="required"></span> </label>
							<div class="col-md-6 col-sm-6 ">
								<select id="last-name" name="category_id" required="required" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
						    </div>
						</div>
                        <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar <span class="required"></span> </label>
							<div class="col-md-6 col-sm-6 ">
								<input type="file" id="last-name" name="gambar" required="required" class="form-control">
						    </div>
						</div>
						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
						</div>
					</form>
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
@endsection

