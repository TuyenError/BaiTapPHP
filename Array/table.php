<style>
    table{
        border: black 1px solid;
    }
    tr, td{
        border: black 1px solid;
    }
</style>

<?php #Rendering data to table

$account = array(
    "Timmy" => "1234",
    "Tuyen" => "5678",
    "Error" => "9123"
);


echo "Danh sách các thành viên";
echo "<table><tr><th>STT</th><th>Username</th><th>Pass</th></tr>";
$i = 1;
foreach ($account as $a => $b) {
    echo "<tr><td>$i</td><td>$a</td><td>$b</td></tr>";
    $i++;
}
;
echo "</table>";
?>