<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from res_state_warning.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'res_state_warning.tpl', 9, false),)), $this); ?>

<?php if (( $this->_tpl_vars['cache']['status'] == 3 ) || ( $this->_tpl_vars['cache']['status'] == 6 )): ?>
    <div class="isarchived">
        <p><strong>¡Atención! Este geocache es &quot;<span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>&quot;!</strong> No es un contenedor físico a las coordenadas especificadas (o los que tienen que determinar). ¡El interés del lugar no es necesariamente la búsqueda!</p>
    </div>
<?php elseif ($this->_tpl_vars['cache']['status'] == 2): ?>
    <div class="isarchived">
        <p><strong>¡Atención! Este geocache es &quot;<span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>&quot;!</strong> El geocaché en sí misma o alguns de sus partes que faltan o hay otros problemas que hacen imposible encontrar su ubicación. ¡El interés del lugar no es necesariamente la búsqueda!</p>
    </div>
<?php elseif ($this->_tpl_vars['cache']['listing_outdated'] > 0): ?>
    <div class="isannotated">
        <p><strong>This geocache description may be outdated.</strong> See the <span style="white-space:nowrap"><img src="resource2/ocstyle/images/log/16x16-listing-outdated.png"> <a href="#logentries" class="systemlink">log entries</a></span> for more information.</p>
    </div>
<?php endif; ?>