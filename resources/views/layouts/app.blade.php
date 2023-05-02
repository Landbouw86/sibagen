<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="app">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @livewire('component.scripts')
    @livewireStyles
</head>

<body>
    <section class="vbox">
        @include('layouts.header')
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-dark lter aside-md hidden-print" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                                data-size="5px" data-color="#333333">

                                <!-- nav -->
                                @include('layouts.navigation')
                                <!-- / nav -->
                            </div>
                        </section>

                        <footer class="footer lt hidden-xs b-t b-dark">
                            <a href="#nav" data-toggle="class:nav-xs"
                                class="pull-right btn btn-sm btn-dark btn-icon">
                                <i class="fa fa-angle-left text"></i>
                                <i class="fa fa-angle-right text-active"></i>
                            </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="vbox">
                        <section class="scrollable padder">
                            @if (isset($header))
                                {{ $header }}
                            @endif
                            {{ $slot }}
                        </section>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen"
                        data-target="#nav"></a>
                </section>
            </section>
        </section>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

        <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

        <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                FilePond.registerPlugin(FilePondPluginFileValidateType);
                FilePond.setOptions({
                    server: {
                        url: '/filepond/api',
                        process: {
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            onload: (response) => {
                                input.value = response;
                                console.log(response);
                            },
                        }
                    }
                });
                const input = document.querySelector('input[type="file"]');
                const pond = FilePond.create(input);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#dashboardsurat').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o"></i>',
                            titleAttr: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o"></i>',
                            titleAttr: 'Excel'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o"></i>',
                            titleAttr: 'CSV'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o"></i>',
                            titleAttr: 'PDF'
                        }
                    ]
                });
                $('#surat').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o"></i>',
                            titleAttr: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o"></i>',
                            titleAttr: 'Excel'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o"></i>',
                            titleAttr: 'CSV'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o"></i>',
                            titleAttr: 'PDF'
                        }
                    ]
                });
                $('#kpns').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o"></i>',
                            titleAttr: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o"></i>',
                            titleAttr: 'Excel'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o"></i>',
                            titleAttr: 'CSV'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o"></i>',
                            titleAttr: 'PDF'
                        }
                    ]
                });
            });
        </script>
        <!-- Load FilePond JavaScript -->
        <script src="{{ asset('js/filepond.js') }}"></script>

        <!-- Load FilePond CSS -->
        <link href="{{ asset('css/filepond.css') }}" rel="stylesheet">

        <!-- Call FilePond on input element -->
        <script>
            const inputElement = document.querySelector('input[type="pdf_file"]');
            const pond = FilePond.create(inputElement);
        </script>
        @livewireScripts
</body>

</html>
