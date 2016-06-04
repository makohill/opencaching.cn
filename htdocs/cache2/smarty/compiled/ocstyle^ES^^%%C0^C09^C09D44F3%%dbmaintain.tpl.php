<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from dbmaintain.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'dbmaintain.tpl', 22, false),)), $this); ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Mantenimiento de la Base de Datos
</div>

<form action="dbmaintain.php" method="post">
    <table class="table">
        <colgroup>
            <col width="150" />
            <col />
        </colgroup>
        <tr><td colspan="2">Test for and fix inconsistencies in database tables.</td></tr>
        <tr><td class="spacer" colspan="2">&nbsp;</td></tr>

        <?php $_from = $this->_tpl_vars['procedures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['procItem']):
?>
            <tr><td colspan="2"><input id="<?php echo ((is_array($_tmp=$this->_tpl_vars['procItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="radio" name="action" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['procItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /> <label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['procItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['procItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</label></td></tr>
        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['executed'] == true): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
            <tr colspan="2"><td class="successmsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['proc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 ha corregido <?php echo $this->_tpl_vars['count']; ?>
 entradas</td></tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2">&nbsp;</td></tr>
        <tr>
            <td width="150px">&nbsp;</td>
            <td>
                <input type="submit" name="ok" value="Ejecutar" class="formbutton" onclick="submitbutton('ok')" />
            </td>
        </tr>
    </table>
</form>