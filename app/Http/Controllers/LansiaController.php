<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lansia;
use Illuminate\Support\Facades\DB;

class LansiaController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('lansias')
                ->where('status', null)
                ->get();
        $data2 = DB::table('lansias')
                ->where('status', 'Meninggal')
                ->get();
        $data3 = DB::table('lansias')
                ->where('status', 'Sakit')
                ->get();
        return view('admin.lansia.view', compact('data', 'data2', 'data3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lansia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menerima data request
        $data                    = new Lansia;
        $data->nama_lansias      = $request->get('nama_lansias');
        $data->nama_wali         = $request->get('nama_wali');
        $data->tpt_lahir         = $request->get('tpt_lahir');
        $data->tgl_lahir         = $request->get('tgl_lahir');
        $data->umur              = $request->get('umur');
        $data->jenis_kelamin     = $request->get('jenis_kelamin');
        $data->agama             = $request->get('agama');
        $data->alamat            = $request->get('alamat');
        $data->kelurahan         = $request->get('kelurahan');
        $data->kecamatan         = $request->get('kecamatan');
        $data->No_tlp            = $request->get('No_tlp');
        $data->NIK               = $request->get('NIK');
        $data->No_KK             = $request->get('No_KK');
        $data->No_BPJS           = $request->get('No_BPJS');
        $data->gakin             = $request->get('gakin');
        $data->penyakit_penyerta = $request->get('penyakit_penyerta');
        $data->periksa_kesehatan = $request->get('periksa_kesehatan');
        $data->status            = $request->get('status');
        $data->umur_meninggal    = $request->get('umur_meninggal');
        $data->tempat_meninggal  = $request->get('tempat_meninggal');
        $data->umur_sakit        = $request->get('umur_sakit');
        $data->umur_sakit        = $request->get('tgl_msakit');
        $data->jenis_penyakit    = $request->get('jenis_penyakit');
        $data->tempat_perawatan  = $request->get('tempat_perawatan');
        $data->dokter            = $request->get('dokter');
        $data->ruang_rawat       = $request->get('ruang_rawat');
        $data->save();
        return redirect()->route('lansia.index')->with(['success' => 'Data Berhasil Di Tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Lansia::where('id_lansias', $id)->get();
        $data2 = DB::table('lansias')
                ->where('status', 'Meninggal')
                ->get();
        $data3 = DB::table('lansias')
                ->where('status', 'Sakit')
                ->get();
        return view('admin.lansia.detail', compact('data', 'data2', 'data3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lansia::where('id_lansias', $id)->get();
        return view('admin.lansia.edit', compact('data'));
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
        $data = Lansia::where('id_lansias', $id)->first();
        $data->nama_lansias      = $request->get('nama_lansias');
        $data->nama_wali         = $request->get('nama_wali');
        $data->tpt_lahir         = $request->get('tpt_lahir');
        $data->tgl_lahir         = $request->get('tgl_lahir');
        $data->umur              = $request->get('umur');
        $data->jenis_kelamin     = $request->get('jenis_kelamin');
        $data->agama             = $request->get('agama');
        $data->alamat            = $request->get('alamat');
        $data->kelurahan         = $request->get('kelurahan');
        $data->kecamatan         = $request->get('kecamatan');
        $data->No_tlp            = $request->get('No_tlp');
        $data->NIK               = $request->get('NIK');
        $data->No_KK             = $request->get('No_KK');
        $data->No_BPJS           = $request->get('No_BPJS');
        $data->gakin             = $request->get('gakin');
        $data->penyakit_penyerta = $request->get('penyakit_penyerta');
        $data->periksa_kesehatan = $request->get('periksa_kesehatan');
        $data->status            = $request->get('status');
        $data->umur_meninggal    = $request->get('umur_meninggal');
        $data->tempat_meninggal  = $request->get('tempat_meninggal');
        $data->umur_sakit        = $request->get('umur_sakit');
        $data->tgl_msakit        = $request->get('tgl_msakit');
        $data->jenis_penyakit    = $request->get('jenis_penyakit');
        $data->tempat_perawatan  = $request->get('tempat_perawatan');
        $data->dokter            = $request->get('dokter');
        $data->ruang_rawat       = $request->get('ruang_rawat');
        $data->save();

        if ($data->save() == true) {
        	return redirect()->route('lansia.index')->with(['success' => 'Data Berhasil Di Update']);
        } else {
        	return redirect()->route('lansia.index')->with(['error' => 'Data Gagal Di Update']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$data = Lansia::where('id_lansis', $id)->first();
        $data->delete();
        return redirect()->route('lansia.index')->with(['success' => 'Data Berhasil Di Hapus']);
    }

    public function meninggal(Request $request)
    {
        $id                     = $request->get('idlansias');
        $data                   = Lansia::where('id_lansias', $id)->first();
        $status                 = "Meninggal";
        $data->status           = $status;
        $data->umur_meninggal   = $request->get('umur_meninggal');
        $data->tempat_meninggal = $request->get('tempat_meninggal');
        $data->save();

        if ($data->save() == true) {
            return redirect()->route('lansia.index')->with(['success' => 'Data Berhasil Di Update']);
        } else {
            return redirect()->route('lansia.index')->with(['error' => 'Data Gagal Di Update']);
        }
    }

    public function sakit(Request $request)
    {
        $id                      = $request->get('idlansias');
        $data                    = Lansia::where('id_lansias', $id)->first();
        $status                  = "Sakit";
        $data->status            = $status;
        $data->umur_sakit        = $request->get('umur_sakit');
        $data->tgl_sakit         = $request->get('tgl_sakit');
        $data->jenis_penyakit    = $request->get('jenis_penyakit');
        $data->tempat_perawatan  = $request->get('tempat_perawatan');
        $data->dokter            = $request->get('dokter');
        $data->ruang_rawat      = $request->get('ruang_rawat')->nullable();        
        $data->save();

        if ($data->save() == true) {
            return redirect()->route('lansia.index')->with(['success' => 'Data Berhasil Di Update']);
        } else {
            return redirect()->route('lansia.index')->with(['error' => 'Data Gagal Di Update']);
        }
    }
}
