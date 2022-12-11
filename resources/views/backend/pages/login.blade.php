

</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">
<form action="{{route('login.process')}}" method="POST">
@csrf

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">

                        </div>
                        <div class="login-form">
                            <h4> Login Here</h4>
                            <form>
                                <!-- Email input -->

                              <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email address</label>
                                <input name="email" type="email" id="form2Example1" class="form-control" />
                              </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                  <label class="form-label" for="form2Example2">Password</label>
                                  <input name="password" type="password" id="form2Example2" class="form-control"/>
                                </div>

                                <!-- Submit button -->
                              <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

