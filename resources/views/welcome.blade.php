<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme1.css')}}">
</head>
<body>
<div class="form-body" class="container-fluid">
    <div class="website-logo">
        <a href="">
            <div class="logo">
                <img class="logo-size" src="images/logo-light.svg" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">

            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div>
                    <h3>Content management with Laravel 8</h3>
                    <div class="tab-content" style="margin:10px">
                      <nav class="navbar navbar-dark bg-primary">
                        <a href="{{route('landing-page')}}" class="navbar navbar-dark bg-dark @if(rn()== 'landing-page') active @endif">Home</a>
                        <a href="{{route('posts.index')}}" class="navbar navbar-dark bg-dark @if(rn()== 'posts.index') active @endif mx-3">View All Post</a>
                        <a href="{{route('posts.create')}}" class="navbar navbar-dark bg-dark @if(rn()== 'posts.create') active @endif">Insert Post</a>
                      </nav>

                    </div>
                    <div class="other-links">
                        <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
