<?= $this->extend($config->viewLayout); ?>
<?= $this->section('title'); ?>
Login | sipak
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h3 class="auth-title">sipak.</h3>
                <p class="auth-subtitle mb-5">Login sistem informasi manajemen pertanian karet</p>
                <div><?= view('Myth\Auth\Views\_message_block') ?></div>

                <form action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="form-group mb-4 ">
                            <input type="text" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group mb-4 ">
                        <input type="password" name="password" class="form-control form-control-xl <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>
                    <?php if ($config->allowRemembering) : ?>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <label class="form-check-label text-gray-600">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <?php if ($config->allowRegistration) : ?>

                    <?php endif; ?>
                    <?php if ($config->activeResetter) : ?>
                        <p><a class="font-bold" href="<?= base_url('forgot'); ?>">Forgot password?</a>.</p>
                    <?php endif; ?>
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