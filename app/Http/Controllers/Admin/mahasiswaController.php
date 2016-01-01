<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\mahasiswaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Contracts\Auth\Guard;

class mahasiswaController extends Controller {

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($jurusan_id, $id = null) {
        //
        $data['jurusan_id'] = $jurusan_id;
        $data['title'] = 'Menu mahasiswa';
        return view('backend.mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function apimahasiswa($id = NULL) {
        //
        $data = mahasiswa::with('jurusan')->where('id_jurusan', '=', $id)->orderBy('id_mahasiswa')->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function create($id = null) {
        //
        $data['id'] = $id;
        $data['title'] = 'Tambah mahasiswa';
        return View('backend.mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(mahasiswaRequest $request, $id = null) {
        //
        $input = $request->all();
        $mahasiswa = new mahasiswa($input);
        if ($mahasiswa->save()) {
            return response()->json(array('success' => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
        $data = mahasiswa::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($jurusan_id, $id) {
        //
        $data['jurusan_id'] = $jurusan_id;
        $data['title'] = 'Edit mahasiswa';
        $data['data'] = mahasiswa::find($id);
        return view('backend.mahasiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(mahasiswaRequest $request, $jurusan_id, $id) {
        //
        $input = $request->all();
        $mahasiswa = mahasiswa::find($id);
        if ($mahasiswa->update($input)) {
            return response()->json(array('success' => TRUE));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($jurusan_id, $id) {
        //
        $mahasiswa = mahasiswa::find($id);
        if ($mahasiswa->delete()) {
            return response()->json(array('success' => TRUE));
        }
    }

}
