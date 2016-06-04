<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from start.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'start.tpl', 44, false),array('modifier', 'count', 'start.tpl', 56, false),array('modifier', 'escape', 'start.tpl', 70, false),)), $this); ?>

<div class="content-txtbox-noshade">
    <div class="content-txtbox-noshade">
        <p class="startmessage"><?php echo $this->_tpl_vars['message']; ?>
</p>
        <div class="buffer" style="width: 500px;">&nbsp;</div>
    </div>
</div>

<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>

<?php if ($this->_tpl_vars['section'] == 'news'): ?>
<div>
    <div class="content2-container bg-blue02">
        <table class="none" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td>
                    <p class="content-title-noshade-size3">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-news.png" style="margin-right: 10px;" width="24" height="24" alt="" />
                        <a href="http://blog.opencaching.de/" style="color:rgb(88,144,168); text-decoration: none;">Nieuws</a>
                        &nbsp; <span class="content-title-link">[<a href="http://blog.opencaching.de/">more...</a>]</span>
                    </p>
                </td>
                <?php if (($this->_tpl_vars['newsfeed']) != ""): ?>
                    <td style="text-align:right">
                        <a href="<?php echo $this->_tpl_vars['newsfeed']; ?>
"><img src="resource2/ocstyle/images/media/22x22-feed.png" /></a>
                    </td>
                    <td width="4px"></td>
                <?php endif; ?>
            </tr>
        </table>
    </div>
</div>
<?php if (! $this->_tpl_vars['extern_news']): ?>
    <table border="0" cellspacing="0" cellpadding="0">
        <?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['newsitem']):
        $this->_foreach['news']['iteration']++;
?>
            <tr>
                <td>
                    <b><?php echo ((is_array($_tmp=$this->_tpl_vars['newsitem']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datetime']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datetime'])); ?>
 (<?php echo $this->_tpl_vars['newsitem']['topic']; ?>
)</b>
                    <?php echo $this->_tpl_vars['newsitem']['content']; ?>

                    <?php if (! ($this->_foreach['news']['iteration'] == $this->_foreach['news']['total'])): ?>
                        <hr />
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="spacer"></td></tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
<?php else: ?>
    <div id="blog">
<?php if (count($this->_tpl_vars['news'])): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_rssparser.tpl", 'smarty_include_vars' => array('rss' => $this->_tpl_vars['news'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
        <p><em>currently not available</em></p>
<?php endif; ?>
    </div>
    <div class="buffer" style="width: 500px;">&nbsp;</div>
<?php endif; ?>

<?php elseif ($this->_tpl_vars['section'] == 'events'): ?>
<div class="content2-container bg-blue02 content2-section-no-p">
    <p class="content-title-noshade-size3">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/event.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
        De volgende evenementen in <?php echo ((is_array($_tmp=$this->_tpl_vars['usercountry'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

        <?php if ($this->_tpl_vars['total_events'] > count($this->_tpl_vars['events'])): ?>
            &nbsp; <span class="content-title-link">[<a href="newcaches.php?cachetype=6">more...</a>]</span>
        <?php endif; ?>
    </p>
</div>
<div class="content2-section-no-p">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_newevents.tpl", 'smarty_include_vars' => array('events' => $this->_tpl_vars['events'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php elseif ($this->_tpl_vars['section'] == 'logpics'): ?>
<div class="content2-container bg-blue02" style="margin-bottom:6px">
    <p class="content-title-noshade-size3">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" style="margin-right: 10px;" width="24" height="24" />
        <a href="newlogpics.php" style="color:rgb(88,144,168); text-decoration: none;">New log pictures</a>
    &nbsp; <span class="content-title-link">[<a href="newlogpics.php">more...</a>]</span>
    </p>
</div>
<div style="height:2px"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php elseif ($this->_tpl_vars['section'] == 'recommendations'): ?>
<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size3">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-winner.png" style="margin-right: 10px;" width="24" height="24" alt="" />
        <a href="tops.php" style="color:rgb(88,144,168); text-decoration: none;">Current top ratings</a>
    </p>
</div>
<p style="line-height: 1.6em;">Caches met de meeste aanbevelingen van de laatste <?php echo $this->_tpl_vars['toprating_days']; ?>
 dagen in <?php echo ((is_array($_tmp=$this->_tpl_vars['usercountry'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.</p>

<div style="margin-bottom:16px">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_newratings.tpl", 'smarty_include_vars' => array('topratings' => $this->_tpl_vars['topratings'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php elseif ($this->_tpl_vars['section'] == 'forum'): ?>
<?php if ($this->_tpl_vars['phpbb_enabled'] == true): ?>
    <div class="buffer" style="width: 500px;height: 2px;">&nbsp;</div>
    <div class="content2-container bg-blue02">
        <p class="content-title-noshade-size3">
            <img src="resource2/ocstyle/images/misc/32x32-news.png" style="margin-right: 10px;" alt="" width="24" height="24" />
            <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['phpbb_link'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="color: rgb(88, 144, 168); text-decoration: none;">Nieuw forum topic(s) (<?php echo ((is_array($_tmp=$this->_tpl_vars['phpbb_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</a>
        </p>
    </div>
    <div id="forum">
    <?php if (count($this->_tpl_vars['forum'])): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_rssparser.tpl", 'smarty_include_vars' => array('rss' => $this->_tpl_vars['forum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <p><em>currently not available</em></p>
    <?php endif; ?>
    </div>
    <div class="buffer" style="width: 500px;">&nbsp;</div>
    <?php endif; ?>

<?php elseif ($this->_tpl_vars['section'] == 'newcaches'): ?>
<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size3">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/traditional.gif" style="margin-right: 10px;" width="24" height="24" alt="" />
        <a href="newcaches.php?country=<?php echo $this->_tpl_vars['usercountryCode']; ?>
" style="color:rgb(88,144,168); text-decoration: none;">Nieuwste caches in <?php echo ((is_array($_tmp=$this->_tpl_vars['usercountry'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
    &nbsp; <span class="content-title-link">[<a href="newcaches.php">more...</a>]</span>
    </p>
</div>
<p style="line-height: 1.6em;">(Totaal <?php echo $this->_tpl_vars['count_hiddens']; ?>
 actieve Caches en <?php echo $this->_tpl_vars['count_founds']; ?>
 gevonden door <?php echo $this->_tpl_vars['count_users']; ?>
 gebruikers)</p>
<div class="content2-section-no-p">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_newcaches.tpl", 'smarty_include_vars' => array('newcaches' => $this->_tpl_vars['newcaches'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>