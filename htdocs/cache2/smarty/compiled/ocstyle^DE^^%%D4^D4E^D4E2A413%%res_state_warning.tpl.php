<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_state_warning.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'res_state_warning.tpl', 9, false),)), $this); ?>

<?php if (( $this->_tpl_vars['cache']['status'] == 3 ) || ( $this->_tpl_vars['cache']['status'] == 6 )): ?>
    <div class="isarchived">
        <p><strong>Achtung! Dieser Geocache ist &bdquo;<span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>&ldquo;!</strong> Es befindet sich kein Behälter an den angegebenen (oder zu ermittelnden) Koordinaten. Im Interesse des Ortes sollte von einer Suche unbedingt abgesehen werden!</p>
    </div>
<?php elseif ($this->_tpl_vars['cache']['status'] == 2): ?>
    <div class="isarchived">
        <p><strong>Achtung! Dieser Geocache ist &bdquo;<span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>&ldquo;!</strong> Der Geocache selbst oder Teile davon sind nicht vorhanden oder es gibt andere Probleme, die eine erfolgreiche Suche unmöglich machen. Im Interesse des Ortes sollte von einer Suche unbedingt abgesehen werden!</p>
    </div>
<?php elseif ($this->_tpl_vars['cache']['listing_outdated'] > 0): ?>
    <div class="isannotated">
        <p><strong>Diese Cachebeschreibung ist wahrscheinlich veraltet.</strong> Weitere Erläuterungen finden sich in den <span style="white-space:nowrap"><img src="resource2/ocstyle/images/log/16x16-listing-outdated.png">-<a href="#logentries" class="systemlink">Logeinträgen</a></span>.</p>
    </div>
<?php endif; ?>