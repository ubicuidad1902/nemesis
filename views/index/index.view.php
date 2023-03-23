<?php

use App\Models\Templates;
$PLANTILLA = new Templates();

$PLANTILLA->header();

?>

<body>


Hola

<?php echo $PLANTILLA->scripts(); ?>
</body>