<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-form">
                <div class="card-body">
                    <h4 class="text-center"><?php echo e(trans('plugins/real-estate::dashboard.login-title')); ?></h4>
                    <br>
                    <?php echo $__env->make(Theme::getThemeNamespace() . '::views.real-estate.account.auth.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <br>
                    <form method="POST" action="<?php echo e(route('public.account.login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input id="email" type="text"
                                   class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.email_or_username')); ?>"
                                   name="email" value="<?php echo e(old('email')); ?>" autofocus>
                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                   class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                   placeholder="<?php echo e(trans('plugins/real-estate::dashboard.password')); ?>" name="password">
                            <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(trans('plugins/real-estate::dashboard.remember-me')); ?>

                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-md-center">
                                    <a href="<?php echo e(route('public.account.password.request')); ?>">
                                        <?php echo e(trans('plugins/real-estate::dashboard.forgot-password-cta')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-blue btn-full fw6">
                                <?php echo e(trans('plugins/real-estate::dashboard.login-cta')); ?>

                            </button>
                        </div>

                        <div class="form-group text-center">
                            <p><?php echo e(__("Don't have an account?")); ?> <a href="<?php echo e(route('public.account.register')); ?>" class="d-block d-sm-inline-block text-sm-left text-center"><?php echo e(__('Register a new account')); ?></a></p>
                        </div>

                        <div class="text-center">
                            <?php echo apply_filters(BASE_FILTER_AFTER_LOGIN_OR_REGISTER_FORM, null, \Botble\RealEstate\Models\Account::class); ?>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\immo\platform/themes/flex-home/views/real-estate/account/auth/login.blade.php ENDPATH**/ ?>