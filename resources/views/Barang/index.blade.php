@extends ('layouts.app')

@section('content')
	<div class="container">
		<a href="{{ url('barang/tambahBarang') }}" class="btn btn-primary">Tambah</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Gudang</th>
					<th>Nama</th>
					<th>Berat</th>
					<th>Aksi</th>
				</tr> 
			</thead>
			<tbody>
				@foreach($barang as $key)
				<tr>
					<td>{{ $key->id }}</td>
					<td>{{ $key->Gudang_id }}</td>
					<td>{{ $key->Nama }}</td>
					<td>{{ $key->Berat }}</td>
					<td><a href="{{ url('barang/editBarang/'.$key->id) }}">Edit</a> <a href="{{ url('barang/deleteBarang/'.$key->id) }}">Hapus</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection