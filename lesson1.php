<form method="get">
 <p>
  <input type="text" name="name" 
   value="<?=$_REQUEST['name']?>" 
   placeholder="���� ���"> 
 </p>
 <p>
  <input type="text" name="age"
   value="<?=$_REQUEST['age']?>"
   placeholder="��� �������">
 </p> 
 <p>
  <input type="submit" value="send">
 </p>
</form>
<?php
 if ($_REQUEST['age'] > 20) {
  echo "���� ����� ",$_REQUEST['name'], "<br>";
  echo "���  ",$_REQUEST['age'], " ����<br>";
 }
 ?> 