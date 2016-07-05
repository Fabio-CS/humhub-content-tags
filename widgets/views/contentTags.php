<?php
namespace app\modules\contenttags;

use yii\helpers\Html;
Assets::register($this);
?>
<div class="tags-container">
	<div class="content-tags">
            <h3><?php /* print_r($content) */?></h3>
            <?php foreach($object->content->tags as $tag) {
                echo Html::a('<a class="label label-default" href="#' . $tag->id . '">' . $tag->name . '</a> &nbsp;'); }
            ?>
	</div>
</div>