<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Wisata;
use Illuminate\Support\Facades\Input;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function index()
	{
		$wisata = Wisata::all();
		return view('admin/wisata', compact('wisata'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin/tambah_wisata');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$wisata_baru = new Wisata;
		$wisata_baru->nama = Input::get('nama');
		$wisata_baru->alamat = Input::get('alamat');
		$wisata_baru->latitude = Input::get('latitude');
		$wisata_baru->longitude = Input::get('longtitude');
		$wisata_baru->wilayah = Input::get('wilayah');
		$wisata_baru->deskripsi = Input::get('deskripsi');
		$wisata_baru->aff = Input::get('aff');
		//$input = $request->all();
		//Wisata::create($input);
		if (Input::hasFile('image'))
			{
				$file     = Input::file('image');
				$filename = str_random(25).'-'.$file->getClientOriginalName().'.'.$file->getClientOriginalExtension();

				$destinationPath = 'protected/assets/images';
			    $file->move($destinationPath, $filename);
				$wisata_baru->image = url('protected/assets/images')."/".$filename;
			}
		$wisata_baru->save();
		return redirect ('admin/wisata');      	   	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_wisata)
	{
		$wisata = Wisata::findOrFail($id_wisata);
		return view('admin/edit_wisata', compact('wisata'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id_wisata)
	{
		$wisata = Wisata::findOrFail($id_wisata);
		$wisata->update($request->all());
		return redirect('admin/wisata');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_wisata)
	{
		$wisata = Wisata::findOrFail($id_wisata);
		$wisata->delete();
		return redirect('admin/wisata');
	}

	public function jsonwisata()
	{
		$data = Wisata::all();
		$data = array(
			'data' => $data
			);
		return $data;
	}
}
