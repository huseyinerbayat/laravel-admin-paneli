@extends('layouts.admin.members')
@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Parolamı Unuttum</h1>
                                        <p class="mb-4">Email adresinizi giriniz. Size parolanızı sıfırlama linki göndereceğiz.</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Parolamı Sıfırla
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('admin.register')}}">Kayıt Ol!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('admin.login')}}">Zaten bir hesabım var. Giriş Yap!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection

    