<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
use App\Barang;

class GudangController extends Controller
{
	function index(){
		$data['gudang']=Gudang::all();
		return view('gudang.index')->with($data);
	}    
	function add(){
		return view('gudang.add');
	}
	function save(Request $r){
    	$gudang = new Gudang;
    	$gudang->Text = $r->input('Text');
    	$gudang->Kapasitas = $r->input('Kapasitas');
    	$gudang->Pic = $r->input('Pic');
    	$gudang->save();
    	return redirect(url('gudang'));
    }
    function edit($id){
    	$data['gudang']= Gudang::find($id);
    	return view('gudang.edit')->with($data);
    }
    function update(Request $r, $id){
    	$gudang = new Gudang;
    	$gudang->Text = $r->input('Text');
    	$gudang->Kapasitas = $r->input('Kapasitas');
    	$gudang->Pic = $r->input('Pic');
    	$gudang->save();
    	return redirect(url('gudang'));
    }
    function delete($id){
    	Gudang::find($id)->delete();
    	return redirect(url('gudang'));
    }
}
