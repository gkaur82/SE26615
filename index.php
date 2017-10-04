<?php
$table = "<table>";
for ($rows=0; $rows <9; $rows++){
    $table .= "\t<tr>";
    for ($cols=0; $cols<9; $cols++){
        $table .= "<td>" . $rows * $cols . "</td>";
    }
    $table.= "</tr>\n";
}
$table .= "</table>";
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>