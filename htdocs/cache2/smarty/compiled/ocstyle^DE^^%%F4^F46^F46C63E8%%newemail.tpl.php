<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newemail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newemail.tpl', 34, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    E-Mail-Adresse ändern
</div>

<?php if ($this->_tpl_vars['codeChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">Die E-Mail-Adresse wurde geändert.</span></p>
<?php else: ?>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="request" value="1" />

    <table class="table">
        <tr>
            <td><b>Schritt 1</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Um die E-Mail-Adresse zu ändern, musst du zunächst einen Sicherheitscode anfordern, der an deine neue E-Mail-Adresse gesendet wird.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Neue E-Mail-Adresse:</td>
            <td>
                <input name="email" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
        <input type="submit" name="erequest" value="Anfordern" class="formbutton" onclick="submitbutton('erequest')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorSame'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Dein Account ist bereits auf diese E-Mail-Adresse registriert.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorInvalid'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Die E-Mail-Adresse ist nicht gültig.</td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td>&nbsp;</td><td class="successmsg">Dir wurde eine E-Mail mit dem Sicherheits-Code zugesandt.<br />
            Falls du keine E-Mail sehen solltest, prüfe bitte ob sie im Spam-Ordner deines Postfachs einsortiert wurde.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Ein unbekannter Fehler ist aufgetreten.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Es ist bereits ein Account mit dieser E-Mail-Adresse vorhanden. Es ist nicht möglich, einen zweiten Account auf diese E-Mail-Adresse zu registrieren.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="change" value="1" />

    <table class="table">
        <tr>
            <td><b>Schritt 2</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Gib bitte nun den Sicherheitscode hier ein, den du per E-Mail erhalten hast. Der Sicherheits-Code bleibt drei Tage gültig; danach musst du ihn ggf. erneut anfordern.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Neue E-Mail-Adresse:</td>
            <td>
                <?php if ($this->_tpl_vars['newemail'] == ''): ?>
                    <i>&lt;Zuerst Sicherheitscode anfordern&gt;</i>
                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['newemail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Sicherheitscode:</td>
            <td>
                <input name="code" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorExpired'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Der Sicherheitscode ist abgelaufen. Fordere bitte einen neuen an.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNoNewEMail'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Es wurde noch keine neue E-Mail-Adresse hinterlegt. Fordere zuerst einen Sicherheitscode an.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNotMatch'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Der Sicherheitscode stimmt nicht.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorEMailExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Es ist bereits ein Account mit dieser E-Mail-Adresse vorhanden. Es ist nicht möglich, einen zweiten Account auf diese E-Mail-Adresse zu registrieren.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Ein unbekannter Fehler ist aufgetreten.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="clear" value="Zurücksetzen" class="formbutton" onclick="flashbutton('clear')" />&nbsp;&nbsp; -->
                <input type="submit" name="confirm" value="Ändern" class="formbutton" onclick="submitbutton('confirm    ')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>