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
        E-mail to <?php echo $this->_smarty_vars['capture']['userlink']; ?>
 has been sent.
    </div>

    <table class="table">
        <tr>
            <td colspan="2">
                Subject: <?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>

        <tr><td colspan="2">Content:</td></tr>
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
            Send E-Mail to <?php echo $this->_smarty_vars['capture']['userlink']; ?>

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
                <td colspan="2">Subject:&nbsp; <input type="text" name="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="input500" /></td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorSubjectEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">You have to enter a subject!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Content:</td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea class="logs" name="text" cols="68" rows="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php if ($this->_tpl_vars['errorBodyEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">You have to enter a content!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">
                    <input type="checkbox" name="emailaddress" value="1" id="l_send_emailaddress" class="checkbox" <?php if ($this->_tpl_vars['emailaddress'] == true): ?>checked="checked" <?php endif; ?>/>
                    <label for="l_send_emailaddress">Send my e-mail address with this message</label>
                </td>
            </tr>
            <tr>
                <td class="help" colspan="2">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                    This enables the receiver to answer your e-mail directly using his e-mail client. You may enable this option by default in your <a href="myprofile.php">user profile</a>.<br />
                    <div style="padding: 10px 0 10px 0">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                        <span class="smalltext">To protect you and us from abuse:</span>
                        <ul style="margin:0; line-height:1.1em">
                            <li class="smalltext">Only e-mails concerning geocaching are allowed. Spamming is prohibited!</li>
                            <li class="smalltext">All relevant information will be logged (date/time, sender/receiver and IP address).</li>
                            <li class="smalltext">All information will be handled confidential and will not be disclosed to third parties!</li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorUnkown'] == true): ?>
                <tr><td colspan="2" class="errormsg">An unkown error occurred and the e-mail was not sent.</td></tr>
            <?php endif; ?>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="cancel" value="Reset" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                    <input type="submit" name="ok" value="Send" class="formbutton" onclick="submitbutton('ok')" />
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
        </table>
    </form>
<?php endif; ?>