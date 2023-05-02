<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
            <li>{{ __('Surat Masuk & Surat Keluar') }}</li>
            <li class="active">{{ __('Lihat Agenda') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Lihat Agenda') }}</h3>
            <small>Welcome back, {{ Auth::user()->name }}</small>
        </div>
    </x-slot>
</x-app-layout>
