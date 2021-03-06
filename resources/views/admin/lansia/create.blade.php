@extends('layouts.base')

@section('css')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{!! asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}">
@endsection

@section('breadcrumb')
<h1>
    Data Lansia
    <small>kelola data lansia</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Data Induk</a></li>
    <li class="active">Data Lansia</li>
</ol>
@endsection

@section('content')
<div class="panel panel-default">
	<!--<div class="panel-heading">Masukkan Data Lansia</div> -->
	<div class="panel-body">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<form class="form-horizontal" method="post" action="{{ route('lansia.store') }}">
						@csrf
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_lansias">Nama Lansia</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-venus"></i></span>
										<input type="text" class="form-control" placeholder="Nama Lansia" name="nama_lansias" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_wali">Nama Wali</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-mars"></i></span>
										<input type="text" class="form-control" placeholder="Nama Wali" name="nama_wali" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="ttl">Tempat, Tanggal Lahir</label>
								<div class="input-group col-md-8">
									<div class="input-group" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-home"></i></span>
										<input type="text" class="form-control" placeholder="Tempat Lahir" name="tpt_lahir" required>
									</div>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" required autocomplete="off">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="umur">Umur</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-desc"></i></span>
										<input type="number" class="form-control" placeholder="Umur" name="umur" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_lansias">Jenis Kelamin</label>
								<div class="input-group col-md-8">
									<div class="form-check-inline">
										<label class="form-check-label" style="padding: 6px 10px 0px 0px;">
											<input type="radio" name="jenis_kelamin" class="form-check-input minimal" value="0" required> Laki-Laki
										</label>
										<label class="form-check-label">
											<input type="radio" name="jenis_kelamin" class="form-check-input minimal" value="1" required> Perempuan
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="agama">Agama</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
										<select class="form-control" name="agama" style="width: 100%;" required>
											<option selected="selected" value="">-- Agama --</option>
											<option value="0">Islam</option>
											<option value="1">Kristen</option>
											<option value="2">Katolik</option>
											<option value="3">Hindu</option>
											<option value="4">Buddha</option>
											<option value="5">Kong Hu Cu</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="alamat">Alamat</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-home"></i></span>
										<input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="alamat2"></label>
								<div class="input-group col-md-8">
									<div class="input-group" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
										<input type="text" class="form-control" placeholder="Kelurahan" value="Teupin Beulangan" name="kelurahan" required>
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
										<input type="text" class="form-control" placeholder="Kecamatan" value="Samudera" name="kecamatan" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="No_tlp">Nomor Telpon</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
										<input type="number" class="form-control" placeholder="Nomor Telpon" name="No_tlp">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="NIK">NIK</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-id-card"></i></span>
										<input type="number" class="form-control" placeholder="NIK" name="NIK" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="No_KK">Nomor KK</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-id-card"></i></span>
										<input type="number" class="form-control" placeholder="Nomor KK" name="No_KK" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="No_BPJS">Nomor BPJS <small>(bila ada)</small></label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-id-card"></i></span>
										<input type="number" class="form-control" placeholder="Nomor BPJS (bila ada)" name="No_BPJS">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="gakin">Status Gakin</label>
								<div class="input-group col-md-8">
									<div class="form-check-inline">
										<label class="form-check-label" style="padding: 6px 10px 0px 0px;">
											<input type="radio" name="gakin" class="form-check-input minimal" value="0" required> Non Gakin
										</label>
										<label class="form-check-label">
											<input type="radio" name="gakin" class="form-check-input minimal" value="1" required> Gakin
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="penyakit_penyerta">Penyakit Penyerta</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-thermometer-empty"></i></span>
										<input type="text" class="form-control" placeholder="Penyakit Penyerta" name="penyakit_penyerta">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="periksa_kesehatan">Periksa Kesehatan</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-hospital-o"></i></span>
										<input type="text" class="form-control" placeholder="Periksa Kesehatan" name="periksa_kesehatan" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
								<div class="input-group col-md-8">
									<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
									<a href="{{ route('lansia.index') }}" class="btn btn-danger">Batal</a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('java')
<!-- bootstrap datepicker -->
<script src="{!! asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<!-- Page script -->
<script>
	$(function () {
		// Date Picker
		$('#datepicker').datepicker({
			format: 'yyyy/mm/dd',
			autoclose: true
		})
	})
</script>
@endsection