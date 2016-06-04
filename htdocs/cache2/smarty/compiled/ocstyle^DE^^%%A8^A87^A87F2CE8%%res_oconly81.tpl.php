<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_oconly81.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'floor', 'res_oconly81.tpl', 32, false),)), $this); ?>
<table class="stattable">
    <tr>
        <th class="h1 nodatacell" style="text-align:right"><?php if ($this->_tpl_vars['userid'] > 0): ?><nobr><?php if (@ $this->_tpl_vars['oco81_helplink']): ?><?php echo $this->_tpl_vars['oco81_helplink']; ?>
<?php else: ?><a class="systemlink" href="oconly81.php"><?php endif; ?>OConly-81</a>&nbsp;&nbsp;&nbsp;</nobr><?php endif; ?></th>
        <th class="h1 nodatacell" colspan="11" style="line-height:1.8em">Gelände</th>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;<img src="resource2/ocstyle/images/log/16x16-found.png" /></td>
        <?php $_from = $this->_tpl_vars['stat81']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['step'] => $this->_tpl_vars['dummy']):
?>
            <th style="text-align:center"><?php echo $this->_tpl_vars['step']/2; ?>
</th>
        <?php endforeach; endif; unset($_from); ?>
        <th class="h1">Σ</th>
        <td>&nbsp;</td>
    </tr>

    <?php $this->assign('matrixfound', 0); ?>
    <?php $this->assign('totalsum', 0); ?>
    <?php $_from = $this->_tpl_vars['stat81']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['difficulty'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['difficulty']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['difficulty'] => $this->_tpl_vars['terrains']):
        $this->_foreach['difficulty']['iteration']++;
?>
        <tr>
            <?php if (($this->_foreach['difficulty']['iteration'] <= 1)): ?>
                <th class="h1" rowspan="9">Schwierigkeit&nbsp;&nbsp;&nbsp;</th>
            <?php endif; ?>
            <th>&nbsp;&nbsp;<?php echo $this->_tpl_vars['difficulty']/2; ?>
</th>
            <?php $this->assign('dsum', 0); ?>
            <?php $_from = $this->_tpl_vars['terrains']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['terrain'] => $this->_tpl_vars['count']):
?>
                <td style="text-align:center; background-color:<?php if ($this->_tpl_vars['count']): ?>rgb(<?php echo ((is_array($_tmp=$this->_tpl_vars['count']/$this->_tpl_vars['stat81_maxcount']*-242+242.5)) ? $this->_run_mod_handler('floor', true, $_tmp) : floor($_tmp)); ?>
,<?php echo ((is_array($_tmp=$this->_tpl_vars['count']/$this->_tpl_vars['stat81_maxcount']*-242+242.5)) ? $this->_run_mod_handler('floor', true, $_tmp) : floor($_tmp)); ?>
,242)<?php else: ?>#f2f2f2<?php endif; ?>" <?php if ($this->_tpl_vars['count']): ?>onclick='location.href="search.php?showresult=1&amp;expert=0&amp;output=HTML&amp;sort=byname&amp;<?php if ($this->_tpl_vars['userid'] > 0): ?>f_inactive=0&amp;f_disabled=0&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=<?php else: ?>f_inactive=1&amp;f_disabled=1&amp;searchall=<?php endif; ?>&amp;logtype=1,7&amp;calledbysearch=0&amp;cache_attribs=6&amp;terrainmin=<?php echo $this->_tpl_vars['terrain']; ?>
&amp;terrainmax=<?php echo $this->_tpl_vars['terrain']; ?>
&amp;difficultymin=<?php echo $this->_tpl_vars['difficulty']; ?>
&amp;difficultymax=<?php echo $this->_tpl_vars['difficulty']; ?>
"'<?php endif; ?>>
                    <?php if ($this->_tpl_vars['count']): ?>
                        <span style="cursor:pointer; color:<?php if ($this->_tpl_vars['count'] > $this->_tpl_vars['stat81_maxcount']/3): ?>#fff<?php else: ?>#000<?php endif; ?>"><?php echo $this->_tpl_vars['count']; ?>
</span>
                        <?php $this->assign('dsum', $this->_tpl_vars['dsum']+$this->_tpl_vars['count']); ?>
                        <?php $this->assign('matrixfound', $this->_tpl_vars['matrixfound']+1); ?>
                    <?php else: ?>&nbsp;<?php endif; ?>
                </td>
            <?php endforeach; endif; unset($_from); ?>
            <th class="h0" style="text-align:center"><?php if ($this->_tpl_vars['dsum']): ?><?php echo $this->_tpl_vars['dsum']; ?>
<?php $this->assign('totalsum', $this->_tpl_vars['totalsum']+$this->_tpl_vars['dsum']); ?><?php endif; ?></th>
        </tr>
    <?php endforeach; endif; unset($_from); ?>

    <tr>
        <td rowspan="2"></td>
        <th class="h1">Σ</th>
        <?php $_from = $this->_tpl_vars['stat81_tsum']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['count']):
?>
            <th class="h0"><?php if ($this->_tpl_vars['count']): ?><?php echo $this->_tpl_vars['count']; ?>
<?php endif; ?></th>
        <?php endforeach; endif; unset($_from); ?>
        <td style="text-align:center"><b><?php echo $this->_tpl_vars['totalsum']; ?>
</b></td>
    </tr>
    <?php if ($this->_tpl_vars['userid'] > 0): ?>
        <tr>
            <td colspan="12" style="padding-top:0.5em"><p>Der Benutzer hat <b><?php echo $this->_tpl_vars['matrixfound']; ?>
</b> von <b>81</b> theoretisch möglichen Gelände/Schwierigkeit-Kombinationen gefunden.</p></td>
        </tr>
    <?php endif; ?>
</table>