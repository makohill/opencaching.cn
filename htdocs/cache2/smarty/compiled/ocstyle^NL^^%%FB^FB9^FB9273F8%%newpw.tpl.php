<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newpw.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newpw.tpl', 33, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Wachtwoord veranderen
</div>

<?php if ($this->_tpl_vars['passwordChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">Het wachtwoord is veranderd.</span></p>
    <p>&nbsp;You can now <a href="login.php">login</a> with the new password.</p>
<?php else: ?>

<form action="newpw.php" method="post" style="display: inline;">
    <table class="table">
        <tr>
            <td class="boldtext">Stap 1</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Om een nieuw wachtwoord krijgen moet je een veilighiedscode aanvragen, deze wordt per E-Mail verstuurd.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>E-Mail adres</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailrq'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <tr>
            <td width="150px">&nbsp;</td>
            <td>
        <input type="submit" name="rqcode" value="Code opvragen" class="formbutton" onclick="submitbutton('rqcode')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Dit E-Mailadres hoort niet bij een geregistreede gebruiker.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="successmsg">Er is een E-Mail verzonden met je veiligheidscode.<br />If you do not see any E-Mail, please check the spam folder of your mailbox.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">De veiligheidscode kon door een fout niet verzonden worden.</span></td></tr>
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
            <td class="boldtext">Stap 2</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Vul je E-Mailadres in, je ontvangen veiligheidscode en je nieuwe wachtwoord. De veiligheidscode is 3 dagen geldig, daarna moet je een nieuwe aanvragen.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <?php if ($this->_tpl_vars['errorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Een onbekende fout is opgetreden.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>E-Mail adres</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailch'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailRqErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Dit E-Mailadres hoort niet bij een geregistreede gebruiker.</span></td></tr>
        <?php elseif ($this->_tpl_vars['notActiveError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">De opgegeven gebruiker is nog niet geactieveerd.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>Veiligheidscode</td>
            <td>
          <input name="code" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorDate'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">De veiligheidscode is verlopen. Vraag een nieuwe aan.</span></td></tr>
        <?php elseif ($this->_tpl_vars['codeError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">De wachtwoorden komen niet overeen.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td style="vertical-align:top">Nieuw wachtwoord:</td>
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
            <td>Wachtwoord herhalen:</td>
            <td>
                <input name="password2" type="password" value="" maxlength="60" class="input120" />
                <?php if ($this->_tpl_vars['passwordNotMatch'] == true): ?>
                    &nbsp;<span class="errormsg">Beide wachtwoorden zijn niet gelijk.</span>
                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="cancel" value="Herstellen" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                <input type="submit" name="changepw" value="Veranderen" class="formbutton" onclick="submitbutton('changepw')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>