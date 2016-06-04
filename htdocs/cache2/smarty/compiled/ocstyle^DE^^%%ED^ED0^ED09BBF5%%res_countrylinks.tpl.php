<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_countrylinks.tpl */ ?>
<?php $this->assign('lastCountry', ''); ?>
<?php $_from = $this->_tpl_vars['newCaches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['newCaches'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['newCaches']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newCache']):
        $this->_foreach['newCaches']['iteration']++;
?><?php if ($this->_tpl_vars['newCache']['country_name'] != $this->_tpl_vars['lastCountry']): ?><?php if ($this->_tpl_vars['lastCountry'] != ''): ?>, <?php endif; ?><a href="#country_<?php echo $this->_tpl_vars['newCache']['country']; ?>
" class="systemlink"><?php echo $this->_tpl_vars['newCache']['country_name']; ?>
</a><?php endif; ?><?php $this->assign('lastCountry', $this->_tpl_vars['newCache']['country_name']); ?><?php endforeach; endif; unset($_from); ?>