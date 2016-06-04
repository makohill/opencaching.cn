<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:39
         compiled from mailto.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mailto.tpl', 8, false),array('modifier', 'nl2br', 'mailto.tpl', 27, false),)), $this); ?>
<?php ob_start(); ?>
    <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
<?php $this->_smarty_vars['capture']['userlink'] = ob_get_contents(); ob_end_clean(); ?>
<?php if ($this->_tpl_vars['success'] == true): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/22x22-email.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        L'e-mail à <?php echo $this->_smarty_vars['capture']['userlink']; ?>
 est envoyé.
    </div>

    <table class="table">
        <tr>
            <td colspan="2">
                Objet&nbsp;: <?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>

        <tr><td colspan="2">Contenu:</td></tr>
        <tr>
            <td colspan="2">
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            </td>
        </tr>
    </table>
<?php else: ?>
    <form action="mailto.php" method="post">
        <input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['userid']; ?>
"/>
        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/22x22-email.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            Envoyer un e-mail à <?php echo $this->_smarty_vars['capture']['userlink']; ?>

        </div>

        <table class="table">
            <?php if ($this->_tpl_vars['email_problems'] > 0): ?>
            <tr><!-- Tag for external page processing: email problems -->
                <td colspan="2" class="redtext">
                    <p>Une ou plusieurs e-mails à cet utilisateur ne pouvaient pas être livrés. Il pourrait être une bonne idée de connecter plus de commentaires sur les géocaches de l'utilisateur, et / ou d'utiliser des adresses de contact de rechange comme un compte message de conseil ou d'une autre plate-forme de géocaching.</p>
                </td>
            </tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Objet&nbsp;:&nbsp; <input type="text" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input500" /></td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorSubjectEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Vous devez entrer un sujet&nbsp;!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Contenu:</td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea class="logs" name="text" cols="68" rows="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php if ($this->_tpl_vars['errorBodyEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Vous devez entrer un contenu&nbsp;!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="emailaddress" value="1" id="l_send_emailaddress" class="checkbox" <?php if ($this->_tpl_vars['emailaddress'] == true): ?>checked="checked" <?php endif; ?>/>
                    <label for="l_send_emailaddress">Envoyer mon adresse e-mail avec ce message</label>
                </td>
            </tr>
            <tr>
                <td class="help" colspan="2">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                    Cela permet au récepteur de répondre à votre e-mail directement avec son agent d'e-mail. Vous pouvez activer cette option par défaut dans votre <a href="myprofile.php">profil de l'utilisateur</a>.<br />
                    <div style="padding: 10px 0 10px 0">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                        <span class="smalltext">Pour vous et nous protéger contre les abus&nbsp;:</span>
                        <ul style="margin:0; line-height:1.1em">
                            <li class="smalltext">Seulement des e-mails qui concernent géocaching sont autorisés. Spaming n'est pas autorisé&nbsp;!</li>
                            <li class="smalltext">Toutes les informations pertinentes seront enregistrées (date / heure, émetteur / récepteur et l'adresse IP).</li>
                            <li class="smalltext">Toutes les informations seront traitées confidentielles et non divulgués à des tiers&nbsp;!</li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorUnkown'] == true): ?>
                <tr><td colspan="2" class="errormsg">Une erreur inconnue est survenue et l'e-mail n'a pas été envoyé.</td></tr>
            <?php endif; ?>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="cancel" value="Réinitialiser" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                    <input type="submit" name="ok" value="Envoyer" class="formbutton" onclick="submitbutton('ok')" />
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
        </table>
    </form>
<?php endif; ?>