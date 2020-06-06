# REST API SYSTEM

This API is developed using the PHP Slim Framework, In this api you can use thease feature.

* Create an account (An email verification will be sent to user email address when they rgistered an account)
* Login into account (User can login into their account when they will successfully verified their account)
* Send Email Verification Code (You can add a feature that user can send email verifcation code again to their email address)
* Update Password (User can update password, An email will also be send when they succesfully changed their password)


## Feauter Explanation

To use this project's feature, you need to make changes only in `Constants.php` file, and that's it.

Set your database connection's information.
```bash
//Database Connection
define('DB_NAME', 'socialcodia');    //your database username
define('DB_USER', 'root');          //your database name
define('DB_PASS', '');              //your database password
define('DB_HOST', 'localhost');     //your database host name
```

And you also need to make change in website section of `Constants.php` file.

```bash

//Website Information
define('WEBSITE_DOMAIN', 'http://api.socialcodia.ml');               //your domain name
define('WEBSITE_EMAIL', 'socialcodia@gmail.com');                    //your email address
define('WEBSITE_EMAIL_PASSWORD', 'password');                        //your email password
define('WEBSITE_EMAIL_FROM', 'Social Codia');                        // your website name here
define('WEBSITE_NAME', 'Social Codia');                              //your website name here
define('WEBSITE_OWNER_NAME', 'Umair Farooqui');                      //your name, we will send this name with email verification mail.

```
<p align="center">
    <img src="https://i.imgur.com/AGeCYFR.png" >
</p>


To Create An Account, Accept only post request with three parameter
* Name
* Email
* Password
An email verification will be send to user email address when they registered an account into thte system.


To Login into Account, Accept only post request with two parameter
* Email
* Password

That's it! Now go build something cool.
