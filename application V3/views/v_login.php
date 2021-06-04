<div class="user-overlay"></div>
<div class="user-overlay-circle"></div>
<div class="user-overlay-circle2"></div>

<div class="account-container stacked">
    <div class="clear"></div>
    <div class="content custom-form custom-form-icon icon-left">
        <span><?= $this->session->flashdata("message"); ?></span>
        <h6>Login</h6>
        <form action="<?= base_url('main/login'); ?>" method="post" accept-charset="utf-8">
            <div class="custom-form">
                <div class="form-group">
                    <div class="fas fa-user"></div>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter username..." required="required" autocomplete="off" value="<?= set_value('username') ?>" />
                    <span class="text-danger"><?= form_error('username'); ?></span>
                    <label>Username</label>
                </div>
                <div class="form-group">
                    <div class="fas fa-key"></div>
                    <input type="text" id="password" name="password" class="form-control" placeholder="" required="required" autocomplete="off" />
                    <label>Password</label>
                </div>
            </div>
            <a href="#"><b>I've forgotten my password</b></a>
            <div class="login-actions">
                <button class="login-action btn btn-primary btn-lg btn-block btn-pill fs18px mobile-fs14px" type="submit" name="submit" value="login">
                    Masuk
                </button>
            </div>
        </form>
    </div>
    <a href="<?= base_url(); ?>" class="user-back"> <span class="fas fa-chevron-left"></span> Homepage</a>
</div>