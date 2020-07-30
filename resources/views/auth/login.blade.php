<!DOCTYPE html>
<html>
<head>
  <title>dwdfwdw</title>
</head>
<style type="text/css">
  /*Login form*/
.site-login-wrapp{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
  }
.card-login {
    border: 1px solid #d6dee3;
    padding: 20px;
    background: #fff;
}
.site-login .form-control{
  border-radius: 20px;
}
.site-login .form-control:focus{
  border-color: transparent;
}
.site-login label{
  color: #000!important;
}
.site-login-form{
  background-color: #F5F8FF
}
.site-login .btn-green{
  width: 130px
}
.form-group{
    padding: 10px;
}
/* .site-login input[type="checkbox"] {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.site-login input[type="checkbox"]+label {
  display: inline-flex;
  align-items: center;
  user-select: none;
} */

.site-login input[type="checkbox"]:checked+label::before {
  border-color: #7ba428;
  background-color: #7ba428;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}
</style>
<body>

</body>
</html>
<div class="site-login-form">
    <div class="container">
        <div class="site-login-wrapp">
            <div class="site-login col-sm-6">
                <div class="card-login">
                   <div class="col-lg-12">
                       <h1>Авторизация</h1>

                       <p>Введите ваши данные:</p>
                   </div> 
                   <form id="login-form" method="POST" action="{{ route('login') }}" class="form-horizontal" >
                     @csrf
                    <div class="form-group field-loginform-username required">
                        <label class="col-lg-1 control-label" for="loginform-username">Email</label>
                        <div class="col-lg-12"><input type="email"  id="loginform-username" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-required="true" ></div>
                        @error('email')
                        <div class="col-lg-12"><p class="help-block help-block-error ">{{ $message }}</p></div>
                        @enderror
                    </div>
                    <div class="form-group field-loginform-password required">
                        <label class="col-lg-1 control-label" for="loginform-password">Password</label>
                        <div class="col-lg-12"><input type="password"  id="loginform-password" class="form-control" name="password" required autocomplete="current-password" aria-required="true"></div>
                        @error('password')
                        <div class="col-lg-12"><p class="help-block help-block-error "></p></div>

                        @enderror
                    </div>
                    <div class="form-group ">
                        <div class="col-lg-12">
                          <input type="checkbox"  value="0" name="remember" {{ old('remember') ? 'checked' : '' }} > 
                          <label for="">Remember Me</label>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <button type="submit" class="btn btn-green" name="login-button">Вход</button>            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>

</div>





