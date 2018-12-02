<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Gudang;

class BarangController extends Controller
{
    function index(){
    	$data['barang'] = Barang::all();
    	return view('barang.index')->with($data);
    }

    function add(){
    	return view('barang.add');
    }

    function save(Request $r){
    	$barang = new Barang;
    	$barang->Gudang_id = $r->input('Gudang_id');
    	$barang->Nama = $r->input('Nama');
    	$barang->Berat = $r->input('Berat');
    	$barang->save();
    	return redirect(url('barang'));
    }

    function edit($id){
    	$data['barang']= Barang::find($id);
    	return view('barang.edit')->with($data);
    }

    function update(Request $r, $id){
    	$barang = Barang::find($id);
    	$barang->Id = $r->input('Gudang_id');
    	$barang->Nama = $r->input('Nama');
    	$barang->Berat = $r->input('Berat');
    	$barang->save();
    	return redirect(url('barang'));
    }
    function delete($id){
    	Barang::find($id)->delete();
    	return redirect(url('barang'));
    }
}
