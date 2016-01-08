<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Wisata;
use Request;
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
	public function store()
	{
		$input = Request::all();
		Wisata::create($input);
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
	public function edit($id)
	{
		$wisata = Wisata::findOrFail($id);
		return view('admin/edit_wisata', compact('mobil'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$wisata = Wisata::findOrFail($id);
		$wisata->update($request->all());
		return redirect('admin/wisata');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
