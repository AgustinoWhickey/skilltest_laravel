<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Data;
use App\Http\Controllers;
use Ixudra\Curl\Facades\Curl;
use Input;
use DB;
use Storage;
use Redirect;

class Crudcontroller extends Controller
{
    public function inputdata(){
		return view('home');
	}

	public function prosesdata(Request $request){
		
		$nama = $request->input('nama');
		$time = date('his');

		$collect = [];
		foreach ($request->all() as $key => $value) {
			$collect[] = array(
				"id" => $key,
				"value" => $value,
			);
		}
		$result = json_encode($collect);
		
		$file = $nama."-".$time;
		$namafile = $file.".txt";

		Storage::put($namafile,$result);

	}
	
	public function lihatdata(Request $request){
		$response = Curl::to(url('/assets/data/sample_data.txt'))
                    ->get();
		$data = json_encode($response);
			
		return view('home.index', compact('data'));
	}
}
