<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">

        <div class="container">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                @foreach ($errors->all() as $err)
                {{ $err }}<br>
                @endforeach
            </div>
            @endif
            @if (session('thongbao'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('thongbao') }}
            </div>
            @endif
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style='height:auto'>
                        <form id="login-form" class="form" action="{{route('admin.postotp')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <h3 class="text-center text-info">Nhập mã OTP của bạn</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">OTP của bạn:</label><br>
                                <input type="text" name="verify_code" id="username" class="form-control">
                            </div>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Xác nhân">

                            <span id="timer"></span>
                            <div class='mt-2'>
                            <button disabled data-url="{{route('resend')}}" class="btn btn-success btn-md" id="btn_reset" value=''>Gửi lại mã OTP</button>
                            <a href="{{route('admin.logout')}}" class="btn btn-danger btn-md">Đăng xuất</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <script>
    reset()
    function reset()
    {

    
        const countTimer = 30;
        $('#btn_reset').click(function(e) {
            e.preventDefault();
            var url = $(this).attr('data-url')
            console.log(url)
            $.ajax({
                url: url,
                type: 'GET',
            }).done(function(response) {
                if (response) {
                    console.log('ok')
                    alertify.success('Đã gửi lại thành công');
                    //    return reset();
                }
            }).always(function() {
                $('#btn_reset').attr('disabled','');
                setTimer()
  });
        })
        setTimer();

        function setTimer() {
            var counter = setInterval(timer, 1000);
            var count = countTimer;

            function timer() {
                if (count == 0) {
                    console.log('aaa')
                    $('#btn_reset').removeAttr('disabled')
                    
                    $('#timer').html(``)
                    
                    clearInterval(counter);
                    count=countTimer;
                    return
                }
                console.log(count)
                $('#timer').html(`
    Còn ${count} giây để gửi lại mã OTP
  `)
                count--;

            }
        }
    }
    </script>
</body>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
</style>

</html>