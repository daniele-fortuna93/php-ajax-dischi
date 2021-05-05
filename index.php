<?php
include __DIR__ . '/var.php';
include __DIR__ . '/template/header.php';
?>

<div id="root">
        <select class="generi" name="generi">
        <option value="">Nessuna scelta</option>
          <?php foreach($generi as $genere) {?>
          
          <option value="<?php echo $genere; ?>"><?php echo $genere;  ?></option>
          <?php } ?>
        </select>
        <div class="container-albums">
            <?php foreach($albums as $album) {?>
            <div class="album" >
                <img src="<?php echo $album['poster'];  ?>" alt="<?php echo $album['title'];  ?>">
                <h3><?php echo $album['title'];  ?></h3>
                <span class="author"><?php echo $album['author'];  ?></span>
                <span class="year"><?php echo $album['year'];  ?></span>
            </div>
            <?php } ?>
        </div>

      </div>
    </div>
  </body>
</html>