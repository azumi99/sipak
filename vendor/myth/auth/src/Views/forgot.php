<?= $this->extend($config->viewLayout); ?>
<?= $this->section('title'); ?>
Register | sipak
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h3 class="auth-title">sipak.</h3>
                <p class="auth-subtitle mb-5"><?= lang('Auth.enterEmailForInstructions') ?></p>
                <?= view('Myth\Auth\Views\_message_block') ?>


                <form action="<?= route_to('forgot') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="email"><?= lang('Auth.emailAddress') ?></label>
                        <input type="email" class="form-control form-control-xl <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Ingat akun mu? <a href="<?= route_to('login') ?>" class="font-bold">Log in</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>