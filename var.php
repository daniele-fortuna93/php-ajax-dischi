<?php 
    include __DIR__ . '/database.php';
    $generi = [];
    foreach( $albums as $album) {
        if ( !in_array($album['genre'],$generi)){
            $generi[] = $album['genre'];
        }
    }
?>