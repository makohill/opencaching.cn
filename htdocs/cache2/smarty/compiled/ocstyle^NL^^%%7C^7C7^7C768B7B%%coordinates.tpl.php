<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from coordinates.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'coordinates.tpl', 17, false),)), $this); ?>
 
    <?php if ($this->_tpl_vars['wp'] != ''): ?>
        <div style="margin-top:4px;">
            <p style="color: 5890a8"><b><?php echo $this->_tpl_vars['cachename']; ?>
</b><?php if ($this->_tpl_vars['childwp']): ?>, waypoint&nbsp;<?php echo $this->_tpl_vars['childwp']; ?>
<br />
            <p style="color: 5890a8">door <?php echo $this->_tpl_vars['owner']; ?>
<?php endif; ?>
            </p>
        </div>
    <?php endif; ?>
    <div style="margin-top:16px;">
        <p style="color: 5890a8"><b>DD,dddd&deg;</b> <small>(WGS84)</small><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordDeg']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coordDeg']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>DD&deg; MM,mmm&#39;</b> <small>(WGS84)</small><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordDegMin']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coordDegMin']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>DD&deg; MM&#39; SS&#39;&#39;</b> <small>(WGS84)</small><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordDegMinSec']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coordDegMinSec']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>UTM</b> <small>(WGS84)</small><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordUTM']['zone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['coordUTM']['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coordUTM']['north'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['coordUTM']['east'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 </p>
    </div>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>Gauss-Krüger</b><?php if ($this->_tpl_vars['opt']['template']['locale'] == 'DE'): ?> <small>(Potsdam-Datum)</small><?php endif; ?><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordGK'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>QTH Locator</b><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordQTH'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>Swissgrid</b> <small>(CH1903)</small><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordSwissGrid']['coord'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <?php if ($this->_tpl_vars['showRD']): ?>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>RD</b> <small>(Dutch Grid)</small><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['coordRD'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['coordW3W1']): ?>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>what3words</b> <small>(<?php echo $this->_tpl_vars['W3Wlang1']; ?>
)</small><br />
        <a href="http://what3words.com/<?php echo ((is_array($_tmp=$this->_tpl_vars['coordW3W1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="w3w"><?php echo ((is_array($_tmp=$this->_tpl_vars['coordW3W1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></p>
    </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['coordW3W2']): ?>
    <div style="margin-top:4px;">
        <p style="color: 5890a8"><b>what3words</b> <small>(<?php echo $this->_tpl_vars['W3Wlang2']; ?>
)</small><br />
        <a href="http://what3words.com/<?php echo ((is_array($_tmp=$this->_tpl_vars['coordW3W2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="w3w"><?php echo ((is_array($_tmp=$this->_tpl_vars['coordW3W2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></p>
    </div>
    <?php endif; ?>