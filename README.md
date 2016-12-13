# reCAPTCHA-Codeigniter
##STEP 1
Get The reCAPTHCA **Site Key** and **Secret Key** on https://www.google.com/recaptcha/

##STEP 2
On CodeIgniter Views, Paste this snippet before the closing `</head>` tag on your HTML template:

`<script src='https://www.google.com/recaptcha/api.js'></script>`

-- Optional

If you want to use another language, you can specify on JavaScript render, add this code :
**?onload=onloadCallback&hl=id**
For example i want to use Indonesian Language, on **hl** parameter i use **id** code. So The javascript will be :

`<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&hl=id'></script>`

You can see available language on https://developers.google.com/recaptcha/docs/language

##STEP 3
Again, on CodeIgniter Views, Paste this snippet at the end of the `<form>` where you want the reCAPTCHA widget to appear:

`<div class="g-recaptcha" data-sitekey="SITE_KEY"></div>`

##STEP 4
You can see the [Login](../master/Login.php) Controller for login validation Processing with Google reCAPTHCA. Change the **Secret Key** with your **Secret Key** that you got from Google on variable `$secret='SECRET_KEY'`
