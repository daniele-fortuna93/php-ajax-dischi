<?php
    include __DIR__ . '/database.php';
    header('Content-Type: application/json');
    if ( !isset($_GET['genere'])){
        echo json_encode($albums);
    } else {
        $albumFilter = [];
        foreach ($albums as $album){
            if ($album['genre'] == $_GET['genere']){
                $albumFilter[] = $album;      
            }
        }
        echo json_encode($albumFilter);
    }
?> 