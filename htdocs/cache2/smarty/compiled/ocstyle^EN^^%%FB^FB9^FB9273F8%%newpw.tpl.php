<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newpw.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newpw.tpl', 33, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Change password
</div>

<?php if ($this->_tpl_vars['passwordChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">The password has been changed.</span></p>
    <p>&nbsp;You can now <a href="login.php">login</a> with the new password.</p>
<?php else: ?>

<form action="newpw.php" method="post" style="display: inline;">
    <table class="table">
        <tr>
            <td class="boldtext">Step 1</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                To change your password, you have to request a security code which will be sent to you by e-mail.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>E-mail address:</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailrq'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <tr>
            <td width="150px">&nbsp;</td>
            <td>
        <input type="submit" name="rqcode" value="Request code" class="formbutton" onclick="submitbutton('rqcode')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">This e-mail address is not registered with a valid username.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="successmsg">An e-mail has been sent to you containing the security code.<br />If you do not see any E-Mail, please check the spam folder of your mailbox.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">An unknown error occurred. The security code could not be sent to you.</span></td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<form action="newpw.php" method="post" style="display: inline;">
    <table class="table">
        <colgroup>
            <col width="150">
            <col>
        </colgroup>
        <tr>
            <td class="boldtext">Step 2</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Please enter your e-mail address, the security code you received and your new password. The security code is valid for 3 days only. You have to request a new one if that period of time has elapsed.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <?php if ($this->_tpl_vars['errorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">An unkown error occurred.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>E-mail address:</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailch'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailRqErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">This e-mail address is not registered with a valid username.</span></td></tr>
        <?php elseif ($this->_tpl_vars['notActiveError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">This user account has not been activated yet.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>Security code:</td>
            <td>
          <input name="code" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorDate'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">The security code is expired. Please request a new one.</span></td></tr>
        <?php elseif ($this->_tpl_vars['codeError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">The security code does not match.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td style="vertical-align:top">New password:</td>
            <td>
                <input name="password1" type="password" value="" maxlength="60" class="input120" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['passwordError'] == true): ?>
            <tr><td></td><td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_passworderror.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
        <?php endif; ?>
        <tr>
            <td>Please repeat:</td>
            <td>
                <input name="password2" type="password" value="" maxlength="60" class="input120" />
                <?php if ($this->_tpl_vars['passwordNotMatch'] == true): ?>
                    &nbsp;<span class="errormsg">The passwords do not match.</span>
                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="cancel" value="Reset" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                <input type="submit" name="changepw" value="Change" class="formbutton" onclick="submitbutton('changepw')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>