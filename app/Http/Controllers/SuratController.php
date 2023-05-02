<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\SuratKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratkategoris = SuratKategori::withCount('surat')->get();
        $surats = Surat::latest()->get();

        return view('pages.surats.index', compact('suratkategoris','surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suratkategoris = SuratKategori::all();
        return view('pages.surats.create', compact('suratkategoris'));;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $surat = new Surat();
        $surat->id = (string) Str::uuid();
        $surat->tanggal = $request->tanggal;
        $surat->nomor = $request->nomor;
        $surat->lampiran = $request->lampiran;
        $surat->perihal = $request->perihal;
        $surat->pengirim = $request->pengirim;
        $surat->keterangan = $request->keterangan;
        $surat->surat_kategori_id = $request->surat_kategori_id;
        $surat->pdf_file = $request->pdf_file;

        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public', $filename);
            $input['pdf_file'] = $filename;
        }

        $surat->save();

        return redirect()->route('surat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surat $surat)
    {
        $suratkategoris = SuratKategori::all();
        return view('pages.surats.edit', compact('suratkategoris','surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surat $surat)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surat $surat)
    {
        $surat->delete();

        return redirect()->route('surat.index');
    }
}
