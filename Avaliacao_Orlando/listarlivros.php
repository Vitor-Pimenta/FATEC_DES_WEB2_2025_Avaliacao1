<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
    <link rel="stylesheet" href="style2.css">
</head>
    <h2>Nossos Livros</h2><br>
    <body>
    <?php
$filename = "livros.txt";
if(!file_exists("livros.txt")){
    $handle = fopen("livros.txt", "w");
} else {
    $handle = fopen("livros.txt", "a");
}
fflush($handle);
fclose($handle);

$handle = fopen("livros.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
?>
    </body>
</html>