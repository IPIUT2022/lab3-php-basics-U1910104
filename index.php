<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 3</title>
    <style>
        h1, h2{
            text-align: center;
        }

    </style>
</head>
<body >
    <h1>Lab 3</h1>
<h2>Task 1</h2>
<div>
    <ul>
        <?php
        $color = array('white', 'green', 'red');
        sort($color);
        foreach($color as $color_name){ ?>
            <li><?= $color_name ?></li>
        <?php } ?>
    </ul>
</div>
<h2>Task 2</h2>
<div>
    <ul>
        <?php
        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
        asort($ceu);
        foreach($ceu as $country => $capital){ ?>
            <li>The capital of <?= $country ?> is  <?= $capital ?></li>
        <?php } ?>
    </ul>
</div>
<h2>Task 3</h2>
<div>
    <ul>
        <?php
        $myfile = fopen($_SERVER['DOCUMENT_ROOT']."/lab/file.txt", "r");
        while (!feof($myfile)) {
            $line = fgets ($myfile);
            $lineA = explode(" ", $line, 2);
            $data[$lineA[0]]= trim($lineA[1]);
        }
        fclose ($myfile);
        foreach($data as $key => $val){ ?>
            <li>Key: "<?= $key ?>", Value: "<?= $val ?>";</li>
        <?php } ?>
    </ul>
</div>
<h2>Task 4</h2>
<div>

        <?php
        $array = array(1, 2, 3, 4, 5);
        $offset = 3;
        $replacement = array('$');
        ?>
        <p>Original array:</p>
    <p>
        <?php
        foreach($array as $item){ ?>
             <?= $item . ' '?>
        <?php } ?>
    </p>
        <p>After inserting '$' the array is:</p>
        <?php
        array_splice($array, $offset, 0, $replacement); ?>
    <p>
        <?php
        foreach($array as $item){ ?>
            <?= $item . ' '?>
        <?php } ?>
    </p>
</div>
</body>
</html>
