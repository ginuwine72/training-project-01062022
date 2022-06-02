@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <div class="container">
                            
                            <h1 class="h3 mb-4 mt-4">ประเมินคุณ, {{ $employee->fullname }} <small>ตำแหน่ง: {{ $employee->dep }}</small></h1>
                            <hr>
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                    {{ Session::get('success') }}
                            </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                            </div>
                            @endif
                            <form method="post" action="{{ route('savereport') }}">
                            @csrf
                            <input type="hidden" value="{{ $employee->id }}" name="employee_id" id="employee_id">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">1. ขาด ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_lose" id="r_lose">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    ใช่
                                                </label>
                                              </div>
                                              <div class="form-check"> 
                                                <input class="form-check-input" type="radio" value="1" name="r_lose" id="r_lose" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่ใช่
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">3. สาย ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_late" id="r_late">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  ใช่
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="r_late" id="r_late" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่ใช่
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">2. ลา ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_bye" id="r_bye">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  ใช่
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="r_bye" id="r_bye" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่ใช่
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">4. ส่งงานตรง ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="r_work" id="r_work" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  ใช่
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_work" id="r_work" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่ใช่
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">5. การแต่งกาย ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="r_dress" id="r_dress" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    ดี
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_dress" id="r_dress" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ปรับปรุง
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">7. เข้าประชุม ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="r_meeting" id="r_meeting" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  เข้า
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_meeting" id="r_meeting" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่เข้า
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">6. ความสะอาดโต๊ะทำงาน ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="r_clean" id="r_clean" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  ดี
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" name="r_clean" id="r_clean" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ปรับปรุง
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">8. การมีส่วนร่วม ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="r_partic" value="1" id="r_partic" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  ใช่
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="r_partic" value="0" id="r_partic" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่ใช่
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">9. ประสิทธิภาพการทำงาน ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="r_performance" value="1" id="r_performance" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    ดี
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="r_performance" value="0" id="r_performance" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ปรับปรุง
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">10. OT ?</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="r_ot" value="1" id="r_ot">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  ใช่
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="r_ot" value="0" id="r_ot" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  ไม่ใช่
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mb-3" type="submit">บันทึกประเมิน</button>
                            </div>
                        </form>

                        </div>   
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
@endsection
