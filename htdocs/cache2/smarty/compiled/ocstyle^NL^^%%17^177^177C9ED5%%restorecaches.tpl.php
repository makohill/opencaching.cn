<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from restorecaches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'restorecaches.tpl', 88, false),array('modifier', 'escape', 'restorecaches.tpl', 90, false),array('modifier', 'date_format', 'restorecaches.tpl', 92, false),)), $this); ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Revert Vandalism
</div>

<div class="content2-container">
<?php if ($this->_tpl_vars['step'] == 1): ?>
    <form method="post" action="restorecaches.php">
        <input type="hidden" name="finduser" value="1" />
        <br />
        <p><strong>Gebruikersnaam:</strong>
            &nbsp;<input type="text" name="username" size="30" /></p>
        <br />
        <p><input type="submit" name="find" value="Versturen" class="formbutton" onclick="javascript:submitbutton('find')" /></p>
    </form>

    <?php if ($this->_tpl_vars['error'] != ""): ?>
        <br />
        <p class="errormsg">
        <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
            User '<?php echo $this->_tpl_vars['username']; ?>
' is unknown
        <?php elseif ($this->_tpl_vars['error'] == 'nocaches'): ?>
            <?php echo $this->_tpl_vars['username']; ?>
 has not listed any caches
        <?php endif; ?>
        </p>
    <?php endif; ?>

<?php elseif ($this->_tpl_vars['step'] > 1): ?>

    <h2>Restore cache listings of <?php echo $this->_tpl_vars['username']; ?>
</h2>

    <?php if (! $this->_tpl_vars['disabled'] && $this->_tpl_vars['step'] < 5): ?>
        <p class="redtext">User '<?php echo $this->_tpl_vars['username']; ?>
' is not disabled. You can view recorded changes, but not revert them.</p>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['error'] != "" && ( $this->_tpl_vars['error'] != 'notsure' || ! $this->_tpl_vars['simulate'] )): ?>
        <br />
        <p class="errormsg">
        <?php if ($this->_tpl_vars['error'] == 'nocaches'): ?>
            You did not select any caches.
        <?php elseif ($this->_tpl_vars['error'] == 'nodata'): ?>
            No saved data is available for these caches.
        <?php elseif ($this->_tpl_vars['error'] == 'nodate'): ?>
            You must select a date. Use your browser's 'back' button to try again.
        <?php elseif ($this->_tpl_vars['error'] == 'nochecks'): ?>
            You must choose the listing elements to be restored. Use your browser's 'back' button to try again.
        <?php elseif ($this->_tpl_vars['error'] == 'notsure'): ?>
            You did not say that you are sure. Use your browser's 'back' button to try again.
        <?php endif; ?>
        </p>
        <?php if ($this->_tpl_vars['error'] != 'notsure' && $this->_tpl_vars['error'] != 'nodate' && $this->_tpl_vars['error'] != 'nochecks'): ?>
            <br />
            <form method="post" action="restorecaches.php">
                <input type="hidden" name="finduser" value="1" />
                <input type="hidden" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" />
                <input type="submit" class="formbutton" value="Terug" onclick="submitbutton('submit')" />
            </form>
        <?php endif; ?>

        <?php elseif ($this->_tpl_vars['step'] == 3): ?>
        <?php if ($this->_tpl_vars['disabled']): ?>
            <p>Please select the listings to restore:</p>
        <?php endif; ?>
        <br />
        <form method="post" action="restorecaches.php">
            <input type="hidden" name="caches" value="1" />
            <input type="hidden" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" />
            <table class="table">
                <tr>
                    <th></th>
                    <th style="text-align:right">Waypoint</th>
                    <th>Coordinates</th>
                    <th>Logs</th>
                    <th>modified</th>
                    <th>Cachenaam</th>
                </tr>
                <?php $_from = $this->_tpl_vars['aCaches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cache']):
?>
                    <tr>
                        <td><?php if (count($this->_tpl_vars['cache']['data']) > 0): ?><input type="checkbox" name="cache_<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
" value="1" /><?php endif; ?></td>
                        <td style="white-space:nowrap"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['cache']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>&nbsp;<a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
" target="_ocv"><?php echo $this->_tpl_vars['cache']['wp_oc']; ?>
</a></td>
                        <td style="font-size:1em; line-height:1em; white-space:nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['coordinates']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['coordinates']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                        <td style="text-align:right"><?php echo $this->_tpl_vars['cache']['logs']; ?>
