@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('gudang/simpanGudang') }}">
			@csrf
			<p>Text</p>
			<input type="text" name="Text" placeholder="Text">
			<p>Kapasitas</p>
			<input type="number" name="Kapasitas" placeholder="Kapasitas Gudang">
			<p>Pic</p>
			<input type="text" name="Pic" placeholder="Pic">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
@endsection