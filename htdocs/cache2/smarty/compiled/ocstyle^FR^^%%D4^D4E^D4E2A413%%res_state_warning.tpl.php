<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from res_state_warning.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'res_state_warning.tpl', 9, false),)), $this); ?>

<?php if (( $this->_tpl_vars['cache']['status'] == 3 ) || ( $this->_tpl_vars['cache']['status'] == 6 )): ?>
    <div class="isarchived">
        <p><strong>Attention&nbsp;! Cette géocache est &quot;<span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>&quot;!</strong> Il n'y a pas une conteneur physique aux coordonnées spécifiées (ou déterminées). Dans l'intérêt de l'endroit il ne devrait pas être nécessairement à la recherche&nbsp;!</p>
    </div>
<?php elseif ($this->_tpl_vars['cache']['status'] == 2): ?>
    <div class="isarchived">
        <p><strong>Attention&nbsp;! Cette géocache est &quot;<span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>&quot;!</strong> La géocache lui-même ou des parties sont manquantes ou il y a d'autres problèmes qui font une recherche réussie impossible. Dans l'intérêt de l'endroit il ne devrait pas être nécessairement à la recherche&nbsp;!</p>
    </div>
<?php elseif ($this->_tpl_vars['cache']['listing_outdated'] > 0): ?>
    <div class="isannotated">
        <p><strong>Cette description de géocache peut être obsolète.</strong> Voir les <span style="white-space:nowrap"><img src="resource2/ocstyle/images/log/16x16-listing-outdated.png"> <a href="#logentries" class="systemlink">log entries</a></span> pour des informations supplémentaires.</p>
    </div>
<?php endif; ?>