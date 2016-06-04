<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from adoptcache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'adoptcache.tpl', 15, false),array('modifier', 'date_format', 'adoptcache.tpl', 34, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 'listbycache'): ?>
    <form method="post" action="adoptcache.php">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="submit" value="1" />
        <input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            List of users you offered <?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 for adoption
        </div>

        <table class="table">
            <tr><td class="spacer"></td></tr>
            <tr>
                <th align="left">User</th>
                <th align="left">Date</th>
                <th>&nbsp;</th>
            </tr>

            <tr><td class="spacer"></td></tr>

            <?php $_from = $this->_tpl_vars['adoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adoptItem']):
?>
                <tr>
                    <td>
                        <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['adoptItem']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                    </td>
                    <td>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>

                    </td>
                    <td>
                        <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['adoptItem']['userid']; ?>
">Withdraw adoption offer</a><br />
                    </td>
                </tr>
            <?php endforeach; else: ?>
                <tr><td class="spacer" colspan="3"></td></tr>
                <tr>
                    <td colspan="3">
                        You have not invited any users to adopt this cache.
                    </td>
                </tr>
            <?php endif; unset($_from); ?>

            <tr><td colspan="3"></td></tr>
            <tr>
                <td class="header" colspan="3">
                    Offer <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> for adoption
                </td>
            </tr>
            <tr>
                <td colspan="3">
                     <p>When you have found a user who wants to adopt your geocache, fill in the username here and submit. The user will see this geocache in My Profile &gt; Adoptions. To complete the adoption, the user has to accept our terms of use and commit the adoption.</p>

                     <p>You may offer this geocache to more than one user. The first user committing the adoption will become the new owner of this cache. With the adoption, you will grant to the committing user an unlimited right to use, modifiy, publish and sublicense content of this geocache.</p>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td width="22%">Username:</td>
                <td colspan="2"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['adoptusername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" /></td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">Username unknown</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'userdisabled'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">This user account is disabled.</span></td></tr>
            <?php elseif ($this->_tpl_vars['error'] == 'self'): ?>
                <tr><td>&nbsp;</td><td colspan="2"><span class="errormsg">You cannot adopt your own cache!</span></td></tr>
            <?php endif; ?>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox" name="tou" value="1" />
                    <label for="tou">
                        Yes, I have read and understand the above and agree with it.
                    </label>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
                <tr><td colspan="3"><span class="errormsg">Sorry, you have to read and accept the above to proceed!</span></td></tr>
            <?php endif; ?>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="2">
                    <input type="submit" value="Submit" class="formbutton" onclick="submitbutton('submit')" />
                </td>
            </tr>
        </table>
    </form>

<?php elseif ($this->_tpl_vars['action'] == 'listbyuser'): ?>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-adopt.png" style="margin-right: 10px;" width="32" height="32" alt="" />
        Geocaches which are offered to you for adoption
    </div>

    <table class="table" width="98%">
        <tr><td class="spacer"></td></tr>
        <tr>
            <th>Name</th>
            <th>Owner</th>
            <th></th>
        </tr>

        <tr><td class="spacer"></td></tr>

        <?php $_from = $this->_tpl_vars['adoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adoptItem']):
?>
            <tr>
                <td><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
                <td><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['adoptItem']['ownerid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['adoptItem']['ownername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
                <td style="white-space:nowrap">
                    <a href="adoptcache.php?action=commit&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
">Adopt now</a>
                    &nbsp;
                    <a href="adoptcache.php?action=cancel&cacheid=<?php echo $this->_tpl_vars['adoptItem']['id']; ?>
&userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">Reject adoption</a><br />
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="3">
                    <br />
                    There are no caches that can be adopted by you at the moment.
                </td>
            </tr>
        <?php endif; unset($_from); ?>
    </table>

<?php elseif ($this->_tpl_vars['action'] == 'commit'): ?>
    <form method="post" action="adoptcache.php">
        <input type="hidden" name="action" value="commit" />
        <input type="hidden" name="submit" value="1" />
        <input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
" />

        <div class="content2-pagetitle"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />Commit the adoption of <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>

        <p style="line-height: 1.6em;">
            Thank you for adopting <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>.<br />
            on <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
, <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong> offered this geocache to you for adoption.
        </p>

        <p style="line-height: 1.6em;">
            To complete the adoption, you have to submit this form.<br /> By submitting this form, you will become the responsible owner of this geocache.
        </p>

        <p style="line-height: 1.6em;">
            <br />
            <input type="checkbox" name="tou" value="1" />
            <label for="tou">Yes, I have read and will comply with the Opencaching.de <a href="articles.php?page=impressum#tos">terms of use</a>.</label>
        </p>

        <?php if ($this->_tpl_vars['error'] == 'tou'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">
                Sorry, you have to read and accept the terms of use to proceed!
            </p>
        <?php endif; ?>
        <p style="line-height: 1.6em;"><input type="submit" value="Submit" class="formbutton" onclick="submitbutton('submit')" /></p>
    </form>
<?php endif; ?>