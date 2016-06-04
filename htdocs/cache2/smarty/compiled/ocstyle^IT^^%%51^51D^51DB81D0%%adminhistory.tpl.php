<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:37
         compiled from adminhistory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'adminhistory.tpl', 32, false),array('modifier', 'date_format', 'adminhistory.tpl', 55, false),array('modifier', 'escape', 'adminhistory.tpl', 131, false),)), $this); ?>
<?php if (! $this->_tpl_vars['reportdisplay']): ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Storia della cache
</div>

<form method="POST" action="adminhistory.php">
    <p>
        <b>Codice cache:</b> &nbsp;
        <input type="text" width="10" name="wp" /> &nbsp;
        <input type="submit" name="submitform" value="Visualizza" class="formbutton" onclick="submitbutton('submitform')" />
    </p>
</form>
<?php endif; ?>

<?php if ($this->_tpl_vars['showhistory']): ?>
    <?php if (! $this->_tpl_vars['reportdisplay']): ?>
        <p>
            <a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
"><?php echo $this->_tpl_vars['cache']['name']; ?>
</a>
            di
            <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cache']['user_id']; ?>
"><?php echo $this->_tpl_vars['ownername']; ?>
</a>
        </p>
        <br />
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['reportdisplay'] || count($this->_tpl_vars['reports'])): ?>
        <div class="content2-container bg-blue02">
            <p class="content-title-noshade-size2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="22" height="22" alt="" />
                <?php if ($this->_tpl_vars['reportdisplay']): ?>    Altre segnalazioni per questa cache<?php else: ?>Segnalazioni cache<?php endif; ?>
            </p>
        </div>

        <table class="table" width="98%">
        <?php if (count($this->_tpl_vars['reports'])): ?>
            <tr>
                <th>ID</th>
                <th>Data segnalazione</th>
                <th>Segnalatore</th>
                <th>Motivo</th>
                <th>Amministratore</th>
                <th>Ultima modifica</th>
                <th>Stato</th>
            </tr>

            <?php $_from = $this->_tpl_vars['reports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report']):
?>
                <tr>
                    <td><a href="adminreports.php?id=<?php echo $this->_tpl_vars['report']['id']; ?>
"><?php echo $this->_tpl_vars['report']['id']; ?>
</a></td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['report']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                    <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['report']['userid']; ?>
"><?php echo $this->_tpl_vars['report']['usernick']; ?>
</a></td>
                    <td><?php echo $this->_tpl_vars['report']['reason']; ?>
</td>
                    <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['report']['adminid']; ?>
"><?php echo $this->_tpl_vars['report']['adminnick']; ?>
</a></td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['report']['lastmodified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                    <td><?php echo $this->_tpl_vars['report']['status']; ?>
</td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <tr><td></td></tr>
        <?php endif; ?>
        </table>
        <br />
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['reportdisplay'] || count($this->_tpl_vars['deleted_logs'])): ?>
        <div class="content2-container bg-blue02">
            <p class="content-title-noshade-size2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-logs.png" style="margin-right: 10px;" width="22" height="22" alt="" />
                logs cancellati <small>dalla cancellazione di data Febbraio 2012</small>
            </p>
        </div>
        <div class="content2-container">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logentry.tpl", 'smarty_include_vars' => array('header' => false,'footer' => false,'footbacklink' => false,'cache' => $this->_tpl_vars['cache'],'logs' => $this->_tpl_vars['deleted_logs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        <p>&nbsp;</p>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['reportdisplay'] || count($this->_tpl_vars['status_changes'])): ?>
        <div class="content2-container bg-blue02">
            <p class="content-title-noshade-size2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-maintenance.png" style="margin-right: 10px;" width="16" height="16" alt="" />
                stato modificato <small>dal Giugno 2013</small>
            </p>
        </div>

        <table class="table" width="90%">
        <?php if (count($this->_tpl_vars['status_changes'])): ?>
            <tr>
                <th>Data</th>
                <th>Stato</th>
                <th>Modificato da</th>
            </tr>
            <?php $_from = $this->_tpl_vars['status_changes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['change']):
?>
                <tr>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['change']['date_modified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                    <td><?php echo $this->_tpl_vars['change']['old_status']; ?>
 &rarr; <?php echo $this->_tpl_vars['change']['new_status']; ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['change']['new_status_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['change']['user_id']; ?>
"><?php echo $this->_tpl_vars['change']['username']; ?>
</a></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <tr><td></td></tr>
        <?php endif; ?>
        </table>
        <p>&nbsp;</p>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['reportdisplay'] || count($this->_tpl_vars['coordinates']) > 1): ?>
        <div class="content2-container bg-blue02">
            <p class="content-title-noshade-size2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/20x20-compass.png" style="margin-right: 10px;" width="20" height="20" alt="" />
                Coordinate changes
            </p>
        </div>

        <table class="table" width="90%">
        <?php if (count($this->_tpl_vars['coordinates']) > 1): ?>
            <tr>
                <th>Data</th>
                <th>Coordinate</th>
                <th>Modificato da</th>
            </tr>
            <?php $this->assign('n', 0); ?>
            <?php $_from = $this->_tpl_vars['coordinates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['coord']):
?>
                <tr>
                    <td width="20%"><?php echo ((is_array($_tmp=$this->_tpl_vars['coord']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['coord']['coord']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coord']['coord']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <?php $this->assign('n', $this->_tpl_vars['n']+1); ?>
                    <?php if ($this->_tpl_vars['n'] < count($this->_tpl_vars['coordinates'])): ?>
                        <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['coord']['user_id']; ?>
"><?php echo $this->_tpl_vars['coord']['username']; ?>
</a></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <tr><td></td></tr>
        <?php endif; ?>
        </table>
        <p>&nbsp;</p>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['reportdisplay'] || count($this->_tpl_vars['adoptions'])): ?>
        <div class="content2-container bg-blue02">
            <p class="content-title-noshade-size2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="22" height="22" alt="" />
                Adozioni <small>da Settembre 2012</small>
            </p>
        </div>

        <table class="table" width="90%">
        <?php if (count($this->_tpl_vars['adoptions'])): ?>
            <tr>
                <th>Data</th>
                <th>Dal proprietario</th>
                <th></th>
                <th>Al proprietario</th>
            </tr>
            <?php $_from = $this->_tpl_vars['adoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adoption']):
?>
                <tr>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['adoption']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
                    <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['adoption']['from_user_id']; ?>
"><?php echo $this->_tpl_vars['adoption']['from_username']; ?>
</a></th>
                    <td>&rarr;</td>
                    <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['adoption']['to_user_id']; ?>
"><?php echo $this->_tpl_vars['adoption']['to_username']; ?>
</a></th>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
            <tr><td></td></tr>
        <?php endif; ?>
        </table>
    <?php endif; ?>

<?php else: ?>
    <p class="errormsg"><?php echo $this->_tpl_vars['error']; ?>
</p>
<?php endif; ?>