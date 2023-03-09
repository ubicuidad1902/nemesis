<?php

use App\Models\Templates;
$PLANTILLA = new Templates();
$PLANTILLA->studylab = true;
$PLANTILLA->header();

?>

<body>

<?php $PLANTILLA->barra_navegacion('') ?>
Hola
<?php echo $PLANTILLA->pie_pagina();?>
<?php echo $PLANTILLA->scripts(); ?>
</body>