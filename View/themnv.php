<?php
$link = mysqli_connect("localhost", "root", "") or die("could not connect to database!!!");
mysqli_select_db($link, "dulieu");
$sql = "SELECT IDPB FROM phongban";
$rs = mysqli_query($link, $sql);

?>
<html>
<header>

</header>

<body>
    <form name="formthemnv" action="../Controller/C_Nhanvien.php" method="POST">
        <table>
            <caption>
                <h1>Them phong ban</h1>
            </caption>
            <TR>
                <TH>IDNV : </TH>
                <TH><input type=text name="txt_IDNV" placeholder="IDNV" required> </TH>

            </TR>
            <TR>
                <TH>Ho ten : </TH>
                <TH><input type=text name="txt_Hoten" placeholder="Ho ten" required> </TH>
            </TR>
            <TR>
                <TH>Ma Phong Ban :</TH>
                <TH>
                    <Select name="select">
                        <?php
                        for ($i = 1; $i <= sizeof($idpb); $i++) {

                            echo "<option>" . $idpb[$i] . "</option>";
                        }
                        ?>
                    </Select>
                </TH>
            </TR>
            <TR>
                <TH>Dia chi: </TH>
                <TH><input type=text name="txt_DC" placeholder="Diachi" required> </TH>
            </TR>
            <TR>
                <TH> <input type=submit name="add" value="ADD"></TH>
                <TH> <input type=reset value="RESET"></TH>
            </TR>


        </table>
    </form>

</body>


</html>