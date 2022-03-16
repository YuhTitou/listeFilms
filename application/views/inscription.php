

<?php echo validation_errors();?>
<?php echo form_open('films/create')?>
<div class="box">
    <h1>Inscription</h1>
    <form method="post">
        <label><b>Identifiant</b></label>
        <input type="input" id="id" name="identifiant">
        <label><b>Nom</b></label>
        <input type="input" id="idnom" name="nom">
        <label><b>Prenom</b></label>
        <input type="input" id="idprenom" name="prenom">
        <label><b>Mot de passe</b></label>
        <input type="password" id="idmdp" name="mdp">
        <input type="submit" name="submit" value="S'inscrire">
    </form>
</div>