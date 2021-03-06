<!DOCTYPE html>
<html lang="en">

@include('partials.head', ['title' => 'Hiusmaa Admin Register'])

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">


        <form class="form-login" method="POST" action="/auth/login">
            {!! csrf_field() !!}
            <h2 class="form-login-heading">sign in now</h2>
            <div class="login-wrap">
                <input type="text" name="email" class="form-control" placeholder="Your E-mail" value="{{ old('email') }}" autofocus>
                <br>
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" autofocus>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <br>
                <input type="password"  name="password_confirmation" class="form-control" placeholder="Confirm Password">
                <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>

		                </span>
                </label>
                <button class="btn btn-theme btn-block" href="admin.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>

            </div>

            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("assets/img/LoginPage.png", {speed: 500});
</script>


</body>
</html>
