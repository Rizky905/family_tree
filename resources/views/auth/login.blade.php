<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @include('theme/css')
</head>
<body>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Welcome back') }}</h3>
                            <p class="mb-0">{{ __('Sign in')}}<br></p>
                            <p class="mb-0">{{__('OR Create a new acount') }}</p>
                        </div>
                        <div class="card-body">
                            @if(Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            
                            <form action="{{ route('login') }}" method="POST" role="form text-left" id="loginForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input name="password" id="password" type="password" class="form-control"placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Sign in') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                {{ __(' Don\'t have an account ?') }}
                                <a href="{{ route('register') }}"
                                    class="text-info text-gradient font-weight-bold">
                                    {{ __('Sign up') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer pb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="https://www.creative-tim.com" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="https://www.creative-tim.com/presentation" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="https://www.creative-tim.com/presentation" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="https://www.creative-tim.com/templates" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="https://www.creative-tim.com/blog" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="https://www.creative-tim.com/support-terms" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>

                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="https://dribbble.com/creativetim" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="https://twitter.com/CreativeTim" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="https://www.instagram.com/creativetimofficial/" target="_blank"
                        class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="https://ro.pinterest.com/thecreativetim/" target="_blank"
                        class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="https://github.com/creativetimofficial" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © {{ now()->year }}
                    </p>
                </div>
            </div>
        </div>
        </div>
    </footer>

    @include('theme/js')
    <script src="{{ asset('assets/js/custom/validate-login.js') }}"></script>
</body>
</html>

