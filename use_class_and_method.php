<?php
class MyClass
{
	public $var1="Утка";
	const EYES=1;
	
	public function __construct($bio_name="Нечто")
	{
		$this->var1 = $bio_name;
	}
	
	public function __destruct()
	{
		echo ($this->var1)." сдохла<br />";
	}
	
	public function method1(
		$what="",
		$eyes=0
	) {
		echo $this->var1;	      //Переменная класса
		//$what - входящая переменная со значением по умолчанию ""
		if ($what){
			echo " делает ".$what;
		} else {
			echo " молчит";
		}
		echo "<br />";
		if ($eyes){
			//self::EYES=$eyes;
		}
	}
}

$test1=new MyClass("Утка");
$test1->method1();			//Выводит "Утка молчит"
$test1->method1("Кря");			//Выводит "Утка делает Кря"
if (defined("MyClass::EYES"))
{	//Если константа определена
	echo "Моргает ".MyClass::EYES." глазами<br />";
}

$test2=new MyClass("Лягушка",2);
$test2->method1();			//Выводит "Лягушка молчит"
$test2->method1("Ква");			//Выводит "Лягушка делает Ква"
if (defined("MyClass::EYES"))
{
	echo "Моргает ".MyClass::EYES." глазами<br />";
}
?>
