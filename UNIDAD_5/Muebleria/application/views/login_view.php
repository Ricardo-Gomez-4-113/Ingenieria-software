<!DOCTYPE html>
<html>
 <head>
   <title>Login</title>
 </head>
 <body>
   <h1>Login</h1>

     <?php
        if (isset($error_message)) {
        echo "<div class='message'>";
        echo $error_message;
        echo "</div>";
        }
        ?>
   <?php echo validation_errors(); ?>
   <?php 
    // Va al controlador y busca el método user_login_process

    $route=base_url()."index.php/Login/user_login_process";
    $attributes = array('id' => 'mylogin');
    echo form_open($route, $attributes);

 ?> <label for="email">Username:</label> 
 <input type="text" size="20" id="username" name="username"/> <br/> 
 <label for="pass">Password:</label> 
 <input type="password" size="20" id="password" name="password"/> 
 <br/> <input type="submit" value="Login"/> </form> </body> </html>