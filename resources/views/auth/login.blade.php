<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
.login-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  min-height: 100vh;
}

.login-content .logo {
  margin-bottom: 40px;
  font-family: "Niconne";
  color: #fff;
}

.login-content .logo h1 {
  font-size: 52px;
  font-weight: 400;
}
.site-login input[type="checkbox"]:checked+label::before {
  border-color: #7ba428;
  background-color: #7ba428;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}
.login-content .login-box {
  position: relative;
  min-width: 350px;
  min-height: 390px;
  background-color: #fff;
  -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
  box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
  -webkit-perspective: 800px;
  perspective: 800px;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
    border-radius: 20px;
}

.login-content .login-box .login-head {
  margin-top: 0;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #ddd;
  text-align: center;
    color: #6e6e6e;
}

.login-content .login-box label {
  color: #666;
  font-weight: 700;
}

.login-content .login-box .utility {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 1px;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.login-content .login-box .btn-container {
  margin-bottom: 0;
}

.login-content .login-box .login-form, .login-content .login-box .forget-form {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 40px;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.login-content .login-box .forget-form {
  opacity: 0;
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
}

.login-content .login-box.flipped {
  min-height: 300px;
}

.login-content .login-box.flipped .login-form {
  opacity: 0;
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}

.login-content .login-box.flipped .forget-form {
  opacity: 1;
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
}
.login-content .login-box .login-head {
    margin-top: 0;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
    text-align: center;
    color: #6e6e6e;
    font-size: 1.375rem;
}
.login-content .form-control {
    display: block;
    width: 220px;
    padding: 0.375rem 0.75rem;
    /* font-size: 0.875rem; */
    /* line-height: 1.5; */
    color: #495057;
    background-color: #FFF;
    background-clip: padding-box;
    border: 2px solid #ced4da;
    border-radius: 4px;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.material-half-bg .cover {
    background-color: #7e3200;
    height: 50vh;
}
.material-half-bg {
    height: 100vh;
    background-color: #e7e7e7;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
}
.btn-login .btn{
    background: #7d3100;
    color: #fff;
    border: none;
    width: 100px;
    height: 40px;
    cursor: pointer;
}
.login-content .form-control:focus{border: 2px solid #7e3200;}
.login-content .mb-2{margin-bottom: .3rem;display: block;}
@media (max-width: 351px) {
  .login-content .login-box {
    min-width: 100%;
  }
  .login-content .login-box .login-form, .login-content .login-box .forget-form {
    width: 100%;
  }
}
</style>
<body style="overflow:hidden;">
    
    
    <section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <div class="header__logo" style="width: 140px">
                            <img src="/frontend/images/logo.png" style="width: 100%;" alt="">
                        </div>
    </div>
    <div class="login-box">
        <form id="login-form" method="POST" action="{{ route('login') }}" class="form-horizontal login-form" >
      {{csrf_field()}}
         <h4 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Панель управления</h4>
        <div class="form-group field-loginform-username required">
            <label class="col-lg-1 control-label mb-2" for="loginform-username">Email</label>
            <input type="email"  id="loginform-username" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-required="true" >
            @error('email')
            <div class="col-lg-12"><p class="help-block help-block-error ">{{ $message }}</p></div>
            @enderror
        </div>
        <div class="form-group field-loginform-password required">
            <label class="col-lg-1 control-label mb-2" for="loginform-password">Пароль</label>
            <input type="password"  id="loginform-password" class="form-control" name="password" required autocomplete="current-password" aria-required="true">
            @error('password')
            <div class="col-lg-12"><p class="help-block help-block-error "></p></div>

            @enderror
        </div>
        <div class="form-group ">
            <div>
              <input type="checkbox"  value="0" name="remember" {{ old('remember') ? 'checked' : '' }} > 
              <label for="">Запомнить меня</label>
            </div>
            
        </div>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11 btn-login">
                <button type="submit" class="btn btn-green" name="login-button">Вход</button>            </div>
            </div>

        </form>
    </div>
</section>
    
    

</body>
</html>






