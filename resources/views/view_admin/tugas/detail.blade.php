@extends('templates/admin_layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/apps/tugas.css') }}">

@section('add_bread_admin')
<li><a href="{{ URL::to('admin/tugas') }}">Tugas</a></li>
@stop

@section('bread_admin')
Menggambar Gunung
@stop

@section('content')

<div class="main-content">

	<div class="row row-judul">

		<div class="col-md-12">
<<<<<<< HEAD
			
			<div class="panel panel-success">
    			<div class="panel-heading">
			        <span class="panel-title">Detail Tugas</span>
			        <div class="btn-group pull-right">
			            <div class="btn-group">
							<a href="{{URL::to('admin/tugas')}}" class="btn btn-primary">Kembali</a>
						</div>
        			</div>
        			<div class="clearfix"></div>
    			</div>

    			<div class="panel-body-tgs">
        			<table class="table table-striped table-responsive">
						<thead class="tugas">
							<tr>
								<th colspan="2"><h3 class="judul-tugas"> Menggambar Gunung </h3></th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td class="kolom-kiri">
									<div class="form-group">
										<p class="col-sm-2">Materi</p>
								        <p class="col-sm-10">: &nbsp Menggambar</p>
									</div>
									<div class="form-group">
										<p class="col-sm-2">Pelajaran</p>
								        <p class="col-sm-10">: &nbsp Biologi</p>
									</div>
									<div class="form-group">
										<p class="col-sm-2">Tanggal Mulai</p>
								        <p class="col-sm-10">: &nbsp 6/03/2015</p>
									</div>
									<div class="form-group">
										<p class="col-sm-2">Tanggal Selesai</p>
								        <p class="col-sm-10">: &nbsp 8/03/2015 &nbsp</p>
									</div>
									<div class="form-group">
										<p class="col-sm-2">Batas Waktu</p>
								        <p class="col-sm-10">: &nbsp 12:00 pm &nbsp<span class="label label-danger">Deadline!</span></p>
									</div>
									<div class="form-group">
										<p class="col-sm-2">File Tugas</p>
								        <p class="col-sm-10">: &nbsp <a href="{{URL::to('admin/tugas_detail')}}" title="Unduh"> ManusiaLingkungan.docx <span class="glyphicon glyphicon-download"></span></a></p>
									</div>
								</td>
							</tr>
							<tr>
								<td class="kolom-kiri">
									<div class="form-group">
										<p class="col-sm-2">Uraian Tugas</p>
										<p class="col-sm-10">: &nbsp</p>								        
									</div>
									<div class="form-group" id="right">
										<p class="col-sm-12 text-justify">
										<br /> Food truck fixie locavore, aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
										</p>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
    			</div>
=======
				<table class="table table-striped">
					<thead class="tugas">
						<tr>
							<th colspan="2"><h3 class="judul-tugas"> Menggambar Gunung </h3></th>
						</tr>
					</thead>
					<tbody>
						<tr class="success">
							<td class="kolom-kiri">
								<div class="form-group">
									<p class="col-sm-2">Materi</p>
							        <p class="col-sm-10">: &nbsp Menggambar</p>
								</div>
								<div class="form-group">
									<p class="col-sm-2">Pelajaran</p>
							        <p class="col-sm-10">: &nbsp Biologi</p>
								</div>
								<div class="form-group">
									<p class="col-sm-2">Tanggal Mulai</p>
							        <p class="col-sm-10">: &nbsp 6/03/2015</p>
								</div>
								<div class="form-group">
									<p class="col-sm-2">Tanggal Selesai</p>
							        <p class="col-sm-10">: &nbsp 8/03/2015</p>
								</div>
								<div class="form-group">
									<p class="col-sm-2">File Tugas</p>
							        <p class="col-sm-10">: &nbsp ManusiaLingkungan.docx</p>
								</div>
							</td>
						</tr>
						<tr>
							<td class="kolom-kiri">
								<div class="form-group">
									<p class="col-sm-2">Uraian Tugas</p>
							        <p class="col-sm-10 text-justify">: &nbsp jadi tugasnya adalah begini dan begitu ingat ingat harus dikerjakan</p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="form-group">
					<div class="col-sm-12" style="text-align:center;">
						<a href="" class="btn btn-primary btn-sm">Unduh</a>
						<a href="{{URL::to('admin/tugas')}}" type="submit" class="btn btn-primary btn-sm">Tutup</a>
					</div>
	    		</div>
>>>>>>> parent of 0363982... AF - Tugas
			</div>
		</div>

	</div>

</div>

@stop