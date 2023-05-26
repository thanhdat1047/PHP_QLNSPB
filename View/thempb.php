<?php
$link = mysqli_connect("localhost", "root", "") or die("could not connect to database!!!");
mysqli_select_db($link, "dulieu");
?>
<html>
<header>

</header>

<body>
    <form name="formthemnv" action="../Controller/C_Phongban.php" method="POST">
        <table>
            <caption>
                <h2>Them phong ban</h2>
            </caption>
            <TR>
                <TH>IDPB : </TH>
                <TH><input type=text name="txt_IDPB" placeholder="IDPB" required> </TH>

            </TR>
            <TR>
                <TH>Ten Phong Ban : </TH>
                <TH><input type=text name="txt_TPB" placeholder="TPB" required> </TH>
            </TR>
            <TR>
                <TH>Mo Ta: </TH>
                <TH><input type=text name="txt_MT" placeholder="Mota" required> </TH>
            </TR>
            <TR>
                <TH> <input type=submit name="add" value="ADD"> </TH>
                <TH> <input type=reset value="RESET"></TH>
            </TR>
        </table>
    </form>

</body>


</html>