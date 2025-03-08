<?php
function genererFilAriane($structure, $page_courante) {
    echo "<div class='breadcrumb'>";
    echo "<a href='index.php'>Accueil</a> &raquo; ";

    // Improved Breadcrumb for Multi-Level Structure
    $chemin = array();

    //Check if the $page_courante exists within the $structure
    if (array_key_exists($page_courante, $structure)){
         $pageActuelle = $structure[$page_courante];
         $chemin[] = $pageActuelle['label'];

         // Affichage du fil d'Ariane
         echo implode(' &raquo; ', $chemin);
    } else {
         echo "Page Not Found";
    }

    echo "</div>";
}
?>
