<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Task;
use App\kategori;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;
// use Symfony\Contracts\Service\Attribute\Required;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename = 'Data Tugas';
        $data = Task::all();
        return view('admin.tugas.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_kategori = kategori::all();
        $pagename = 'Form Input Tugas';
        return view('admin.tugas.create', compact('pagename', 'data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $request->validate([
            'txtnama_tugas' => 'Required',
            'id_kategori' => 'required',
            'txtketerangan_tugas' => 'Required',
            'radiostatus_tugas' => 'Required',
        ]);

        $data_tugas = new Task([

            'nama_tugas' => $request->get('txtnama_tugas'),
            'id_kategori' => $request->get('id_kategori'),
            'ket_tugas' => $request->get('txtketerangan_tugas'),
            'status_tugas' => $request->get('radiostatus_tugas'),
        ]);

        //dd($data_tugas);
        $data_tugas->save();
        return Redirect('admin/tugas')->with('sukses', 'tugas berhasil disimpan');
        // Task::create([
        //     'nama_tugas' => $request->get('txtnama_tugas'),
        //     'id_keterangan' => $request->get('optionid_kategori'),
        //     'ket_tugas' => $request->get('txtketerangan_tugas'),
        //     'status_tugas' => $request->get('radiostatus_tugas'),
        // ])
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}