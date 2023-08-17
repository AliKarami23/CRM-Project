@include('layout.css')

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
                <a href="#" class="nav-link">خانه</a>
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
        <br>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="d-flex flex-wrap justify-content-center">
                            <form action="{{ route('users') }}" class="d-flex flex-wrap col-md-8 mt-100 mb-200 m-auto" method="GET">
                                <div class="form-group col-md-3">
                                    <label for="name">نام</label>
                                    <input name="name" type="text" class="form-control" placeholder="نام">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fname">نام خانوادگی</label>
                                    <input name="fname" type="text" class="form-control" placeholder="نام خانوادگی">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="orders">سفارش</label>
                                    <select name="orders" class="form-control">
                                        <option value="has">دارد</option>
                                        <option value="does_not_have">ندارد</option>
                                        <option value="all">همه</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="factors">فاکتور</label>
                                    <select name="factors" class="form-control">
                                        <option>دارد</option>
                                        <option>ندارد</option>
                                        <option>همه</option>
                                    </select>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-primary mx-2">اعمال فیلتر</button>
                                    <button type="reset" class="btn btn-secondary mx-2">حذف فیلتر</button>
                                </div>
                            </form>
                        </div>
                        <br>
                        <br>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">شماره</th>
                                <th scope="col">نام</th>
                                <th scope="col">نام خانوادگی</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">شماره موبایل</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phonenumber }}</td>
                                    <td>
                                        <a href="{{ route('deleteduser', ['id' => $user->id]) }}" class="btn btn-danger" onclick="confirm('مطمئن هستید؟')">حذف</a>
                                        <a href="{{ route('edituser', ['id' => $user->id]) }}" class="btn btn-primary">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-container d-flex justify-content-center mt-4">
                            {{ $users->links() }}
                        </div>
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
<aside class="control-sidebar control-sidebar-dark"></aside>

@include('layout.js')



