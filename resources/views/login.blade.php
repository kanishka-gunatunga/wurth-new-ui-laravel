<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./public/css/login.css"> -->
     <link rel="stylesheet" href="{{ asset('css/log.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

</head>
<style>


</style>
<body>
    <div class="d-flex align-items-center justify-content-center login-div">
        <div class="card login-card d-flex align-items-center">
            <div class="card-body">
                <div class="row">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('images/wruth-logo.png') }}" alt="Logo" class="logo">
                    </div>
                    <div>
                        <form>
                            <p class="login-title text-center mb-5">LOGIN TO YOUR ACCOUNT</p>
                            <div class="my-4 input-div">
                                <img src="{{ asset('images/Email.png') }}" alt="" class="input-icon envelop">
                                <input type="email" class="form-control login-input " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="mb-4 input-div">
                                <img src="{{ asset('images/Key Security.png') }}" alt="" class="input-icon key" height="23.28">
                                <input type="password" class="form-control login-input" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <a href="https://loops-it.github.io/wurth-lanka/forgot_password_screen_1.html" class="forgot-password-link"><p class="forgot-password-text my-4">Forgot Password?</p></a>
                            <button type="submit" class="btn login-btn mt-4">Login</button>
                           
                            {{-- <p class="text-center mt-5 register-text">Don’t have an account? <a href="https://loops-it.github.io/wurth-lanka/register.html" class="register-text-link">Register</a></p> --}}
                            <p class="text-center mt-5 register-text">Don’t have an account? <a href="{{url('register')}}" class="register-text-link">Register</a></p>
                          </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>