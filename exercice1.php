<?php 
//Demannder à l'utilisateur de saisir sont budget initial

$budgetinitial = readline("Quel est votre budget initial?");
echo "$budgetinitial \n";


//créer une boucle qui continuera tant que le budget initial n'est pas nul


while($budgetinitial >= 0)
echo "$budgetinitial" . "\n";


//créer une boucle qui continuera tant que le budget initial n'est pas nul, dans chaque itération de la boucle, demander à l'utilisateur de choisir entre une recette (R) ou une dépense (D) selon le choix : pour cette recette: demander le montant et ajoutez le au budget, pour une dépense demander le montant, vérifier si la dépense est possible par rapport au solde disponible. si possible : calculer et afficher le poucentage qui représente cette dépense par rapport au budget initial, retirer la dispense du budget. Si impossible: afficher un message d'erreur, afficher le budget disponible après chaque opération. Si le budget devient nul ou négatif, arrêtez le programme.

$budgetinitial = readline("Quel est votre budget initial?");
echo "$budgetinitial \n"; 

while($budgetinitial >= 0)
{
    echo "Voulez vous ajouter une recette (R) ou une dépense (D)? \n";
    $choix = readline();

    if($choix == "R")
    {
        $montant = readline("Quel est le montant de votre recette?");
        $budgetinitial += $montant;
    }
    elseif($choix == "D")
    {
        $montant = readline("Quel est le montant de votre dépense?");
        if($montant <= $budgetinitial)
        {
            $budgetinitial -= $montant;
            $pourcentage = ($montant / $budgetinitial) * 100;
            echo "Votre dépense de $montant représente $
            pourcentage% du budget initial.\n";
        }

    }
}  






?>