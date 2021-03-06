<link rel="stylesheet" href="./css/style.css">
<?php

date_default_timezone_set('Europe/Amsterdam');


if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    
    $ym = date('Y-m');
}


$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}


$today = date('Y-m-j', time());


$html_title = date('Y / m', $timestamp);


$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));



$day_count = date('t', $timestamp);
 

$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));




$weeks = array();
$week = '';


$week .= str_repeat('<td></td>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     
    
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        
        $week = '';
    }

} ?>

<div class="container">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <table class="table table-bordered">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>