<!DOCTYPE html>
<html lang="fr">
    <?php
	if (isset($_POST['nom']))
	{
        $nom = mysql_real_escape_string($_POST['nom']);
		?> <p> <?php echo $nom ?> </p> <?php
	} 
	if (isset($_POST['mail']))
	{
        $mail = mysql_real_escape_string($_POST['mail']);
		?> <p> <?php echo $mail ?> </p> <?php
	}
	if (isset($_POST['tel']))
	{
        if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$_POST['tel']))
        {
            $tel = mysql_real_escape_string($_POST['tel']);
            ?> <p> <?php echo $tel ?> </p> <?php
        }
		else
        {
            ?> <p> Le téléphone suivant n'est pas valide : <?php echo $tel; ?>, <a href="formulaire.php">veuillez renseigner un numéro de 10 chiffres commençant par 0</a> </p> <?php
        }
	} 
	if (isset($_POST['message']))
	{
        $message = mysql_real_escape_string($_POST['message']);
		?> <p> <?php echo $message ?> </p> <?php
	} ?>
</html>