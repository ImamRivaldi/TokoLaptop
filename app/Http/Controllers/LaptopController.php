<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Laptop;
use PDF;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptop = Laptop::all();
        return view('laptop.show', ['laptop' => $laptop]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laptop = new Laptop;
        $laptop->kd_trans = $request->kd_trans;
        $laptop->merek = $request->merek;
        $laptop->tipe = $request->tipe;
        $laptop->harga = $request->harga;
        $laptop->jml_beli = $request->jml_beli;
        $laptop->save();
        
        return redirect(Route('index'))->with('alert-success', 'Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = Laptop::findOrFail($id);
        return view('laptop.edit', ['laptop' => $laptop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->kd_trans = $request->kd_trans;
        $laptop->merek = $request->merek;
        $laptop->tipe = $request->tipe;
        $laptop->harga = $request->harga;
        $laptop->jml_beli = $request->jml_beli;
        $laptop->save();
        
        return redirect(Route('index'))->with('alert-success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();
        return redirect(Route('index'))->with('alert-success', 'Berhasil Menghapus Data!');
    }
    
    public function search(Request $request){
  		$search = $request->get('search');
        $cari = Laptop::where('kd_trans', 'LIKE', '%'.$search.'%')
                    ->orwhere('merek', 'LIKE', '%'.$search.'%')
                    ->orwhere('tipe', 'LIKE', '%'.$search.'%')
                    ->orwhere('harga', 'LIKE', '%'.$search.'%')
                    ->orwhere('jml_beli', 'LIKE', '%'.$search.'%')
                    ->paginate(10);
  		return view('laptop.cari', compact('search', 'cari'));
  	}

    //Cetak Data
    public function print(){
      $laptop = Laptop::all();
      $pdf=PDF::loadView('laptop.print', ['laptop' => $laptop]);
      return $pdf->setPaper('a4', 'landscape')->stream();
    }
    
    public function contact()
    {
        return view('contact');
    }
}