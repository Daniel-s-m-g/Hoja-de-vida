<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de Vida</title>
</head>
<body>
    <?php
    $nombre = "Daniel Males";
    $profesion = "Ingeniero de sistemas";
    $edad = 18;
    $habilidades = [
        "html",
        "CSS",
        "java",
        "C#",
        "JavaScript",
    ]
    ?>
    <h1><?php echo $nombre?></h1>
       <h1><?php echo $profesion?></h1>
       <p><?php echo "soy ". $nombre . "y soy ". $profesion?></p>

       <?php if($edad >= 18):?>
       <p>Disponible para trabajar</p>
       <?php else: ?>
        <p>Menor de edad - no puede trabajar</p>
        <?php endif; ?>
</body>
</html>