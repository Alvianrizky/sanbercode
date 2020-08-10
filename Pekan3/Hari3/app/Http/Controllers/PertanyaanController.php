<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;

class PertanyaanController extends Controller
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
		// $query = DB::table('pertanyaan')->insert([
		// 	'judul' => $request['judul'],
		// 	'isi' => $request['isi']
		// ]);

		// $pertanyaan = new Pertanyaan;
		// $pertanyaan->judul =  $request['judul'];
		// $pertanyaan->isi = $request['isi'];
		// $pertanyaan->save();

		$pertanyaan = Pertanyaan::create([
			'judul' => $request['judul'],
			'isi' => $request['isi']
		]);

		return redirect('/pertanyaan')->with('success', 'Data Berhasil Disimpan!');
	}

	public function show($id)
	{	
		// $query = DB::table('pertanyaan')->where('id', $id)->first();
		// dd($query);
		$query = Pertanyaan::find($id);
		return view('view', compact('query'));
	}

	public function edit($id)
	{	
		// $query = DB::table('pertanyaan')->where('id', $id)->first();
		// dd($query);
		$query = Pertanyaan::find($id);
		return view('edit', compact('query'));
	}

	public function update($id, Request $request)
	{
		$request->validate([
			'judul' => 'required', 
			'isi' => 'required'
		]);
		// $query = DB::table('pertanyaan')
		// 			->where('id', $id)
		// 			->update([
		// 				'judul' => $request['judul'],
		// 				'isi' => $request['isi']
		// 			]);

		$query = Pertanyaan::where('id', $id)->update([
			'judul' => $request['judul'],
			'isi' => $request['isi']
		]);

		return redirect('/pertanyaan')->with('success', 'Update Data Berhasil!');
	}

	public function destroy($id)
	{
		// $query = DB::table('pertanyaan')->where('id', $id)->delete();
		$query = Pertanyaan::destroy($id);

		return redirect('/pertanyaan')->with('success', 'Delete Data Berhasil');
	}

	public function index()
	{
		// $pertanyaan = DB::table('pertanyaan')->get();

		$pertanyaan = Pertanyaan::all();

		return view('index', compact('pertanyaan'));
	}
}
