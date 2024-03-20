<?php
$grades = array(
    "Anisha" =>90,
    "Isha" =>65,
    "Anushka" =>50,
    "Eva"=>70,
);
$totalGrades=0;
foreach ($grades as $student=>$grade){
    $totalGrades += $grade;
};
$averagegrade=$totalGrades /count($grades);
echo "The average grade of student is:".$averagegrade;
?>