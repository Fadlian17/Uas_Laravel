@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('barang/simpanBarang') }}">
			@csrf
			<p>Gudang</p>
			<input type="number" name="Gudang_id" placeholder="ID Gudang">
			<p>Nama</p>
			<input type="text" name="Nama" placeholder="Nama Barang">
			<p>Berat</p>
			<input type="number" name="Berat" placeholder="Berat">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
@endsection