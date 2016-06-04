<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newemail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newemail.tpl', 34, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    E-Mail adres veranderen
</div>

<?php if ($this->_tpl_vars['codeChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">Het E-Mail adres is veranderd.</span></p>
<?php else: ?>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="request" value="1" />

    <table class="table">
        <tr>
            <td><b>Stap 1</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Om het E-Mail adres te veranderen, moet je eerst een veiligheidscode opvragen die naar je nieuwe E-Mail adres verstuurd wordt.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nieuwe E-Mail adres:</td>
            <td>
                <input name="email" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
        <input type="submit" name="erequest" value="Vragen" class="formbutton" onclick="submitbutton('erequest')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorSame'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Je account is al op dit E-Mail adres geregistreerd.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorInvalid'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Het e-mail adres is niet geldig.</td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td>&nbsp;</td><td class="successmsg">Er is een E-Mail verzonden met je veiligheidscode.<br />
            If you do not see any E-Mail, please check the spam folder of your mailbox.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">En onbekende fout is opgetreden.</td></tr>
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
            <td><b>Stap 2</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Vul nu de veiligheidscode in die je per E-Mail ontvangen hebt. De veiligheidscode is 3 dagen geldig, daarna moet je een nieuwe aanvragen.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nieuwe E-Mail adres:</td>
            <td>
                <?php if ($this->_tpl_vars['newemail'] == ''): ?>
                    <i>&lt;Eerst de veiligheidscode opvragen.&gt;</i>
                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['newemail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Veiligheidscode</td>
            <td>
                <input name="code" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorExpired'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">De veiligheidscode is verlopen. Vraag een nieuwe aan.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNoNewEMail'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Er werd nog geen nieuw E-Mail adres aangemaakt. Vraag eerst een veiligheidscode aan.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNotMatch'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">De wachtwoorden komen niet overeen.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorEMailExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">An account with that e-mail address already exists. It is not possible to create a second account with the same e-mail address.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">En onbekende fout is opgetreden.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="clear" value="Herstellen" class="formbutton" onclick="flashbutton('clear')" />&nbsp;&nbsp; -->
                <input type="submit" name="confirm" value="Veranderen" class="formbutton" onclick="submitbutton('confirm    ')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>