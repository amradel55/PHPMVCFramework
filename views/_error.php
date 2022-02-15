<?php

/**
 *@var $exception \Exception
 */

?>

<h1>ERROR</h1>
<h2><?php echo $exception->getCode(); ?></h2>
<p><?php echo $exception->getMessage(); ?></p>