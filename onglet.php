<?php
include('menu.php'); // Include the data structure from menu.php

function genererOnglets($structure) {
    echo "<ul>";

    foreach ($structure as $key => $page) {
            echo "<li><a href='{$page['url']}'>{$page['label']}</a></li>";
    }

    echo "</ul>";
}
?>
