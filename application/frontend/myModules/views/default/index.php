<?php
use yii\helpers\Html;
?>


<div class="my-default-index">
    <div class="jumbotron">
        <h1><?= Html::encode($time);?></h1>
        <? foreach($products as  $product):?>
            <h1><? echo"$product->id</br>";
                echo"$product->nameProduct </br>";?>
            </h1>
        <? endforeach;?>
    </div>

    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.

    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
