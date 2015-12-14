<?
echo $_REQUEST['name'];
$dir=$_REQUEST['name'];

?>

<html>
<form action="lesson7.php">
	<input type=hidden name="name" value='<?=$dir?>'>
	<input type=text name=newdirectory>
    <input type=submit value="Сохранить">
</form>	
</html>

<?

mkdir($dir.'/'.$_REQUEST['newdirectory']);
?>
