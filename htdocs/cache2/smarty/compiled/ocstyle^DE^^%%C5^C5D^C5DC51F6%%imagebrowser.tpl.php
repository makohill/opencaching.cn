<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from imagebrowser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'imagebrowser.tpl', 31, false),array('function', 'cycle', 'imagebrowser.tpl', 36, false),)), $this); ?>
<script type="text/javascript">
<?php echo '
<!--
    // Function sets image URL in FCKeditor
    function SelectFile(fileUrl, thumbUrl)
    {
        if (document.getElementById("insertthumb").checked == true)
            opener.fileBrowserReturn(thumbUrl);
        else
            opener.fileBrowserReturn(fileUrl);

        window.close();
    }

    function CancelSelect()
    {
        window.close();
    }
//-->
'; ?>

</script>
<br />
<table width="100%" class="table">
    <tr>
        <td><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-image.png" height="22px" width="22px" alt="" /> Bilderauswahl für <?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
    </tr>
</table>
<table class="table">
    <?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pictures'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pictures']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['pictureItem']):
        $this->_foreach['pictures']['iteration']++;
?>
        <?php echo smarty_function_cycle(array('values' => "1,2",'assign' => 'cc'), $this);?>

        <?php if ($this->_tpl_vars['cc'] == 1): ?>
            <tr>
        <?php endif; ?>
            <td valign="middle" align="center" width="<?php echo $this->_tpl_vars['thumbwidth']+5; ?>
px"><a href="javascript:SelectFile('<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : smarty_modifier_escape($_tmp, 'js')); ?>
', '<?php echo $this->_tpl_vars['opt']['page']['absolute_url']; ?>
thumbs.php?type=2&showspoiler=1&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : smarty_modifier_escape($_tmp, 'js')); ?>
');"><img border="0" src="thumbs.php?type=2&showspoiler=1&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></a></td>
        <?php if ($this->_tpl_vars['cc'] == 2 || ($this->_foreach['pictures']['iteration'] == $this->_foreach['pictures']['total'])): ?>
            </tr>
        <?php endif; ?>
    <?php endforeach; else: ?>
        <tr><td>Für diesen Cache wurden noch keine Bilder hochgeladen.</td></tr>
    <?php endif; unset($_from); ?>
</table>
<p><input type="checkbox" id="insertthumb" style="border:0;" /> <label for="insertthumb">Vorschaubild einfügen</label></p>
<p><a href="javascript:CancelSelect();"><a href="javascript:CancelSelect();">Abbrechen</a></p>