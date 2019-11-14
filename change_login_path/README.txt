This module is helpful for the persons want to change login url for security purpose.

If You want to create a link on your website just call get_sec_login_path_html() function after module installation or copy and paste below code.
<?php 
if(function_exists("get_sec_login_path_html")){ echo get_sec_login_path_html();} 
?>
and it will create a link with label "Login" in your HTML.
If you want to change the label must pass it as a STRING in function argument.
Example:
<?php 
if(function_exists("get_sec_login_path_html")){ echo get_sec_login_path_html("YOUR_LABEL");} 
?>