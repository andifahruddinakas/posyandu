@extends('layouts.base')

@section('css')

@endsection

@section('breadcrumb')
<h1>
    Detail Lansia
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Data Induk</a></li>
    <li class="active">Data Lansia</li>
</ol>
@endsection

@section('content')

@foreach($data as $datas)
<div class="row">
	<div class="col-md-3">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="{!! asset('dist/img/avatar2.png') !!}" alt="User profile picture">
				<h3 class="profile-username text-center">{{ $datas->nama_lansias }}</h3>
				<p class="text-muted text-center">Lansia</p>
				<ul class="list-group list-group-unbordered">
                     <li class="list-group-item">
						<b>Tempat Lahir</b> <a class="pull-right">{{ $datas->tpt_lahir }}</a>
					</li>
					<li class="list-group-item">
						<b>Tanggal Lahir</b> <a class="pull-right">
                            @php
                                $date = date("d-m-Y", strtotime($datas->tgl_lahir))
                            @endphp
                            {{ $date }}
                        </a>
					</li>
					<li class="list-group-item">
						<b>Umur</b> <a class="pull-right">{{ $datas->umur }} Tahun</a>
					</li>
				</ul>
				<a href="{{ route('lansia.index') }}" class="btn btn-primary btn-block"><b>Kembali</b></a>
			</div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-md-9">
    	<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            	<li class="active"><a href="#activity" data-toggle="tab">Detail</a></li>
            </ul>
            <div class="tab-content">
            	<div class="active tab-pane" id="activity">
            		<div class="tab-pane" id="activity">
            			<!-- The timeline -->
            			<ul class="timeline timeline-inverse">
            				<!-- timeline time label -->
            				<li class="time-label">
            					<span class="bg-red">
            						@php
            							$date = date("d M. Y", strtotime($datas->created_at))
            						@endphp
            						{{ $date }}
            					</span>
            				</li>
            				<!-- /.timeline-label -->
            				<!-- timeline item -->
            				<li>
            					<i class="fa fa-mars bg-light-blue"></i>
            					<div class="timeline-item">
            						<h3 class="timeline-header no-border">
            							<a href="#">Nama Wali : </a> {{ $datas->nama_wali }}
            						</h3>
            					</div>
            				</li>
            				<!-- END timeline item -->
            				<!-- timeline item -->
            				<li>
            					<i class="fa fa-address-card bg-yellow"></i>
            					<div class="timeline-item">
            						<h3 class="timeline-header no-border">
            							<a href="#">Alamat : </a> {{ $datas->alamat }}
            						</h3>
            					</div>
            				</li>
            				<!-- END timeline item -->
            				<!-- timeline item -->
            				<li>
 
            				<!-- END timeline item -->
                            @if($datas->status == "Meninggal")
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-blue">
                                        Status: {{ $datas->status }}
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-info bg-yellow"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><a href="#">Detail Meninggal</a></h3>

                                        <div class="timeline-body">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Umur Meninggal</th>
                                                    <th> : </th>
                                                    <td>{{ $datas->umur_meninggal }} Tahun</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Meninggal</th>
                                                    <th> : </th>
                                                    <td>{{ $datas->tempat_meninggal }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                            @elseif($datas->status == "Sakit")
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-blue">
                                        Status: {{ $datas->status }}
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-info bg-yellow"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><a href="#">Detail Sakit</a></h3>

                                        <div class="timeline-body">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Umur Sakit</th>
                                                    <th> : </th>
                                                    <td>{{ $datas->umur_sakit }} Tahun</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Mulai Sakit</th>
                                                    <th> : </th>
                                                    <td>{{ $datas->tgl_msakit }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                            @endif
            				<li>
            					<i class="fa fa-check bg-gray"></i>
            				</li>
            			</ul>
            		</div>
            		<!-- /.tab-pane -->
            	</div>
            	<!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
   	</div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endforeach

@endsection

@section('java')
@endsection