<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $url = 'http://socialcodia.net/myapi/public/login';
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email&password=$password");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response);
    $error = $response->error;
    $message = $response->message;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
  </head>

  <body background="img/bg1.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="row">
        <div class="col l4 offset-l4 m6 offset-m3 s8 offset-s2" >
            <div class="card bg" style=" margin-top: 40%; margin-right: 30px; margin-left: 30px; opacity: 0.9; border-radius: 35px;">
                <div class="card-content">
                    <div class="card-title center ">Admin Panel</div>
                    <b><p class="red-text center">
                            <?php
                                if(isset($error) && $error==1 || isset($error) && $error==0)
                                {
                                        echo $message;
                                }
                            ?>
                     </p></b>
                    <form action="" method="post">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="email" value="SocialCodia@gmail.com" id="email">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" value="farooqui" name="password" id="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit"  name="login" value="Login" class="btn" id="login" style="width: 100%; border-radius: 15px;">
                        </div>
                        <p class="center">Don't have an account?<a href="register.php" class="center"> Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>