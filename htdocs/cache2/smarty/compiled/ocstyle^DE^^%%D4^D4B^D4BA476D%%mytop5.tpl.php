<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from mytop5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mytop5.tpl', 15, false),array('modifier', 'date_format', 'mytop5.tpl', 40, false),array('function', 'cycle', 'mytop5.tpl', 34, false),)), $this); ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-winner.png" style="margin-right: 10px;" width="32" height="32" />
    Meine Empfehlungen
</div>
  
<?php if ($this->_tpl_vars['deleted'] == true): ?>
    <div class="content-txtbox-noshade">
        <p style="line-height: 1.6em;"><span style="color: red">Deine Empfehlung für "<a href="viewcache.php?wp=<?php echo $this->_tpl_vars['deletedItem']['wp']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['deletedItem']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>" wurde zurückgezogen.</span></p>
        <div class="buffer" style="width: 500px;">&nbsp;</div>
    </div>
<?php endif; ?>

<table class="null" border="0" cellspacing="0" width="98%">
    <tr>
        <td colspan="2">
            <table class="table">
                <tr class="cachelistheader">
                    <th width="50px">Typ</th>
                    <th width="50px">Status</th>
                    <th width="450px">Name</th>
                    <th width="50px" style="text-align:center"><img src="images/rating-star-shadow.png" title="Empfehlungen gesamt" width="14" height="13" style="margin-top: -3px; "/></th>
                    <th width="100px"><nobr>empfohlen am</nobr></th>
                    <th></th>
                </tr>

                <?php $_from = $this->_tpl_vars['ratings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ratingItem']):
?>
                    <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => "listcolor1,listcolor2"), $this);?>

                    <tr class="cachelistitem">
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => ((is_array($_tmp=$this->_tpl_vars['ratingItem']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['ratingItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['ratingItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['ratingItem']['wp']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ratingItem']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['ratingItem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center"><?php echo $this->_tpl_vars['ratingItem']['countrating']; ?>
</td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center"><?php echo ((is_array($_tmp=$this->_tpl_vars['ratingItem']['rating_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                        <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><nobr>[<a href="javascript:if(confirm('Möchtest du wirklich die Empfehlung widerrufen?'))location.href='mytop5.php?action=delete&amp;cacheid=<?php echo $this->_tpl_vars['ratingItem']['cacheid']; ?>
'">Empfehlung zurückziehen</a>]</nobr></td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="3"><br />Du hast noch keine Geocaches empfohlen.</td></tr>
                <?php endif; unset($_from); ?>
            </table>
        </td>
    </tr>
</table>