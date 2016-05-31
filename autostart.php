<?php

Yii::app()->moduleManager->register(array(
    'id' => 'contenttags',
    'class' => 'application.modules.contenttags.Module',
    'import' => array(
        'application.modules.contenttags.*',
    ),
    'events' => array(
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('Events', 'onTopMenuInit')),
    ),
));
?>
