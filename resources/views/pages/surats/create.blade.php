<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
            <li>{{ __('Surat Masuk & Surat Keluar') }}</li>
            <li class="active">{{ __('Tambah Agenda') }}</li>
        </ul>
        <div class="m-b-md">
            <h4 class="m-b-none">{{ __('Tambah Agenda') }}</h4>
        </div>
    </x-slot>
    <section class="panel panel-default">
        <header class="panel-heading">
            <span class="h5">Masukan Detail Surat</span>
        </header>
        <form action="{{ route('surat.store') }}" method="post">
            @csrf
            <div class="panel-body">
                <div class="form-group pull-in clearfix">
                    <div class="col-sm-4">
                        <label>Kategori Surat</label>
                        <select name="surat_kategori_id" id="surat_kategori_id" class="form-control m-b">
                            @foreach ($suratkategoris as $skt)
                                <option value="{{ $skt->id }}">{{ $skt->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label>Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control m-b"
                            data-date-format="dd-mm-yyyy">
                        {{-- <input class="datepicker-input" id="tanggal" name="tanggal" size="16" type="date"
                            data-date-format="dd-mm-yyyy"> --}}
                    </div>
                    <div class="col-sm-4">
                        <label>Nomor</label>
                        <input type="text" id="nomor" name="nomor" class="form-control" required>
                    </div>
                    <div class="col-sm-2">
                        <label>Lampiran</label>
                        <input type="text" id="lampiran" name="lampiran" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" id="pengirim" name="pengirim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Perihal</label>
                    <textarea class="form-control" id="perihal" name="perihal" rows="3" data-minwords="6" required></textarea>
                    <span class="help-block m-b-none">Masukan Perihal Surat.</span>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pdf_file">PDF File</label>
                    <input type="file" class="form-control-file mt-2" id="pdf_file" name="pdf_file">
                </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
                <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
            </footer>
        </form>
    </section>
</x-app-layout>
