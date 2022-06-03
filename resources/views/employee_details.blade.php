@extends('layouts.master')

@section('content')

<body id="page-top">

    
 

        

        
        <div id="content-wrapper" class="d-flex flex-column">

            
            <div id="content">

                
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                   
                    
                    <ul class="navbar-nav ml-auto">

                        

                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username</span>
                                <img class="img-profile rounded-circle"
                                    src="/img/undraw_profile.svg">
                                    
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                

                
                  
                  <div class="container-fluid">


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">ประวัติพนักงาน</h1>
</div>


    <div class="col-xl-4 col-md-6 mb-4 rounded mx-auto d-block">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-x font-weight-bold text-primary text-uppercase mb-1">
                            รูปประจำตัว</div>
                            <img class="img-profile rounded-circle rounded mx-auto d-block" width="147" height="150"  
                                src="{{ $employees ->img }}">
                        <div class="h5 mb-1 font-weight-bold text-gray-800"></div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-x font-weight-bold text-success text-uppercase mb-2">
                           รหัสพนักงาน </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employees->id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-x font-weight-bold text-warning text-uppercase mb-1">
                            ชื่อพนักงาน</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employees->fullname }}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

   

    <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-x font-weight-bold text-info text-uppercase mb-1">คะแนนประเมินงาน
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $employees->sum_point }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
</div>

</div> 

<div class="row">
    <div class="col-lg-12">
        <a type="button" href="{{ route('report_employees', ['employees_id'=> $employees->id ]) }}" class="btn btn-success btn-lg btn-block">รายละเอียด</a>
    </div>
</div>
</div>


</div>

           
        </div>
    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">กดปุ่ม "Logout" หากคุณต้องการออกจากระบบ </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    
    <script src="/js/sb-admin-2.min.js"></script>

    
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="/js/demo/datatables-demo.js"></script>

</body>
@endsection