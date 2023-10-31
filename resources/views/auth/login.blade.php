<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('loginTemplate/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('loginTemplate/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginTemplate/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('loginTemplate/css/style.css') }}">

    <title>ChannelMe</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('loginTemplate/images/undraw_file_sync_ot38.svg') }}" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In | <strong style="color: #38d39f">ChannelMe</strong></h3>
                                <p>Medical Centre Management Solution</p>
                            </div>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span>
                                </div>
                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('loginTemplate/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('loginTemplate/js/popper.min.js') }}"></script>
    <script src="{{ asset('loginTemplate/s/bootstrap.min.js') }}j"></script>
    <script src="{{ asset('loginTemplate/js/main.js') }}"></script>
</body>

</html>
