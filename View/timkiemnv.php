<htmml>

    <body>
        <form action="../Controller/C_Nhanvien.php" name="timkiem" method="POST">
            <table name="tableSearch">
                <CAPTION>SEARCH</CAPTION>
                <TR style="margin-bottom : 30px">
                    <TH><input type=radio name="radio" value="id" checked="true"> IDNV </TH>
                    <TH><input type=radio name="radio" value="HoTen"> Ho ten </TH>
                    <TH><input type=radio name="radio" value="Diachi"> Dia chi</TH>
                </TR>
                <TR style="margin-right :40px ">
                    <TH> Nhập Thông Tin : <input style="margin-left : 20px" type=text name="txt_search" value="" required></TH>
                </TR>
                <TR style="margin-left : 140px">
                    <TH><input type="submit" name="btn_search" value="OK"> </TH>
                    <TH><input type=reset value=RESET></TH>
                </TR>
            </table>
        </form>
    </body>


    </html>