# reCAPTCHA-Codeigniter
##STEP 1
On CodeIgniter Views, Paste this snippet before the closing </head> tag on your HTML template:
`<script src='https://www.google.com/recaptcha/api.js'></script>`
##STEP 2
Again, on CodeIgniter Views, Paste this snippet at the end of the <form> where you want the reCAPTCHA widget to appear:

`<div class="g-recaptcha" data-sitekey="SITE_KEY"></div>`

##STEP 3
You can see the [Login](../master/Login.php) Controller for login validation Processing with Google reCAPTHCA. Change the Secret Key on variable `$secret='SECRET_KEY'`
