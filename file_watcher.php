<?php
    $file_to_monitor = '1.txt';
    $filename_to_write = '2.txt';
    $last_modification = filemtime($filename);

    while ($last_modification == filemtime($file_to_monitor)) {
        clearstatcache();
    }

    if ($last_modification!= filemtime($file_to_monitor)) {
      echo "Только что было внесено изменение в 1.txt, все новые данные скопированы в 2.txt";
      copy($file_to_monitor, $filename_to_write);
    }
?>
