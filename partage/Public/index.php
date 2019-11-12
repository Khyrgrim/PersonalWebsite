<?php
$nb_fichier = 0;


if($dossier = opendir('.')) //Si le dossier s'ouvre bien
{
echo '<ul>'; // Début liste

while(false !== ($fichier = readdir($dossier))) // Boucle pour chaque fichier
{

if($fichier != '.' && $fichier != '..' && $fichier != 'index.php') // Fichiers à ne pas afficher
{

$nb_fichier++; // On incrémente le compteur de 1
echo '<li><a href="./' . $fichier . '">' . $fichier . '</a></li>';
} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
 
} // On termine la boucle

echo '</ul><br />';
echo 'Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier';
 
closedir($dossier);
 
}
 
else
     {echo '<p>Le dossier n\' a pas pu être ouvert</p>';}
?>
