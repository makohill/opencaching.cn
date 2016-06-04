<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'news.tpl', 14, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-description.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Noticias
</div>

<table width="100%" class="table">
    <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newsItem']):
        $this->_foreach['news']['iteration']++;
?>
        <tr><td><?php echo ((is_array($_tmp=$this->_tpl_vars['newsItem']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datetime']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datetime'])); ?>
 (<?php echo $this->_tpl_vars['newsItem']['name']; ?>
) <?php echo $this->_tpl_vars['newsItem']['content']; ?>
</td></tr>
    <?php endforeach; endif; unset($_from); ?>
</table>