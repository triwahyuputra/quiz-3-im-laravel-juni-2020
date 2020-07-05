<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('index',compact('artikel'));
    }
    
    public function create(){
        return view('form');
    }

    public function store(Request $request){
        $new_artikel = ArtikelModel::save($request->all());
        return redirect('/artikel');
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('edit', compact('artikel'));
    }

    public function update($id, Request $request){
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
?>