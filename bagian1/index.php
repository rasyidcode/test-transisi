<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Bagian 1</title>
</head>
<body>
    <?php require_once('func.php'); ?>

    <?php
    $scores = '72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86';
    $text = 'TranSISI';
    $text2 = 'Jakarta adalah ibukota negara Republik Indonesia Test Another Lagi';
    $arr = [
        ['f', 'g', 'h', 'i'],
        ['j', 'k', 'p', 'q'],
        ['r', 's', 't', 'u']
    ];
    ?>

    <ul>
        <li>
            <h3>1.</h3>
            <div>Nilai Rata-rata : <?php echo averageScore($scores);  ?></div>
            <div>Nilai Tertinggi : <?php echo highestScore($scores);  ?></div>
            <div>Nilai Terendah : <?php echo lowestScore($scores);  ?></div>
        </li>
        <li>
            <h3>2.</h3>
            <div>Output : <?php echo countLowercase($text);  ?></div>
        </li>
        <li>
            <h3>3.</h3>
            <div><?php echo generateGrams($text2, false);  ?></div>
        </li>
        <li>
            <h3>4.</h3>
            <div>
            <?php echo table(8, 8); ?>
            </div>
        </li>
        <li>
            <h3>5.</h3>
            <div>
            <?php echo encrypt('DFHKNQ'); ?>
            </div>
        </li>
        <li>
            <h3>6.</h3>
            <div>
            <?php $test1 = 'fghi'; $test2 = 'fghp'; $test3 = 'fjrstp'; ?>

            <?php echo $test1 . ' => ' . (find($arr, $test1) ? 'true' : 'false') ?>
            <?php echo '<br />'; ?>

            <?php echo $test2 . ' => ' . (find($arr, $test2) ? 'true' : 'false') ?>
            <?php echo '<br />'; ?>

            <?php echo $test3 . ' => ' . (find($arr, $test3) ? 'true' : 'false') ?>
            <?php echo '<br />'; ?>

            </div>
        </li>
    </ul>
</body>
</html>