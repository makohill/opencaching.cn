<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newlogs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newlogs.tpl', 14, false),array('modifier', 'lower', 'newlogs.tpl', 112, false),array('modifier', 'date_format', 'newlogs.tpl', 120, false),array('modifier', 'count', 'newlogs.tpl', 201, false),)), $this); ?>
<?php if ($this->_tpl_vars['ownerlogs'] || $this->_tpl_vars['ownlogs']): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/traditional.gif" style="margin-right: 10px;" width="32" height="32" alt="" />
        <?php if ($this->_tpl_vars['ownerlogs']): ?>
            <?php if ($this->_tpl_vars['ownlogs']): ?>
                Entrées du log pour vos géocaches
            <?php else: ?>
                <?php ob_start(); ?><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['ownerid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ownername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php $this->_smarty_vars['capture']['ownerlink'] = ob_get_contents(); ob_end_clean(); ?>
                Nouveaux entrées du log pour les caches de <?php echo $this->_smarty_vars['capture']['ownerlink']; ?>

            <?php endif; ?>
        <?php else: ?>
            Vos entrées du log
        <?php endif; ?>
    </div>
<?php else: ?>
    <script type="text/javascript">
        <?php echo '
        <!--
        function logSelectionChanged()
        {
            var new_logselection = document.getElementById(\'logselection\').value;
            var url = window.location.href;
            url = url.replace(/[&?]logselection=[123]/, "");
            if (url.indexOf(\'?\') > 0)
                url += "&";
            else
                url += "?";
            url += "logselection=" + new_logselection;
            window.location.href = url;
        }
        //-->
        '; ?>

    </script>
    <table cellspacing="0" cellpadding="0" style="width:98.1%">
        <tr>
            <td class="nav4">
                <ul>
                    <li class="group noicon <?php if ($this->_tpl_vars['countryCode'] === ''): ?>selected<?php endif; ?>"><a href="newlogs.php">Tous les nouveaux logs</a></li>
                    <li class="group noicon <?php if (! $this->_tpl_vars['rest'] && $this->_tpl_vars['countryCode']): ?>selected<?php endif; ?>"><a href="newlogs.php?country=<?php echo $this->_tpl_vars['opt']['template']['country']; ?>
">Nouveaux logs à <?php echo $this->_tpl_vars['countryName']; ?>
</a>
                    <li class="group noicon <?php if ($this->_tpl_vars['rest']): ?>selected<?php endif; ?>"><a href="newlogsrest.php">Nouveaux logs sans <?php echo $this->_tpl_vars['mainCountryName']; ?>
</a></li>
                </ul>
            </td>
            <td class="default" style="text-align:right; vertical-align:top; padding-top:0.2em">
                <select id="logselection" onchange="logSelectionChanged()" >
                    <option value="1" <?php if ($this->_tpl_vars['logselection'] == 1): ?>selected="selected"<?php endif; ?>>Nouvelles entrées actuelles</option>
                    <option value="2" <?php if ($this->_tpl_vars['logselection'] == 2): ?>selected="selected"<?php endif; ?>>Toutes les nouvelles entrées</option>
                    <option value="3" <?php if ($this->_tpl_vars['logselection'] == 3): ?>selected="selected"<?php endif; ?>>... par date du log</option>
                </select>
            </td>
        </tr>
    </table>
    <p>
        <?php if ($this->_tpl_vars['rest'] || ! $this->_tpl_vars['countryCode']): ?>
            <br />
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_countrylinks.tpl", 'smarty_include_vars' => array('newCaches' => $this->_tpl_vars['newLogs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    </p>
<?php endif; ?>

<?php if (! $this->_tpl_vars['rest'] && $this->_tpl_vars['countryCode']): ?>
    <div style="height:4px"></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['total_found'] + $this->_tpl_vars['total_attended'] + $this->_tpl_vars['total_dnf'] + $this->_tpl_vars['total_recommended']): ?>
    <div style="float:right">
        <p style="line-height:2em">
            &nbsp;&nbsp;total&nbsp;
            <?php if ($this->_tpl_vars['total_recommended']): ?>
                <?php echo $this->_tpl_vars['total_recommended']; ?>
  <img src="images/rating-star.gif" width="17" height="16" title="recommandé" />&nbsp;
            <?php endif; ?>
            <?php if ($this->_tpl_vars['total_found']): ?>
                <?php echo $this->_tpl_vars['total_found']; ?>
 <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-found.png" alt="trouvé" title="trouvé"  />&nbsp;
            <?php endif; ?>
            <?php if ($this->_tpl_vars['total_dnf']): ?>
                <?php echo $this->_tpl_vars['total_dnf']; ?>
 <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-dnf.png" alt="non&nbsp;trouvé" title="non&nbsp;trouvé"  />&nbsp;
            <?php endif; ?>
            <?php if ($this->_tpl_vars['total_attended']): ?>
                <?php echo $this->_tpl_vars['total_attended']; ?>
 <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-attended.png" alt="participation" title="participation"  />&nbsp;
            <?php endif; ?>
        </p>
    </div>
<?php endif; ?>
<p style="line-height:2em">
    <?php if ($this->_tpl_vars['paging']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        &nbsp; &nbsp;
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ownerlogs'] && $this->_tpl_vars['ownlogs']): ?>
        <?php if ($this->_tpl_vars['show_own_logs']): ?>
            <a class="systemlink" href="ownerlogs.php?ownlogs=0">Cacher des propres logs</a>
        <?php else: ?>
            <a class="systemlink" href="ownerlogs.php?ownlogs=1">Afficher des propres logs</a>
        <?php endif; ?>
    <?php endif; ?>
</p>

<table width="100%" class="table">
    <tr><td class="spacer"></td></tr>
    <?php $this->assign('lastCountry', ''); ?>

    <?php $_from = $this->_tpl_vars['newLogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['newLogs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['newLogs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newLog']):
        $this->_foreach['newLogs']['iteration']++;
?>
        <?php if ($this->_tpl_vars['newLogsPerCountry'] && ( $this->_tpl_vars['rest'] || ! $this->_tpl_vars['countryCode'] )): ?>
            <?php if ($this->_tpl_vars['newLog']['country_name'] != $this->_tpl_vars['lastCountry']): ?>
                <tr><td class="spacer" id="country_<?php echo $this->_tpl_vars['newLog']['country']; ?>
"></td></tr>
                <tr><td colspan="3">
                    <table cellspacing="0" cellpadding="0"><tr>
                        <td class="content-title-flag" ><img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['newLog']['country'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" /></td>
                        <td><b class="content-title-noshade-size08"><?php echo ((is_array($_tmp=$this->_tpl_vars['newLog']['country_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b>&nbsp;</b></td>
                    </tr></table>
                </td></tr>
            <?php endif; ?>
        <?php endif; ?>
        <tr>
            <td style="width:1px">
                <?php echo ((is_array($_tmp=$this->_tpl_vars['newLog']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>

            </td>
            <td class="listicon"><nobr>
                <?php if ($this->_tpl_vars['newLog']['type'] == 1): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-found.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 2): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-dnf.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 3): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-note.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 7): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-attended.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 8): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-will_attend.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 9): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-archived.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 10): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-active.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 11): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-disabled.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 13): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-locked.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 14): ?>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-locked-invisible.png" width="16" height="16" border="0" alt="" style="margin-top:4px;" />
                <?php endif; ?>
            </nobr></td>
            <td>
                <?php if ($this->_tpl_vars['newLog']['oc_team_comment']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/oc-team-comment.png" alt="OC-Team" title="OC équipe commentaire" /><?php endif; ?>
                <?php ob_start(); ?>
                    <a href="viewcache.php?wp=<?php echo $this->_tpl_vars['newLog']['wp_oc']; ?>
&log=A#log<?php echo $this->_tpl_vars['newLog']['id']; ?>
"><?php if ($this->_tpl_vars['newLog']['first']): ?><b><?php echo ((is_array($_tmp=$this->_tpl_vars['newLog']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['newLog']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></a>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['newLog']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php $this->_smarty_vars['capture']['cachename'] = ob_get_contents(); ob_end_clean(); ?>
                <?php ob_start(); ?>
                    <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['newLog']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['newLog']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                <?php $this->_smarty_vars['capture']['username'] = ob_get_contents(); ob_end_clean(); ?>

                <?php if ($this->_tpl_vars['newLog']['type'] == 1): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 a trouvé <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 2): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 ne pas trouvé <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 3): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 ont écrit une note de <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 7): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 ont visité <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 8): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 veulent visiter <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 9): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 a archivé <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 10): ?>
                    <?php if ($this->_tpl_vars['newLog']['oc_team_comment']): ?>
                        <?php echo $this->_smarty_vars['capture']['username']; ?>
 a activé <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                    <?php else: ?>
                        <?php echo $this->_smarty_vars['capture']['username']; ?>
 a maintainted <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                    <?php endif; ?>
                <?php elseif ($this->_tpl_vars['newLog']['type'] == 11): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 a désactivé <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php elseif ($this->_tpl_vars['newLog']['type'] == 13 || $this->_tpl_vars['newLog']['type'] == 14): ?>
                    <?php echo $this->_smarty_vars['capture']['username']; ?>
 a verrouillé <?php echo $this->_smarty_vars['capture']['cachename']; ?>

                <?php endif; ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logflags.tpl", 'smarty_include_vars' => array('logItem' => $this->_tpl_vars['newLog'],'withRecommendation' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php if ($this->_tpl_vars['newLog']['pics']): ?>
                    <img src="resource2/ocstyle/images/action/16x16-addimage.png" />
                    <?php if ($this->_tpl_vars['newLog']['picshown']): ?>&rarr;<?php endif; ?>
                <?php endif; ?>
            </td>
            <?php if ($this->_tpl_vars['newLog']['pic_uuid'] != ""): ?>
                <td rowspan="<?php echo $this->_tpl_vars['lines_per_pic']; ?>
">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpicture.tpl", 'smarty_include_vars' => array('picture' => $this->_tpl_vars['newLog'],'logdate' => false,'loguser' => false,'nopicshadow' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </td>
                <td></td>
            <?php endif; ?>
        </tr>
        <?php $this->assign('lastCountry', $this->_tpl_vars['newLog']['country_name']); ?>
    <?php endforeach; else: ?>
        <?php if ($this->_tpl_vars['ownerlogs']): ?>
            <p>Il n'y a pas encore des logs pour vos géocache.</p>
        <?php endif; ?>
    <?php endif; unset($_from); ?>
    <tr><td class="spacer" style="height:<?php echo $this->_tpl_vars['addpiclines']; ?>
em"></td></tr>
</table>

<?php if ($this->_tpl_vars['paging'] && count($this->_tpl_vars['newLogs']) > 20): ?>
    <p>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </p>
    <br />
<?php endif; ?>