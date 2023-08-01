@extends('layouts.admin.members')
@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Kayıt Ol!</h1>
                            </div>
                            <form class="user" action="{{route('admin.register.post')}}" method="POST">
                                @if (session()->has('message'))
                                    <div class="alert alert-{{session()->get('message')['type']}}">
                                        {{session()->get('message')['description']}}
                                    </div>
                                @endif
                                
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Ad">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="surname" value="{{old('surname')}}" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Soyad">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Parola">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="repassword" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Parola Tekrar">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Hesabımı Oluştur
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Google ile giriş yap
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Facebook ile giriş yap
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{route('admin.forgetpassword')}}">Parolamı Unuttum</a>
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
@endsection