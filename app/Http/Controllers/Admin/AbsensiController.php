<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AbsensiRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Absensi;
use App\Models\mahasiswa;
use Illuminate\Contracts\Auth\Guard;

class AbsensiController extends Controller {

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
        $data['title'] = 'Menu Absensi';
        if ($this->auth->user()->status == 'admin') {
            return view('backend.absensi.index', $data);
        }
        return view('guru.absensi.index', $data);
    }

    public function apiAbsensi($id) {
        $data = Absensi::where('id_absensi', '=', $id)->with('jurusan', 'mahasiswa')->get()->first();
        return response()->json($data);
    }

    public function apiCreateAbsensi() {
        $data = Absensi::DropdownAbsensi();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(AbsensiRequest $request) {
        //
        $data['tanggal'] = $request->get('tanggal');
        $data['bulan'] = $request->get('bulan');
        $data['tahun'] = $request->get('tahun');
        $data['fulltanggal'] = date('d F Y', strtotime($data['tanggal'] . '-' . $data['bulan'] . '-' . $data['tahun']));
        $data['mahasiswa'] = mahasiswa::with('jurusan')->where('id_jurusan', '=', $request->get('jurusan'))->orderBy('id_mahasiswa')->get();
        $data['title'] = 'Tambah Absensi';
        if ($this->auth->user()->status == 'admin') {
            return View('backend.absensi.create', $data);
        }
        return View('guru.absensi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(AbsensiRequest $request) {
        //
        $input = $request->except('_token', 'jurusan', 'tanggal', 'bulan', 'tahun');
        $jurusan = $request->get('jurusan');
        Absensi::where('tanggal', '=', $request->get('tanggal'))
                ->where('bulan', '=', $request->get('bulan'))
                ->where('tahun', '=', $request->get('tahun'))->where('id_jurusan', '=', $jurusan)
                ->delete();
        foreach ($input as $key => $val) {
            $implode = explode('-', $key);
            $mahasiswa = $implode[1];
            $absensi = new Absensi();
            $absensi->id_mahasiswa = $mahasiswa;
            $absensi->id_jurusan = $jurusan;
            $absensi->tanggal = $request->get("tanggal");
            $absensi->bulan = $request->get('bulan');
            $absensi->tahun = $request->get('tahun');
            $absensi->absen = $input[$key]['absen'];
            $absensi->save();
        }
        if ($this->auth->user()->status == 'admin') {
            return redirect(route('admin.absensi.index'));
        }
        return redirect(route('guru.absensi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(AbsensiRequest $request) {
        //
        $input = $request->except('_token');
        $data['title'] = 'Lihat Absensi';
        $data['fulltanggal'] = date('d F Y', strtotime($input['tanggal'] . '-' . $input['bulan'] . '-' . $input['tahun']));
        $data['mahasiswa'] = mahasiswa::with(['absensi' => function($query) use ($input) {
                $query->where('tanggal', '=', $input['tanggal'])
                        ->where('bulan', '=', $input['bulan'])
                        ->where('tahun', '=', $input['tahun']);
            }])->where('id_jurusan', '=', $input['jurusan'])->get();
        if ($this->auth->user()->status == 'admin') {
            return View('backend.absensi.show', $data);
        }
        return View('guru.absensi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        $data['title'] = 'Edit Absensi';
        $data['data'] = Absensi::find($id);
        if ($this->auth->user()->status == 'admin') {
            return view('backend.absensi.edit', $data);
        }
        return View('guru.absensi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(AbsensiRequest $request, $id) {
        //
        $input = $request->only('id_mahasiswa', 'id_jurusan', 'absen', 'tanggal', 'bulan', 'tahun');
        $absensi = Absensi::find($id);
        if ($absensi->update($input)) {
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
        $absensi = Absensi::find($id);
        if ($absensi->delete()) {
            return response()->json(array('success' => TRUE));
        }
    }

}
