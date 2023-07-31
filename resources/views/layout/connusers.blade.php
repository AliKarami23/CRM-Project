
<style>
    .myform{
        width: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        margin-top: 100px;
        margin-right: 600px;
    }
    .formmydiv{
        width: 450px;
    }
</style>
<body class="hold-transition sidebar-mini">
@include('layout.header');
<div class="myform">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ورود کاربر</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="formmydiv">
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">رمز</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="پسورد را وارد کنید">
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
    </div>
</div>
@include('layout.footer');

