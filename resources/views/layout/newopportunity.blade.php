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
                                <h3 class="card-title"> ثبت فرصت جدید</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->


                            <form role="form" action="" method="POST">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شماره محصول</label>
                                        <input name="product_id" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">  تعداد </label>
                                        <input name="number" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">خریدار </label>
                                        <input name="buyer" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">  قیمت واحد</label>
                                        <input name="price" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">  قیمت کل</label>
                                        <input name="prices" type="text" class="form-control" readonly value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> توضیحات</label>
                                        <input name="description" type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> وضعیت</label>
                                        <input name="status" type="text" class="form-control" id="exampleInputPassword1">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                </div>
                            </form>
                        </div>


                        <div class="alert alert-danger">
                            @if($errors->any())
                                <ui>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ui>
                            @endif
                        </div>


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
