<style>
    body {
        background-color: rgb(166, 219, 233);
        text-align: center;
    }

    #container {
        width: 50%;
        margin: 0 auto;
        margin-top: 15%;
    }

    /* Bordered form */
    form {
        width: 100%;
        padding: 30px;
        border: 1px solid #f1f1f1;
        background: #fff;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #container h1 {
        width: 38%;
        margin: 0 auto;
        padding-bottom: 10px;
    }

    /* Full-width inputs */
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    input[type=submit] {
        background-color: #53af57;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    input[type=submit]:hover {
        background-color: white;
        color: #53af57;
        border: 1px solid #53af57;
    }


    .center {
        text-align: center;
    }
</style>

<!-- Status message -->
<?php
if (!empty($success_msg)) {
    echo '<p 
    <style>
    .card{ margin: 10px 50px 20px;
           text-align: center;}
    
 </style>class="status-msg success">' . $success_msg . '</p>';
} elseif (!empty($error_msg)) {
    echo '
    <style>
       .card{ margin: 10px 50px 20px;
              text-align: center;}
       
    </style>
    <div class="card">
    <div class="card-body text-danger">' . $error_msg . ' </div>
    </div>';
}
?>


<div id="container">
    <!-- zone de connexion -->


    <form action="" method="POST">
        <div class="center"><h1>Connexion</h1></div>
        
<br> 
        <label><b>E-Mail</b></label>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required="">
            <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
        </div>

        <label><b>Mot de passe</b></label>
        <div class="form-group">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
        </div>
<br>
        <input type="submit" name="loginSubmit" value="LOGIN">
<br><br>
        <p>Vous n'avez pas de compte ?  &nbsp;&nbsp;<a href="<?php echo base_url('users/registration'); ?>" class="btn btn-info">&nbsp;&nbsp; S'inscrire&nbsp;&nbsp;</a></p>

    </form>




</div>