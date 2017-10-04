<?php
/**
 * Created by PhpStorm.
 * User: 005500691
 * Date: 10/4/2017
 * Time: 1:24 PM
 */
$hexDig = "";
$table = "<table>";
for ($row=1; $rows<=9; $rows++){
    $table .= "\t<tr>";
    for ($cols=1; $cols<=9; $cols++){
        $table .= "<td>";
        for ($hex=0; $hex <6; $hex++) {
            $hexDig .= dechex(mt_rand(1, 16));
        }
        $table .= "bgcolor=\"";
        $table .= (string)$hexDig;
        $table .= "\">";
        $table .= "<pre>";
        $table .= (string)$hexDig .= "";
        $table .= "<font color=\"white\">";
        $table .= (string) $hexDig;
        $table .= "</font>";
        $table .= "</pre>";
        $table .= "</td>";

        $hexDig = "";

    }
    $table .= "</tr>\n";
}
$table .= "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>TITLE</title>
</head>
<body>
<?php echo $table;?>
</body>

</html>

