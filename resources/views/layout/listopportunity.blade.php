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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 689.2px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>فرم‌های عمومی</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> فرصت ها</h3>
                            </div>
                            <table style="width:100%">
                                <tr>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-right: 15px;margin-top: 15px">آی دی فرصت</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px"> آی دی خریدار</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px"> آی دی محصول</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px">تعداد</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px">قیمت کل</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px">وضعیت</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px">حذف</div></th>
                                    <th style="color: red"><div style="margin-bottom: 20px;margin-top: 15px">ویرایش</div></th>
                                </tr>
                                @foreach($oppos as $oppo)
                                    <tr>
                                        <td><div style="margin-right: 15px">{{$oppo->id}}</div></td>
                                        <td><div style="margin-bottom: 15px">{{$oppo->user_id}}</div></td>
                                        <td><div style="margin-bottom: 15px">{{$oppo->product_id}}</div></td>
                                        <td><div style="margin-bottom: 15px">{{$oppo->number}}</div></td>
                                        <td><div style="margin-bottom: 15px">{{$oppo->total_price}}</div></td>
                                        <td><div style="margin-bottom: 15px">{{$oppo->status}}</div></td>
                                        <td>
                                            <form action="/panel/delete/oppo/{{$oppo->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-warning">حذف</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/panel/edit/oppo/{{$oppo->id}}" method="get">
                                                <button class="btn btn-outline-success">ویرایش</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
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
