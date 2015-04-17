<?php

$fh = fopen('krek.txt', 'a+');

fwrite($fh, 'krek!');
fclose($fh);

$fh=fopen('krek.txt','a+');

echo fread($fh,filesize('krek.txt'));
fclose($fh);
?>