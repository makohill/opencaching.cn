<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from childwp.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'childwp.tpl', 7, false),array('function', 'html_options', 'childwp.tpl', 30, false),)), $this); ?>
<form action="childwp.php" method="post" name="fchildwp">
  <input type="hidden" name="cacheid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cacheid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
  <input type="hidden" name="childid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['childid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
  <input type="hidden" name="deleteid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['deleteid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

  <div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/20x20-compass.png" style="margin-right: 10px;" alt="" title="Child waypoints" />
    <?php echo ((is_array($_tmp=$this->_tpl_vars['pagetitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

  </div>

  <table>
    <tr>
      <?php $_from = $this->_tpl_vars['wpNameImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['typeName'] => $this->_tpl_vars['typeImage']):
?>
        <td><img src="<?php echo $this->_tpl_vars['typeImage']; ?>
" /></td><td><?php echo $this->_tpl_vars['typeName']; ?>
</td><td>&nbsp;&nbsp;&nbsp;</td>
     <?php endforeach; endif; unset($_from); ?>
   </tr>
  </table>

  <table class="table">
    <tr>
      <td valign="top">Waypoint type:</td>
      <td>
        <select name="wp_type" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?>>
          <option value="0">Please select type</option>
          <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['wpTypeIds'],'output' => $this->_tpl_vars['wpTypeNames'],'selected' => $this->_tpl_vars['wpType']), $this);?>

        </select>
      </td>
    </tr>

    <?php if (isset ( $this->_tpl_vars['wpTypeError'] )): ?>
    <tr>
      <td></td>
      <td class="errormsg">
        <?php echo $this->_tpl_vars['wpTypeError']; ?>

      </td>
    </tr>
    <?php endif; ?>

    <tr>
      <td valign="top">Coordinate:</td>
      <td>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'coordinate_input.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>

    <tr>
      <td valign="top">Description:</td>
      <td>
        <textarea name="desc" rows="5" cols="80" <?php if ($this->_tpl_vars['disabled']): ?>disabled="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['wpDesc']; ?>
</textarea>
      </td>
    </tr>

    <tr>
      <td class="spacer" colspan="2"></td>
    </tr>

    <tr>
      <td></td>
      <td>
        <input type="submit" name="back" value="Annuleren" class="formbutton" onclick="submitbutton('back')" />&nbsp;&nbsp;
        <input type="submit" name="submitform" value="<?php echo $this->_tpl_vars['submitButton']; ?>
" class="formbutton" onclick="submitbutton('submitform')" /></button>
      </td>
    </tr>
  </table>
</form>