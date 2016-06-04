<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from coordinate_input.tpl */ ?>
<table class="table">
  <tr>
    <td>
      <select name="lat_hem" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?>>
        <option value="N" <?php if ($this->_tpl_vars['lat_hem'] == 'N'): ?> selected <?php endif; ?>>N</option>
        <option value="S" <?php if ($this->_tpl_vars['lat_hem'] == 'S'): ?> selected <?php endif; ?>>S</option>
      </select>
    </td>
    <td>
      <nobr><input type="text" name="lat_deg" maxlength="2" value="<?php echo $this->_tpl_vars['lat_deg']; ?>
" class="input30" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?> /> &deg;</nobr>
    </td>
    <td>
      <nobr><input type="text" name="lat_min" maxlength="6" value="<?php echo $this->_tpl_vars['lat_min']; ?>
" class="input50" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?> /> '</nobr>
    </td>
  </tr>
  <tr>
    <td>
      <select name="lon_hem" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?>>
        <option value="E" <?php if ($this->_tpl_vars['lat_hem'] == 'E'): ?> selected <?php endif; ?>>E</option>
        <option value="W" <?php if ($this->_tpl_vars['lat_hem'] == 'W'): ?> selected <?php endif; ?>>W</option>
      </select>
    </td>
    <td>
      <nobr><input type="text" name="lon_deg" maxlength="3" value="<?php echo $this->_tpl_vars['lon_deg']; ?>
" class="input30" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?> /> &deg;</nobr>
    </td>
    <td>
      <nobr><input type="text" name="lon_min" maxlength="6" value="<?php echo $this->_tpl_vars['lon_min']; ?>
" class="input50" <?php if ($this->_tpl_vars['disabled']): ?>disabled=""<?php endif; ?> /> '</nobr>
    </td>
  </tr>

  <?php if (isset ( $this->_tpl_vars['coord_error'] )): ?>
  <tr>
    <td colspan="3" class="errormsg">
      <?php echo $this->_tpl_vars['coord_error']; ?>

    </td>
  </tr>
  <?php endif; ?>

</table>