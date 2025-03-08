<?php
$structure_site = array(
    'test' => array(
        'label' => 'Passer le test',
        'url' => 'index.php?page=2'
    ),
    'introduction' => array(
        'label' => 'Lire le cours',
        'subpages' => array(
            'introduction' => array(
                'label' => 'Introduction',
                'url' => 'index.php?page=1'
            ),
            'variables' => array(
                'label' => 'Variables',
                'url' => 'index.php?page=3'
            ),
            'tableaux' => array(
                'label' => 'Tableaux',
                'url' => 'index.php?page=4'
            ),
            'graphiques' => array(
                'label' => 'Graphiques',
                'url' => 'index.php?page=5'
            )
        )
    ),
    'TP' => array(
        'label' => 'Lire le TP',
        'subpages' => array(
            'TP' => array(
                'label' => 'TP',
                'url' => 'index.php?page=6'
            )
        )
    )
);
?>
