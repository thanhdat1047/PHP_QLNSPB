<?php

echo '<TABLE border = "1" width ="100%">';
echo '<caption> Du lieu bang Nhan Vien</caption>';
echo '<TR><TH>IDNV</TH> <TH>HO TEN </TH> <TH>IDPB </TH> <TH>Dia Chi </TH></TR>';

for ($i = 1; $i <= sizeof($nhanvienList); $i++) {
    echo
    '<TR><TD>' . $nhanvienList[$i]->idnv . '</TD><TD>' . $nhanvienList[$i]->hoten . '</TD><TD>' . $nhanvienList[$i]->idpb . '</TD><TD>' . $nhanvienList[$i]->diachi . '</TD></TR>';
}
echo '</TABLE>';
