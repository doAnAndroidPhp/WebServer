@extends('layout')
@section('main-content')
<div class="wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Dashboard 2</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard 2</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-2">Tổng số người dùng</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                        data-bgColor="#F9B9B9" value="{{$listNguoiChoi->count()}}"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    
                                    <h2 class="mt-3 pt-1 mb-1"> {{$listNguoiChoi->count()}} </h2>
                                    <p class="text-muted mb-0">Since last week</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Tổng số câu hỏi</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                        data-bgColor="#e8e7f4" value="{{$listCauHoi->Count()}}"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> {{$listCauHoi->Count()}} </h2>
                                    <p class="text-muted mb-0">Since last month</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Số lượt chơi</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                        data-bgColor="#c8ece5" value="{{$listLuotChoi->Count()}}"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> {{$listLuotChoi->Count()}} </h2>
                                    <p class="text-muted mb-0">This week</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Điểm cao nhất</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#ffbd4a"
                                        data-bgColor="#FFE6BA" value="35"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> {{$diemCaoNhat}} </h2>
                                    <p class="text-muted mb-0">Revenue today</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <!-- Portlet card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">Sales Analytics</h4>

                                <div id="cardCollpase1" class="collapse pt-3 show" dir="ltr">
                                    <div id="apex-sales-analytics" class="apex-charts"></div>
                                    <div class="text-center">
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$9.8k</h4>
                                            </div>
                                        </div> <!-- end row -->
                                        
                                    </div>
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">Orders Analytics</h4>

                                <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                                    <div id="apex-order-analytics" class="apex-charts"></div>
                                    <div class="text-center">
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>641</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>234</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>3201</h4>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title">Earning Reports</h4>
                            <p class="text-muted">1 Mar - 31 Mar Showing Data</p>
                            <h2 class="mb-4"><i class="mdi mdi-currency-usd text-primary"></i>25,632.78</h2>

                            <div class="row mb-4">
                                <div class="col-6">
                                    <p class="text-muted mb-1">This Month</p>
                                    <h3 class="mt-0 font-20">$120,254 <small class="badge badge-light-success font-13">+15%</small></h3>
                                </div>

                                <div class="col-6">
                                    <p class="text-muted mb-1">Last Month</p>
                                    <h3 class="mt-0 font-20">$98,741 <small class="badge badge-light-danger font-13">-5%</small></h3>
                                </div>
                            </div>

                            <h5 class="font-16"><i class="mdi mdi-chart-donut text-primary"></i> Weekly Earning Report</h5>

                            <div class="mt-5">
                                <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="80">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                            </div>

                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <div class="col-xl-8">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Transaction History</h4>

                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover table-nowrap mb-0" id="datatable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Card</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Amount</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Imelda J. Stanberry</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/visa.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 3256</span>
                                        </td>
                                        <td>27.03.2018</td>
                                        <td>$345.98</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Francisca S. Lobb</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/master.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 8451</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$1,250</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-4.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">James A. Wert</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/amazon.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2258</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$145</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Dolores J. Pooley</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/american-express.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 6950</span>
                                        </td>
                                        <td>29.03.2018</td>
                                        <td>$2,005.89</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Karen I. McCluskey</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 0021</span>
                                        </td>
                                        <td>31.03.2018</td>
                                        <td>$24.95</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-6.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Kenneth J. Melendez</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/visa.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2840</span>
                                        </td>
                                        <td>27.03.2018</td>
                                        <td>$345.98</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-7.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Sandra M. Nicholas</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/master.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2015</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$1,250</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-8.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Ronald S. Taylor</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/amazon.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 0325</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$145</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-9.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Beatrice L. Iacovelli</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 9058</span>
                                        </td>
                                        <td>29.03.2018</td>
                                        <td>$6,542.32</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-10.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Sylvia H. Parker</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2577</span>
                                        </td>
                                        <td>31.03.2018</td>
                                        <td>$24.95</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive -->

                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
@endsection

@section('css')
    <!-- third party css -->
    <link href="{{asset ('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css') }}" />
    <link href="{{asset ('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css') }}" />
    <link href="{{asset ('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css') }}" />
    <link href="{{asset ('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css') }}" />
    <!-- third party css end -->
@endsection

@section('js')
<!-- third party js -->
   <!-- Vendor js -->
        <script src="{{ asset('assets/jsvendor.min.js') }}"></script>

        <!-- Third Party js-->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- Dashboard init -->
        <script src="{{ asset('assets/jspages/dashboard-2.init.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('assets/jsapp.min.js') }}"></script>
@endsection