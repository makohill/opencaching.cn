<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newcaches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'newcaches.tpl', 33, false),array('modifier', 'escape', 'newcaches.tpl', 34, false),array('modifier', 'lower', 'newcaches.tpl', 34, false),array('function', 'rand', 'newcaches.tpl', 34, false),)), $this); ?>
<?php if ($this->_tpl_vars['events']): ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/traditional.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
    Planned events
</div>
<?php else: ?>
<div class="nav4">
    <ul>
        <li class="group noicon <?php if ($this->_tpl_vars['countryCode'] == ''): ?>selected<?php endif; ?>"><a href="newcaches.php">Tutte le cache</a></li>
        <li class="group noicon <?php if ($this->_tpl_vars['countryCode'] != ''): ?>selected<?php endif; ?>"><a href="newcaches.php?country=<?php echo $this->_tpl_vars['opt']['template']['country']; ?>
">Caches in  <?php echo $this->_tpl_vars['countryName']; ?>
</a></li>
        <li class="group noicon"><a href="newcachesrest.php?country=<?php echo $this->_tpl_vars['opt']['page']['main_country']; ?>
">Nuovi caches senza <?php echo $this->_tpl_vars['mainCountryName']; ?>
</a></li>
    </ul>
</div>
<div style="height:3.2em"></div>
<?php endif; ?>

<table width="100%" class="table">
    <tr>
        <td colspan="3" class="header-small" >
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </td>
    </tr>
    <tr><td class="spacer"></td></tr>

    <?php $_from = $this->_tpl_vars['newCaches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['newCaches'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['newCaches']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newCache']):
        $this->_foreach['newCaches']['iteration']++;
?>
        <tr>
            <td style="width:1%; vertical-align:center"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</nobr></td>
            <td class="listicon"><?php if ($this->_tpl_vars['events']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/event-rand<?php echo smarty_function_rand(array('min' => 1,'max' => 4), $this);?>
.gif" alt="Evento Geocache" border="0" width="22" height="22" align="left" style="margin-right: 5px;" /><?php else: ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/16x16-<?php echo $this->_tpl_vars['newCache']['type']; ?>
.gif" width="16" height="16" border="0" /><?php endif; ?></td><td style="vertical-align:center"> <a href="viewcache.php?wp=<?php echo $this->_tpl_vars['newCache']['wpoc']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['newCache']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> di <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['newCache']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php if ($this->_tpl_vars['countryCode'] == '' && $this->_tpl_vars['newCache']['country'] != $this->_tpl_vars['defaultcountry']): ?>&nbsp;&nbsp;<img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['newCache']['country'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" alt="(<?php echo $this->_tpl_vars['newCache']['country_name']; ?>
)" title="<?php echo $this->_tpl_vars['newCache']['country_name']; ?>
" /><?php endif; ?> </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>

    <tr><td class="spacer"></td></tr>
    <tr>
        <td colspan="3" class="header-small">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </td>
    </tr>
    <tr><td class="spacer"></td></tr>
</table>