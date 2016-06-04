<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newemail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newemail.tpl', 34, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Changer l'adresse e-mail
</div>

<?php if ($this->_tpl_vars['codeChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">L'adresse e-mail été changé.</span></p>
<?php else: ?>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="request" value="1" />

    <table class="table">
        <tr>
            <td><b>Étape 1</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Pour changer votre adresse e-mail, vous devez demander un code de sécurité. Il sera envoyé à votre nouveau adresse e-mail.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nouvelle adresse e-mail&nbsp;:</td>
            <td>
                <input name="email" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
        <input type="submit" name="erequest" value="Demande" class="formbutton" onclick="submitbutton('erequest')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorSame'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Cet e-mail est déjà assigné à votre compte.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorInvalid'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">L'adresse e-mail n'est pas valide.</td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td>&nbsp;</td><td class="successmsg">Un e-mail a été vous envoyé avec le code de sécurité.<br />
            Si vous ne voyez pas d'e-mail, s'il vous plaît vérifier le dossier spam de votre boîte aux lettres.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Une erreur inconnue est survenue.</td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Il existe déjà un compte avec cette adresse e-mail. Il n'est pas possible à enregistrer un deuxième compte avec la même adresse e-mail.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<form action="newemail.php" method="post" style="display: inline;">
    <input type="hidden" name="change" value="1" />

    <table class="table">
        <tr>
            <td><b>Étape 2</b></td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                S'il vous plaît entrer le code de sécurité que vous avez reçu. Le code de sécurité est valable seulement 3 jours. Vous devez en demander un nouveau après cette date.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Nouvelle adresse e-mail&nbsp;:</td>
            <td>
                <?php if ($this->_tpl_vars['newemail'] == ''): ?>
                    <i>&lt;Demande le code de sécurité premièrement, s'il vous plaît.&gt;</i>
                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['newemail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Code de sécurité&nbsp;:</td>
            <td>
                <input name="code" maxlength="60" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorExpired'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Le code de sécurité est expiré. En demander un nouveau.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNoNewEMail'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Il n'y avait aucune nouvelle adresse e-mail entrée, s'il vous plaît demander un code de sécurité premièrement.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorNotMatch'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Le code de sécurité ne correspond pas.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorEMailExists'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Il existe déjà un compte avec cette adresse e-mail. Il n'est pas possible à enregistrer un deuxième compte avec la même adresse e-mail.</td></tr>
        <?php elseif ($this->_tpl_vars['codeErrorUnkown'] == true): ?>
            <tr><td>&nbsp;</td><td class="errormsg">Une erreur inconnue est survenue.</td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="clear" value="Réinitialiser" class="formbutton" onclick="flashbutton('clear')" />&nbsp;&nbsp; -->
                <input type="submit" name="confirm" value="Changement" class="formbutton" onclick="submitbutton('confirm    ')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>