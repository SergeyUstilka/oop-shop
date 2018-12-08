<div class="row">
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Login to your account</h2>
            <form action="/postlogin" method="post">
                <input type="email" name="email" placeholder="email">
                <input type="text" name="password" placeholder="password">
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div><!--/login form-->
    </div>
    <div class="col-sm-1">
        <h2 class="or">OR</h2>
    </div>
    <div class="col-sm-4">
        <div class="signup-form"><!--sign up form-->
            <h2>New User Signup!</h2>
            <form action="/registration"  method="post">
                <input type="text" name="name" placeholder="name">
                <input type="email" name="email" placeholder="email">
                <input type="text" name="password" placeholder="password">
                <button type="submit" class="btn btn-default">Signup</button>
            </form>
        </div><!--/sign up form-->
    </div>
</div>