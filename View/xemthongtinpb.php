<?php
echo '<TABLE border = "1" width ="100%">';
echo '<caption> Du lieu bang Phong Ban</caption>';
echo '<TR><TH>IDPB</TH> <TH>TEN PB </TH><TH>Mo Ta</TH> <TH>Xem nhan vien</TH></TR>';

for ($i = 1; $i < sizeof($phongbanList); $i++) {
    echo
    '<TR><TD>' . $phongbanList[$i]->idpb . '</TD><TD>' . $phongbanList[$i]->tenpb . '</TD><TD>' . $phongbanList[$i]->mota . "</TD> <TD><a href ='?idpb=" . $phongbanList[$i]->idpb . "'>... </a></TD></TR>";
}
echo '</TABLE>';
