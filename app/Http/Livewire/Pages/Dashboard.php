<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\GolRuang;
use App\Models\KpKategori;
use App\Models\Kpn;
use App\Models\KpPeriode;
use App\Models\Surat;
use App\Models\SuratKategori;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $categories = Category::all();
        $suratkategoris = SuratKategori::withCount('surat')->get();
        $golruangs =GolRuang::all();
        $kpnperiode = KpPeriode::withCount('kpn')->get();
        $kpnkategori = KpKategori::all();
        $surats = Surat::latest()->get();
        $kpns = Kpn::latest()->get();
        return view('pages.dashboard', compact(
            'categories',
            'suratkategoris',
            'golruangs',
            'kpnperiode',
            'kpnkategori',
            'surats',
            'kpns'
        ));
    }
}
