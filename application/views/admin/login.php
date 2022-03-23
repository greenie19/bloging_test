<?php include('header.php'); ?>
<section class="vh-100" style="background-color: #b4b4b4;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5" style="color:blue;"><b>Sign in</b></h3>
                        <?php if ($error = $this->session->flashdata('Login_failed')) :  ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-danger">
                                        <?= $error; ?>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>
                        <?php echo form_open('login/index') ?>
                        <?php echo validation_errors(); ?>
                        <h4>Email Address</h4>
                        <input type="text" name="username" value="" 'required|alpha' size="50" style="height: 50;margin-bottom:20px;" />
                        <h4>Password</h4>
                        <input type="password" name="password" value="" 'required|max_length[12]' size="50" style="height: 50;margin-bottom:40px;" />
                        <?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Submit']);  ?>
                        <?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-primary', 'value' => 'Reset']);  ?>
                        <?php echo anchor('admin/register', 'Sign up?', 'class="link-class"') ?>
                        <!-- <button name="ResetForm" class="btn waves-effect waves-light" id="ResetForm" type="button">Reset Data</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>