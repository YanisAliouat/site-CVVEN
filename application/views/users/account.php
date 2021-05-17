<style>
  .center {
    margin: 10px 50px 20px;
    text-align: center;
  }
  body {

    background-color: #C6F1DF;

  }
</style>

<div class="center">
<div class="card text-center">
  <div class="card-header"><h2>Bienvenu(e) <?php echo $user['first_name']; ?>!</h2></div>
  <div class="card-body">
    <h5 class="card-title">NOM & PRÉNOM : </b><?php echo $user['first_name'].' '.$user['last_name']; ?></h5>
    <p class="card-text">
    <p><b>E-mail: </b><?php echo $user['email']; ?></p>
    <p><b>Numéro De Téléphone : </b><?php echo $user['phone']; ?></p>
    </p>
  </div>
  <div class="card-footer"><br>
  <p><a class="btn btn-primary" href="<?php echo base_url('users/logout'); ?>" class="logout">Se Deconnecter</a></p>
  </div>
</div>
</div>