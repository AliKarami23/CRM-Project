@include('layout.CssAndJs.css');


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
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                        class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layout.FooterAndHeader.saidebar')
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


                            <form role="form" action="{{route('add_opportunity')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">خریدار </label>
                                        <input name="customer_id" type="text" class="form-control"
                                               placeholder="ای دی خریدار را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">دسته بندی</label>
                                        <input name="category" type="text" class="form-control" id="Category"
                                               placeholder="دسته بندی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> محصول</label>
                                        <input name="product_id" type="text" class="form-control"
                                               placeholder="ای دی محصول را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> تعداد </label>
                                        <input name="number" type="number" class="form-control"
                                               placeholder="تعداد را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رنگ</label>
                                        <select name="color" class="form-control">
                                            <option>مشکی</option>
                                            <option> آبی</option>
                                            <option> قرمز</option>
                                            <option> سبز</option>
                                            <option> زرد</option>
                                            <option> صورتی</option>
                                            <option> بنفش</option>
                                            <option> نارنجی</option>
                                            <option> طوسی</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> قیمت واحد</label>
                                        <input name="price" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> قیمت کل</label>
                                        <input name="total_price" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> توضیحات</label>
                                        <textarea name="description" id="description" cols="30" rows="10"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> وضعیت</label>
                                        <select name="status" class="form-control">
                                            <option>در حال پیگیری</option>
                                            <option>در انتظار پرداخت</option>
                                            <option>پرداخت شده</option>
                                            <option>لغو شده</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                </div>
                            </form>
                        </div>


                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ui>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ui>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>


        <footer class="main-footer">
            <strong>CopyLeft © ۲۰۱۸ <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
</div>


@include('layout.CssAndJs.js');

</body>
</html>
