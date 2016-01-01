<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JurusanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jurusan;
use Illuminate\Contracts\Auth\Guard;

class JurusanController extends Controller {

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $data['title'] = 'Menu jurusan';
        return view('backend.jurusan.index', $data);
    }

    public function apijurusan() {
        $data = jurusan::all();
        return response()->json($data);
    }

    public function apiCreatejurusan() {
        $data = jurusan::Dropdownjurusan();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        $data['title'] = 'Tambah jurusan';
        return View('backend.jurusan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(jurusanRequest $request) {
        //
        $input = $request->all();
        $jurusan = new jurusan($input);
        if ($jurusan->save()) {
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
        $data = jurusan::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        $data['title'] = 'Edit jurusan';
        $data['data'] = jurusan::find($id);
        return view('backend.jurusan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(jurusanRequest $request, $id) {
        //
        $input = $request->all();
        $jurusan = jurusan::find($id);
        if ($jurusan->update($input)) {
            return response()->json(array('success' => TRUE));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
        $jurusan = jurusan::find($id);
        if ($jurusan->delete()) {
            return response()->json(array('success' => TRUE));
        }
    }

}
