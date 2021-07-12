<!-- <?php 
define('x', 100);
define('y', 100);
define('z', x+y);
echo "The sum of two number is: ".z;
  ?> -->


 
 <h2>USD/EUR Currency Conversion</h2>

 <?php 
 define('Exchang_rate', 0.80); 

 $dollars = 150;

 $euros = $dollars * Exchang_rate;

 echo "$dollars USD is equivalent to :$euros EUR";
 ?>