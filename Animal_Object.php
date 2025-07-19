<?php

include ('Animal_Class.php');
    $name = htmlspecialchars($_POST['name']);
	$type = htmlspecialchars($_POST['type']);
    $age = htmlspecialchars($_POST['age']);
	$size = htmlspecialchars($_POST['size']); 



$my_animal = new Animal( $type, $age, $size);

require 'template-diet/head.php';
?>

<body>
    <h1>Animal Diet for <?php echo $name ?></h1>

    <?php $my_animal->functionDiet(); ?>

    </body>






<?php require 'template/footer.php'; ?>


</html>

