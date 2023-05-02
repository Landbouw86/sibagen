<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Scripts extends Component
{
    public function render()
    {
        return <<<'blade'
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/js/select2/select2.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/js/select2/theme.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/js/fuelux/fuelux.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/js/datepicker/datepicker.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/js/slider/slider.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css" />
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
            <script src="{{ asset('assets/js/app.js') }}"></script>
            <script src="{{ asset('assets/js/app.plugin.js') }}"></script>
            <script src="{{ asset('assets/js/slimscroll/jquery.slimscroll.min.js') }}"></script>
            <script src="{{ asset('assets/js/fuelux/fuelux.js') }}"></script>
            <script src="{{ asset('assets/js/datepicker/bootstrap-datepicker.js') }}"></script>
            <script src="{{ asset('assets/js/slider/bootstrap-slider.js') }}"></script>
            <script src="{{ asset('assets/js/file-input/bootstrap-filestyle.min.js') }}"></script>
            <script src="{{ asset('assets/js/libs/moment.min.js') }}"></script>
            <script src="{{ asset('assets/js/combodate/combodate.js') }}"></script>
            <script src="{{ asset('assets/js/select2/select2.min.js') }}"></script>
            <script src="{{ asset('assets/js/wysiwyg/jquery.hotkeys.js') }}"></script>
            <script src="{{ asset('assets/js/wysiwyg/bootstrap-wysiwyg.js') }}"></script>
            <script src="{{ asset('assets/js/markdown/epiceditor.min.js') }}"></script>
            @vite(['resources/js/app.js'])
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        blade;
    }
}
