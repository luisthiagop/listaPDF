<?php

$pasta = 'uploads/';
$arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);
foreach($arquivos as $img){
   echo $img;
}

?>