<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="col-md-12">
    <div class="col-md-5 col-md-offset-2">
        <h2><?= $this->title ?></h2>

        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>


        <?php if (Yii::$app->session->hasFlash('danger')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                <?= Yii::$app->session->getFlash('danger') ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="col-md-12">
        <?php
        $form = ActiveForm::begin([
            'id' => 'country-form',
            'options' => [
                'class' => 'form-horizontal'
            ],
            'fieldConfig' => [
                'template' => "
                {label} \n 
                <div class='col-md-5'>{input}</div> \n 
                <div class='col-md-5'>{hint}</div> \n
                <div class='col-md-5'>{error}</div>
                ",
                'labelOptions' => ['class' => 'col-md-2 control-label'],
            ]
        ]);
        ?>

        <?= $form->field($country, 'name') ?>
        <?= $form->field($country, 'population') ?>
        <?= $form->field($country, 'status')->checkbox(
            [
                'template' =>
                    "
                {label} \n 
                <div class='col-md-5'>{input}</div> \n 
                <div class='col-md-5'>{hint}</div> \n
                <div class='col-md-5'>{error}</div>
            ",
                'labelOptions' => ['class' => 'col-md-2 control-label']
            ],
            false
        ) ?>

        <div class="form-group">
            <div class="col-md-5 col-md-offset-2">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

