<?php
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/'), TRUE);

foreach ($dir as $file) {
    echo str_repeat($qwe, $dir->getDepth()).$file.'<br>';
}

?>


