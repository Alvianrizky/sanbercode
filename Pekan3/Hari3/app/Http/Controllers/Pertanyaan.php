<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Pertanyaan extends Controller
{
	public function create()
	{
		return view('pertanyaancreate');
	}

	public function store(Request $request)
	{
		$request->validate([
			'judul' => 'required', 
			'isi' => 'required'
		]);
		$query = DB::table('pertanyaan')->insert([
			'judul' => $request['judul'],
			'isi' => $request['isi']
		]);

		return redirect('/pertanyaan')->with('success', 'Data Berhasil Disimpan!');
	}

	public function show($id)
	{	
		$query = DB::table('pertanyaan')->where('id', $id)->first();
		// dd($query);
		return view('view', compact('query'));
	}

	public function edit($id)
	{	
		$query = DB::table('pertanyaan')->where('id', $id)->first();
		// dd($query);
		return view('edit', compact('query'));
	}

	public function update($id, Request $request)
	{
		$request->validate([
			'judul' => 'required', 
			'isi' => 'required'
		]);
		$query = DB::table('pertanyaan')
					->where('id', $id)
					->update([
						'judul' => $request['judul'],
						'isi' => $request['isi']
					]);

		return redirect('/pertanyaan')->with('success', 'Update Data Berhasil!');
	}

	public function destroy($id)
	{
		$query = DB::table('pertanyaan')->where('id', $id)->delete();

		return redirect('/pertanyaan')->with('success', 'Delete Data Berhasil');
	}

	public function index()
	{
		$pertanyaan = DB::table('pertanyaan')->get();

		return view('index', compact('pertanyaan'));
	}
}
