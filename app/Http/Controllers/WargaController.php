<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index()
    {
    	$warga = DB::table('warga')->get();

    	return view('index',['warga' => $warga]);
    }

    public function tambah()
	{
		return view('tambah');
	}

	public function add(Request $request)
	{		
		DB::table('warga')->insert([
			'ktp' => $request->ktp,
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'telepon' => $request->telepon,
			'alamat' => $request->alamat
		]);
	
		return redirect('/'); 
	}

	public function edit($ktp)
	{
		$warga = DB::table('warga')->where('ktp',$ktp)->get();

		return view('edit',['warga' => $warga]);	 
	}

	public function update(Request $request)
	{
		DB::table('warga')->where('ktp',$request->ktp)->update([
			'ktp' => $request->ktp,
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'telepon' => $request->telepon,
			'alamat' => $request->alamat
		]);
	
		return redirect('/');
	}

	public function hapus($ktp)
	{
		DB::table('warga')->where('ktp',$ktp)->delete();
			
		return redirect('/');
	}

}
