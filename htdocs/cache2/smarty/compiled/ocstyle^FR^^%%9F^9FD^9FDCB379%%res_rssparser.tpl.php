<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_rssparser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'res_rssparser.tpl', 19, false),)), $this); ?>
<div class="buffer" style="width: 500px;height: 2px;">&nbsp;</div>
    <div class="newsblock">
<?php if (! $this->_tpl_vars['includetext']): ?>
        <table class='narrowtable' style='margin-top:0'>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['rss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rss'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rss']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rss']):
        $this->_foreach['rss']['iteration']++;
?>
<?php if ($this->_tpl_vars['includetext']): ?>
        <p class="content-title-noshade-size15" style="display: inline;"><?php echo $this->_tpl_vars['rss']['pubDate']; ?>
 - <?php echo $this->_tpl_vars['rss']['title']; ?>
</p>
        <p style="line-height: 1.6em;display: inline;">&emsp;[<b><a class="link" href="<?php echo $this->_tpl_vars['rss']['link']; ?>
">mehr...</a></b>]</p>
        <div class="rsstext"><?php echo $this->_tpl_vars['rss']['description']; ?>
</div>
<?php else: ?>
            <tr>
                <td style="text-align:right; white-space:nowrap;"><?php echo ((is_array($_tmp=$this->_tpl_vars['rss']['pubDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td>
                <td><a class="links" href="<?php echo $this->_tpl_vars['rss']['link']; ?>
"><?php echo $this->_tpl_vars['rss']['title']; ?>
</a></td>
            </tr>
<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<?php if (! $this->_tpl_vars['includetext']): ?>
        </table>
<?php endif; ?>
    </div>