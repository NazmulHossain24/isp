<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link href="{{asset('public/custom.css')}}" rel="stylesheet" type="text/css">
    @yield('style')
</head>

<body>



<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
                <div class="container">

                    <div class="row mb-10">
                        @yield('back-url')
                    </div>

                    @yield('content')

                    <!-- Basic modal -->
                    @yield('box')
                    <!-- /basic modal -->
                    <!-- Footer -->
                    @include('shared.footer')
                    <!-- /footer -->
                </div>
            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
<!-- Core JS files -->
@yield('script_up')
<script type="text/javascript" src="{{asset('public/assets/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/loaders/blockui.min.js')}}"></script>
<!-- /core JS files -->

<script type="text/javascript" src="{{asset('public/assets/js/plugins/ui/nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/forms/inputs/maxlength.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/plugins/notifications/jgrowl.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/custom.js')}}"></script>

<script type="text/javascript">

    $(function () {
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
            },
            drawCallback: function () {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            },
            preDrawCallback: function() {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
            }
        });


        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type') }}";
            switch(type){
                case 'info':
                    $.jGrowl("{{ Session::get('message') }}", {
                        header: 'Info',
                        theme: 'bg-info',
                        life: 1000,
                        position: 'top-center'
                    });
                    break;

                case 'warning':
                    $.jGrowl("{{ Session::get('message') }}", {
                        header: 'Warning',
                        theme: 'bg-warning',
                        life: 1000,
                        position: 'top-center'
                    });
                    break;

                case 'success':
                    $.jGrowl("{{ Session::get('message') }}", {
                        header: 'Success',
                        theme: 'bg-success',
                        life: 1000,
                        position: 'top-center'
                    });
                    break;

                case 'error':
                    $.jGrowl("{{ Session::get('message') }}", {
                        header: 'Error',
                        theme: 'bg-danger',
                        life: 1000,
                        position: 'top-center'
                    });
                    break;
            }
        @endif


    });

</script>

@yield('script')

</body>
</html>