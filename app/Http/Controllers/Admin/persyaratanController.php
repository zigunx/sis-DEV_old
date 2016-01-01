<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\persyaratanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\persyaratan;
use App\Models\mahasiswa;
use Illuminate\Contracts\Auth\Guard;

class persyaratanController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function index() {
        //
        $data['title'] = 'Menu persyaratan';
        if ($this->auth->user()->status == 'admin') {
            return view('backend.persyaratan.index', $data);
        }
        return view('guru.persyaratan.index', $data);
    }

    public function apipersyaratan($id) {
        $data = persyaratan::where('id_persyaratan', '=', $id)->with('jurusan', 'mahasiswa')->get()->first();
        return response()->json($data);
    }

    public function apiCreatepersyaratan() {
        $data = persyaratan::Dropdownpersyaratan();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(persyaratanRequest $request) {
        //
        $data['tanggal'] = $request->get('tanggal');
        $data['bulan'] = $request->get('bulan');
        $data['tahun'] = $request->get('tahun');
        $data['fulltanggal'] = date('d F Y', strtotime($data['tanggal'] . '-' . $data['bulan'] . '-' . $data['tahun']));
        $data['mahasiswa'] = mahasiswa::with('jurusan')->where('id_jurusan', '=', $request->get('jurusan'))->orderBy('id_mahasiswa')->get();
        $data['title'] = 'Tambah persyaratan';
        if ($this->auth->user()->status == 'admin') {
            return View('backend.persyaratan.create', $data);
        }
        return View('guru.persyaratan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(persyaratanRequest $request) {
        //
        $input = $request->except('_token', 'jurusan', 'tanggal', 'bulan', 'tahun');
        $jurusan = $request->get('jurusan');
        persyaratan::where('tanggal', '=', $request->get('tanggal'))
                ->where('bulan', '=', $request->get('bulan'))
                ->where('tahun', '=', $request->get('tahun'))->where('id_jurusan', '=', $jurusan)
                ->delete();
        foreach ($input as $key => $val) {
            $implode = explode('-', $key);
            $mahasiswa = $implode[1];
            $persyaratan = new persyaratan();
            $persyaratan->id_mahasiswa = $mahasiswa;
            $persyaratan->id_jurusan = $jurusan;
            $persyaratan->tanggal = $request->get("tanggal");
            $persyaratan->bulan = $request->get('bulan');
            $persyaratan->tahun = $request->get('tahun');
            $persyaratan->absen = $input[$key]['absen'];
            $persyaratan->save();
        }
        if ($this->auth->user()->status == 'admin') {
            return redirect(route('admin.persyaratan.index'));
        }
        return redirect(route('guru.persyaratan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(persyaratanRequest $request) {
        //
        $input = $request->except('_token');
        $data['title'] = 'Lihat persyaratan';
        $data['fulltanggal'] = date('d F Y', strtotime($input['tanggal'] . '-' . $input['bulan'] . '-' . $input['tahun']));
        $data['mahasiswa'] = mahasiswa::with(['persyaratan' => function($query) use ($input) {
                $query->where('tanggal', '=', $input['tanggal'])
                        ->where('bulan', '=', $input['bulan'])
                        ->where('tahun', '=', $input['tahun']);
            }])->where('id_jurusan', '=', $input['jurusan'])->get();
        if ($this->auth->user()->status == 'admin') {
            return View('backend.persyaratan.show', $data);
        }
        return View('guru.persyaratan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        $data['title'] = 'Edit persyaratan';
        $data['data'] = persyaratan::find($id);
        if ($this->auth->user()->status == 'admin') {
            return view('backend.persyaratan.edit', $data);
        }
        return View('guru.persyaratan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(persyaratanRequest $request, $id) {
        //
        $input = $request->only('id_mahasiswa', 'id_jurusan', 'absen', 'tanggal', 'bulan', 'tahun');
        $persyaratan = persyaratan::find($id);
        if ($persyaratan->update($input)) {
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
        $persyaratan = persyaratan::find($id);
        if ($persyaratan->delete()) {
            return response()->json(array('success' => TRUE));
        }
    }

}
