
<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.head')
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Admin</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng ký thành viên mới</p>
      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <div class="row">
      <div class="col-12">
        <a href="/">Về trang chủ</a>
      </div>
    </div>
      <form action="{{route('get.register.store')}}" method="post">
        @csrf
        {{-- <input type="hidden" class="form-control" placeholder="Họ tên" name="role" value="2"> --}}
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Họ tên" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @if ($errors->first('name'))
        <span class="text-danger">
            {{ $errors->first('name') }}
        </span>
    @endif
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if ($errors->first('email'))
        <span class="text-danger">
            {{ $errors->first('email') }}
        </span>
    @endif
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if ($errors->first('password'))
        <span class="text-danger">
            {{ $errors->first('password') }}
        </span>
    @endif
        <div class="row">
          {{-- <div class="col-8">
            <a href="{{route('admin.login')}}" class="text-center">Tôi đã có tài khoản (Đăng nhập)</a>
          </div> --}}
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
@include('admin.layouts.script')
</body>
</html>
