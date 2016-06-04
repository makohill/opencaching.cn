<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newpw.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newpw.tpl', 33, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Cambia password
</div>

<?php if ($this->_tpl_vars['passwordChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">La password è stata cambiata.</span></p>
    <p>&nbsp;Ora puoi <a href="login.php">autenticarti</a> con la nuova password.</p>
<?php else: ?>

<form action="newpw.php" method="post" style="display: inline;">
    <table class="table">
        <tr>
            <td class="boldtext">Passo 1</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Per cambiare la tua password, devi richiedere un codice di sicurezza che ti verrà inviato via email.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Indirizzo email:</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailrq'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <tr>
            <td width="150px">&nbsp;</td>
            <td>
        <input type="submit" name="rqcode" value="Richiesta codice" class="formbutton" onclick="submitbutton('rqcode')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Questo indirizzo email non è associato ad un nome utente valido.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="successmsg">Ti è stata inviata una email contenente il codice di sicurezza.<br />Se non ricevi nessuna email per favore verifica la casella spam della tua posta elettronica.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Si è verificato un errore imprevisto. Il codice di sicurezza non ti può essere inviato.</span></td></tr>
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
            <td class="boldtext">Passo 2</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Per favore inserisci il tuo indirizzo email, il codice di sicurezza che hai ricevuto e la tua password. Il codice di sicurezza è valido solo per 3 giorni. Devi richiedere un nuovo codice se questo periodo di tempo è trascorso.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <?php if ($this->_tpl_vars['errorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Si è verificato un errore imprevisto.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>Indirizzo email:</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailch'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailRqErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Questo indirizzo email non è associato ad un nome utente valido.</span></td></tr>
        <?php elseif ($this->_tpl_vars['notActiveError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">L'utente non è ancora stato attivato.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>Codice di sicurezza:</td>
            <td>
          <input name="code" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorDate'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Il codice di sicurezza è scaduto. Per favore richiedine uno nuovo.</span></td></tr>
        <?php elseif ($this->_tpl_vars['codeError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Il codice di sicurezza non coincide.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td style="vertical-align:top">Nuova password:</td>
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
            <td>Per favore ripeti:</td>
            <td>
                <input name="password2" type="password" value="" maxlength="60" class="input120" />
                <?php if ($this->_tpl_vars['passwordNotMatch'] == true): ?>
                    &nbsp;<span class="errormsg">Le password non coincidono.</span>
                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="cancel" value="Ripristino" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                <input type="submit" name="changepw" value="Cambio" class="formbutton" onclick="submitbutton('changepw')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>