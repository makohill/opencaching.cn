<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from restorecaches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'restorecaches.tpl', 88, false),array('modifier', 'escape', 'restorecaches.tpl', 90, false),array('modifier', 'date_format', 'restorecaches.tpl', 92, false),)), $this); ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Revenir Vandalisme
</div>

<div class="content2-container">
<?php if ($this->_tpl_vars['step'] == 1): ?>
    <form method="post" action="restorecaches.php">
        <input type="hidden" name="finduser" value="1" />
        <br />
        <p><strong>Nom d'utilisateur:</strong>
            &nbsp;<input type="text" name="username" size="30" /></p>
        <br />
        <p><input type="submit" name="find" value="Soumettre" class="formbutton" onclick="javascript:submitbutton('find')" /></p>
    </form>

    <?php if ($this->_tpl_vars['error'] != ""): ?>
        <br />
        <p class="errormsg">
        <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
            L'utilisateur ' <?php echo $this->_tpl_vars['username']; ?>
' est inconnue
        <?php elseif ($this->_tpl_vars['error'] == 'nocaches'): ?>
            <?php echo $this->_tpl_vars['username']; ?>
 n'a pas listé des caches
        <?php endif; ?>
        </p>
    <?php endif; ?>

<?php elseif ($this->_tpl_vars['step'] > 1): ?>

    <h2>Restaurer les listes de cache de <?php echo $this->_tpl_vars['username']; ?>
</h2>

    <?php if (! $this->_tpl_vars['disabled'] && $this->_tpl_vars['step'] < 5): ?>
        <p class="redtext">L'utilisateur ' <?php echo $this->_tpl_vars['username']; ?>
' n'est pas désactivé. Vous pouvez visualiser les modifications enregistrées, mais ne pas les rétablir.</p>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['error'] != "" && ( $this->_tpl_vars['error'] != 'notsure' || ! $this->_tpl_vars['simulate'] )): ?>
        <br />
        <p class="errormsg">
        <?php if ($this->_tpl_vars['error'] == 'nocaches'): ?>
            Vous n'avez pas sélectionné de caches.
        <?php elseif ($this->_tpl_vars['error'] == 'nodata'): ?>
            Aucunes données enregistrées sont disponible pour ces caches.
        <?php elseif ($this->_tpl_vars['error'] == 'nodate'): ?>
            Vous devez sélectionner une date. Utilisez le bouton de "retour" de votre navigateur pour essayer à nouveau.
        <?php elseif ($this->_tpl_vars['error'] == 'nochecks'): ?>
            Vous devez choisir les éléments de la liste à restaurer. Utilisez le bouton de "retour" de votre navigateur pour essayer à nouveau.
        <?php elseif ($this->_tpl_vars['error'] == 'notsure'): ?>
            Vous ne dites pas que vous êtes sûr. Utilisez le bouton de "retour" de votre navigateur pour essayer à nouveau.
        <?php endif; ?>
        </p>
        <?php if ($this->_tpl_vars['error'] != 'notsure' && $this->_tpl_vars['error'] != 'nodate' && $this->_tpl_vars['error'] != 'nochecks'): ?>
            <br />
            <form method="post" action="restorecaches.php">
                <input type="hidden" name="finduser" value="1" />
                <input type="hidden" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" />
                <input type="submit" class="formbutton" value="Retour" onclick="submitbutton('submit')" />
            </form>
        <?php endif; ?>

        <?php elseif ($this->_tpl_vars['step'] == 3): ?>
        <?php if ($this->_tpl_vars['disabled']): ?>
            <p>S'il vous plaît sélectionnez les listes à restaurer:</p>
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
                    <th>Coordonnées</th>
                    <th>Logs</th>
                    <th>modifié</th>
                    <th>Nom&nbsp;de&nbsp;cache</th>
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

            <p><input type="submit" class="formbutton" name="tostep4" value="Continue" onclick="submitbutton('tostep4')" /> &nbsp;à la sélection de la date</p>
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
                <p class="redtext">L'utilisateur a modifié un ou plusieurs de ces caches aujourd'hui, donc vous ne pouvez pas annuler les modifications. Cela ne peut pas être fait avant demain.</p>
            <?php endif; ?>
            <?php if (( $this->_tpl_vars['disabled'] && ! $this->_tpl_vars['today'] ) || $this->_tpl_vars['rootadmin']): ?>
                <p>S'il vous plaît sélectionner la date à partir de laquelle toutes les modifications doivent être revenue.<br />La liste sera remise au contenu qu'il avait ce jour-là à 00:00:00.</p>
            <?php endif; ?>
            <br />
            <table class="narrowtable">
                <tr>
                    <th></th>
                    <th>Date</th>
                    <th>Waypoint</th>
                    <th>Changements</th>
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
                <p class="redtext">Attention&nbsp;: Si vous retournez des changements d'inscription du propriétaire fait <em>today</em>, votre revient sera finale. Il ne peut pas être corrigée / défait après. Seulement des revient de coords &amp; pays, les logs et de images seront enregistrées dans ce cas, de sorte que tous les autres changements ne seront pas compréhensible. Par conséquent <span style="text-decoration:underline">il est fortement recommandé de revenir vandalisme pas avant le lendemain&nbsp;!</span></p>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['disabled'] || $this->_tpl_vars['rootadmin']): ?>
                <p>Restaurer ...</p>
                <p>
                    <input type="checkbox" name="restore_coords" value="1" /> coordonnées et pays&nbsp;&nbsp;
                    <input type="checkbox" name="restore_settings" value="1" /> Le nom, les paramètres, les attributs et les dates cachés &nbsp;&nbsp;
                    <input type="checkbox" name="restore_waypoints" value="1" /> GC/NC waypoints <br />
                    <input type="checkbox" name="restore_desc" value="1" /> description(s) incl. Images &nbsp;&nbsp;
                    <input type="checkbox" name="restore_logs" value="1" /> logs incl. images &nbsp;&nbsp;
                    <a href="javascript:checkall('checked')">tous</a> &nbsp; <a href="javascript:checkall('')">rien</a>
                </p>
                <p>
                    <em>Exclus de restauration&nbsp;: le statut de cache, l'attribut OConly, l'additional waypoints, le mot de passe, le statut de l'image d'aperçu</em>
                </p>
                <p>
                    <input type="checkbox" name="sure" value="1" /> Sûr&nbsp;? &nbsp;&nbsp;
                  <input type="checkbox" name="simulate" value="1" /> simuler
                </p>
                <br />
                <p><input type="submit" class="formbutton" name="revert" value="Revenir Vandalisme" style="width:200px" onclick="submitbutton('revert')" /></p>
                <?php if (! $this->_tpl_vars['disabled'] && $this->_tpl_vars['rootadmin']): ?>
                    <p>Vous êtes administrateur de racine et pouvez remplacer les avertissements. Prendre soin&nbsp;!</p>
                <?php endif; ?>
            <?php endif; ?>
        </form>

        <?php elseif ($this->_tpl_vars['step'] == 5): ?>
        <br />
        <p>
            <?php if ($this->_tpl_vars['simulate']): ?>
                Les listes de cache suivantes auraient été remis à l'état avant <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
:
            <?php else: ?>
                Les listes de cache suivants ont été remis à l'état avant <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
:
            <?php endif; ?>
        </p>

        <?php if (count($this->_tpl_vars['restored']) == 0): ?>
            <p>(rien)</p>
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