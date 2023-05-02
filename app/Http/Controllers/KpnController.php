<?php

namespace App\Http\Controllers;

use App\Models\GolRuang;
use App\Models\KpKategori;
use App\Models\Kpn;
use App\Models\KpPeriode;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KpnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $golruang = GolRuang::all();
        $unitkerja = UnitKerja::all();
        $kpnperiode = KpPeriode::withCount('kpn')->get();
        $kpns = Kpn::latest()->get();
        return view('pages.kpns.index', compact('golruang','unitkerja','kpnperiode','kpns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golruang = GolRuang::all();
        $unitkerja = UnitKerja::all();
        $kpperiode = KpPeriode::all();
        $kpkategori = KpKategori::all();

        return view('pages.kpns.create', compact('golruang','unitkerja','kpperiode','kpkategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kpn = new Kpn();
        $kpn->id = (string) Str::uuid();
        $kpn->nama = $request->nama;
        $kpn->nip = $request->nip;
        $kpn->gol_ruang_id = $request->gol_ruang_id;
        $kpn->tmt_terakhir = $request->tmt_terakhir;
        $kpn->unit_kerja_id = $request->input('unit_kerja_id');
        $kpn->kp_periode_id = $request->kp_periode_id;
        $kpn->kp_kategori_id = $request->kp_kategori_id;
        $kpn->save();

        return redirect()->route('kpn.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kpn $kpn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kpn $kpn)
    {
        $golruang = GolRuang::all();
        $unitkerja = UnitKerja::all();
        $kpperiode = KpPeriode::all();
        $kpkategori = KpKategori::all();

        return view('pages.kpns.edit', compact('kpn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kpn $kpn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kpn $kpn)
    {
        //
    }
}
