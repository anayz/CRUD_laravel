@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h4>Buku</h4>
		</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="{{ route('perpus.create')}}">Create new book list</a>
			</div>
		</div>

		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif

		<table class="table table-hover table-sm">
			<tr>
				<th width="50px">No.</th>
				<th width="250px"><b>Judul buku</b></th>
				<th width="250px"><b>Penerbit</b></th>
				<th width="250px"><b>Tahun terbit</b></th>
				<th width="250px"><b>Pengarang</b></th>
				<th width="180px"><b>Action</b></th>
			</tr>

			@foreach ($perpuses as $perpus)
			<tr>
				<td><b>{{++$i}}.</b></td>
				<td>{{$perpus->judul}}</td>
				<td>{{$perpus->penerbit}}</td>
				<td>{{$perpus->tahun_terbit}}</td>
				<td>{{$perpus->pengarang}}</td>
				<td>
					<form action="{{ route('perpus.destroy',$perpus->id) }}" method="post">
						<a class="btn btn-sm btn-success" href="{{ route('perpus.show', $perpus->id)}}">Show</a>
						<a class="btn btn-sm btn-warning" href="{{ route('perpus.edit', $perpus->id)}}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-sm btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</table>
				{!! $perpuses->links() !!}
	</div>
@endsection