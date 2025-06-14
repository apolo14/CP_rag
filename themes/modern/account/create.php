<?php if (!defined('FLUX_ROOT')) exit; ?>
<style>
    /* Container geral do formulário */
    .form-container {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-bottom: 20px;
    }
    .columns {
        display: flex;
        gap: 20px;
        width: 100%;
    }
    .column {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .form-group {
        margin-bottom: 15px;
    }
    input, select {
        padding: 8px;
        border-radius: 8px;
        border: 2px solid #ccc;
        background-color: #fff;
        box-sizing: border-box;
    }
    /* Para manter os campos da data de nascimento em uma única linha */
    .birthdate input {
        display: inline !important;
        width: auto;
        margin-right: 5px;
    }
    /* Botão centralizado */
    .button-container {
        text-align: center;
        margin-top: 20px;
    }
    .button-container button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
    .button-container button:hover {
        background-color: #0056b3;
    }
</style>

<section id="about">
    <h2><?php echo htmlspecialchars(Flux::message('AccountCreateHeading')) ?></h2>
    <p>
        <?php printf(
            htmlspecialchars(Flux::message('AccountCreateInfo')),
            '<a href="'.$this->url('service', 'tos').'">'.Flux::message('AccountCreateTerms').'</a>'
        ) ?>
    </p>

    <?php if (Flux::config('RequireEmailConfirm')): ?>
        <p><strong>Requisito:</strong> You will need to provide a working e-mail address to confirm your account before you can log-in.</p>
    <?php endif ?>

    <p>
        <strong>Requisito:</strong>
        <?php echo sprintf("Sua senha deve conter no mínimo %d e no máximo %d characters.", Flux::config('MinPasswordLength'), Flux::config('MaxPasswordLength')) ?>
    </p>
    <?php if (Flux::config('PasswordMinUpper') > 0): ?>
        <p><strong>Requisito:</strong> <?php echo sprintf(Flux::message('PasswordNeedUpper'), Flux::config('PasswordMinUpper')) ?></p>
    <?php endif ?>
    <?php if (Flux::config('PasswordMinLower') > 0): ?>
        <p><strong>Requisito:</strong> <?php echo sprintf(Flux::message('PasswordNeedLower'), Flux::config('PasswordMinLower')) ?></p>
    <?php endif ?>
    <?php if (Flux::config('PasswordMinNumber') > 0): ?>
        <p><strong>Requisito:</strong> <?php echo sprintf(Flux::message('PasswordNeedNumber'), Flux::config('PasswordMinNumber')) ?></p>
    <?php endif ?>
    <?php if (Flux::config('PasswordMinSymbol') > 0): ?>
        <p><strong>Requisito:</strong> <?php echo sprintf(Flux::message('PasswordNeedSymbol'), Flux::config('PasswordMinSymbol')) ?></p>
    <?php endif ?>
    <?php if (!Flux::config('AllowUserInPassword')): ?>
        <p><strong>Requisito:</strong> <?php echo Flux::message('PasswordContainsUser') ?></p>
    <?php endif ?>

    <?php if (isset($errorMessage)): ?>
        <p class="red" style="font-weight: bold"><?php echo htmlspecialchars($errorMessage) ?></p>
    <?php endif ?>

    <!-- Início do formulário -->
    <form action="<?php echo $this->url ?>" method="post" class="generic-form" id="formularioTeste">
        <?php if (count($serverNames) === 1): ?>
            <input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
        <?php endif ?>

        <?php if (count($serverNames) > 1): ?>
            <div class="form-group">
                <label for="register_server"><?php echo htmlspecialchars(Flux::message('AccountServerLabel')) ?></label>
                <select name="server" id="register_server"<?php if (count($serverNames) === 1) echo ' disabled="disabled"' ?>>
                    <?php foreach ($serverNames as $serverName): ?>
                        <option value="<?php echo htmlspecialchars($serverName) ?>"<?php if ($params->get('server') == $serverName) echo ' selected="selected"' ?>>
                            <?php echo htmlspecialchars($serverName) ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
        <?php endif ?>

        <div class="form-container">
            <div class="columns">
                <!-- Primeira coluna: Login, Gênero e Data de nascimento -->
                <div class="column">
                    <div class="form-group">
                        <label for="register_username"><?php echo htmlspecialchars(Flux::message('AccountUsernameLabel')) ?></label>
                        <input type="text" name="username" id="register_username" value="<?php echo htmlspecialchars($params->get('username') ?: '') ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo htmlspecialchars(Flux::message('AccountGenderLabel')) ?></label>
                        <div>
                            <label>
                                <input type="radio" name="gender" id="register_gender_m" value="M"<?php if ($params->get('gender') === 'M') echo ' checked="checked"' ?> /> <?php echo $this->genderText('M') ?>
                            </label>
                            <label>
                                <input type="radio" name="gender" id="register_gender_f" value="F"<?php if ($params->get('gender') === 'F') echo ' checked="checked"' ?> /> <?php echo $this->genderText('F') ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?php echo htmlspecialchars(Flux::message('AccountBirthdateLabel')) ?></label>
                        <div class="birthdate">
                            <?php echo $this->dateField('birthdate', null, 0) ?>
                        </div>
                    </div>
                </div>

                <!-- Segunda coluna: E-mail, Senha, Confirmação de senha e Confirmação de e-mail -->
                <div class="column">
                    <div class="form-group">
                        <label for="register_email_address"><?php echo htmlspecialchars(Flux::message('AccountEmailLabel')) ?></label>
                        <input type="text" name="email_address" id="register_email_address" value="<?php echo htmlspecialchars($params->get('email_address') ?: '') ?>" />
                    </div>
                    <div class="form-group">
                        <label for="register_password"><?php echo htmlspecialchars(Flux::message('AccountPasswordLabel')) ?></label>
                        <input type="password" name="password" id="register_password" />
                    </div>
                    <div class="form-group">
                        <label for="register_confirm_password"><?php echo htmlspecialchars(Flux::message('AccountPassConfirmLabel')) ?></label>
                        <input type="password" name="confirm_password" id="register_confirm_password" />
                    </div>
                    <div class="form-group">
                        <label for="register_email_address2"><?php echo htmlspecialchars(Flux::message('AccountEmailLabel2')) ?></label>
                        <input type="text" name="email_address2" id="register_email_address2" value="<?php echo htmlspecialchars($params->get('email_address2') ?: '') ?>" />
                    </div>
                </div>
            </div>
        </div>

        <?php if (Flux::config('UseCaptcha')): ?>
            <div class="form-group">
                <?php if (Flux::config('ReCaptchaPublicKey') === '...' || Flux::config('ReCaptchaPrivateKey') === '...'): ?>
                    <label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
                    <div class="no-recaptcha" style="color: red"><?php echo htmlspecialchars(Flux::message('AccountRecaptchaKey')) ?></div>
                <?php else: ?>
                    <?php if (Flux::config('EnableReCaptcha')): ?>
                        <label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
                        <div class="g-recaptcha" data-theme="<?php echo $theme;?>" data-sitekey="<?php echo $recaptcha ?>"></div>
                    <?php else: ?>
                        <label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label>
                        <div class="security-code">
                            <img src="<?php echo $this->url('captcha') ?>" />
                        </div>
                        <input type="text" name="security_code" id="register_security_code" />
                        <div style="font-size: smaller;" class="action">
                            <strong><a href="javascript:refreshSecurityCode('.security-code img')"><?php echo htmlspecialchars(Flux::message('RefreshSecurityCode')) ?></a></strong>
                        </div>
                    <?php endif ?>
                <?php endif ?>
            </div>
        <?php endif ?>

        <div class="button-container">
            <div style="margin-bottom: 5px">
                <?php printf(
                    htmlspecialchars(Flux::message('AccountCreateInfo2')),
                    '<a href="'.$this->url('service', 'tos').'">'.Flux::message('AccountCreateTerms').'</a>'
                ) ?>
            </div>
            <button type="submit" class="g-recaptcha"data-sitekey="6LcaqVMrAAAAAI62Mas2M_T7yblbLzOtsecnM4VE" 
        data-callback='onSubmit' ><strong><?php echo htmlspecialchars(Flux::message('AccountCreateButton')) ?></strong></button>
        </div>
    </form>
</section>