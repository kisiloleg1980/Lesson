
 <html>
 <head>
 	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
 </head>	
 <html>

 <?

if (!isset($_REQUEST['path'])) {
   $dir    = 'd:';
}
else $dir= $_REQUEST['path'];
 
$files1 = scandir($dir);
//echo "<pre>";
//print_r($files1);
//echo "</pre>";
$dir.='/';
foreach ($files1 as $key => $value) {
//	echo $dir.$value, "<br>";
	if ($value!='.'  && ($value)!='..') 
		if (is_dir($dir.$files1[$key])){
			$directory[]=$files1[$key];
	//echo 'Директория ', $dir.$files1[$key], "<br>";
		}
    //echo 'файл ',  $value, "<br>";
   else
   
   	$files[]=$files1[$key];
}



?>
<html>

<body>
	<h1><?=$dir?> </h1>
	<h2>Директории</h2>
		<? if (isset($directory))
		  foreach ($directory as $key => $value) :?>
	<p>
		<a href="lesson7.php?path=<?=$dir.$directory[$key]?>"><?=$directory[$key]?> </a>
	</p>
		<?endforeach?>
	<h3>Файлы</h3>
		<? if (isset($files))
		  foreach ($files as $key => $value) :?>
	<p>
		<a href="lesson7ViewFile.php?name=<?=$dir.$files[$key]?>"><?=$files[$key]?></a>
	</p>
		<?endforeach?>

	<p>
		<form action="lesson7NewDirectory.php" method=get>

	    <input type=hidden name="name" value='<?=$dir?>'>
		
		<input type="submit" value="Создать папку">
       
	    </form>
	</p>	

	</body>
</html>