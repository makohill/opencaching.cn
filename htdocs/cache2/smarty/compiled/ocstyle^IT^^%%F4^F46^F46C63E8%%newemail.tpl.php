<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newemail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newemail.tpl', 34, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Modifica indirizzo email
</div>

<?php if ($this->_tpl_vars['codeChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">L'indirizzo email è stato modificato.</span></p>
<?php else: ?>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="request" value="1" />

    <table class="table">
        <tr>
            <td><b>Passo 1</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Per modificare il tuo indirizzo email devi richiedere un codice di sicurezza. Ti verrà inviato al tuo nuovo indirizzo email.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nuovo indirizzo email:</td>
            <td>
                <input name="email" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
        <input type="submit" name="erequest" value="Richiesta" class="formbutton" onclick="submitbutton('erequest')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorSame'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Questo indirizzo email è già assegnato al tuo utente.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorInvalid'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">La email non è valida.</td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td>&nbsp;</td><td class="successmsg">Ti è stata inviata una email contenente il codice di sicurezza.<br />
            Se non ricevi nessuna email per favore verifica la casella spam della tua posta elettronica.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Si è verificato un errore imprevisto.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Esiste già un utente registrato con questo indirizzo email. Non è possibile registrare un secondo utente con lo stesso indirizzo email.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="change" value="1" />

    <table class="table">
        <tr>
            <td><b>Passo 2</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Per favore inserisci il codice di sicurezza che hai ricevuto. Il codice di sicurezza è valodo solo per 3 giorni. Devi richiedere un nuovo codice se questo periodo di tempo è trascorso.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nuovo indirizzo email:</td>
            <td>
                <?php if ($this->_tpl_vars['newemail'] == ''): ?>
                    <i>&lt;Per favore richiedi prima un codice di controllo.&gt;</i>
                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['newemail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Codice di sicurezza:</td>
            <td>
                <input name="code" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorExpired'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Il codice di sicurezza è scaduto. Per favore richiedine uno nuovo.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNoNewEMail'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Non è stato registrato un nuovo indirizzo email. Per favore richiedi prima un codice di controllo.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNotMatch'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Il codice di sicurezza non coincide.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorEMailExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Esiste già un utente registrato con questo indirizzo email. Non è possibile registrare un secondo utente con lo stesso indirizzo email.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Si è verificato un errore imprevisto.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="clear" value="Ripristino" class="formbutton" onclick="flashbutton('clear')" />&nbsp;&nbsp; -->
                <input type="submit" name="confirm" value="Cambio" class="formbutton" onclick="submitbutton('confirm    ')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>