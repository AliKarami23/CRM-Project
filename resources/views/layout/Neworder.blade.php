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
                <a href="" class="nav-link">خانه</a>
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
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layout.saidebar')
    <br>
    <br>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 689.2px;">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> کاربران</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نام</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="  نام را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام خانوادگی</label>
                                        <input name="fname" type="text" class="form-control" id="exampleInputPassword1" placeholder="نام خانوادگی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام پدر</label>
                                        <input name="dadname" type="text" class="form-control" id="exampleInputPassword1" placeholder="نام پدر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">آدرس ایمیل</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="ایمیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شماره تماس</label>
                                        <input name="phonenumber" type="number" class="form-control" id="exampleInputPassword1" placeholder="شماره تماس را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کشور</label>
                                        <input name="country" type="text" class="form-control" id="exampleInputPassword1" placeholder="کشور را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شهر</label>
                                        <input name="City" type="text" class="form-control" id="exampleInputPassword1" placeholder="شهر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>آدرس</label>
                                        <textarea name="Address" class="form-control" rows="3" placeholder="آدرس را کامل وارد کنید"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>جنسیت</label>
                                        <select name="gender" class="form-control">
                                            <option>مرد</option>
                                            <option>زن</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کد ملی</label>
                                        <input name="nationalcode" type="number" class="form-control" id="exampleInputPassword1" placeholder="کد ملی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شغل</label>
                                        <input name="job" type="text" class="form-control" id="exampleInputPassword1" placeholder=" شغل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="imageUpload">آپلود عکس</label>
                                        <input name="image" type="text" class="form-control" id="imageUpload" placeholder="لینک عکس مورد نظر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>تحصیلات</label>
                                        <select name="education" class="form-control">
                                            <option>زیر دیپلم</option>
                                            <option>دیپلم</option>
                                            <option>کارشناسی</option>
                                            <option>کارشناسی ارشد</option>
                                            <option>دکترا</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شهر محل تحصیل</label>
                                        <input name="cityofeducation" type="text" class="form-control" id="exampleInputPassword1" placeholder="شهر محل تحصیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رمز عبور</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">تکرار رمز عبور</label>
                                        <input name="confrim" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز را تکرار کنید">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                        <!-- Form Element sizes -->

                    </div>
                </div>
            </div>
    </div>
</div>
</section>




<footer class="main-footer">
    <strong>CopyLeft © ۲۰۱۸ <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">

    </div>



    @include('layout.js');

</body>
</html>
