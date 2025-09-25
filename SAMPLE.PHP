<?php
$word = "DIOLA, KIAN SHIM B.";
$nlen = strlen($word);
$lettersArray = str_split($word);

?>
<table border="1">
    <tr>
        <?php
        for ($i = 0; $i < $nlen; $i++) {
            echo "<td>" . (isset($lettersArray[$i]) ? $lettersArray[$i] : '') . "</td>\n";
        }
        ?>

    </tr>
</table>