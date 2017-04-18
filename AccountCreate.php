<?php echo validation_errors(); ?>
<?php echo form_open('Account/Create'); ?>
<div>Nom : <input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" /></div>
<div>Prenom : <input type="text" name="prenom" value="<?php echo $this->input->post('prenom'); ?>" /></div>
<div>Email : <input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" /></div>
<div>Mot de passe : <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" /></div>
<div>Confirmez le mot de passe : <input type="password" name="passwordConfirmation" value="<?php echo $this->input->post('passwordConfirmation'); ?>" /></div>
<?php echo $this->aauth->generate_recaptcha_field(); ?>
<button type="submit">Creez votre compte</button>
<?php echo form_close(); ?>

