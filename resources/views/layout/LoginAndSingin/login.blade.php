@include('layout.CssAndJs.css');
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>ورود به پنل</b>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">فرم را کامل کنید و بر روی ورود کلیک کنید</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="fullname" class="form-control" placeholder="نام">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <br>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="ایمیل">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                </div>
                <br>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="رمز عبور">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mt-3 col-6">
                        <button type="submit" class="btn btn-primary btn-block">ورود</button>

                    </div>
                    <div class="col-6">
                        <p class="mt-3 text-center">
                            <a href="{{ route('singin') }}" class="btn btn-success btn-block">ثبت نام نکرده ام</a>
                        </p>
                    </div>
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
            </form>
        </div>
    </div>
</div>

<!-- /.register-box -->
@include('layout.CssAndJs.js');

<!-- jQuery -->
<script src="{{asset('css/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('css/plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html>