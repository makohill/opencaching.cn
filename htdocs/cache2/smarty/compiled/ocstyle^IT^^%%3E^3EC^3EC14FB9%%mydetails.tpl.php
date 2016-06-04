<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:41
         compiled from mydetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mydetails.tpl', 26, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Dettagli mio profilo
</div>

<form action="mydetails.php" method="post" style="display:inline;">
    <input type="hidden" name="action" value="change" />

<table class="table">
    <tr>
        <td colspan="3">
            <span class="boldtext">Le seguenti informazioni dettagliate sono registrate nel tuo profilo utente:</span>
        </td>
    </tr>

    <?php if ($this->_tpl_vars['error'] == true || $this->_tpl_vars['errorlen'] == true): ?>
        <tr>
            <td class="errormsg" colspan="3">
                Errore di registrazione.<br />
                <?php if ($this->_tpl_vars['error'] == true): ?>Trovati caratteri non ammessi in<?php echo ((is_array($_tmp=$this->_tpl_vars['errormsg'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br /><?php endif; ?>
                <?php if ($this->_tpl_vars['errorlen'] == true): ?>Campo troppo lungo in<?php echo ((is_array($_tmp=$this->_tpl_vars['errormsglen'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br /><?php endif; ?>
                Ripristinati i dati originali.
            </td>
        </tr>
    <?php endif; ?>

    <tr><td class="spacer" colspan="3"></td></tr>

    <?php $_from = $this->_tpl_vars['useroptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['useropt']):
?>
        <tr>
            <td style="vertical-align:top; width:10px"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['useropt']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<span></span>:</nobr></td>
            <td>
                <?php if ($this->_tpl_vars['edit'] == true): ?>
                    <?php if ($this->_tpl_vars['useropt']['option_input'] == 'text'): ?>
                        <input type="text" name="inp<?php echo $this->_tpl_vars['useropt']['id']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['useropt']['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input200" />
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['useropt']['option_input'] == 'textarea'): ?>
                        <textarea class="logs" cols="68" rows="6" name="inp<?php echo $this->_tpl_vars['useropt']['id']; ?>
" style="max-width:500px; max-height:250px"><?php echo ((is_array($_tmp=$this->_tpl_vars['useropt']['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['useropt']['option_input'] == 'checkbox'): ?>
                        <input type="checkbox" class="checkbox" name="inp<?php echo $this->_tpl_vars['useropt']['id']; ?>
" value="1" <?php if ($this->_tpl_vars['useropt']['option_value'] == '1'): ?>checked="checked"<?php endif; ?> />
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['useropt']['option_input'] == 'checkbox'): ?>
                        <?php if ($this->_tpl_vars['useropt']['option_value'] == '1'): ?>
                            Si
                        <?php else: ?>
                            No
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['useropt']['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                <?php endif; ?>
            </td>
            <td style="vertical-align:top;">
                <?php if ($this->_tpl_vars['edit'] == true): ?>
                    <?php if ($this->_tpl_vars['useropt']['internal_use'] != 1): ?>
                        <input type="checkbox" name="chk<?php echo $this->_tpl_vars['useropt']['id']; ?>
" value="1"<?php if ($this->_tpl_vars['useropt']['option_visible'] == 1): ?> checked="checked"<?php endif; ?> class="checkbox" /> Visualizza
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['useropt']['internal_use'] != 1): ?>
                        <?php if ($this->_tpl_vars['useropt']['option_visible'] == 1): ?>
                            <span style="color:#666666;">visibile</span>
                        <?php else: ?>
                            <span style="color:#666666;">invisibile</span>
                        <?php endif; ?>
                    <?php else: ?>
                        <!-- <span style="color:#666666;">interno</span> -->
                    <?php endif; ?>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; else: ?>
        <tr>
            <td colspan="3">Nessuna informazione trovata nei dettagli dell'utente.</td>
        </tr>
    <?php endif; unset($_from); ?>

    <tr><td class="spacer" colspan="3"></td></tr>

    <tr>
        <td class="header-small" colspan="3">
            <?php if ($this->_tpl_vars['edit'] == true): ?>
                <input type="submit" name="cancel" value="Cancella" class="formbutton" onclick="submitbutton('cancel')" />&nbsp;&nbsp;
                <input type="submit" name="save" value="Invia" class="formbutton" onclick="submitbutton('save')" />
            <?php else: ?>
                <input type="submit" name="change" value="Cambio" class="formbutton" onclick="flashbutton('change')" />
            <?php endif; ?>
        </td>
    </tr>
    <tr><td class="spacer">&nbsp;</td></tr>
</table>

</form>

<?php if ($this->_tpl_vars['edit'] == false): ?>
    <form action="mydetails.php" method="post" style="display:inline;">
        <input type="hidden" name="action" value="changetext" />

        <table class="table">
            <tr>
                <td colspan="3">
                    <span class="boldtext systemlink">Il seguente testo è visualizzato sul tuo <a href="viewprofile.php">profilo pubblico</a>:</span>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php if ($this->_tpl_vars['desctext'] == ""): ?><em>(testo non ancora inserito)</em><?php else: ?><div class="textblock wide_textblock"><?php echo $this->_tpl_vars['desctext']; ?>
<div style="clear:both"></div></div><?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr>
                <td class="header-small" colspan="3">
                    <input type="submit" name="changetext" value="Cambio" class="formbutton" onclick="flashbutton('changetext')" />
                </td>
            </tr>
        </table>
    </form>
<?php endif; ?>