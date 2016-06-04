<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from restorecaches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'restorecaches.tpl', 88, false),array('modifier', 'escape', 'restorecaches.tpl', 90, false),array('modifier', 'date_format', 'restorecaches.tpl', 92, false),)), $this); ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Ripristina Vandalismo
</div>

<div class="content2-container">
<?php if ($this->_tpl_vars['step'] == 1): ?>
    <form method="post" action="restorecaches.php">
        <input type="hidden" name="finduser" value="1" />
        <br />
        <p><strong>Nome utente:</strong>
            &nbsp;<input type="text" name="username" size="30" /></p>
        <br />
        <p><input type="submit" name="find" value="Invia" class="formbutton" onclick="javascript:submitbutton('find')" /></p>
    </form>

    <?php if ($this->_tpl_vars['error'] != ""): ?>
        <br />
        <p class="errormsg">
        <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
            L'utente '<?php echo $this->_tpl_vars['username']; ?>
' sconosciuto
        <?php elseif ($this->_tpl_vars['error'] == 'nocaches'): ?>
            <?php echo $this->_tpl_vars['username']; ?>
 non ha pubblicato nessuna cache
        <?php endif; ?>
        </p>
    <?php endif; ?>

<?php elseif ($this->_tpl_vars['step'] > 1): ?>

    <h2>Ripristina i listing della cache di <?php echo $this->_tpl_vars['username']; ?>
</h2>

    <?php if (! $this->_tpl_vars['disabled'] && $this->_tpl_vars['step'] < 5): ?>
        <p class="redtext">L'utente '<?php echo $this->_tpl_vars['username']; ?>
' non è disabilitato. Puoi vedere le modifiche registrate, ma non ripristinarle.</p>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['error'] != "" && ( $this->_tpl_vars['error'] != 'notsure' || ! $this->_tpl_vars['simulate'] )): ?>
        <br />
        <p class="errormsg">
        <?php if ($this->_tpl_vars['error'] == 'nocaches'): ?>
            Non hai selezionato nessuna cache.
        <?php elseif ($this->_tpl_vars['error'] == 'nodata'): ?>
            Non ci sono dati registrati per questa cache.
        <?php elseif ($this->_tpl_vars['error'] == 'nodate'): ?>
            Devi selezionare una data. Usa il pulsante 'indietro' del tuo browser per riprovare.
        <?php elseif ($this->_tpl_vars['error'] == 'nochecks'): ?>
            Devi scegliere gli elementi del listing da ripristinare. Usa il pulsante 'indietro' del tuo browser per riprovare.
        <?php elseif ($this->_tpl_vars['error'] == 'notsure'): ?>
            Non hai detto di essere sicuro. Usa il pulsante 'indietro' del tuo browser per riprovare.
        <?php endif; ?>
        </p>
        <?php if ($this->_tpl_vars['error'] != 'notsure' && $this->_tpl_vars['error'] != 'nodate' && $this->_tpl_vars['error'] != 'nochecks'): ?>
            <br />
            <form method="post" action="restorecaches.php">
                <input type="hidden" name="finduser" value="1" />
                <input type="hidden" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" />
                <input type="submit" class="formbutton" value="Indietro" onclick="submitbutton('submit')" />
            </form>
        <?php endif; ?>

        <?php elseif ($this->_tpl_vars['step'] == 3): ?>
        <?php if ($this->_tpl_vars['disabled']): ?>
            <p>Per favore seleziona il listing da ripristinare:</p>
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
                    <th>Coordinate</th>
                    <th>Log</th>
                    <th>modificato</th>
                    <th>Nome cache</th>
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

            <p><input type="submit" class="formbutton" name="tostep4" value="Avanti" onclick="submitbutton('tostep4')" /> &nbsp;alla selezione della data</p>
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
                <p class="redtext">L'utente ha modificato una o più di queste cache oggi, pertanto non puoi ripristinare le modifiche. Questo non può essere fatto prima di domani.</p>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['disabled'] && ! $this->_tpl_vars['today'] ) || $this->_tpl_vars['rootadmin']): ?>
                <p>Per favore seleziona la data alla quale tutte le modifiche devono essere ripristinate.<br />Il listing verrà ripristinato al contenuto che aveva in questa data alle 00:00:00.</p>
            <?php endif; ?>
            <br />
            <table class="narrowtable">
                <tr>
                    <th></th>
                    <th>Data</th>
                    <th>Waypoint</th>
                    <th>Modifiche</th>
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
                <p class="redtext">Attenzione: Se ripristini qualche modifica ai listing fatti dagli utenti <em>oggi</em>, il tuo ripristino sarà definitivo. Non potrà essere corretto o ripristinato successivamente. Pertanto <span style="text-decoration:underline">è fortemente raccomandato di non ripristinare da un vandalismo prima del giorno successivo!</span></p>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['disabled'] || $this->_tpl_vars['rootadmin']): ?>
                <p>Ripristino ...</p>
                <p>
                    <input type="checkbox" name="restore_coords" value="1" /> coordinate e paese&nbsp;&nbsp;
                    <input type="checkbox" name="restore_settings" value="1" /> nome, settaggi, attriuti e data nascosta &nbsp;&nbsp;
                    <input type="checkbox" name="restore_waypoints" value="1" /> GC/NC waypoints <br />
                    <input type="checkbox" name="restore_desc" value="1" /> descrizione/i incluse immagini &nbsp;&nbsp;
                    <input type="checkbox" name="restore_logs" value="1" /> logs incluse immagini &nbsp;&nbsp;
                    <a href="javascript:checkall('checked')">_tutti</a> &nbsp; <a href="javascript:checkall('')">nulla</a>
                </p>
                <p>
                    <em>Esclusi dal ripristino: stato della cache, attributo OConly, puti addizionali, password per log, stato anteprima immagini</em>
                </p>
                <p>
                    <input type="checkbox" name="sure" value="1" /> Sicuro? &nbsp;&nbsp;
                  <input type="checkbox" name="simulate" value="1" /> simula
                </p>
                <br />
                <p><input type="submit" class="formbutton" name="revert" value="Ripristina Vandalismo" style="width:200px" onclick="submitbutton('revert')" /></p>
                <?php if (! $this->_tpl_vars['disabled'] && $this->_tpl_vars['rootadmin']): ?>
                    <p>Sei un amministratore root e puoi sovrascrivere gli avvertimenti. Fai attenzione!</p>
                <?php endif; ?>
            <?php endif; ?>
        </form>

        <?php elseif ($this->_tpl_vars['step'] == 5): ?>
        <br />
        <p>
            <?php if ($this->_tpl_vars['simulate']): ?>
                I seguenti listing dovrebbero essere ripristinati allo stato precedente <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
:
            <?php else: ?>
                I seguenti listing sono stati ripristinati allo stato precedente <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
:
            <?php endif; ?>
        </p>

        <?php if (count($this->_tpl_vars['restored']) == 0): ?>
            <p>(nessun)</p>
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