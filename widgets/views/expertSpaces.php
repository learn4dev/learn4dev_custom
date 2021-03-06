<?php

use yii\helpers\Html;
?>

<div class="panel panel-default spaces" id="new-spaces-panel">

    <!-- Display panel menu widget -->
    <?php echo humhub\widgets\PanelMenu::widget(array('id' => 'new-spaces-panel')); ?>
    <?php if (isset($aside) && $aside != false) { ?>
        <div class="panel-heading">
            <?php echo Yii::t('DirectoryModule.base', '<strong>Expert Group</strong> Spaces'); ?>
        </div>
        <?php
    }
    ?>
    <div class="panel-body">
        <?php foreach ($newSpaces as $space) : ?>
            <?php
            echo \humhub\modules\space\widgets\Image::widget([
                'space' => $space,
                'width' => 40,
                'link' => true,
                'htmlOptions' => [
                    'style' => 'margin-bottom: 5px;',
                ],
                'linkOptions' => [
                    'class' => 'tt',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'top',
                    'title' => Html::encode($space->name),
                ]
            ]);
            ?>
        <?php endforeach; ?>


    </div>
</div>