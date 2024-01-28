<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        //string variable
        $exclamation = "Oh I wish it would stop snowing";
        //integer variable
        $x = 1;
        //float variable
        $float = 1.5;
        //Boolean variable
        $bool = true;

        //echo a concatinated sentence
        echo $txt1 = " I"; $txt2 = " love";  $txt3 = " PHP"; $txt4 = " !";

        //array with four pieces of data
        $myArray = array("4", "cats", "4", "dogs");

        //create class called $car and include 3 properties
        class Car {
            public $year;
            public $make;
            public $model;
        
            public function __construct($year, $make, $model) {
                $this->year = $year;
                $this->make = $make;
                $this->model = $model;
            }
        }

        //Create a variable called $myCar that is an object of type $Car, and assign the year, make and model properties.
        
        $myCar = new Car(2022, 'Toyota', 'Camry');

        //echo the phrase "I have a {{ year }} {{ make }} {{ model }}". Replace the items inside the curly braces {{ }} with the correct properties.

        echo "I have a " . $myCar->year . " " . $myCar->make . " " . $myCar->model  . ".";


      /*Write a single if statement that checks if the value of your $integer variable is greater than or equal to 10. Create a true and false condition (if/else).
      If True
      echo "The statement is true!"
        If False
      echo "The statement is not true!" */
      $integer = 10;
      
      if ($integer >= 10) {
      echo "The statement is true!";
      } else {
     echo "The statement is not true!";
    }

    /*With PHP using $myArray = array("4", "cats", "4", "dogs");, create two different loops
    Create a standard for loop using $i as the index: for ($i = 0; $i < count($myArray); $i++) { // code here... };
    Create a foreach loop using as: foreach($myArray as $item) { // code here... }
    Inside each loop, just echo the current indexed data and concatenate a <br /> so they are on separate lines.*/

    $myArray = array("4", "cats", "4", "dogs");

    // Standard for loop
    for ($i = 0; $i < count($myArray); $i++) {
    echo $myArray[$i] . "<br />";
   }

    // Foreach loop
    foreach ($myArray as $item) {
    echo $item . "<br />";
   }

        ?>
    </body>
</html>