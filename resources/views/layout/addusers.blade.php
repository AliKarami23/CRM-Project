@include('layout.css');

<body class="sidebar-mini sidebar-open" style="height: auto;">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom navbar-dark bg-success">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="panel.blade.php" class="nav-link">خانه</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">تماس</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-comments-o"></i>
                    <span class="badge badge-danger navbar-badge">۳</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    حسام موسوی
                                    <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                                </h3>
                                <p class="text-sm">با من تماس بگیر لطفا...</p>
                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> ۴ ساعت قبل</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    پیمان احمدی
                                    <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                                </h3>
                                <p class="text-sm">من پیامتو دریافت کردم</p>
                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> ۴ ساعت قبل</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    سارا وکیلی
                                    <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                                </h3>
                                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>۴ ساعت قبل</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-warning navbar-badge">۱۵</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                    <span class="dropdown-item dropdown-header">۱۵ نوتیفیکیشن</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope ml-2"></i> ۴ پیام جدید
                        <span class="float-left text-muted text-sm">۳ دقیقه</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users ml-2"></i> ۸ درخواست دوستی
                        <span class="float-left text-muted text-sm">۱۲ ساعت</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-file ml-2"></i> ۳ گزارش جدید
                        <span class="float-left text-muted text-sm">۲ روز</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-dark-info" style="min-height: 689.2px;">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link bg-success">
            <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&amp;d=mm&amp;r=g" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">حسام موسوی</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    کاربران
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="addusers.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>کاربر جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="users.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست کاربران </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="connusers.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ورود کاربر </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    محصولات
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>محصولات جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست محصولات</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    سفارشات
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>سفارشات جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست سفارشات </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    فاکتورها
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>فاکتور جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست فاکتورها </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    فرصت های فروش
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ثبت فرصت جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست فرصت ها </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    پروفایل
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>. ویرایش پروفایل </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>تغییر رمز عبور </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> تغییر عکس پروفایل  </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>خروج </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                </nav>

                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 689.2px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>فرم‌های پیشرفته</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">فرم‌های پیشرفته</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">کتابخانه Select۲</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>معمولی</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">مازندران</option>
                                        <option>شیراز</option>
                                        <option>گلستان</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-umo4-container"><span class="select2-selection__rendered" id="select2-umo4-container" title="مازندران">مازندران</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>غیرفعال</label>
                                    <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">مازندران</option>
                                        <option>شیراز</option>
                                        <option>گلستان</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-53uf-container"><span class="select2-selection__rendered" id="select2-53uf-container" title="مازندران">مازندران</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>چند انتخابی</label>
                                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="یک استان انتخاب کنید" style="width: 100%;text-align: right" tabindex="-1" aria-hidden="true">
                                        <option>مازندران</option>
                                        <option>شیراز</option>
                                        <option>گلستان</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" placeholder="یک استان انتخاب کنید" style="width: 562.8px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>نتیجه غیرفعال</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">مازندران</option>
                                        <option>شیراز</option>
                                        <option disabled="disabled">گلستان (غیرفعال)</option>
                                        <option>اردبیل</option>
                                        <option>خوزستان</option>
                                        <option>سیستان و بلوچستان</option>
                                        <option>مشهد</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-zudq-container"><span class="select2-selection__rendered" id="select2-zudq-container" title="مازندران">مازندران</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        برای کسب اطلاعات بیشتر و استفاده از راهنمای این کتابخانه به <a href="https://select2.github.io/">مستندات</a> مراجعه کنید
                    </div>
                </div>
                <!-- /.card -->

                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">قالب آماده ورودی</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>قالب تاریخ :</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control ltr" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- Date mm/dd/yyyy -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control ltr" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>قالب شماره تلفن:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control ltr" data-inputmask="&quot;mask&quot;: &quot;99-9999-9999&quot;" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>قالب شماره همراه:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- IP mask -->
                                <div class="form-group">
                                    <label>قالب آی پی:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">رنگ و زمان</h3>
                            </div>
                            <div class="card-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>انتخاب رنگ :</label>
                                    <input type="text" class="form-control my-colorpicker1 colorpicker-element">
                                </div>
                                <!-- /.form group -->

                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>انتخاب رنگ با دکمه :</label>

                                    <div class="input-group my-colorpicker2 colorpicker-element">
                                        <input type="text" class="form-control">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-square"></i></span>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- time Picker -->
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>انتخاب زمان :</label>

                                        <div class="input-group">
                                            <input type="text" class="form-control timepicker">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">انتخاب تاریخ </h3>
                            </div>
                            <div class="card-body">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>انتخاب تاریخ:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </span>
                                        </div>
                                        <input class="normal-example form-control pwt-datepicker-input-element">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <p>استفاده از کتابخانه باباخانی، برای تغییرات <a href="http://babakhani.github.io/PersianWebToolkit/doc/datepicker/">مستندات این کتابخانه</a> را مشاهده کنید </p>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- iCheck -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">iCheck - چک‌باکس و رادیو</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->

                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <div class="icheckbox_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-blue disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="minimal" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        نمونه چک باکس
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <div class="iradio_minimal-blue checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-blue disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="r1" class="minimal" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        نمونه رادیو
                                    </label>
                                </div>

                                <!-- Minimal red style -->

                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <div class="icheckbox_minimal-red checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="minimal-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_minimal-red disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="minimal-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        قالب قرمز چک باکس
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <div class="iradio_minimal-red checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r2" class="minimal-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r2" class="minimal-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="iradio_minimal-red disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="r2" class="minimal-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        قالب قرمز رادیو
                                    </label>
                                </div>

                                <!-- Minimal red style -->

                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="icheckbox_flat-green disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="flat-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        قالب فلت سبز چک باکس
                                    </label>
                                </div>

                                <!-- radio -->
                                <div class="form-group">
                                    <label>
                                        <div class="iradio_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r3" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </label>
                                    <label>
                                        <div class="iradio_flat-green disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="radio" name="r3" class="flat-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        قالب فلت سبز رادیو
                                    </label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                و چندین رنگ و مدل دیگر <a href="http://fronteed.com/iCheck/">مستندات کتاب خانه</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>CopyLeft © ۲۰۱۸ <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3"><h5>تنظیمات قالب</h5><hr class="mb-2"><h6>رنگ‌های نوار ناوبری</h6><div class="d-flex"><div class="d-flex flex-wrap mb-3"><div class="bg-primary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-white elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-gray-light elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div></div></div><div class="mb-4"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>مرز نوار ناوبری</span></div><h6>نوار تیره</h6><div class="d-flex"></div><div class="d-flex flex-wrap mb-3"><div class="bg-primary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div></div><h6>نوار روشن</h6><div class="d-flex"></div><div class="d-flex flex-wrap mb-3"><div class="bg-primary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div></div><h6>رنگ برند لوگو</h6><div class="d-flex"></div><div class="d-flex flex-wrap mb-3"><div class="bg-primary elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-info elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-success elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-danger elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-warning elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-white elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><div class="bg-gray-light elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div><a href="javascript:void(0)">پاک کردن</a></div></div></aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- Persian Data Picker -->
