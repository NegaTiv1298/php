<?php
$arr = [
    ['name'=>'Коля', 'age'=>30, 'salary'=>500],
    ['name'=>'Вася', 'age'=>31, 'salary'=>600],
    ['name'=>'Петя', 'age'=>32, 'salary'=>700],
];
echo '<table>'. '<tr>';

foreach ($arr as $elem) {
    $name = $elem['name'];
    $age = $elem['age'];
    $salary = $elem['salary'];
    echo
    "<tr>         
           <td>$name</td> 
           <td>$age</td> 
           <td>$salary</td>           
    </tr>";
}
echo '</tr>'.'</table>';
?>