<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newcachesrest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'newcachesrest.tpl', 29, false),array('modifier', 'escape', 'newcachesrest.tpl', 30, false),array('modifier', 'date_format', 'newcachesrest.tpl', 35, false),)), $this); ?>
<div class="nav4">
    <ul>
        <li class="group noicon"><a href="newcaches.php">All caches</a></li>
        <li class="group noicon"><a href="newcaches.php?country=<?php echo $this->_tpl_vars['userCountryCode']; ?>
">Caches en <?php echo $this->_tpl_vars['userCountryName']; ?>
</a></li>
        <li class="group noicon selected"><a href="newcachesrest.php">Nuevo caches sin <?php echo $this->_tpl_vars['countryName']; ?>
</a></li>
    </ul>
</div>
<p style="clear:both;" >
    <br />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_countrylinks.tpl", 'smarty_include_vars' => array('newCaches' => $this->_tpl_vars['newCaches'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</p>

<table width="100%" class="table">
    <tr><td class="spacer"></td></tr>
    <?php $this->assign('lastCountry', ''); ?>

    <?php $_from = $this->_tpl_vars['newCaches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['newCaches'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['newCaches']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newCache']):
        $this->_foreach['newCaches']['iteration']++;
?>
        <?php if ($this->_tpl_vars['newCache']['country_name'] != $this->_tpl_vars['lastCountry']): ?>
            <tr><td class="spacer" id="country_<?php echo $this->_tpl_vars['newCache']['country']; ?>
"></td></tr>
            <tr>
                <td colspan="3">
                    <table cellspacing="0" cellpadding="0"><tr>
                        <td class="content-title-flag"><img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['country'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" /></td>
                        <td><p class="content-title-noshade-size08"><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['country_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p></td>
                    </tr></table>
                <td>
            </tr>
        <?php endif; ?>
        <tr><td width="1%"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</nobr></td><td class="listicon"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/16x16-<?php echo $this->_tpl_vars['newCache']['type']; ?>
.gif" width="16" height="16" border="0" /></td><td><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['newCache']['wpoc']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['newCache']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> por <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['newCache']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td></tr>
        <?php $this->assign('lastCountry', $this->_tpl_vars['newCache']['country_name']); ?>
    <?php endforeach; endif; unset($_from); ?>
    <tr><td class="spacer"></td></tr>
</table>