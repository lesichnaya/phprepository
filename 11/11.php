<?php
function analyzeArray(array $arrayOfStrings): array {
    $symbolsCount = [];
    foreach ($arrayOfStrings as $string) {
        $input = str_replace(' ', '', $string);
        $lettersArray = preg_split('//u', $input, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($lettersArray as $symbol) {
                if (array_key_exists($symbol, $symbolsCount)) {
                $symbolsCount[$symbol]++;
            } else {
                $symbolsCount[$symbol] = 1;
            }
        }
    }
    return $symbolsCount;
}
var_dump(analyzeArray(["Привет", "Hello world!"]));