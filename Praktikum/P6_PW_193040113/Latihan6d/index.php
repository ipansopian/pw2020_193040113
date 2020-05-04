<?php 

require 'php/functions.php';

$buku = query("SELECT * FROM bukubestseller");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
</head>
<body>
    
    <div class ="container">
        <?php foreach ($buku as $row) : ?> 
            <p class="Nama Buku"></p>
                 <a href="php/detail.php ?id=<?= $row ['id'] ?>"> 
                    <?= $row ["Nama Buku"] ?>
                </a>
            </p>
<?php endforeach; ?>

             </table>
        </div>
    </body>
</html>