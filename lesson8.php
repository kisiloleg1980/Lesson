<?
/**
* 
*/
class Car_Class 
{
    private $times;
    private $distances;
    private $speed;

    function __set($namefiled,$value){
        $this->$namefiled=$value;
    }

    function __get($namefiled){
       return $this->$namefiled;
    }
      
    public function __toString(){
        return "{$this->times} {$this->distances}";
    }

    public function calc(){
    	$this->speed=$this->distances/$this->times;
    }

	function __construct()
	{
		$this->times=0;
		$this->distances=0;
		$this->speed=0;
    }
//Перезагружаемая функция проверки существования свойства для приватніх полей
   function __isset($index){
        return isset($this->$index);
    }
}

if (isset($_REQUEST['go'])) {
	
	$myCar= new Car_Class();
    $myCar->times=$_REQUEST['time'];
    $myCar->distances=$_REQUEST['distance'];
    $myCar->calc();

   // $myCar->calc();
//$myCar->set_d('speed',$speed);
echo "Time $myCar->times",'<br>';
echo "Distance $myCar->distances",'<br>';
echo "Speed $myCar->speed","<br>";
//var_dump($myCar);
echo "</pre>";

if (isset($myCar->speed)) {
    echo "Ok";
}

}



//echo $myCar->get_car('times');
?>

<html>
<form method=get>

	<p>
	Time
	<p>
	<input text="text" name="time" value="<?=$_REQUEST['time']?>" placeholder="0">
	<p>
	Distance
	<p>	
	<input text="text" name="distance" value="<?=$_REQUEST['distance']?>" placeholder="0">
	<p>	
	<input type=submit name="go" value="go">	
</form>
</html>
