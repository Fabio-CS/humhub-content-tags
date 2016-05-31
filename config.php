<?php

use app\modules\contenttags\Module;
use humhub\modules\content\widgets\WallEntryLinks;

return [
    'id' => 'contenttags',
    'class' => 'app\modules\contenttags\Module',
    'namespace' => 'app\modules\contenttags',
    'events' => array(
        array('class' => WallEntryLinks::className(), 'event' => WallEntryLinks::EVENT_INIT, 'callback' => array('app\modules\contenttags\Events', 'onWallEntryLinksInit')),
    ),
];
?>
