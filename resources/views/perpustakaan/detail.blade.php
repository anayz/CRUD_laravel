@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Detail Buku</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<strong>Judul</strong> {{$perpus->judul}}
			</div>

			<div class="form-group">
				<strong>Penerbit : </strong> {{$perpus->penerbit}}
			</div>

			<div class="form-group">
				<strong>Tahun terbit : </strong> {{$perpus->tahun_terbit}}
			</div>

			<div class="form-group">
				<strong>Pengarang :</strong> {{$perpus->pengarang}}
			</div>
			</div>
			<div class="col-md-12">
				<a href="{{route('perpus.index')}}" class="btn btn-sm btn-success">Back</a>
			</div>
		</div>
	</div>
@endsection