<html>

<head>
    <title>Delete SV</title>
    <meta charset="UTF-8">
    <!-- <script language="JavaScript">
        function getID(x) {
            alert(x.rowIndex);
            document.formDelete.txt_MSSV_Delete.value = x.rowIndex;
        }
    </script> -->
</head>

<body>
    <!-- <form name=formDelete action="../Controller/C_Student.php" method="POST"> -->
    <div style="margin-left: 30%">
        <table border=1 width=60%>
            <caption>
                <H3>Danh sách sinh viên</H3>
            </caption>
            <TR>
                <TH>IDNV</TH>
                <TH>NAME</TH>
                <TH>IDPB</TH>
                <TH>ADDRESS</TH>
            </TR>
            <?php
            for ($i = 1; $i <= sizeof($nhanvienList); $i++) {

                echo "<TD> " . $nhanvienList[$i]->idnv . "</TD>";
                echo "<TD> " . $nhanvienList[$i]->hoten . "</TD>";
                echo "<TD> " . $nhanvienList[$i]->idpb . "</TD>";
                echo "<TD> " . $nhanvienList[$i]->diachi . "</TD>";
                echo "<TD style = 'text-align : center'><a href ='?iddelete=" . $nhanvienList[$i]->idnv . "'>xxx</a></TD>";
                echo "</TR>";
            }
            ?>

        </table>
        <!-- <input type=text name="txt_ID_Delete" value="">
            <input type=submit value="Delete" name="delete"> -->
    </div>
    <!-- <p style="margin-left:30%"><a href="../index.php">Home Page</a></p> -->

    <!-- </form> -->


</body>


</html>