&nbsp;</td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['last_modified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                        <!-- <td><?php if (count($this->_tpl_vars['cache']['data']) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
&nbsp;/<?php echo count($this->_tpl_vars['cache']['data']); ?>
<?php endif; ?></td> -->
                        <td style="line-height:1.1em"><?php echo $this->_tpl_vars['cache']['name']; ?>
</td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                <tr><td style="height:4px"></td></tr>
            </table>

            <p><input type="submit" class="formbutton" name="tostep4" value="Go on" onclick="submitbutton('tostep4')" /> &nbsp;to the date selection</p>
        </form>

        <?php elseif ($this->_tpl_vars['step'] == 4): ?>
        <?php echo '
        <script type="text/javascript">
            function checkall(value)
            {
                document.getElementsByName("restore_coords")[0].checked = value;
                document.getElementsByName("restore_settings")[0].checked = value;
                document.getElementsByName("restore_waypoints")[0].checked = value;
                document.getElementsByName("restore_desc")[0].checked = value;
                document.getElementsByName("restore_logs")[0].checked = value;
            }
        </script>
        '; ?>


        <form method="get" action="restorecaches.php">
            <input type="hidden" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" />
            <input type="hidden" name="cacheids" value="<?php echo $this->_tpl_vars['cachelist']; ?>
" />
            <input type="hidden" name="doit" value="1" />
            <?php if ($this->_tpl_vars['today']): ?>
                <p class="redtext">The user changed one or more of these caches today, therefore you cannot revert changes. This can be done not before tomorrow.</p>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['disabled'] && ! $this->_tpl_vars['today'] ) || $this->_tpl_vars['rootadmin']): ?>
                <p>Please select the date from which on all changes are to be reverted.<br />The listing will be reset to the contents it had on that day at 00:00:00.</p>
            <?php endif; ?>
            <br />
            <table class="narrowtable">
                <tr>
                    <th></th>
                    <th>Datum</th>
                    <th>Waypoint</th>
                    <th>Changes</th>
                </tr>

                <?php $_from = $this->_tpl_vars['dates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date'] => $this->_tpl_vars['caches']):
?>
                    <tr>
                        <td><?php if (( $this->_tpl_vars['disabled'] && ! $this->_tpl_vars['today'] ) || $this->_tpl_vars['rootadmin']): ?><input type="radio" name="dateselect" value="<?php echo $this->_tpl_vars['date']; ?>
" /><?php endif; ?></td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                    </tr>
                     <?php $_from = $this->_tpl_vars['caches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wp'] => $this->_tpl_vars['text']):
?>
                         <tr>
                             <td></td>
                             <td></td>
                             <td style="vertical-align:top"><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['wp']; ?>
" target="_ocv"><?php echo $this->_tpl_vars['wp']; ?>
</a></td>
                             <td><?php echo $this->_tpl_vars['text']; ?>
</td>
                         </tr>
                     <?php endforeach; endif; unset($_from); ?>
                     <tr>
                         <td colspan="4"><hr /></td>
                     </tr>
                <?php endforeach; endif; unset($_from); ?>
            </table>

            <br />
            <?php if ($this->_tpl_vars['today'] && $this->_tpl_vars['rootadmin']): ?>
                <p class="redtext">Warning: If you revert any owner-made listing changes of <em>today</em>, your revert will be final. It cannot be corrected / undone afterwards. Only reverts of coords &amp; country, logs and pictures will be logged in this case, so all other changes will not be comprehensible. Therefore <span style="text-decoration:underline">it is strongly recommended to revert vandalism not before the next day!</span></p>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['disabled'] || $this->_tpl_vars['rootadmin']): ?>
                <p>Restore ...</p>
                <p>
                    <input type="checkbox" name="restore_coords" value="1" /> coordinates and country&nbsp;&nbsp;
                    <input type="checkbox" name="restore_settings" value="1" /> name, settings, attributes and hide-date &nbsp;&nbsp;
                    <input type="checkbox" name="restore_waypoints" value="1" /> GC/NC waypoints <br />
                    <input type="checkbox" name="restore_desc" value="1" /> description(s) incl. pictures &nbsp;&nbsp;
                    <input type="checkbox" name="restore_logs" value="1" /> logs incl. pictures &nbsp;&nbsp;
                    <a href="javascript:checkall('checked')">all</a> &nbsp; <a href="javascript:checkall('')">nothing</a>
                </p>
                <p>
                    <em>Excluded from restore: cache status, OConly attribute, additional waypoints, log password, preview picture status</em>
                </p>
                <p>
                    <input type="checkbox" name="sure" value="1" /> Zeker? &nbsp;&nbsp;
                  <input type="checkbox" name="simulate" value="1" /> simulate
                </p>
                <br />
                <p><input type="submit" class="formbutton" name="revert" value="Revert Vandalism" style="width:200px" onclick="submitbutton('revert')" /></p>
                <?php if (! $this->_tpl_vars['disabled'] && $this->_tpl_vars['rootadmin']): ?>
                    <p>You are root admin and can override the warnings. Take care!</p>
                <?php endif; ?>
            <?php endif; ?>
        </form>

        <?php elseif ($this->_tpl_vars['step'] == 5): ?>
        <br />
        <p>
            <?php if ($this->_tpl_vars['simulate']): ?>
                The following cache listings would have been reset to the state before <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
:
            <?php else: ?>
                The following cache listings have been reset to the state before <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
:
            <?php endif; ?>
        </p>

        <?php if (count($this->_tpl_vars['restored']) == 0): ?>
            <p>(none)</p>
        <?php else: ?>
            <ul>
                <?php $_from = $this->_tpl_vars['restored']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wp'] => $this->_tpl_vars['fields']):
?>
                    <li>
                        <a href="viewcache.php?wp=<?php echo $this->_tpl_vars['wp']; ?>
" target="_ocv"><?php echo $this->_tpl_vars['wp']; ?>
</a>:
                        <?php $this->assign('first', 0); ?>
                        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['dummy']):
?><?php if ($this->_tpl_vars['first'] > 0): ?>, <?php endif; ?><?php echo $this->_tpl_vars['field']; ?>
<?php $this->assign('first', 1); ?><?php endforeach; endif; unset($_from); ?>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>

<?php endif; ?>
</div>