<?php

/**
 * fungsi untuk menjumlahkan 2 nilai
 * 
 * @param int
 * @param int
 */
function add(string $a, string $b) : int {
    return intval($a) + intval($b);
}

/**
 * fungsi untuk mengenerate gram outputs
 * 
 * @param array
 */
function unigram(string $words) : string {
    $arrWord = explode(' ', $words);
    $result = implode(', ', $arrWord);
    return strtolower($result);
}

/**
 * fungsi untuk mengenerate n-gram
 * 
 * @param array
 * @param int
 */
function nGram(string $words, int $n = 1) : string {
    $arrWord = explode(' ', $words);

    $arrTemp = [];
    $arrResult = [];

    for ($i = 0; $i <= count($arrWord); $i++) {
        if ($i % $n == 0 && $i != 0) {
            $arrTempString = implode(' ', $arrTemp);
            array_push($arrResult, $arrTempString);
            $arrTemp = [];
        }

        if ($i == count($arrWord) - 1 && count($arrWord) % $n != 0) {
            array_push($arrResult, $arrWord[$i]);
        }

        if ($i < count($arrWord)) {
            array_push($arrTemp, $arrWord[$i]);
        }
    }

    $result = implode(', ', $arrResult);
    return strtolower($result);
}

/**
 * fungsi untuk mendapatkan nilai rata-rata
 * 
 * @param string {values}
 */
function averageScore(string $values) : int {
    $nums = explode(' ', $values);
    $total = array_reduce($nums, 'add', 0);

    return $total / count($nums);
}

/**
 * fungsi untuk mendapatkan nilai rata-rata
 * 
 * @param string {values}
 */
function highestScore(string $values) : int {
    $nums = explode(' ', $values);
    $max = $nums[0];
    
    for ($i = 0; $i < count($nums); $i++) {
        if ($max < $nums[$i]) {
            $max = $nums[$i];
        }
    }

    return $max;
}

/**
 * fungsi untuk mendapatkan nilai rata-rata
 * 
 * @param string {values}
 */
function lowestScore(string $values) : int {
    $nums = explode(' ', $values);
    $min = $nums[0];
    
    for ($i = 0; $i < count($nums); $i++) {
        if ($min > $nums[$i]) {
            $min = $nums[$i];
        }
    }

    return $min;
}

/**
 * fungsi untuk menghitung berapa jumlah huruf_kecil pada sebuah string
 * 
 * @param string {text}
 */
function countLowerCase(string $text) : string {
    $counter = 0;
    $letters = str_split($text);

    for ($i = 0; $i < count($letters); $i++) {
        if ($letters[$i] != ' ' && $letters[$i] == strtolower($letters[$i])) {
            $counter++;
        }
    }

    return "{$text} mengandung {$counter} buah huruf kecil.";
}

/**
 * fungsi untuk mengenerate unigram, bigram dan trigram
 * 
 * @param string {text}
 */
function generateGrams(string $text, bool $isTest = true) {
    $unigram = nGram($text);
    $bigram = nGram($text, 2);
    $trigram = nGram($text, 3);

    $newLine = $isTest ? "\n" : '<br />';

    return "Unigram : {$unigram}{$newLine}Bigram : {$bigram}{$newLine}Trigram : {$trigram}{$newLine}";
}

/**
 * fungsi untuk mengenerate table berdasarkan n-column dan o-baris
 * dengan pola bilangan dibahagi 3 == atau dibahagi 4 == 0
 * 
 * @param int {n}
 * @param int {o}
 */
function table(int $n, int $o) : string {
    $output = '<table border="0" cellspacing="0" cellpadding="0">';
    $output .= '<tbody>';

    $counter = 1;

    for ($i = 0; $i < $o; $i++) {
        $output .= '<tr>';

        for ($j = 0; $j < $n; $j++) {
            if ($counter % 3 == 0 || $counter % 4 == 0) {
                $output .= '<td style="text-align: center; padding: 5px 10px;">'.$counter.'</td>';
            } else {
                $output .= '<td style="background-color: black; color: white; text-align: center; padding: 5px 10px;">'.$counter.'</td>';
            }
            
            $counter++;
        }

        $output .= '</tr>';
    }

    $output .= '</tbody>';
    $output .= '</table>';

    return $output;
}

/**
 * fungsi enkripsi string
 * 
 * @param string
 */
function encrypt(string $text) : string {
    $result = '';
    $arrText = str_split($text);

    for ($i = 1; $i <= count($arrText); $i++) {
        if ($i % 2 != 0) {
            $newChar = ord($arrText[$i - 1]) + $i;
        } else {
            $newChar = ord($arrText[$i - 1]) - $i;
        }

        $result .= chr($newChar);
    }

    return $result;
}

/**
 * fungsi untuk pencarian kata dalam nested array
 * 
 * @param array
 */
function find(array $arr, string $text) : bool {
    $result = '';

    $arrText = str_split($text);

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            for ($k = 0; $k < count($arrText); $k++) {
                if ($arrText[$k] == $arr[$i][$j]) {
                    $result .= $arr[$i][$j];
                }
            }
        }
    }

    $arrResult = str_split($result);

    sort($arrText);
    sort($arrResult);

    return implode('', $arrResult) == implode('', $arrText);
}

/**
 * fungsi untuk pencarian kata dalam nested array
 * 
 * @param array
 */
// function find2(array $arr, string $text) : string {
//     $result = '';

//     $arrText = str_split($text);

//     for ($i = 0; $i < count($arr); $i++) {
//         for ($j = 0; $j < count($arr[$i]); $j++) {
//             if (in_array($arrText[$j], $arr[$i])) {
//                 $result .= $arrText[$j];
//             }
//         }
//     }

//     return $result;
// }

/* one */
// $scores = '72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86';
// var_dump(averageScore($scores));
// var_dump(highestScore($scores));
// var_dump(lowestScore($scores));

/* two */
// $text = 'TranSISI testAb';
// var_dump('a' == 'A');
// var_dump(countLowerCase($text));

/* three */
// $text2 = 'Jakarta adalah ibukota negara Republik Indonesia Test Another Lagi';
// echo generateGrams($text2);
