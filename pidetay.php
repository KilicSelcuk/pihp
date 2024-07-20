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

function processNumber($number) {
    // String olarak sayıyı al
    $numberStr = (string)$number;

    // Döngüyü başlat
    for ($i = 1; $i <= strlen($numberStr); $i++) {
        // Belirli basamağı elde et
        $substring = substr($numberStr, 0, $i);
        progresspi($substring) . PHP_EOL;
        echo "\n\n";
    }
}



function progresspi($pi){
    
 $numbers = str_split($pi);

// İstenen işlem tekrar sayısı
$iterations = 100;

$result = repeatDifferenceCalculation($numbers, $iterations);


    for ($i = 0; $i < $iterations; $i++) {
        
        $result = repeatDifferenceCalculation($numbers, $i);
        
        echo $i.": ".implode(", ", $result)."\n";
        if(count($result) == 1){
        break;
        }
        

    }   
}

$number = 3141592659793238462;
processNumber($number);

// Sonuçları yazdır
//echo implode(", ", $result);
//echo count($result);
?>
