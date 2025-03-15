<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>

<div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Sistem Kerugian Negara</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masuk ke Sistem dengan SSO</h5>
                    <p class="text-center small">Masukkan username dan password SSO BPS untuk masuk ke Sistem</p>
                  </div>
                  
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'class'=>'row g-3 needs-validation',
                    ]); ?>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'form-control', 'id'=>'yourUsername','onblur'=>'Username', 'style'=>'color : #000000'])->label(false) ?>
                        <div class="invalid-feedback">Masukkan Username.</div>
                      </div>
                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'id'=>'yourPassword','style'=>'color : #000000'])->label(false) ?>
                        <div class="invalid-feedback">Masukkan Password</div>
                      </div>
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"col-md-offset-3 col-md-8\" style=\"color: white\" >{input} {label}{error}</div>",
                            ])->label() ?>
                            
                    <br>
                    <div class="col-12">
                      <?= Html::submitButton('Login',['class' => 'btn btn-primary w-100']) ?>
                    </div>
                    
                    <?php ActiveForm::end(); ?>

                </div>
              </div>

              <div class="credits">
                
               <a href="#">BPS Biro Keuangan 2024</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>