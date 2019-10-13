<?php

$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($data);

$panjang = count($data);
for($i = 0; $i < $panjang; $i++) {
    echo $data[$i];
    echo "<br>";
}

?>