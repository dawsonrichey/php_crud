<?php

$cars = ['volvo','audi','fiat', 'saab'];
// $num_cars = count($cars);
// $i = 0;

// while($i <= $num_cars){
//     echo '<option value="';
//     echo $cars[$i];
//     echo '">';
//     echo $cars[$i];
//     echo '</option>';
//     $i++;
// }


function form_options($value, $other, $label) {
    echo <<<EOT
    <label for="$value">$label</label>
    <select name="$value" id="$value"> 
    EOT;
        foreach($other as $it){
            echo <<<EOT
            <option value="$it">$it</option>
            EOT;
        }
    echo <<<EOT
    </select>
    EOT;
}


// form_options('car', $cars, 'Choose Car');

?>


<?php 
    // while($i <= $num_cars){
    //     echo '<option value="' + $cars[$i] + '">' + $cars[$i] + '</option>';
    //     $i++;
    // }
?>