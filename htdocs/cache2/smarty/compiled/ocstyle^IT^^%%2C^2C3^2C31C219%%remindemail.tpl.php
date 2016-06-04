<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from remindemail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'remindemail.tpl', 25, false),)), $this); ?>
<form action="remindemail.php" method="post">
  <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Ricordami l'indirizzo email
    </div>

    <table class="table">
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" alt="" />
                Inserisci il tuo nome utente e invieremo una email di recupero al tuo indirizzo email.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nome utente:</td>
            <td>
                <input name="username" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200"  />
            </td>
        </tr>

        <?php if ($this->_tpl_vars['errorUsernameInvalid'] == true): ?>
            <tr><td colspan="2" class="errormsg">Inserisci un nome utente.</td></tr>
        <?php elseif ($this->_tpl_vars['errorUsernameNotExist'] == true): ?>
            <tr><td colspan="2" class="errormsg">Il nome utente non esiste.</td></tr>
        <?php elseif ($this->_tpl_vars['errorUnkown'] == true): ?>
            <tr><td colspan="2" class="errormsg">Si è verificato un errore imprevisto.</td></tr>
        <?php elseif ($this->_tpl_vars['remindMailSent'] == true): ?>
            <tr><td colspan="2" class="successmsg">La email di recupero è stata inviata.<br />
            Se non ricevi nessuna email per favore verifica la casella spam della tua posta elettronica.</td></tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td width="150px">&nbsp;</td>
            <td>
                <input type="submit" name="ok" value="Invia" class="formbutton" onclick="submitbutton('ok')" />
            </td>
        </tr>
    </table>
</form>