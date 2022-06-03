
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


       <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    

    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
 <script src="{{ asset('chart.js/chart.js') }}"></script>
    
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    
</head>
<body>
    <div id="app">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> ระบบประเมินพนักงาน </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('main') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Main</span></a>
            </li>
            <hr class="sidebar-divider"></hr>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesz"
                    aria-expanded="true" aria-controls="collapsePagesz">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Report</span>
                </a>
                <div id="collapsePagesz" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('analysis_day') }}">Day</a>
                        <a class="collapse-item" href="{{ route('analysis_month') }}">Month</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider"></hr>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Chart Report</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('chart_day') }}">Day</a>
                        <a class="collapse-item" href="{{ route('chart_month') }}">Month</a>
                        <a class="collapse-item" href="{{ route('chart_avg') }}">Avg</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
      
            @yield('content')

    </div>
    </div>
</body>
</html>
