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
                                <h3 class="card-title">اطلاعات خود را اصلاح بکنید</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('edited_customer',['id' => $customers->id])}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نام</label>
                                        <input name="name" type="text" class="form-control" value="{{$customers->name}}" placeholder="  نام را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام خانوادگی</label>
                                        <input name="fname" type="text" class="form-control" value="{{$customers->fname}}" placeholder="نام خانوادگی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام پدر</label>
                                        <input name="dadname" type="text" class="form-control" value="{{$customers->dadname}}" placeholder="نام پدر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">آدرس ایمیل</label>
                                        <input name="email" type="email" class="form-control" value="{{$customers->email}}" placeholder="ایمیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شماره تماس</label>
                                        <input name="phonenumber" type="number" class="form-control" value="{{$customers->phonenumber}}" placeholder="شماره تماس را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کشور</label>
                                        <input name="country" type="text" class="form-control" value="{{$customers->country}}" placeholder="کشور را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شهر</label>
                                        <input name="City" type="text" class="form-control" value="{{$customers->City}}" placeholder="شهر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>آدرس</label>
                                        <textarea name="Address" class="form-control" rows="3" placeholder="آدرس را کامل وارد کنید">{{$customers->Address}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>جنسیت</label>
                                        <select name="gender" class="form-control">
                                            <option {{$customers->gender == 'مرد'?'selected':''}}>مرد</option>
                                            <option {{$customers->gender == 'زن'?'selected':''}}>زن</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کد ملی</label>
                                        <input name="nationalcode"  type="number" class="form-control" value="{{$customers->nationalcode}}" placeholder="کد ملی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شغل</label>
                                        <input name="job" type="text" class="form-control" value="{{$customers->job}}" placeholder=" شغل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="imageUpload">آپلود عکس</label>
                                        <input name="image" type="text" class="form-control" value="{{$customers->image}}" placeholder="لینک عکس مورد نظر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>تحصیلات</label>
                                        <select name="education" class="form-control">
                                            <option {{$customers->education == 'زیر دیپلم'?'selected':''}}>زیر دیپلم</option>
                                            <option {{$customers->education == 'دیپلم'?'selected':''}}>دیپلم</option>
                                            <option {{$customers->education == 'کارشناسی'?'selected':''}}>کارشناسی</option>
                                            <option {{$customers->education == 'کارشناسی ارشد'?'selected':''}}>کارشناسی ارشد</option>
                                            <option {{$customers->education == 'دکترا'?'selected':''}}>دکترا</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شهر محل تحصیل</label>
                                        <input name="cityofeducation" type="text" class="form-control" value="{{$customers->cityofeducation}}" placeholder="شهر محل تحصیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رمز عبور</label>
                                        <input name="password" type="password" class="form-control" value="{{$customers->password}}" placeholder="رمز را وارد کنید">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" href="panel">ارسال</button>
                                </div>
                            </form>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>





<footer class="main-footer">
    <strong>CopyLeft © ۲۰۱۸ <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">

    </div>



    @include('layout.js');

</body>
</html>
