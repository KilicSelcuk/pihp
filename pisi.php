<?php
function calculateDifferences($numbers) {
    $diffs = [];
    for ($i = 0;$i < count($numbers) - 1; $i++) {
        $diffs[] = abs($numbers[$i + 1] - $numbers[$i]);
    }
    return $diffs;
}

function repeatDifferenceCalculation($input, $iterations) {
    $currentList = $input;
    for ($i = 0; $i < $iterations; $i++) {
        $currentList = calculateDifferences($currentList);
    }
    return $currentList;
}

// Pi'nin ilk 100 basamağı
$pi = '3141592659793238462';
$numbers = str_split($pi);

// İstenen işlem tekrar sayısı
$iterations = 100;

$result = repeatDifferenceCalculation($numbers, $iterations);


    for ($i = 0; $i < $iterations; $i++) {
        
        $result = repeatDifferenceCalculation($numbers, $i);
        
        echo $i.": ".implode(", ", $result)."\n";
        if(count($result) == 1){
        exit;
        }
        

    }

// Sonuçları yazdır
//echo implode(", ", $result);
//echo count($result);
?>