<script src="../../dist/js/persian-date.min.js"></script>
<script src="../../dist/js/persian-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()


        $('.normal-example').persianDatepicker();




    })
</script>


<div class="colorpicker dropdown-menu colorpicker-hidden"><div class="colorpicker-saturation" style="background-color: rgb(255, 0, 0);"><i style="top: 100px; left: 0px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 100px;"></i></div><div class="colorpicker-alpha" style="background-color: rgb(0, 0, 0);"><i style="top: 0px;"></i></div><div class="colorpicker-color" style="background-color: rgb(0, 0, 0);"><div style="background-color: rgb(0, 0, 0);"></div></div></div><div class="colorpicker dropdown-menu colorpicker-hidden"><div class="colorpicker-saturation" style="background-color: rgb(255, 0, 0);"><i style="top: 100px; left: 0px;"><b></b></i></div><div class="colorpicker-hue"><i style="top: 100px;"></i></div><div class="colorpicker-alpha" style="background-color: rgb(0, 0, 0);"><i style="top: 0px;"></i></div><div class="colorpicker-color" style="background-color: rgb(0, 0, 0);"><div style="background-color: rgb(0, 0, 0);"></div></div></div><div id="persianDateInstance-655" class="datepicker-container pwt-hide" style="left: 35.5px; top: 590.35px;"><div id="plotId" class="datepicker-plot-area  datepicker-state-no-meridian   datepicker-persian">
        <div data-navigator="" class="datepicker-navigator">
            <div class="pwt-btn pwt-btn-next">&lt;</div>
            <div class="pwt-btn pwt-btn-switch">۱۴۰۲ مرداد</div>
            <div class="pwt-btn pwt-btn-prev">&gt;</div>
        </div>
        <div class="datepicker-grid-view">
            <div class="datepicker-day-view">
                <div class="month-grid-box">
                    <div class="header">
                        <div class="title"></div>
                        <div class="header-row">
                            <div class="header-row-cell">ش</div>
                            <div class="header-row-cell">ی</div>
                            <div class="header-row-cell">د</div>
                            <div class="header-row-cell">س</div>
                            <div class="header-row-cell">چ</div>
                            <div class="header-row-cell">پ</div>
                            <div class="header-row-cell">ج</div>
                        </div>
                    </div>
                    <table cellspacing="0" class="table-days">
                        <tbody>

                        <tr>
                            <td data-date="1402,4,31" data-unix="1690009200000">
                                <span class="other-month">۳۱</span>
                            </td>

                            <td data-date="1402,5,1" data-unix="1690100550627">
                                <span class="">۱</span>
                            </td>

                            <td data-date="1402,5,2" data-unix="1690186950627">
                                <span class="">۲</span>
                            </td>

                            <td data-date="1402,5,3" data-unix="1690273350627">
                                <span class="">۳</span>
                            </td>

                            <td data-date="1402,5,4" data-unix="1690359750627">
                                <span class="">۴</span>
                            </td>

                            <td data-date="1402,5,5" data-unix="1690446150627">
                                <span class="">۵</span>
                            </td>

                            <td data-date="1402,5,6" data-unix="1690532550627">
                                <span class="">۶</span>
                            </td>

                        </tr>

                        <tr>
                            <td data-date="1402,5,7" data-unix="1690618950627">
                                <span class="">۷</span>
                            </td>

                            <td data-date="1402,5,8" data-unix="1690705350627">
                                <span class="">۸</span>
                            </td>

                            <td data-date="1402,5,9" data-unix="1690791750627" class="selected today">
                                <span class="">۹</span>
                            </td>

                            <td data-date="1402,5,10" data-unix="1690878150627">
                                <span class="">۱۰</span>
                            </td>

                            <td data-date="1402,5,11" data-unix="1690964550627">
                                <span class="">۱۱</span>
                            </td>

                            <td data-date="1402,5,12" data-unix="1691050950627">
                                <span class="">۱۲</span>
                            </td>

                            <td data-date="1402,5,13" data-unix="1691137350627">
                                <span class="">۱۳</span>
                            </td>

                        </tr>

                        <tr>
                            <td data-date="1402,5,14" data-unix="1691223750627">
                                <span class="">۱۴</span>
                            </td>

                            <td data-date="1402,5,15" data-unix="1691310150627">
                                <span class="">۱۵</span>
                            </td>

                            <td data-date="1402,5,16" data-unix="1691396550627">
                                <span class="">۱۶</span>
                            </td>

                            <td data-date="1402,5,17" data-unix="1691482950627">
                                <span class="">۱۷</span>
                            </td>

                            <td data-date="1402,5,18" data-unix="1691569350627">
                                <span class="">۱۸</span>
                            </td>

                            <td data-date="1402,5,19" data-unix="1691655750627">
                                <span class="">۱۹</span>
                            </td>

                            <td data-date="1402,5,20" data-unix="1691742150627">
                                <span class="">۲۰</span>
                            </td>

                        </tr>

                        <tr>
                            <td data-date="1402,5,21" data-unix="1691828550627">
                                <span class="">۲۱</span>
                            </td>

                            <td data-date="1402,5,22" data-unix="1691914950627">
                                <span class="">۲۲</span>
                            </td>

                            <td data-date="1402,5,23" data-unix="1692001350627">
                                <span class="">۲۳</span>
                            </td>

                            <td data-date="1402,5,24" data-unix="1692087750627">
                                <span class="">۲۴</span>
                            </td>

                            <td data-date="1402,5,25" data-unix="1692174150627">
                                <span class="">۲۵</span>
                            </td>

                            <td data-date="1402,5,26" data-unix="1692260550627">
                                <span class="">۲۶</span>
                            </td>

                            <td data-date="1402,5,27" data-unix="1692346950627">
                                <span class="">۲۷</span>
                            </td>

                        </tr>

                        <tr>
                            <td data-date="1402,5,28" data-unix="1692433350627">
                                <span class="">۲۸</span>
                            </td>

                            <td data-date="1402,5,29" data-unix="1692519750627">
                                <span class="">۲۹</span>
                            </td>

                            <td data-date="1402,5,30" data-unix="1692606150627">
                                <span class="">۳۰</span>
                            </td>

                            <td data-date="1402,5,31" data-unix="1692692550627">
                                <span class="">۳۱</span>
                            </td>

                            <td data-date="1402,6,1" data-unix="1692860399000">
                                <span class="other-month">۱</span>
                            </td>

                            <td data-date="1402,6,2" data-unix="1692946799000">
                                <span class="other-month">۲</span>
                            </td>

                            <td data-date="1402,6,3" data-unix="1693033199000">
                                <span class="other-month">۳</span>
                            </td>

                        </tr>

                        <tr>
                            <td data-date="1402,6,4" data-unix="1693119599000">
                                <span class="other-month">۴</span>
                            </td>

                            <td data-date="1402,6,5" data-unix="1693205999000">
                                <span class="other-month">۵</span>
                            </td>

                            <td data-date="1402,6,6" data-unix="1693292399000">
                                <span class="other-month">۶</span>
                            </td>

                            <td data-date="1402,6,7" data-unix="1693378799000">
                                <span class="other-month">۷</span>
                            </td>

                            <td data-date="1402,6,8" data-unix="1693465199000">
                                <span class="other-month">۸</span>
                            </td>

                            <td data-date="1402,6,9" data-unix="1693551599000">
                                <span class="other-month">۹</span>
                            </td>

                            <td data-date="1402,6,10" data-unix="1693637999000">
                                <span class="other-month">۱۰</span>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>

        <div class="toolbox">
            <div class="pwt-btn-today">امروز</div>
            <div class="pwt-btn-calendar">July</div>
        </div>
    </div>
</div>
</body>

@include('layout.js');
