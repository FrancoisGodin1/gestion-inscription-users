# gestion-inscription-users


Objectifs : 

-> permettre l'inscription d'un nouveau professeur sur le site

-> mettre en place une reCaptcha google lors de l'inscription pour vérifier que l'utilisateur n'est pas un robot

-> Activation du compte par email

-> permettre a l'utilisateur de changer de mot de passe en cas de besoin

-> utilisation de classes SQL et d'une librairie Aauth.php trouvées sur Github permettant la gestion des utilisateurs de façon complète

Description de l'activité : 

-> correction de certains bugs dans notre code liées à l'utilisation de cette librairie Aauth

-> paramétrage du fichier config aauth.php ( activation l'envoi d'email)

-> paramétrage du fichier config autoload.php (ajout de la librairie email)

-> parametrage du fichier config email.php (ajouter les paramètres spécifiques d'envoi d'un email)

-> modif de la vue Login.php (ajout d'un lien permettant l'inscription et le mdp oublié)

-> ajout de la vue account create (formulaire d'inscription)

-> ajout de la vue AccountConfirmation (message pour informer que l'email de confirmation a été envoyé)

-> mise en place du controleûr Account.php

-> parametrage de la recaptcha google (creation sur le compte gmail et récupération des 2 clés publique et privée 


