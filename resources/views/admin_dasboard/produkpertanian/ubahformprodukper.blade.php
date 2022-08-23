@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Formulir Produk Pertanian</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Silahkan Isi Data Produk Pertanian</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
				<br />
					<form action="{{ route('admin.produkpertanian.update' $produkpertanian->id) }}" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Produk <span class="required"></span> </label>
						    <div class="col-md-6 col-sm-6 ">
							    <input type="text" name="name" id="first-name" required="required" class="form-control" value={{ $produkpertanian->name }}>
							</div>
					    </div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar <span class="required"></span> </label>
							<div class="col-md-6 col-sm-6 ">
								<input type="file" id="name" name="gambar" required="required" class="form-control">
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

