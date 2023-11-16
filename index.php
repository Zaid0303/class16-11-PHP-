<?php 

////////////////// Indexed Array ///////////////
// 1st method
// $fruits = array("apple", "banana", "orange", "mango");
// echo '<pre>';
// print_r($fruits);
// echo '</pre>';


// echo "1)"," ", $fruits[0];
// echo "<br>";
// echo "1)"," ", $fruits[3];

// // 2nd method
// $vigi = ["potato", "onion", "tomato"];
// echo '<pre>';
// print_r($vigi);
// echo '</pre>';

// // 3rd method
// $names[0] = "Zaid";
// $names[1] = "Abdullah";
// $names[2] = "Mubeen";
// $names[3] = "Murtaza";
// echo '<pre>';
// print_r($names);
// echo '</pre>';



// ////////////////// Associative Array ///////////////
// // 1st method
// $subject = array("Maths" => 100, "Urdu" => 80, "Physics" => 50);
// echo '<pre>';
// print_r($subject);
// echo '</pre>';
// echo $subject["Maths"];
// echo '<br>';
// echo $subject["Physics"];

// // 2nd method
// $game = ["pubg" => "rocky", "cs" => "fighter", "ludo" => "master"];
// echo '<pre>';
// print_r($game);
// echo '</pre>';

// // 3rd method
// $cars ["corola"] = 20000;
// $cars ["prado"] = 20000;
// $cars ["land cruser"] = 20000;
// echo '<pre>';
// print_r($cars);
// echo '</pre>';

////////////////// Multiple dimensional indexed Array ///////////////
// $num = [1, 2, 3, 4, 5];

// $i=0;
// while($i<4) {
//     echo $i;
// };
// $i++;

// $i=0;
// do {
//     echo $i;
//     $i++;
// }
// while($i<=5);

// $num1 = [[1,2,3,4,5], [2,3,4,5,6], [3,4,5,7,8]];

// for ($i= 0; $i< count($num1); $i++) {
//     echo "<h3> index number ".$i."</h3>";
//     for ($j= 0; $j< count($num1[$i]); $j++) {
//         echo $num1[$i][$j];
//     }
// }


////////////////// Multiple dimensional Associative Array ///////////////

$student= [
"zaid" => ["english" => 44, "urdu" => 19, "physics" => 55],
"murtaza" => ["english" => 40, "urdu" => 69, "physics" => 54], 
"mubeen" => ["english" => 50, "urdu" => 89, "physics" => 44], 
"ebad" => ["english" => 66, "urdu" => 59, "physics" => 33], 
];

// foreach ($student as $key => $value) {
//     foreach ($value as $key2 => $value2) {
//        echo "$key2 = $value2" . "<br>";
//     }
// };

foreach ($student as $k => $v){
    echo "<h3>$k</h3><br>";
    foreach ($v as $k2 => $v2) {
        echo "$k2 = $v2 ";
    }
}

?>