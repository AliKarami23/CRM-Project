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
                            <form role="form" action="{{ route('add_product')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">عنوان محصول</label>
                                        <input name="product_name" type="text" class="form-control" id="productname" placeholder="عنوان محصول را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>توضیحات</label>
                                        <textarea name="Description" class="form-control" rows="3" placeholder="توضیحات محصول را وارد کنید"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">دسته بندی</label>
                                        <input name="Category" type="text" class="form-control" id="Category" placeholder="دسته بندی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">قیمت</label>
                                        <input name="Price" type="text" class="form-control" id="Price" placeholder="قیمت را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">موجودی</label>
                                        <input name="inventory" type="number" class="form-control" id="inventory" placeholder="تعداد محصول را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رنگ</label>
                                        <input name="color" type="text" class="form-control" id="color" placeholder="رنگ محصول را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="imageUpload">تصویر محصول</label>
                                        <input name="image" type="text" class="form-control" id="imageUpload" placeholder="لینک تصویر مورد نظر را وارد کنید">
                                    </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ثبت محصول</button>
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
