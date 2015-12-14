<form method="get">
 <p>
  <input type="text" name="name" 
   value="<?=$_REQUEST['name']?>" 
   placeholder="Ваше имя"> 
 </p>
 <p>
  <input type="text" name="age"
   value="<?=$_REQUEST['age']?>"
   placeholder="Ваш возраст">
 </p> 
 <p>
  <input type="submit" value="send">
 </p>
</form>
<?php
 if ($_REQUEST['age'] > 20) {
  echo "Меня зовут ",$_REQUEST['name'], "<br>";
  echo "Мне  ",$_REQUEST['age'], " года<br>";
 }
 ?> 