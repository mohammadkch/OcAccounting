
@extends('layouts.auth')

@section('content')

    <!-- suign up section start -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('assets/auth/images/inner-page/sign-up.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>به فست کارت خوش آمدید</h3>
                            <h4>ایجاد حساب کاربری</h4>
                        </div>

                        <div class="input-box">
                            <form method="post" action="{{ route('register.store') }}" class="row g-4">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" placeholder="نام و نام خانوادگی">
                                        <label for="fullname">نام و نام خانوادگی</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="آدرس ایمیل خود را وارد کنید">
                                        <label for="email">ایمیل</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" name="password" class="form-control @error('name') is-invalid @enderror" id="password"
                                               placeholder="گذرواژه">
                                        <label for="password">گذرواژه</label>

                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                               placeholder="تکرار گذرواژه">
                                        <label for="password_confirmation">تکرار گذرواژه</label>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated @error('accept_terms') is_invalid @enderror check-box" type="checkbox" value="1"
                                                   name="accept_terms" id="accept_terms">
                                            <label class="form-check-label @error('accept_terms') is_invalid @enderror" for="accept_terms">
                                                <span>شرایط</span> و <span>قوانین</span> را میپذیرم.</label>
                                            @if ($errors->has('accept_terms'))
                                                <span class="text-danger">{{ $errors->first('accept_terms') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit">ثبت نام</button>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>یا</h6>
                        </div>

                        {{--
                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                       class="btn google-button w-100">
                                        <img src="{{ asset('assets/auth/images/inner-page/google.png') }}" class="blur-up lazyload"
                                             alt="">
                                        ثبت نام با گوگل
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src="{{ asset('assets/auth/images/inner-page/facebook.png') }}" class="blur-up lazyload"
                                             alt=""> ثبت نام با فیسبوک
                                    </a>
                                </li>
                            </ul>
                        </div>
--}}
                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>حساب کاربری دارید ؟</h4>
                            <a href="{{ url('login') }}">وارد شوید</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
            </div>
        </div>
    </section>
    <!-- suign up section end -->
@endsection
