<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from cache_note.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache_note.tpl', 6, false),)), $this); ?>
  <input type="hidden" name="cacheid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cacheid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

  <table class="table">
    <tr valign="top">
      <td>Nota:</td>
      <td>
        <textarea name="note" rows="4" cols="60" ><?php echo $this->_tpl_vars['note']; ?>
</textarea>
      </td>
      <td>
        <input type="checkbox" class="checkbox" name="incl_coord" value="true" <?php if ($this->_tpl_vars['inclCoord']): ?>checked="checked"<?php endif; ?>/> Incluir coordenadas en la nota<br />
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'coordinate_input.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2">
        <input type="submit" name="submit_cache_note" value="Guardar" class="formbutton" onclick="submitbutton('submit_cache_note')" />
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-info.png" class="icon16" alt="Info" />
        <small style="line-height:1em">
          La nota no es visible para otros usuarios. La nota y la coordenada opcional se incluye en la descarga de archivos GPX y se envía al dispositivo GPS.
        </small>
      </td>
    </tr>
  </table>