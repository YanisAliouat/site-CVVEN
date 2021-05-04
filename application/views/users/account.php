<div class="container">
    <h2>Bienvenu <?php echo $user['first_name']; ?>!</h2>
    <a href="<?php echo base_url('users/logout'); ?>" class="logout">Se Deconnecter</a>
    <div class="regisFrm">
        <p><b>nom : </b><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>nuimero de telephone : </b><?php echo $user['phone']; ?></p>
    </div>
</div>