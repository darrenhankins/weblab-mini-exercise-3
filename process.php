<?php



// !!! ASK ABOU THIS !!!
// check to see if post variables are there
if (!isset($_POST['title']) && !isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password']) && isset($_POST['beatle'])) {
    print "Please fill in all fields.";
    die;
  
} else {
  $title = $_POST['title'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $beatle = $_POST['beatle'];
  
}

// beatles array
$beatles = ['Ringo','John','Paul','George'];


/* 
First two letters of the firstname +
Last two letters of the lastname +
Index of the selected Beatle (0 or 1 or 2 or 3)+
first two letters and last letter of the selected Beatles name.
*/


$firstnameString = $firstname;
$firstnameArray = str_split($firstnameString);
// reverse last name string
$lastnameString = strrev($lastname);
$lastnameArray = str_split($lastnameString);

$firstTwoLettersBeatles = str_split($beatles[$beatle]);
// reverse beatle string
$lastLetterBeatles = strrev($beatles[$beatle]);
// $arr2 = str_split($str, 3); // splits every third letter or space

// reverse string
// function reverseString($str) {
//   $newStr = strrev($str);
//   return $newStr;
// }

// array_slice($firstnameArray as $letters=>$letter) {
// 	echo $letter;
// }

// return First two letters of the firstname +

$a = "";
$b = "";
$c = "";
$d = "";

$x = 0;
while($x <= 1) {
	$a = $a.$firstnameArray[$x];
    $x++;
}

// Last two letters of the lastname +
$x = 0;
while($x <= 1) {
   $b = $b.$lastnameArray[$x];
   $x++;
}

// return First two letters of the beatles name +
$x = 0;
while($x <= 1) {
    $c = $c.$firstTwoLettersBeatles[$x];
    $x++;
}

// Last letter of the beatles name +
$x = 0;
while($x <= 0) {
    $d = $d.$lastLetterBeatles[$x];
    $x++;
}

$newUsername = $a . $b . $c . $d;



?>

<pre>
<?php 
  echo "New Username: " . $newUsername."<br>";
	print_r($beatles);
	print_r($_POST); 

?>
</pre>