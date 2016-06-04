<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from tops.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'tops.tpl', 29, false),array('modifier', 'lower', 'tops.tpl', 29, false),array('modifier', 'urlencode', 'tops.tpl', 34, false),)), $this); ?>
 <div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-winner.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Bijzondere Caches
</div>

<table class="table">
    <tr>
        <td style="padding-bottom:20px;">
            The following list is generated automatically by the given recommendations of the users. You can find more informations on regional classification in the <?php echo $this->_tpl_vars['helppagelink']; ?>
Wiki</a>.<br /> <br /> The numbers in the list below means:<br /> <img src="images/rating-star.gif" border="0" alt="Recommendations" /> Number of users that recommend this cache<br /> <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-found.png" width="16" height="16" border="0" alt="Found" /> Checks = Number of time the cache was found<br /> Index tries to take the number of recommendations and founds in an order to show 'the best' geocache first.<br /> <img src="images/tops-formula.png" border="0" alt="Formula" />
        </td>
    </tr>
    <tr>
        <td style="padding-left:32px; padding-bottom:32px;">
            <table class="narrowtable" width="100%">
                <?php $this->assign('lastadm1', ''); ?>
                <?php $this->assign('lastadm3', ''); ?>

                <?php $_from = $this->_tpl_vars['tops']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tops'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tops']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['topItem']):
        $this->_foreach['tops']['iteration']++;
?>
                    <?php if (( $this->_tpl_vars['lastadm1'] != $this->_tpl_vars['topItem']['adm1'] || ( $this->_tpl_vars['lastadm3'] != $this->_tpl_vars['topItem']['adm3'] ) )): ?>
                        <tr>
                            <td valign="top" width="150px" <?php if ($this->_tpl_vars['lastadm1'] != $this->_tpl_vars['topItem']['adm1']): ?>style="padding-top:12px"<?php endif; ?>>
                                <?php if ($this->_tpl_vars['lastadm1'] != $this->_tpl_vars['topItem']['adm1']): ?>
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp; <img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['code1'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" />
                                <?php endif; ?>
                            </td>
                            <td <?php if ($this->_tpl_vars['lastadm1'] != $this->_tpl_vars['topItem']['adm1']): ?>style="padding-top:12px"<?php endif; ?>>
                                <?php if ($this->_tpl_vars['topItem']['adm3'] == null): ?>
                                    <a href="#<?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm1'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
null"><i>(without regional reference)</i><br /></a>
                                <?php else: ?>
                                    <a href="#<?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm1'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm3'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm3'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><br />
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php $this->assign('lastadm1', $this->_tpl_vars['topItem']['adm1']); ?>
                    <?php $this->assign('lastadm3', $this->_tpl_vars['topItem']['adm3']); ?>
                <?php endforeach; endif; unset($_from); ?>
            </table>
        </td>
    </tr>
</table>

<?php $this->assign('lastItem', false); ?>
<?php $this->assign('makehead', true); ?>
<?php $this->assign('makefoot', false); ?>

<?php $_from = $this->_tpl_vars['tops']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tops'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tops']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['topItem']):
        $this->_foreach['tops']['iteration']++;
?>
    <?php if (($this->_foreach['tops']['iteration'] <= 1)): ?>
        <?php $this->assign('makehead', true); ?>
    <?php elseif (( $this->_tpl_vars['topItem']['adm1'] != $this->_tpl_vars['lastItem']['adm1'] ) || ( $this->_tpl_vars['topItem']['adm3'] != $this->_tpl_vars['lastItem']['adm3'] )): ?>
        <?php $this->assign('makehead', true); ?>
        </table>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['makehead']): ?>
        <?php if (! ($this->_foreach['tops']['iteration'] <= 1)): ?><br /><?php endif; ?>
        <p class="content-title-noshade-size3">
            <a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm1'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php if ($this->_tpl_vars['topItem']['adm3'] == null): ?>null<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm3'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php endif; ?>"></a>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            &gt;
            <?php if ($this->_tpl_vars['topItem']['adm3'] == null): ?>
                (without regional reference)
            <?php else: ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['adm3'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php endif; ?>
        </p>

        <table class="table">
            <tr>
                <td style="text-align:right"><b>Index</b></td>
                <td style="text-align:right"><img src="images/rating-star.gif" border="0" alt="Aanbevelingen" /></td>
                <td style="text-align:right"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-found.png" width="16" height="16" border="0" alt="Gevonden" /></td>
                <td></td>
                <td>&nbsp;</td>
            </tr>
    <?php endif; ?>

    <tr>
        <td width="40px" style="text-align:right">
            <?php echo $this->_tpl_vars['topItem']['idx']; ?>

        </td>
        <td width="30px" style="text-align:right">
            <?php echo $this->_tpl_vars['topItem']['ratings']; ?>

        </td>
        <td width="40px" style="text-align:right">
            <?php echo $this->_tpl_vars['topItem']['founds']; ?>

        </td>
        <td></td>
        <td>
            <a href="viewcache.php?wp=<?php echo $this->_tpl_vars['topItem']['wpoc']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['topItem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> door <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['topItem']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['topItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
        </td>
    </tr>

    <?php if (($this->_foreach['tops']['iteration'] == $this->_foreach['tops']['total'])): ?>
        <?php $this->assign('makefoot', true); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['makefoot']): ?>
            <tr><td class="spacer">&nbsp;</td></tr>
        </table>
    <?php endif; ?>

    <?php $this->assign('lastItem', $this->_tpl_vars['topItem']); ?>
    <?php $this->assign('makehead', false); ?>
    <?php $this->assign('makefoot', false); ?>
<?php endforeach; endif; unset($_from); ?>