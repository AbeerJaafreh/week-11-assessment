<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, 
within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

$names=array("Abeer"=>"200$","Ahmad"=>"100$");
echo "<table style='width:50%',border:'2px solid black' >";
foreach ($names as $key => $value) {
    
    echo "<tr> 
            <th>  $key  </th>
            <th>  $value  </th>  
        </tr>";
}
echo "</table>";




/*Question 2 : Write a PHP script which displays the capital and 
country name from the below array $c. as unordered list after 
sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

arsort($countries);
echo "<ul>";
foreach ($countries as $key => $value) {
    echo "<li> Country is : $key   and   Capital is : $value </li> ";
}
echo"</ul>";

/*Question 3 : Write a script to build the following stars pattern,
 using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
*/
for ($i=1; $i <=4 ; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo"*";
    }
    echo"<br/>";
}

for ($i=1; $i<=4 ; $i++) { 
    for ($j=4; $j>=$i ; $j--) { 
        echo"*";
    }
    echo"<br/>";
}


/*Question 4 : Write a PHP script to calculate the difference 
between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days*/
$input1=new DateTime("1981-11-04");
$input2=new DateTime("2013-09-04");
$res= $input2->diff($input1)->d;


/*Question 5 : Create a simple HTML form that accept the user name
 after submitting display the name using PHP echo statement under
  the form. */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <div class="form-label-group">
                <input type="text" class="form-control" name="name" value=" " placeholder="Enter name " required autofocus>
                <button type="submit" >Submit</button>
                <?php
                $name=$_POST['name'];
                    echo "<h3> $name <h3/>";
                
                ?>
              </div>
    
    </form>
</body>
</html>