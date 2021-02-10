<?php
Echo getcwd()."'<br>'";
$dir = 'C:\xamppp\htdocs\WebProPHP';
$files = scandir($dir);
foreach($files as $value){
echo $value."<br>";
}
echo getcwd()."<br>";
chdir("..\\");
echo getcwd()."<br>";
?>