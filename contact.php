<?php

$from = $_POST['email'];

$to ="beenen@simplon-charleville.fr";

$subject = $_POST["nom"];

$message = $_POST["message"];

$headers = $_POST["mail"];

mail($to,$subject,$message,$headers);

echo "Votre message a bien été envoyé";

?>