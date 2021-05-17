<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-size: cover;
        background-color: rgb(166, 219, 233);
    }

    .center {
        text-align: center;

    }

    .wrapper {
        max-width: 1000px;
        background: rgb(232, 233, 193);
        margin: 50px auto;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
        padding: 30px;
    }

    /*titre*/
    .wrapper .title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #fec107;
        text-transform: uppercase;
        text-align: center;
    }

    .wrapper .form .inputfield {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }



    /* marge des champs : espace entre champs et le nom  */
    .wrapper .form .inputfield label {
        width: 200px;
        color: #757575;
        margin-right: 10px;
        font-size: 14px;
    }


    /* les champs : taille bordure... */
    .wrapper .form .inputfield .input,
    .wrapper .form .inputfield .textarea {
        width: 100%;
        outline: none;
        border: 1px solid #d5dbd9;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 3px;
        transition: all 0.3s ease;
    }


    /*bordure des champ*/
    .wrapper .form .inputfield .input:focus,
    .wrapper .form .inputfield .textarea:focus,
    .wrapper .form .inputfield .custom_select select:focus {
        border: 5px solid #fec107;
    }





    .wrapper .form .inputfield .btn {
        width: 100%;
        padding: 8px 10px;
        font-size: 15px;
        border: 0px;
        background: #fec107;
        color: rgb(11, 74, 90);
        cursor: pointer;
        border-radius: 3px;
        outline: none;
    }


    @media (max-width:420px) {
        .wrapper .form .inputfield {
            flex-direction: column;
            align-items: flex-start;
        }

        .wrapper .form .inputfield label {
            margin-bottom: 5px;
        }

        .wrapper .form .inputfield.terms {
            flex-direction: row;
        }
    }
</style>


<div class="container center">


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






    <div class="wrapper">
        <div class="title">
            Inscription
        </div>
        <form method="POST" action="">
            <div class="form">

                <div class="regisFrm">
                    <div class="form-group">
                        <label>Nom : </label>
                        <input type="text" class="form-control" name="last_name" placeholder="nom" value="<?php echo !empty($user['first_name']) ? $user['last_name'] : ''; ?>" required>
                        <?php echo form_error('last_name', '<p class="help-block">', '</p>'); ?>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label>Prenom&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" class="form-control" name=" first_name" placeholder="prenom" value="<?php echo !empty($user['last_name']) ? $user['first_name'] : ''; ?>" required>
                    <?php echo form_error('first_name', '<p class="help-block">', '</p>'); ?>
                </div>

                <br>

                <div class="form-group">
                    <label>Email : &nbsp;&nbsp;&nbsp;</label>
                    <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>" required>
                    <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
                </div>

                <br>
                <div class="form-group">
                    <label>Mot De Passe : &nbsp;</label>
                    <input type="password" class="form-control" name="password" placeholder="mot de passe" required>
                    <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
                </div>

                <br>

                <div class="form-group">
                    <label>Confirmer Le Mot De Passe : &nbsp; </label>
                    <input type="password" class="form-control" name="conf_password" placeholder="Confirmer votre mot de passe" required>
                    <?php echo form_error('conf_password', '<p class="help-block">', '</p>'); ?>
                </div>
                <br>

                        <div class="form-group">
                    <label>Numéro De Téléphone : &nbsp;</label>
                    <input type="text" name="phone" class="form-control" placeholder="numéro de téléphone" value="<?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>">
                    <?php echo form_error('phone', '<p class="help-block">', '</p>'); ?>
                </div>
                <br>

                <br>
                <div class="center">
                    <input type="submit" class="btn btn-warning" name="signupSubmit" value="VALIDER">
                </div>
                <br><br>

            </div>
        </form>

        <p>Vous Avez Deja Un Compte ? <br><a href="<?php echo base_url('users/login'); ?>" class="btn btn-info">Se Connecter à un compte existant</a></p>

    </div>