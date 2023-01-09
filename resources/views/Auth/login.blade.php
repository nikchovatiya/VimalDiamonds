@extends('FrontEnd\layout')
@section('content')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

  /* Reseting */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    background: #F5F5F5;
    min-height: 100vh;
  }

  .wrapper {
    max-width: 850px;
    background-color: #fff;
    border-radius: 10px;
    position: relative;
    display: flex;
    margin: 50px auto;
    box-shadow: 0 8px 20px 0px #1f1f1f1a;
    overflow: hidden;
  }

  .wrapper .form-left {
    background: #2A2A69;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 20px 40px;
    position: relative;
    width: 100%;
    color: #fff;
  }

  .wrapper h2 {
    font-weight: 700;
    font-size: 25px;
    padding: 5px 0 0;
    margin-bottom: 34px;
    pointer-events: none;
  }

  .wrapper .form-left p {
    font-size: 0.9rem;
    font-weight: 300;
    line-height: 1.5;
    pointer-events: none;
  }

  .wrapper .form-left .text {
    margin: 20px 0 25px;
  }

  .wrapper .form-left p span {
    font-weight: 700;
  }

  .wrapper .form-left input {
    padding: 15px;
    background: #fff;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 180px;
    border: none;
    margin: 15px 0 50px 0px;
    cursor: pointer;
    color: #333;
    font-weight: 700;
    font-size: 0.9rem;
    appearance: unset;
    outline: none;
  }

  .wrapper .form-left input:hover {
    background-color: #f8f8f8;
  }

  .wrapper .form-right {
    padding: 20px 40px;
    position: relative;
    width: 100%;
  }

  .wrapper .form-right h2 {
    color: #2A2A69;
  }

  .wrapper .form-right label {
    font-weight: 600;
    font-size: 15px;
    color: #666;
    display: block;
    margin-bottom: 8px;
  }

  .wrapper .form-right .input-field {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #e5e5e5;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    outline: none;
    color: #333;
  }

  .wrapper .form-right .input-field:focus {
    border: 1px solid #2A2A69;
  }


  .wrapper .option {
    display: block;
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    font-size: 0.95rem;
    font-weight: 900;
    cursor: pointer;
    user-select: none
  }

  .wrapper .option input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0
  }

  .wrapper .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #fff;
    border: 2px solid #ddd;
    border-radius: 2px
  }

  .wrapper .option:hover input~.checkmark {
    background-color: #2A2A69
  }

  .wrapper .option input:checked~.checkmark {
    border: 2px solid #e5e5e5;
    background-color: #fff;
    transition: 300ms ease-in-out all
  }

  .wrapper .checkmark:after {
    content: "\2713";
    position: absolute;
    display: none;
    color: #2A2A69;
    font-size: 1rem;
  }

  .wrapper .option input:checked~.checkmark:after {
    display: block
  }

  .wrapper .option .checkmark:after {
    left: 2px;
    top: -4px;
    width: 5px;
    height: 10px
  }

  .wrapper .register {
    padding: 12px;
    background: #2A2A69;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 130px;
    border: none;
    margin: 6px 0 50px 0px;
    cursor: pointer;
    color: #fff;
    font-weight: 700;
    font-size: 15px;
  }

  .wrapper .register:hover {
    background-color: #1589FF;
  }

  .wrapper a {
    text-decoration: none;
  }

  @media (max-width: 860.5px) {
    .wrapper {
      margin: 50px 5px;
    }
  }

  @media (max-width: 767.5px) {
    .wrapper {
      flex-direction: column;
      margin: 30px 20px;
    }

    .wrapper .form-left {
      border-bottom-left-radius: 0px;
    }
  }

  @media (max-width: 575px) {

    .wrapper {
      margin: 30px 15px;
    }

    .wrapper .form-left {
      padding: 25px;
    }

    .wrapper .form-right {
      padding: 25px;
    }
  }
</style>
<div class="wrapper">
  <div class="form-left">
    <h2 class="text-uppercase" style="color: #ddd;">{{$data->companyname}}</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.
    </p>
    <p class="text">
      <span>Sub Head:</span>
      Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.
    </p>
    <div class="form-field">
      <input type="button" class="account" id="register" value="Register Here">
    </div>
  </div>
  <form class="form-right" method="post" enctype="multipart/form-data" action="/login">
    @csrf
    @if ($message=Session::get('success'))
    <div class="alert alert-info">
      {{$message}}
    </div>
    @endif
    @if ($message=Session::get('error'))
    <div class="alert alert-danger">
      {{$message}}
    </div>
    @endif
    <h2 class="text-uppercase">Login</h2>

    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="input-field" name="email" value="{{old('email')}}">
      @if($errors->has('email'))
      <span class="text-danger">{{$errors->First('email')}}</span>
      @endif
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="input-field" name="password">
      @if($errors->has('password'))
      <span class="text-danger">{{$errors->First('password')}}</span>
      @endif
    </div>
    <div class="form-field">
      <input type="submit" value="Login" class="register" name="Login">
    </div>
  </form>
</div>
<script type="text/javascript">
  document.getElementById("register").onclick = function() {
    location.href = "{{url('/register')}}";
  };
</script>
@stop