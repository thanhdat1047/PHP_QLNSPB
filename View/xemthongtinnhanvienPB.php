<?php

echo '<TABLE border = "1" width = "100%">';
echo '<caption> Du lieu bang Nhan Vien theo phong ban</caption>';
echo '<TR><TH>IDNV</TH> <TH>HO TEN </TH> <TH>IDPB </TH> <TH>Dia Chi </TH></TR>';
if ($nhanvienpbs != -1) {
    for ($i = 1; $i <= sizeof($nhanvienpbs); $i++) {
        echo
        '<TR><TD>' . $nhanvienpbs[$i]->idnv . '</TD><TD>' . $nhanvienpbs[$i]->hoten . '</TD><TD>' . $nhanvienpbs[$i]->idpb . '</TD><TD>' . $nhanvienpbs[$i]->diachi . '</TD></TR>';
    }
    echo '</TABLE>';
} else {
    echo '</TABLE>';
    echo '<h5 style ="color:red;">  NULL </h5>';
}
