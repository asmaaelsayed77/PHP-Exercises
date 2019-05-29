	
<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = [
    "pizza",
    "pasta",
    "burger",
    "shawarma"
];
/*
Print every array element in a new line.
*/
echo "{$food[0]}<br>"; // pizza
echo "{$food[1]}<br>"; // pasta
echo "{$food[2]}<br>"; // burger
echo "{$food[3]}<br>"; // shawarma



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
  <li>{$food[0]}</li>
  <li>{$food[1]}</li>
  <li>{$food[2]}</li>
  <li>{$food[3]}</li>
</ul>";

//$food = "<ul>
//<li>pizza</li>
//<li>pasta</li>
//<li>burger</li>
//<li>shawarma</li>
//</ul>
//";
//
//echo $food;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc= [
	"pizza" => "main course",
	"pasta" => "starter",
	"burger" => "breakfast",
	"shawerma" => "dinner"
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo "pizza" . " | " . $food_assoc["pizza"]; echo "<br>";
echo "pasta" . " | " . $food_assoc["pasta"]; echo "<br>";
echo "burger" . " | " . $food_assoc["burger"]; echo "<br>";
echo "shawerma" . " | " . $food_assoc["shawerma"]; echo "<br>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc= [
	"pizza" => "main course",
	"pasta" => "starter",
	"burger" => "breakfast",
	"shawerma" => "dinner"
];

$origins= [
	"main course" => "Italy",
	"starter" => "Greece",
	"breakfast" => "USA",
	"dinner" => "Lebaneese"
];
	
//	"pasta" => "starter",
//	"burger" => "breakfast",
//	"shawerma" => "dinner"
//];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "pizza" . " | " . $food_assoc["pizza"] . " | " . $origins["main course"]; echo "<br>";
echo "pasta" . " | " . $food_assoc["pasta"] . " | " . $origins["starter"]; echo "<br>";
echo "burger" . " | " . $food_assoc["burger"] . " | " . $origins["breakfast"]; echo "<br>";
echo "shawerma" . " | " . $food_assoc["shawerma"] . " | " . $origins["dinner"]; echo "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";



/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

$food_assoc= [
	"pizza" => "main course",
	"pasta" => "starter",
	"burger" => "breakfast",
	"shawerma" => "dinner"
];

$origins= [
	"main course" => "Italy",
	"starter" => "Greece",
	"breakfast" => "USA",
	"dinner" => "Lebaneese"
];

echo "<table style='border: 1px solid black; border-collapse: collapse;'>

<tr>
    <th style='border: 1px solid black;'>food</th>
    <th style='border: 1px solid black;'>type</th>
    <th style='border: 1px solid black;'>origin</th>
  </tr>
		
<tr>
    <td style='border: 1px solid black;'>{$food[0]}</td>
    <td style='border: 1px solid black;'>{$food_assoc['pizza']}</td>
    <td style='border: 1px solid black;'>{$origins['main course']}</td>
  </tr>
  <tr>
    <td style='border: 1px solid black;'>{$food[1]}</td>
    <td style='border: 1px solid black;'>{$food_assoc['pasta']}</td>
    <td style='border: 1px solid black;'>{$origins['starter']}</td>
  </tr>
  <tr>
    <td style='border: 1px solid black;'>{$food[2]}</td>
    <td style='border: 1px solid black;'>{$food_assoc['burger']}</td>
    <td style='border: 1px solid black;'>{$origins['breakfast']}</td>
  </tr>
  <tr>
    <td style='border: 1px solid black;'>{$food[3]}</td>
    <td style='border: 1px solid black;'>{$food_assoc['shawerma']}</td>
    <td style='border: 1px solid black;'>{$origins['dinner']}</td>
  </tr>
  
  </table>

";




	
?>
