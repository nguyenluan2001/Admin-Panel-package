<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        html,
        body {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        #wrapper {
            width: 100%;
            height: 100%;
            background-color: #f9f3f3;
            padding-top: 10%;
        }

        #login {
            height: 50%;
            top: 30%;

        }


        #login .container .row .col-md-5 {
            margin: 0px auto;
            border-radius: 5px;
            padding-top: 2%;
        }
    </style>
    <div id="wrapper">
        <div id="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 bg-dark">
                        <h2 class="text-white text-center">LOGIN</h2>
                        <form action="{{route('login.authenticate')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="text-white">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-white">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-success" value="Login">
                            </div>
                            <div class="form-group text-center">
                                <a href="">Forgot password</a>
                                <span class="text-white"> | </span>
                                <a href="">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>