<?php
//tao slectec lay id      
//lay idpb truyen ve truy van

echo " <table border = 1  width = 100%  >
                <caption style = 'font-size : 30px'>Cap nhat  phong ban </caption>
                <tr>
                    <th>IBPB</th>
                    <th>Ten PB</th>
                    <th>Mo ta</th>
                    <th>Cap nhat</th>
                </tr>";
for ($i = 1; $i < sizeof($phongbanList); $i++) {
    echo "
                <TR>
                <TD>" . $phongbanList[$i]->idpb . "</TD> <TD>" . $phongbanList[$i]->tenpb . "</TD> <TD>" . $phongbanList[$i]->mota . "</TD> <TD style = 'text-align : center'><a href ='?pbidup=" . $phongbanList[$i]->idpb . "'>xxx</a></TD>
                </TR>
                ";
}
echo "</table>";
