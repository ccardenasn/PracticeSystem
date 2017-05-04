<?php


    $data = $_REQUEST['base64data']; 

    $image = explode('base64,',$data); 


    file_put_contents('../images/myImage.png', base64_decode($image[1]));

?>