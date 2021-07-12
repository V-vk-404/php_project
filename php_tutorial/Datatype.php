<!-- To check only data type use gettype( ) function. -->

<!-- To check value, data type and size use var_dump( ) function. -->


<!-- <?php 

$num = 100 ;
$fnum = 98.6 ; 
$str = " Hello world ";
// var_dump($num,$fnum,$str)."<br>";
echo gettype( $num )."<br>";
echo gettype( $fnum )."<br>";
echo gettype( $str )."<br>";
?> -->

<!-- There are 3 types of data type 
1 Scalar(predefined)
2 Compound(user defined)
3 Special type

Scalar data types 
1 Integer
2 String
3 Float/Double
4 Boolean


compound datatypes 
1 Array
2 Object

Special datatypes 
1 NULL
2 Resource -->

<?php 
// this is a compound data type
// $arr = array(10,20,30,40,50);
// var_dump($arr);
// echo"$arr";

// this is a compound data type
		
// class Demo
		
// {

// public function show()

// {

// echo "This is show method<br/>";

// }	

// }

// $obj= new Demo();

// $obj->show();

// $obj->show();	

// var_dump($obj);

// this is a Special data type
// this is a null data type
// $blank = null;
// var_dump($blank);
// this is a Resource Data Type

// $con = mysqli_connect('localhost', 'root','','users');


$con = mysqli_connect("localhost","root","","users");

?>