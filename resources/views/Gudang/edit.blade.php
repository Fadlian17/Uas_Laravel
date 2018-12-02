@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="POST" action="{{ url('gudang/updateGudang/' .$gudang->id) }}">
			@csrf
			<p>Text</p>
			<input type="text" name="Text" placeholder="Text" value="{{ $gudang->Text}}">
			<p>Kapasitas</p>
			<input type="number" name="Kapasitas" placeholder="Kapasitas Gudang" value="{{$gudang->Kapasitas}}">
			<p>Pic</p>
			<input type="text" name="Pic" placeholder="Pic" value="{{$gudang->Pic}}">
			<button type="submit" class="btn btn-primary">Ubah</button>
		</form>
	</div>
@endsection