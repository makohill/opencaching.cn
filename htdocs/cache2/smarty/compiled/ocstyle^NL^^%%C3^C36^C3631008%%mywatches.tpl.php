<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from mywatches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'mywatches.tpl', 69, false),array('modifier', 'count', 'mywatches.tpl', 122, false),array('modifier', 'escape', 'mywatches.tpl', 140, false),array('function', 'cycle', 'mywatches.tpl', 138, false),)), $this); ?>

<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>

<?php if ($this->_tpl_vars['action'] == 'edit'): ?>
    <script type="text/javascript">
        <?php echo '
        <!--
        function intervalChanged()
        {
            var interval = document.getElementById(\'interval\');
            var hour = document.getElementById(\'hour\');
            var weekday = document.getElementById(\'weekday\');

            switch (interval.selectedIndex)
            {
                case 0: // sofort
                    hour.options[0].selected = true;
                    weekday.options[0].selected = true;
                    weekday.disabled=true; weekday.className=\'disabled\';
                    hour.disabled=true; hour.className=\'disabled\';
                    break;
                case 1:    // taeglich
                    weekday.disabled=true; weekday.className=\'disabled\';
                    hour.disabled=false; hour.className=\'\';
                    break;
                case 2: // woechentlich
                    weekday.disabled=false; weekday.className=\'\';
                    hour.disabled=false; hour.className=\'\';
                    break;
            }
        }
        //-->
        '; ?>

    </script>
    <form action="mywatches.php" method="post">
        <input type="hidden" name="action" value="edit" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-watched.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            Gevolgde caches - Instellingen
        </div>

        <table class="table">
            <tr><td></td></tr>
            <tr>
                <td>Verzending:</td>
                <td>
                    <select id="interval" name="interval" onchange="intervalChanged();">
                        <option value="0" <?php if ($this->_tpl_vars['interval'] == 0): ?>selected="selected"<?php endif; ?>>Direct</option>
                        <option value="1" <?php if ($this->_tpl_vars['interval'] == 1): ?>selected="selected"<?php endif; ?>>Dagelijks</option>
                        <option value="2" <?php if ($this->_tpl_vars['interval'] == 2): ?>selected="selected"<?php endif; ?>>Wekelijks</option>
                    </select>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td>Verzenden om:</td>
                <td>
                    <select id="hour" name="hour">
                        <?php $_from = $this->_tpl_vars['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hourItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['hourItem']['value']; ?>
" <?php if ($this->_tpl_vars['hourItem']['value'] == $this->_tpl_vars['hour']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['hourItem']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['time']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['time'])); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select> uur
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td>Verzenden op:</td>
                <td>
                    <select id="weekday" name="weekday">
                        <?php $_from = $this->_tpl_vars['weekdays']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['weekdayItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['weekdayItem']['value']; ?>
" <?php if ($this->_tpl_vars['weekdayItem']['value'] == $this->_tpl_vars['weekday']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['weekdayItem']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A") : smarty_modifier_date_format($_tmp, "%A")); ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td class="help"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" /> Verzendtijd en dag worden alleen bij dagelijks/wekenlijks gebruikt</td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php if ($this->_tpl_vars['error'] == true): ?>
                <tr><td colspan="2" class="errormsg">Fout bij opslaan!</td></tr>
            <?php elseif ($this->_tpl_vars['saved'] == true): ?>
                <tr><td colspan="2" class="okmsg">De instellingen zijn opgeslagen.</td></tr>
            <?php endif; ?>
            <tr><td class="spacer" colspan="2"></td></tr>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="cancel" value="Herstellen" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                    <input type="submit" name="ok" value="Opslaan" class="formbutton" onclick="submitbutton('ok')" />
                </td>
            </tr>
        </table>
    </form>

    <script type="text/javascript">
        <?php echo '
        <!--
            intervalChanged();
        //-->
        '; ?>

    </script>

<?php else: ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-watched.png" style="margin-right: 10px;" width="32" height="32" />
        Gevolgde caches
    </div>

    <?php if (count($this->_tpl_vars['cachelists'])): ?>
        <p>Single caches:</p>
    <?php endif; ?>

    <table class="null" border="0" cellspacing="0" width="98%">
        <tr>
            <td colspan="2">
                <table class="table">
                    <tr class="cachelistheader">
                        <th width="50px">Type</th>
                        <th width="50px">Status</th>
                        <th width="350px">Naam</th>
                        <th width="100px"><nobr>Laatst gevonden</nobr></th>
                        <th></th>
                    </tr>
                    <?php $_from = $this->_tpl_vars['watches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['watchItem']):
?>
                        <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => "listcolor1,listcolor2"), $this);?>

                        <tr class="cachelistitem">
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => ((is_array($_tmp=$this->_tpl_vars['watchItem']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['watchItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['watchItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['watchItem']['wp']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['watchItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['watchItem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center">
                                <?php if ($this->_tpl_vars['watchItem']['lastfound'] == null): ?>
                                    ---
                                <?php else: ?>
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['watchItem']['lastfound'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>

                                <?php endif; ?>
                            </td>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><nobr>[<a href="javascript:if(confirm('Wilt u de log werkelijk verwijderen?'))location.href='mywatches.php?action=remove&cacheid=<?php echo $this->_tpl_vars['watchItem']['cacheid']; ?>
&target=mywatches.php'">do not watch</a>]</nobr></td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="5"><br />Geen gevolgde caches.</td></tr>
                    <?php endif; unset($_from); ?>
                </table>
            </td>
        </tr>
    </table>

    <?php if (count($this->_tpl_vars['cachelists'])): ?>
        <p><br />Lists:</p>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelists.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
<?php endif; ?>