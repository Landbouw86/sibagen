<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
            <li>{{ __('Surat Masuk & Surat Keluar') }}</li>
            <li class="active">{{ __('Dashboard') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Dashboard') }}</h3>
        </div>
    </x-slot>

    <section class="panel panel-default">
        <div class="row m-l-none m-r-none bg-light lter">
            @foreach ($suratkategoris as $suratkategori)
                <div class="col-sm-6 col-md-6 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-file-text fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                        <span class="h3 block m-t-xs"><strong>{{ $suratkategori->surat_count }}</strong></span>
                        <small class="text-muted text-uc">{{ $suratkategori->name }}</small>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="panel panel-default bg-light lter">
        <header class="panel-heading">
            DataTables
            <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom"
                data-title="ajax to load the data."></i>
        </header>
        <div class="panel-body">
            <table id="example" class="display cell-border stripe" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Lampiran</th>
                        <th>Perihal</th>
                        <th>Pengirim</th>
                        <th>Keterangan</th>
                        {{-- <th align="text-center"></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surats as $surat)
                        <tr>
                            <td>{{ $surat->nomor }}</td>
                            <td>{{ $surat->lampiran }}</td>
                            <td>{{ $surat->perihal }}</td>
                            <td>{{ $surat->pengirim }}</td>
                            <td>{{ $surat->keterangan }}</td>
                            {{-- <td class="btn-group">
                                <a href="{{ route('surat.show', $surat) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('surat.edit', $surat) }}" class="btn btn-warning btn-xs"><i
                                        class="fa fa-pencil-square-o"></i></a>
                                <form action="{{ route('surat.destroy', $surat) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs"><i
                                            class="fa fa-trash-o"></i></button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>
