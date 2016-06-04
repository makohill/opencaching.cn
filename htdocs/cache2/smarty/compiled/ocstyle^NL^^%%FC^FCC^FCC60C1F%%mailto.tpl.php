<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:39
         compiled from mailto.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mailto.tpl', 8, false),array('modifier', 'nl2br', 'mailto.tpl', 27, false),)), $this); ?>
<?php ob_start(); ?>
    <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
<?php $this->_smarty_vars['capture']['userlink'] = ob_get_contents(); ob_end_clean(); ?>
<?php if ($this->_tpl_vars['success'] == true): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/22x22-email.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        E-Mail aan <?php echo $this->_smarty_vars['capture']['userlink']; ?>
 is verzonden
    </div>

    <table class="table">
        <tr>
            <td colspan="2">
                Onderwerp: <?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>

        <tr><td colspan="2">Inhoud:</td></tr>
        <tr>
            <td colspan="2">
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            </td>
        </tr>
    </table>
<?php else: ?>
    <form action="mailto.php" method="post">
        <input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['userid']; ?>
"/>
        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/22x22-email.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            E-Mail aan <?php echo $this->_smarty_vars['capture']['userlink']; ?>
 sturen
        </div>

        <table class="table">
            <?php if ($this->_tpl_vars['email_problems'] > 0): ?>
            <tr><!-- Tag for external page processing: email problems -->
                <td colspan="2" class="redtext">
                    <p>One ore more emails to this user could not be delivered. It might be a good idea to additionally log comments on the user's geocaches, and/or use alternative contact addresses like a message board account or another geocaching platform.</p>
                </td>
            </tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Onderwerp:&nbsp; <input type="text" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input500" /></td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorSubjectEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Je moet een onderwerp opgeven:</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Inhoud:</td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea class="logs" name="text" cols="68" rows="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php if ($this->_tpl_vars['errorBodyEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Je moet een inhoud ingeven:</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="emailaddress" value="1" id="l_send_emailaddress" class="checkbox" <?php if ($this->_tpl_vars['emailaddress'] == true): ?>checked="checked" <?php endif; ?>/>
                    <label for="l_send_emailaddress">Mijn E-Mail adres met deze E-Mail meezenden</label>
                </td>
            </tr>
            <tr>
                <td class="help" colspan="2">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                    Hiermee weet de ontvanger jouw E-Mail adres en heeft de mogelijkheid om direct op jouw E-Mail te antwoorden.<br />
                    <div style="padding: 10px 0 10px 0">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                        <span class="smalltext">Om misbruik te voorkomen moeten we voor jullie en onze veiligheid de volgende regels naleven:</span>
                        <ul style="margin:0; line-height:1.1em">
                            <li class="smalltext">Er mogen alleen E-Mails over cachen en dergelijke verzonden worden, elke vorm van spam is verboden.</li>
                            <li class="smalltext">Alle relevante informatie wordt geregistreerd (datum/tijd, zender/ontvanger en IP adressen)</li>
                            <li class="smalltext">Alle informatie zal vertrouwelijk behandeld worden en zal niet voor derden toegankelijk zijn!</li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorUnkown'] == true): ?>
                <tr><td colspan="2" class="errormsg">De E-Mail kon door een fout niet verzonden worden.</td></tr>
            <?php endif; ?>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="cancel" value="Herstellen" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                    <input type="submit" name="ok" value="Verzenden" class="formbutton" onclick="submitbutton('ok')" />
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
        </table>
    </form>
<?php endif; ?>