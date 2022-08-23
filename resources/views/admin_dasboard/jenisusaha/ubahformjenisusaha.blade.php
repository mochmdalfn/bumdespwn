@extends('admin_dasboard.layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('contents')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Formulir Jenis Usaha</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Silahkan Isi Data Jenis Usaha</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
				<br />
					<form action="{{ route('admin.jenisusaha.update', $jenisusaha->id) }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        @method('PATCH')
                        <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required"></span> </label>
						    <div class="col-md-6 col-sm-6 ">
							    <input type="text" name="name" id="first-name" required="required" class="form-control" value={{ $jenisusaha->name }}>
							</div>
					    </div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Penjelasan <span class="required"></span> </label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="last-name" name="penjelasan" required="required" class="form-control" value={{ $jenisusaha->penjelasan }}>
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

