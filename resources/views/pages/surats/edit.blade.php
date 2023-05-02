<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
            <li>{{ __('Surat Masuk & Surat Keluar') }}</li>
            <li class="active">{{ __('Edit Agenda') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Edit Agenda') }}</h3>
            <small>Welcome back, {{ Auth::user()->name }}</small>
        </div>
    </x-slot>
    <section class="panel panel-default">
        <header class="panel-heading">
            <span class="h5">Masukan Detail Surat</span>
        </header>
        <form action="{{ route('surat.update', $surat) }}" method="post">
            @csrf
            @method('PUT')
            <div class="panel-body">
                <div class="form-group pull-in clearfix">
                    <div class="col-sm-4">
                        <label>Kategori Surat</label>
                        <div id="surat_kategori_id" name="surat_kategori_id" class="input-group dropdown combobox">
                            <input class="form-control" name="combobox" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i
                                        class="caret"></i></button>
                                <ul class="dropdown-menu pull-right">
                                    @foreach ($suratkategoris as $skt)
                                        <li data-value="{{ $skt->id }}"><a href="#">{{ $skt->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label>Tanggal</label>
                        <input class="datepicker-input form-control" id="tanggal" name="tanggal" size="16"
                            type="date" data-date-format="dd-mm-yyyy">
                    </div>
                    <div class="col-sm-4">
                        <label>Nomor</label>
                        <input type="text" id="nomor" name="nomor" class="form-control"
                            value="{{ $surat->nomor }}">
                    </div>
                    <div class="col-sm-2">
                        <label>Lampiran</label>
                        <input type="text" id="lampiran" name="lampiran" class="form-control"
                            value="{{ $surat->lampiran }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" id="pengirim" name="pengirim" class="form-control"
                        value="{{ $surat->pengirim }}">
                </div>
                <div class="form-group">
                    <label>Perihal</label>
                    <textarea class="form-control" id="perihal" name="perihal" rows="3" data-minwords="6" required>{{ $surat->perihal }}</textarea>
                    <span class="help-block m-b-none">Masukan Perihal Surat.</span>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control"
                        value="{{ $surat->keterangan }}">
                </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
                <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
            </footer>
        </form>
    </section>
</x-app-layout>
