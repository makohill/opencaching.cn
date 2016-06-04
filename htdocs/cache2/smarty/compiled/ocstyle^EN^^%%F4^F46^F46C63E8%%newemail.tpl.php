<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newemail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newemail.tpl', 34, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Change e-mail address
</div>

<?php if ($this->_tpl_vars['codeChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">The e-mail address has been changed.</span></p>
<?php else: ?>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="request" value="1" />

    <table class="table">
        <tr>
            <td><b>Step 1</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                To change your e-mail address, you have to request a security code. It will be sent to your new e-mail address.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>New e-mail address:</td>
            <td>
                <input name="email" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
        <input type="submit" name="erequest" value="Request" class="formbutton" onclick="submitbutton('erequest')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorSame'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">This e-mail address is already assigned to your account.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorInvalid'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">The e-mail address is not valid.</td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td>&nbsp;</td><td class="successmsg">An e-mail has been sent to you containing the security code.<br />
            If you do not see any E-Mail, please check the spam folder of your mailbox.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">An unknown error occurred.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">An account with that e-mail address already exists. It is not possible to create a second account with the same e-mail address.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="change" value="1" />

    <table class="table">
        <tr>
            <td><b>Step 2</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Please enter the security code you received. The security code is valid for 3 days only. You have to request a new one if that period of time has elapsed.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>New e-mail address:</td>
            <td>
                <?php if ($this->_tpl_vars['newemail'] == ''): ?>
                    <i>&lt;Please request a security code first.&gt;</i>
                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['newemail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Security code:</td>
            <td>
                <input name="code" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorExpired'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">The security code is expired. Please request a new one.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNoNewEMail'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">No new e-mail address has been stored. Please request a security code first.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNotMatch'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">The security code does not match.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorEMailExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">An account with that e-mail address already exists. It is not possible to create a second account with the same e-mail address.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">An unknown error occurred.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="clear" value="Reset" class="formbutton" onclick="flashbutton('clear')" />&nbsp;&nbsp; -->
                <input type="submit" name="confirm" value="Change" class="formbutton" onclick="submitbutton('confirm    ')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>