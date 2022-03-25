@extends('layouts/layoutHome')
@section('content')
{{--    <section class="featured-product section-padding">--}}
{{--        <div class="container">--}}

{{--    <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class=" my-4">--}}
{{--                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">--}}
{{--                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">--}}
{{--                                <h6 class="text-white text-capitalize ps-3">create admin</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body px-0 pb-2">--}}
{{--                            <div class="table-responsive p-0">--}}
{{--                                <div class="container-fluid py-4">--}}

{{--                                    <form method="post" class="container-fluid col-lg-7 col-12" action="{{url('/teacher/edit/'.$teacher->id)}}" enctype="multipart/form-data">--}}
{{--                                        {{ csrf_field()}}--}}
{{--                                        @method('PATCH')--}}

{{--                                        <div class="form-group">--}}
{{--                                            <div class="product-thumb">--}}
{{--                                            <img id="output" class="img-fluid product-image" src="{{ URL::asset('uploads/teachers_photo/'.$teacher->image) }}"/>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Image:</label>--}}
{{--                                            <input type="file" name="image" class="form-control" placeholder="Image">--}}
{{--                                            <input type="file"  name="image" class="form-control" accept="image/*" onchange="loadFile(event)">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">Username:*</label>--}}
{{--                                            <input type="text" class="form-control" value="{{$teacher->username}}" name="username"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">First Name:*</label>--}}
{{--                                            <input type="text" class="form-control" value="{{$teacher->first_name}}" name="firstName"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">Last Name:*</label>--}}
{{--                                            <input type="text" class="form-control" value="{{$teacher->last_name}}" name="lastName"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">Email:*</label>--}}
{{--                                            <input type="email" class="form-control" value="{{$teacher->email}}" name="email"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">Phone:*</label>--}}
{{--                                            <input type="text" class="form-control" value="{{$teacher->phone}}" name="phone"/>--}}
{{--                                        </div>--}}
{{--                                        change password--}}
{{--                                        <div class="group">--}}
{{--                                            <input id="check" type="checkbox" class="check" >--}}
{{--                                            <label for="check"><span class="icon"></span>Change password</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="oldPasswordInput">Current Password:*</label>--}}
{{--                                            <input type="password" class="form-control  @error('old_password') is-invalid @enderror " value="" name="old_password" id="oldPasswordInput"/>--}}
{{--                                        </div>--}}
{{--                                        @error('old_password')--}}
{{--                                        <span class="text-danger">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="newPasswordInput">New Password:*</label>--}}
{{--                                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" value="" name="new_password" id="newPasswordInput"/>--}}
{{--                                            @error('new_password')--}}
{{--                                            <span class="text-danger">{{$message}}</span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="stock_name">Confirm Password:*</label>--}}
{{--                                            <input type="password" class="form-control" value="" name="repeat_password"/>--}}
{{--                                        </div>--}}

{{--                                        <button type="submit" class="btn btn-primary">update</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--<h1 class="hero-title text-center mb-5">Sign In</h1>--}}
{{--<x-auth-session-status class="mb-4" :status="session('status')" />--}}
{{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}
{{--<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Teacher</label>--}}
{{--<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">User</label>--}}
{{--<div class="login-form">--}}
{{--<form id="loginTeacher" method="POST" action="{{ url('teacher/login') }}" class="sign-in-htm">--}}
{{--    @csrf--}}
{{--    <div class="group">--}}
{{--        --}}{{--                <x-label for="email" :value="__('Email')" />--}}

{{--        --}}{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--        <label for="user" class="label">Username</label>--}}
{{--        <input id="user" class="input form-control" type="email" name="email" :value="old('email')" required autofocus >--}}
{{--    </div>--}}
{{--    <div class="group">--}}
{{--        <label for="pass" class="label">Password</label>--}}
{{--        <input id="password" class="input form-control" type="password" name="password" required autocomplete="current-password">--}}
{{--    </div>--}}
{{--    --}}{{--        <div class="group">--}}
{{--    --}}{{--            <input id="check" type="checkbox" class="check" checked>--}}
{{--    --}}{{--            <label for="check"><span class="icon"></span> Keep me Signed in</label>--}}
{{--    --}}{{--        </div>--}}
{{--    <div class="group">--}}
{{--        <input type="submit" class="btn custom-btn form-control mt-4 mb-3" value="Sign In">--}}
{{--    </div>--}}
{{--    <div class="hr"></div>--}}
{{--    <div class="foot-lnk">--}}
{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}
{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</form>--}}
{{--</div>--}}



</section>
<section class="featured-product section-padding">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-5">Manage Your Profile</h2>
            </div>

            <div class="col-md-6 text-center">
                <p>Change personal info</p>
                <div class="product-thumb">
                    <a href="{{url("/teacher/personalInfo/".$teacher->id)}}">
                        <img src="{{URL::asset('img/settings/download.png')}}" class="img-fluid product-image" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <p>Change password</p>
                <div class="product-thumb">
                    <a href="{{url("/teacher/passwordReset/".$teacher->id)}}">
                        <img src="{{URL::asset('img/settings/images.jpeg')}}" class="img-fluid product-image" alt="">
                    </a>
                </div>
            </div>

{{--            <div class="col-lg-4 col-12">--}}
{{--                <div class="product-thumb">--}}
{{--                    <a href="product-detail.html">--}}
{{--                        <img src="{{URL::asset('img/homePage/images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg')}}" class="img-fluid product-image" alt="">--}}

{{--                    </a>--}}

{{--                    <div class="product-top d-flex">--}}
{{--                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>--}}
{{--                    </div>--}}

{{--                    <div class="product-info d-flex">--}}
{{--                        <div>--}}
{{--                            <h5 class="product-title mb-0">--}}
{{--                                <a href="product-detail.html" class="product-title-link">Juice Drinks</a>--}}
{{--                            </h5>--}}

{{--                            <p class="product-p">Nature made another world</p>--}}
{{--                        </div>--}}

{{--                        <small class="product-price text-muted ms-auto mt-auto mb-5">$45</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-12 text-center">--}}
{{--                <a href="products.html" class="view-all">View All Products</a>--}}
{{--            </div>--}}

        </div>
    </div>
</section>
@endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
