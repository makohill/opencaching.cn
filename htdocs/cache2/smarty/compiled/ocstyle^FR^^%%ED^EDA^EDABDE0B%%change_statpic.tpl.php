<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from change_statpic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'change_statpic.tpl', 25, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" border="0" width="32" height="32" style="margin-right: 10px;" alt="" />
    Choisissez logo
</div>

<form name="change" action="change_statpic.php" method="post" enctype="application/x-www-form-urlencoded" style="display: inline;">
    <table class="table">

        <tr>
            <td colspan="2">
                <b>Les paramètres suivants sont stockées pour votre logo&nbsp;:</b><br />
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>Texte affiché&nbsp;:</td>
            <td>
                <input type="text" name="statpic_text" maxlength="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['statpic_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200"/>
                <?php if ($this->_tpl_vars['statpic_text_error'] == 1): ?>
                    <span class="errormsg">
                        Texte contient caractères invalides&nbsp;!
                    </span>
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <td colspan="2"><br /><b>Logos OC officiels (mise à jour)&nbsp;:</b></td>
            <td class="help"></td>
            <td style="width:15%"></td>
            <td style="width:15%"></td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <?php $_from = $this->_tpl_vars['statpics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['statpicItem']):
?>
            <?php if ($this->_tpl_vars['statpicItem']['id'] >= 9): ?>
            <tr>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['statpicItem']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                <td><input type="radio" name="statpic_style" class="radio" value="<?php echo $this->_tpl_vars['statpicItem']['id']; ?>
" <?php if ($this->_tpl_vars['statpic_style'] == $this->_tpl_vars['statpicItem']['id']): ?>checked="checked"<?php endif; ?> /><img src="<?php echo $this->_tpl_vars['statpicItem']['previewpath']; ?>
" align="middle"></td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php endif; ?>
        <?php endforeach; else: ?>
            <tr><td></td><td>No logos available</td></tr>
        <?php endif; unset($_from); ?>

        <tr>
            <td colspan="2"><br /><b>Logos alternavite (partiellement obsolète)&nbsp;:</b></td>
            <td class="help"></td>
            <td style="width:15%"></td>
            <td style="width:15%"></td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <?php $_from = $this->_tpl_vars['statpics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['statpicItem']):
?>
            <?php if ($this->_tpl_vars['statpicItem']['id'] <= 8): ?>
                <tr>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['statpicItem']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <td><input type="radio" name="statpic_style" class="radio" value="<?php echo $this->_tpl_vars['statpicItem']['id']; ?>
" <?php if ($this->_tpl_vars['statpic_style'] == $this->_tpl_vars['statpicItem']['id']): ?>checked="checked"<?php endif; ?> /><img src="<?php echo $this->_tpl_vars['statpicItem']['previewpath']; ?>
" align="middle"></td>
                </tr>
                <tr><td class="spacer" colspan="2"></td></tr>
            <?php endif; ?>
            <?php endforeach; else: ?>
            <tr><td></td><td>No logos available</td></tr>
        <?php endif; unset($_from); ?>

        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td class="header-small" colspan="2">
                <input type="submit" name="cancel" value="Annuler" class="formbutton" onclick="submitbutton('cancel')" />&nbsp;&nbsp;
                <input type="submit" name="ok" value="Sauvegarder" class="formbutton" onclick="submitbutton('ok')" />
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <br />Après l'enregistrement, vous devrez appuyer sur le bouton de rechargement dans votre navigateur pour voir la photo sélectionnée dans votre profil.
            </td>
        </tr>
    </table>
</form>