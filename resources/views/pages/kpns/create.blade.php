<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
            <li>{{ __('Kenaikan Pangkat') }}</li>
            <li class="active">{{ __('Tambah Agenda') }}</li>
        </ul>
    </x-slot>
    <section class="panel panel-default">
        <header class="panel-heading">
            <span class="h5"><i class="fa fa-pencil-square-o"></i> Masukan Detail Usul Kenaikan Pangkat</span>
        </header>
        <form action="{{ route('kpn.store') }}" method="post">
            @csrf
            <div class="panel-body">
                <div class="form-group pull-in clearfix">
                    <div class="col-sm-6">
                        <label>Periode</label>
                        <select name="kp_periode_id" id="kp_periode_id" class="form-control m-b">
                            <option value="">-- Pilih Periode --</option>
                            @foreach ($kpperiode as $periode)
                                <option value="{{ $periode->id }}">{{ $periode->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Kategori Kenaikan Pangkat</label>
                        <select name="kp_kategori_id" id="kp_kategori_id" class="form-control m-b">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($kpkategori as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group pull-in clearfix">
                    <div class="col-sm-6">
                        <label>Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control m-b">
                    </div>
                    <div class="col-sm-6">
                        <label>NIP</label>
                        <input type="text" id="nip" name="nip" class="form-control" required>
                    </div>

                </div>
                <div class="form-group pull-in clearfix">
                    <div class="col-sm-6">
                        <label>Gol. Ruang</label>
                        <select name="gol_ruang_id" id="gol_ruang_id" class="form-control m-b">
                            <option value="">--Pilih Gol. Ruang --</option>
                            @foreach ($golruang as $gol)
                                <option value="{{ $gol->id }}">{{ $gol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>TMT Kenaikan Pangkat Terakhir</label>
                        <input type="date" id="tmt_terakhir" name="tmt_terakhir" class="form-control m-b"
                            data-date-format="dd-mm-yyyy">
                    </div>
                    <div class="col-xs-8">

                    </div>
                </div>
                <div class="form-group">
                    <label>Unit Kerja</label>
                    <select name="unit_kerja_id" id="unit_kerja_id" class="form-control m-b">
                        <option value="">-- Pilih Unit Kerja --</option>
                        @foreach ($unitkerja as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
                <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
            </footer>
        </form>
    </section>
</x-app-layout>
