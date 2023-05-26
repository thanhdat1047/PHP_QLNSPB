<html>
<?php
echo " <table border = 1  width = 100%  >
    <caption style = 'font-size : 30px'>Cap nhat  sinh vien </caption>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>UNIVERSITY</th>
        <th>UPDATE</th>
    </tr>";
for ($i = 1; $i <= sizeof($studentList); $i++) {

    //tao slectec lay id      
    //lay idpb truyen ve truy van
    echo "
                <TR>
                <TD>" . $studentList[$i]->id . "</TD> <TD>" . $studentList[$i]->name . "</TD> <TD>" . $studentList[$i]->age . "</TD><TD>" . $studentList[$i]->university . "</TD> <TD style = 'text-align : center'><a href ='?idadd=" . $studentList[$i]->id . "'>xxx</a></TD>
                </TR>
                ";
}
echo "</table>";


?>
<!-- <p><a href="javascript:history.back()">Back</a></p> -->

</html>