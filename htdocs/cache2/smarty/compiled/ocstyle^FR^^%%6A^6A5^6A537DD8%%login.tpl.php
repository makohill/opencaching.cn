<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:39
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login.tpl', 14, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    登陆
</div>

<div class="systemlink">
<form action="<?php echo $this->_tpl_vars['opt']['page']['login_url']; ?>
" method="post" enctype="application/x-www-form-urlencoded" style="display: inline;">
    <input type="hidden" name="target" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
    <input type="hidden" name="action" value="login" />
    <input type="hidden" name="source" value="loginpage" />
    <div class="content-txtbox-noshade">
        <p style="line-height: 1.6em;" <?php if ($this->_tpl_vars['error'] != LOGIN_OK && $this->_tpl_vars['error'] != LOGIN_LOGOUT_OK): ?>class="errormsg"<?php endif; ?>>
            <?php if ($this->_tpl_vars['error'] != LOGIN_OK): ?>
                <?php if ($this->_tpl_vars['error'] == LOGIN_BADUSERPW): ?>
                    La connexion n'est pas réussie.<br />
                    Le nom d'utilisateur ou le mot de passe ne correspondent pas.<br />
                <?php elseif ($this->_tpl_vars['error'] == LOGIN_TOOMUCHLOGINS): ?>
                    La connexion n'est pas réussie.<br />
                    Vous avez essayé de vous connecter plus de <?php echo $this->_tpl_vars['opt']['page']['max_logins_per_hour']; ?>
 fois pendant la dernière heure. La prochaine connexion ne sera pas autorisé avant qu'une heure que le premier essai a passé.<br />
                <?php elseif ($this->_tpl_vars['error'] == LOGIN_USERNOTACTIVE): ?>
                    Votre compte n'est pas actif.<br />
                    &gt;<a href="activation.php">Voici</a>&lt; vous pouvez activer votre compte.<br />
                <?php elseif ($this->_tpl_vars['error'] == LOGIN_EMPTY_USERPASSWORD): ?>
                    Remplir le nom d'utilisateur et le mot de passe, s'il vous plaît&nbsp;!
                <?php elseif ($this->_tpl_vars['error'] == LOGIN_LOGOUT_OK): ?>
                    Déconnexion réussie.
                <?php else: ?>
                    登陆失败。<br />
                    Si ce problème persiste sur une longue période, veuillez-vous nous contacter s'il vous plaît à l'adresse <a href="mailto:<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
"><?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
</a>.<br />
                <?php endif; ?>
            <?php else: ?>
                S'il vous plaît connectez-vous à continuer&nbsp;:
            <?php endif; ?>
        </p>
        <div class="buffer" style="width: 500px;">&nbsp;</div>
    </div>

    <table class="table">
        <tr>
            <td>用户名:</td>
            <td><input name="email" maxlength="80" type="text" value="<?php echo $this->_tpl_vars['username']; ?>
" class="input200" /></td>
        </tr>
        <tr>
            <td>密码:</td>
            <td><input name="password" maxlength="60" type="password" value="" class="input200" /></td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td></td>
            <td class="header-small">
                <!-- <input type="reset" name="reset" value="Réinitialiser" class="formbutton" onclick="flashbutton('reset')" />&nbsp;&nbsp; -->
                <input type="submit" name="submit" value="登陆" class="formbutton" onclick="submitbutton('submit')" />
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<div class="content-txtbox-noshade">
    <p style="line-height: 1.6em;">
        <br />
        还没有注册 &nbsp;&rarr;&nbsp; <a href="register.php">注册</a><br />
        忘记密码? &nbsp;&rarr;&nbsp; <a href="newpw.php">创建新密码</a><br />
        忘记邮箱地址? &nbsp;&rarr;&nbsp; <a href="remindemail.php">验证</a><br />
    </p>
    <p>
        帮助: <?php echo $this->_tpl_vars['loginhelplink']; ?>
关于登陆</a>.
    </p>
    <div class="buffer" style="width: 500px;">&nbsp;</div>
</div>

</div>