@extends ('layouts.app')

@section('content')
	<div class="container">
		<a href="{{ url('gudang/tambahGudang') }}" class="btn btn-primary">Tambah</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Text</th>
					<th>Kapasitas</th>
					<th>Pic</th>
					<th>Aksi</th>
				</tr> 
			</thead>
			<tbody>
				@foreach($gudang as $key)
				<tr>
					<td>{{ $key->id }}</td>
					<td>{{ $key->Text }}</td>
					<td>{{ $key->Kapasitas }}</td>
					<td>{{ $key->Pic }}</td>
					<td><a href="{{ url('gudang/editGudang/'.$key->id) }}">Edit</a> <a href="{{ url('gudang/deleteGudang/'.$key->id) }}">Hapus</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection