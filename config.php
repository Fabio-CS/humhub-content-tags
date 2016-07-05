<?php

use app\modules\contenttags\Module;
use humhub\modules\content\widgets\WallEntryAddons;
use humhub\modules\content\widgets\WallEntryLinks;

return [
    'id' => 'contenttags',
    'class' => 'app\modules\contenttags\Module',
    'namespace' => 'app\modules\contenttags',
    'events' => array(
        array('class' => WallEntryAddons::className(), 'event' => WallEntryAddons::EVENT_INIT, 'callback' => array('app\modules\contenttags\Events', 'onWallEntryAddonsInit')),
    ),
];
?>
