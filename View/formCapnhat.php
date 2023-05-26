<html>

<body>

    <form action="../Controller/C_Phongban.php" name="formcapnhat" method="POST">

        <table width=100%>
            <tr>
                <th>
                    IDPB :
                </th>
                <th>
                    <input size='20' name="txt_IDPB" value="<?php echo $phongban->idpb ?>" readonly="readonly">
                </th>
            </tr>
            <tr>
                <th>
                    Ten PB:
                </th>
                <th>
                    <input size='20' name="txt_Tenpb" value="<?php echo $phongban->tenpb ?>">
                </th>
            </tr>
            <tr>
                <th>
                    Mo ta:
                </th>
                <th>
                    <input size='20' name="txt_Mota" value="<?php echo $phongban->mota ?>">
                </th>
            </tr>

            <tr>
                <th>

                </th>
                <th>
                    <input type="submit" name="update" value="UPDATE">
                    <input type="reset" value="RESET">
                </th>
                <th></th>
            </tr>

        </table>
    </form>

</html>