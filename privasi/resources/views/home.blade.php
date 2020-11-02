@extends('layouts.app')

@section('content')
	<div class="container">
		<p></p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" action="{{ url('prosesform') }}" method="POST" style="margin:0 24px;">
				{{ csrf_field() }}
				  <fieldset>
					<legend>FORM</legend>
						<div class="form-group label-floating">
						  <label class="control-label" for="nama">Nama</label>
						  <input class="form-control" id="nama" type="text" name="nama">
						</div>
						<div class="form-group label-floating">
						  <label class="control-label" for="alamat">Alamat</label>
						  <input class="form-control" id="alamat" type="text" name="alamat">
						</div>
						<div class="form-group label-floating">
						  <label class="control-label" for="nohp">No Hp</label>
						  <input class="form-control" id="nohp" type="text" name="kelas">
						</div>
						<div class="form-group label-floating">
						  <label class="control-label" for="hobi">Hobi</label>
						  <select class="form-control" id="hobi" name="hobi"> 
						  	<option value="berenang">Berenang</option>
						  	<option value="membaca">Membaca</option>
						  	<option value="travelling">Travelling</option>
						  </select>
						</div>
						<div class="form-group label-floating">
						  <label class="control-label" for="jk">Jenis Kelamin</label>
						  <select class="form-control" id="jk" name="jk"> 
						  	<option value="pria">Pria</option>
						  	<option value="wanita">Wanita</option>
						  </select>
						</div>
						<div class="form-group">
						  <div class="col-md-12">
							<button type="submit" class="btn btn-raised btn-primary">Submit</button>
						  </div>
						</div>
					</fieldset>
				</form>
				<p>File will be stored at privasi/storage/app</p>
			</div>
		</div>
	</div>
@endsection