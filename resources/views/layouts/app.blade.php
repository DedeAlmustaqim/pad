<!DOCTYPE html>
<html lang="en">

@include('layouts.partial.header')

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <div class="desktop-toggler">
                    <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>

                <a href="index.html" class="brand-logo">
                    <img src="assets/img/logo.png" class="invert-dark" alt="" height="20">
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <form class="menu-search" method="POST" name="header_search_form">
                    <div class="menu-search-icon"><i class="fa fa-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control" placeholder="Search menu...">
                    </div>
                </form>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
                        <div class="menu-label">3</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-notification">
                        <h6 class="dropdown-header text-body-emphasis mb-1">Notifications</h6>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="fa fa-receipt fa-lg fa-fw text-success"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
                                <div class="time">just now</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">3 new customer account is created</div>
                                <div class="time">2 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <img src="assets/img/icon/android.svg" alt="" width="26">
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Your android application has been approved</div>
                                <div class="time">5 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <a href="#" class="dropdown-notification-item">
                            <div class="dropdown-notification-icon">
                                <img src="assets/img/icon/paypal.svg" alt="" width="26">
                            </div>
                            <div class="dropdown-notification-info">
                                <div class="title">Paypal payment method has been enabled for your store</div>
                                <div class="time">10 minutes ago</div>
                            </div>
                            <div class="dropdown-notification-arrow">
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </a>
                        <div class="p-2 text-center mb-n1">
                            <a href="#" class="text-body-emphasis text-opacity-50 text-decoration-none">See
                                all</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="assets/img/user/user.jpg" alt="" class="ms-100 mh-100 rounded-circle">
                        </div>
                        <div class="menu-text">johnsmith@studio.com</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3">
                        <a class="dropdown-item d-flex align-items-center" href="profile.html">Edit Profile <i
                                class="fa fa-user-circle fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="email_inbox.html">Inbox <i
                                class="fa fa-envelope fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="calendar.html">Calendar <i
                                class="fa fa-calendar-alt fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <a class="dropdown-item d-flex align-items-center" href="settings.html">Setting <i
                                class="fa fa-wrench fa-fw ms-auto text-body text-opacity-50"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="page_login.html">Log Out <i
                                class="fa fa-toggle-off fa-fw ms-auto text-body text-opacity-50"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->
        </div>
        <!-- END #header -->

        @include('layouts.partial.sidebar')

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            @yield('content')
        </div>
        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
        <!-- BEGIN theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i
                    class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Red" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Pink" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="theme-orange"
                            data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                            data-bs-container="body" data-bs-title="Orange" data-original-title=""
                            title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow"
                            data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                            data-bs-container="body" data-bs-title="Yellow" data-original-title=""
                            title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Lime" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Green" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Teal" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-blue" data-theme=""
                            data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                            data-bs-container="body" data-bs-title="Default" data-original-title=""
                            title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="theme-purple"
                            data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                            data-bs-container="body" data-bs-title="Purple" data-original-title=""
                            title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo"
                            data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                            data-bs-container="body" data-bs-title="Indigo" data-original-title=""
                            title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600"
                            data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                            data-bs-container="body" data-bs-title="Gray" data-original-title=""
                            title="">&nbsp;</a>
                    </li>
                </ul>
                <hr class="mb-0">
                <div class="row mt-10px pt-3px">
                    <div class="col-9 control-label text-body-emphasis fw-bold">
                        <div>Dark Mode <span
                                class="badge bg-theme text-theme-color ms-1 position-relative py-4px px-6px"
                                style="top: -1px">NEW</span></div>
                        <div class="lh-sm fs-13px fw-semibold">
                            <small class="text-body-emphasis opacity-50">
                                Adjust the appearance to reduce glare and give your eyes a break.
                            </small>
                        </div>
                    </div>
                    <div class="col-3 d-flex">
                        <div class="form-check form-switch ms-auto mb-0 mt-2px">
                            <input type="checkbox" class="form-check-input" name="app-theme-dark-mode"
                                id="appThemeDarkMode" value="1">
                            <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END theme-panel -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/dashboard.demo.js') }}"></script>
    <!-- ================== END page-js ================== -->

</body>

</html>
