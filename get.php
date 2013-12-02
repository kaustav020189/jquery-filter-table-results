<?php
include_once 'dbcon.php';

connect();

$data = $_POST['data'];

$query2 = "SELECT * FROM students WHERE (name LIKE '$data%' OR id LIKE '$data%' OR stream LIKE '$data%')";
$result2 = mysql_query($query2) 
or die();

$str = '<tr>
                <td class="heading">Student ID</td>
                <td class="heading">Name</td>
                <td class="heading">Stream</td>
                <td class="heading">Phone</td>
                <td class="heading">D.O.B.</td>
                </tr>';

while($row=mysql_fetch_row($result2)){
    $str.= '<tr><td>'.$row[0].'</td>'.'<td>'.$row[1].'</td>'.'<td>'.$row[2].'</td>'.'<td>'.$row[3].'</td>'.'<td>'.$row[4].'</td></tr>';
}

echo $str;
?>
