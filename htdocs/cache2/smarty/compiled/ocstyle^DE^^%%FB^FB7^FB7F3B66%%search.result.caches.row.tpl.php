<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from search.result.caches.row.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'search.result.caches.row.tpl', 12, false),array('modifier', 'escape', 'search.result.caches.row.tpl', 12, false),array('modifier', 'date_format', 'search.result.caches.row.tpl', 18, false),)), $this); ?>
<!--m-->
<tr>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
">&nbsp;</td>
      <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php if ($this->_tpl_vars['cache']['distance'] !== null): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['distance'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.1f") : smarty_modifier_sprintf($_tmp, "%1.1f")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;<?php endif; ?></td>
      <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" rowspan="2"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/<?php echo $this->_tpl_vars['cache']['icon']; ?>
" title="<?php echo $this->_tpl_vars['cache']['cacheTypeName']; ?>
" /></td>
      <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" rowspan="2"><nobr><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_difficon.tpl", 'smarty_include_vars' => array('difficulty' => $this->_tpl_vars['cache']['difficulty'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></nobr></td>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" rowspan="2"><nobr><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_terricon.tpl", 'smarty_include_vars' => array('terrain' => $this->_tpl_vars['cache']['terrain'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></nobr></td>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" colspan="2"><?php if ($this->_tpl_vars['cache']['isnew']): ?><b class="newsymbol">&nbsp;NEU&nbsp;</b>&nbsp; <?php endif; ?><span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['cache']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><a href="viewcache.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cache_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><span style="<?php if ($this->_tpl_vars['cache']['redname']): ?>color: #e00000<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></a></span> &nbsp;von <a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><!-- Ocprop: <a href="viewcache.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cache_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> von <a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> --></td>
    <?php if ($this->_tpl_vars['creationdate']): ?>
        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
    <?php else: ?>
        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" rowspan="2" style="padding: 0px">
            &nbsp;<?php if ($this->_tpl_vars['cache']['oconly']): ?><img src="resource2/ocstyle/images/misc/is_oconly.png" alt="OConly" title="OConly" style="margin:0px; padding:0px" width="64" height="35" /><?php endif; ?>
        </td>
    <?php endif; ?>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" valign="top"><nobr>
        <?php if ($this->_tpl_vars['cache']['firstlog']): ?>
            <nobr><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
&log=A#log<?php echo $this->_tpl_vars['cache']['firstlog']['id']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logtype.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['cache']['firstlog']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a>&nbsp;<a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
&log=A#log<?php echo $this->_tpl_vars['cache']['firstlog']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['firstlog']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</a>&nbsp;&nbsp;&nbsp;</nobr>
        <?php else: ?>
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-none.png" width="16" height="16" />&nbsp;--.--.----&nbsp;
        <?php endif; ?>
    </nobr>
      </td>
</tr>
<!--n-->
<tr>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
">&nbsp;</td>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" valign="top"><?php if ($this->_tpl_vars['cache']['direction_deg'] !== false): ?><img src="resource2/ocstyle/images/direction/16x16-<?php echo $this->_tpl_vars['cache']['direction_deg']; ?>
deg.png" title="Himmelsrichtung: <?php echo $this->_tpl_vars['cache']['direction_txt']; ?>
" />&nbsp;<?php endif; ?></td>
    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" colspan="2" valign="top">
    <p class="truncate">
        <?php echo ''; ?><?php if ($this->_tpl_vars['cache']['topratings'] < 4): ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['topratings'] > 0): ?><?php echo '<img src="images/rating-star.gif" title="Empfehlungen" width="14" height="13" style="margin-top: -3px;"/>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['topratings'] > 1): ?><?php echo '<img src="images/rating-star.gif" title="Empfehlungen" width="14" height="13" style="margin-top: -3px;"/>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['topratings'] > 2): ?><?php echo '<img src="images/rating-star.gif" title="Empfehlungen" width="14" height="13" style="margin-top: -3px;"/>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['topratings'] > 3): ?><?php echo '<b><span class="txtblack" style="color:#02c602; font-size: 13px;">'; ?><?php echo $this->_tpl_vars['cache']['topratings']; ?><?php echo 'x</span></b><img src="images/rating-star.gif" title="Empfehlungen" width="14" height="13" style="margin-top: -3px;"/>'; ?><?php endif; ?><?php echo ''; ?>

        <?php $_from = $this->_tpl_vars['cache']['desclangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['desclang']):
?>
            <a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
&desclang=<?php echo ((is_array($_tmp=$this->_tpl_vars['desclang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="text-decoration:none"><b><span style="color:blue"><?php echo ((is_array($_tmp=$this->_tpl_vars['desclang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></b></a>
        <?php endforeach; endif; unset($_from); ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['short_desc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &nbsp;</p>
    </td>
    <?php if ($this->_tpl_vars['creationdate']): ?>
        <td  class="<?php echo $this->_tpl_vars['listcolor']; ?>
" valign="top"><?php if ($this->_tpl_vars['cache']['oconly']): ?><img src="resource2/ocstyle/images/misc/15x15-oc.png"/><?php endif; ?>&nbsp;</td>
    <?php endif; ?>
      <td  class="<?php echo $this->_tpl_vars['listcolor']; ?>
" valign="top"><nobr><?php $_from = $this->_tpl_vars['cache']['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
&log=A#log<?php echo $this->_tpl_vars['log']['id']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logtype.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['log']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a>&nbsp;<?php endforeach; endif; unset($_from); ?>&nbsp;&nbsp;</nobr></td>
</tr>