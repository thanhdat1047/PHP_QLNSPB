<html>
<form name=formdl action="../Controller/C_Nhanvien.php" method="POST">
    <?php
    echo "<table border = 1 width = 100%>
            <caption style = 'font-size : 30px;'>Xóa Nhân Viên</caption>";
    echo "<TR>
                            <TH>Mã NV</TH>
                            <TH>Tên NV</TH>
                            <TH>Mã PB</TH>
                            <TH>Địa Chỉ</TH>
                            <TH>chọn</TH>
                        </TR>";
    for ($i = 1; $i <= sizeof($nhanvienList); $i++) {
        echo  "<TR>
                            <TD>" . $nhanvienList[$i]->idnv . "</TD><TD>" . $nhanvienList[$i]->hoten . "</TD><TD>" . $nhanvienList[$i]->idpb . "</TD><TD>" . $nhanvienList[$i]->diachi . "</TD><TD style = 'text-align:center'><input type = checkbox name = " . $nhanvienList[$i]->idnv . " value =" . $nhanvienList[$i]->idnv . "></TD>
                        </TR>";
    }
    echo "</table>";
    echo "<table>";
    echo "  <tr>
                    <th><input type = submit  name = 'xoatatca' value = 'DELETE ALL'></th>
                    <th><input type = reset  name = 'xoatatca' value = 'RESET'></th>
                    </tr>                  
                    ";
    echo "</table>";
    ?>
</form>


</html>