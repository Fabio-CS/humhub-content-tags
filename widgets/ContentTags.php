<?php

namespace app\modules\contenttags\widgets;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

class ContentTags extends \yii\base\Widget
{

    public $object;
    
    public function init(){
        
    }
    
    public function run()
    {
    	$permaLink = Url::to(['/content/perma', 'id' => $this->object->content->id], true);
        return $this->render('contentTags', array(
        			'object' 	=> $this->object,
        			'id' 		=> $this->object->getUniqueId(),
        			'permalink'	=> $permaLink,
        ));
    }

}

?>
