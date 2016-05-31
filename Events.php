<?php

namespace app\modules\contenttags;

use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => 'ContentTags',
            'url' => Url::toRoute('/contenttags/main/index'),
            'icon' => '<i class="fa fa-sun-o"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'contenttags'),
        ));
    }
    
    public static function onWallEntryLinksInit($event)
    {
    	$event->sender->addWidget(widgets\ContentTags::className(), array('object' => $event->sender->object), array('sortOrder' => 10));
    }

}
