<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>

<div style="background-color: #fff; min-height: 220px; width: 80%; margin: 0 auto;">
    <div style="width: 80%; padding-left: 20%; padding-right: 20%; padding-bottom: 10px; padding-top: 2%">
        <p>
            &nbsp;
        </p>

        <h1><?= Html::encode($this->title) ?></h1>

        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>

        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
        </p>
        <p>
            &nbsp;
        </p>
    </div>

</div>
