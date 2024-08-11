
@extends('layouts.auth')

@section('content')
    <!-- log in section start -->
    <section class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src=" {{ asset('assets/auth/images/inner-page/log-in.png') }} " class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>به فست کارت خوش آمدید</h3>
                            <h4>ورود به حساب کاربری</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4" method="POST" action="{{ route('authenticate') }}">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{old('email')}}" id="email" placeholder="ایمیل خود را وارد کنید">
                                        <label for="email">آدرس ایمیل</label>
                                        @error('email') <span class="is-invalid">{{ $errors->first('email') }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="گذرواژه">
                                        <label for="password">رمز عبور</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox"
                                                   id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">من را به خاطر بسپار</label>
                                        </div>
                                        <a href="forgot.html" class="forgot-password">رمز عبور خود را فراموش کردم</a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100 justify-content-center" type="submit">ورود</button>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>یا</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/" class="btn google-button w-100">
                                        <img src=" {{ asset('assets/auth/images/inner-page/google.png') }} " class="blur-up lazyload"
                                             alt=""> ورود با حساب گوگل
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src=" {{ asset('assets/auth/images/inner-page/facebook.png') }} " class="blur-up lazyload"
                                             alt=""> ورود با حساب فیسبوک
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>حساب کاربری ندارید ؟</h4>
                            <a href="{{ url('register') }}">ثبت نام کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

@endsection
