@extends('layout.Register.regist-lay')

@section('content')
<form class="container py-4 h-100 shadow" style="background-color: #ffff; border-radius: 20px" method="post" action="{{ url('do-register') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img class="mb-4" src="{!! url('images/logodinas.png') !!}" alt="logo" width="150" height="100">

    <h1 class="h3 mb-3 fw-normal fw-bold" style="font-size: 16px">DAFTAR</h1>

    @include('layout.Register.massages')

    <div class="form-group form-floating mb-3" style="font-size: 16px">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
        <label for="floatingEmail">Alamat Email</label>
    </div>

    <div class="form-group form-floating mb-3" style="font-size: 16px">
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
        <label for="floatingName">Nama Pengguna</label>
    </div>

    <div class="form-group form-floating mb-3" style="font-size: 16px">
        <input type="password" name="password" class="form-control" />
        <label for="floatingPassword">Kata Sandi</label>
    </div>

    <div class="form-group form-floating mb-3" style="font-size: 16px">
        <input type="password" name="confirm_password" class="form-control" />
        <label for="floatingConfirmPassword">Konfirmasi Kata Sandi</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color: #5e72e3; font-size: 16px">Daftar</button>

    <small class="d-block text-center mt-4" style="font-size: 13px;">Sudah Punya Akun? <a href="/">Login Sekarang! </a></small>
</form>
@endsection