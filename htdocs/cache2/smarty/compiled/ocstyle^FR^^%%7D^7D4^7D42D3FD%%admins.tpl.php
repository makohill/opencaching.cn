<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from admins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admins.tpl', 21, false),)), $this); ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    OC Admins
</div>

<div class="content2-container">

<table class="table">
    <tr><th>ID</th><th>Nom</th><th>Droits</th></tr>
    <?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
    <tr>
        <td><?php echo $this->_tpl_vars['admin']['id']; ?>
</td>
        <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['admin']['id']; ?>
"><?php echo $this->_tpl_vars['admin']['name']; ?>
</a></td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['rights'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>

<p>&nbsp;</p>
<p>Les droits d'administrateur peuvent être accordés et révoqués par un administrateurde système avec un accès de base de données.</p>

</div>