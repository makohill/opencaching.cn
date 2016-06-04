<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from sys_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sys_main.tpl', 14, false),array('modifier', 'escapejs', 'sys_main.tpl', 51, false),array('modifier', 'sprintf', 'sys_main.tpl', 300, false),array('modifier', 'date_format', 'sys_main.tpl', 311, false),array('function', 'season', 'sys_main.tpl', 46, false),array('block', 'nocache', 'sys_main.tpl', 136, false),)), $this); ?>
<?php $this->_cache_serials['/var/www/html/bin/../htdocs/cache2/smarty/compiled//ocstyle^ES^^%%0A^0A0^0A0360A0%%sys_main.tpl.inc'] = 'e801462bb463594ee5ec2d1fbd05cdb1'; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            <?php if (( $this->_tpl_vars['opt']['template']['title'] == "" )): ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['subtitle1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['subtitle2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php else: ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['template']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['subtitle1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['subtitle2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php endif; ?>
        </title>
        <meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['meta']['keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
        <meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['meta']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
" />
        <meta http-equiv="gallerimg" content="no" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <link rel="SHORTCUT ICON" href="favicon.ico" />
        <link rel="apple-touch-icon" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-ipad-retina.png" />
        <link rel="stylesheet" type="text/css" media="screen,projection" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/css/style_screen.css?ft=<?php echo $this->_tpl_vars['screen_css_time']; ?>
" />
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" media="screen,projection" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/css/style_screen_msie.css?ft=<?php echo $this->_tpl_vars['screen_msie_css_time']; ?>
" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" media="print" href="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/css/style_print.css?ft=<?php echo $this->_tpl_vars['print_css_time']; ?>
" />
        <?php echo '
            <script type="text/javascript">
            <!--
                var nWindowWidth = 9999;
                if (window.innerWidth)
                    nWindowWidth = window.innerWidth;
                else if (screen.availWidth)
                    nWindowWidth = screen.availWidth;
                if (nWindowWidth > 970)
                    document.writeln(\'<link rel="stylesheet" type="text/css" media="screen,projection" href="'; ?>
<?php echo smarty_function_season(array('winter' => 'resource2/ocstyle/css/seasons/style_winter.css','spring' => 'resource2/ocstyle/css/seasons/style_spring.css','summer' => 'resource2/ocstyle/css/seasons/style_summer.css','autumn' => 'resource2/ocstyle/css/seasons/style_autumn.css'), $this);?>
<?php echo '" />\');
                document.writeln(\'<link rel="stylesheet" type="text/css" media="screen,projection" href="'; ?>
<?php echo smarty_function_season(array('winter' => 'resource2/ocstyle/css/seasons/style_langstripe_winter.css','spring' => 'resource2/ocstyle/css/seasons/style_langstripe_spring.css','summer' => 'resource2/ocstyle/css/seasons/style_langstripe_summer.css','autumn' => 'resource2/ocstyle/css/seasons/style_langstripe_autumn.css'), $this);?>
<?php echo '" />\');

                function usercountry_change()
                {
                    var sCurrentOption = "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['template']['country'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
<?php echo '";
                    var oUserCountryCombo = document.getElementById(\'usercountry\');

                    if (sCurrentOption!=oUserCountryCombo.value)
                    {
                        '; ?>

                        window.location = '<?php if ($this->_tpl_vars['change_country_inpage']): ?><?php echo $this->_tpl_vars['base_pageadr']; ?>
<?php else: ?>index.php?<?php endif; ?>usercountry=' + oUserCountryCombo.value;
                        <?php echo '
                    }
                }

                function submitbutton(bname)
                {
                    document.getElementsByName(bname)[0].className = "formbutton_active";
                }

                function resetbutton(bname)
                {
                    document.getElementsByName(bname)[0].className = "formbutton"
                }

                function flashbutton(bname)
                {
                    document.getElementsByName(bname)[0].className = "formbutton_active";
                    window.setTimeout(\'resetbutton(\\\'\' + bname + \'\\\')\', 350);
                }

                img1 = new Image();
                img1.src = "resource2/ocstyle/images/page/nav2-bg.png";
                img2 = new Image();
                img2.src = "resource2/ocstyle/images/page/nav2-sel-bg.png";
                img3 = new Image();
                img3.src = "resource2/ocstyle/images/page/nav3-title-bg.png";
                img4 = new Image();
                img4.src = "resource2/ocstyle/images/page/section-bg.png";
                img5 = new Image();
                img5.src = "resource2/ocstyle/images/page/listheader-bg.png";
            //-->
            </script>
        '; ?>

        <script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/enlargeit/enlargeit.js"></script>
        <script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tools.js"></script>
        <?php if ($this->_tpl_vars['opt']['session']['url'] == true): ?>
            <script type="text/javascript">
                <?php echo '
                <!--
                    var sSessionId = \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['session']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : smarty_modifier_escape($_tmp, 'js')); ?>
<?php echo '\';
                //-->
                '; ?>

            </script>
            <script src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/session.js" type="text/javascript"></script>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['garmin'] == true): ?>
          <script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/communicator-api/prototype/prototype.js"></script>
          <script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/communicator-api/garmin/device/GarminDeviceDisplay.js"></script>
          <script type="text/javascript">var garmin_gpx_filename = '<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
.gpx';</script>
          <script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/GarminDisplay.js"></script>
                  <?php endif; ?>
        <?php $_from = $this->_tpl_vars['opt']['page']['header_javascript']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['scriptItem']):
?>
            <script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptItem']; ?>
"></script>
        <?php endforeach; endif; unset($_from); ?>
    </head>

<body<?php if ($this->_tpl_vars['opt']['session']['url'] == true): ?> onload="initSessionTimeout()"<?php endif; ?>
<?php if ($this->_tpl_vars['garmin'] == true): ?> onload="load('<?php echo $this->_tpl_vars['cache']['latitude']; ?>
','<?php echo $this->_tpl_vars['cache']['longitude']; ?>
','<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
','<?php echo $this->_tpl_vars['opt']['lib']['garmin']['url']; ?>
','<?php echo $this->_tpl_vars['opt']['lib']['garmin']['key']; ?>
','<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
')"<?php endif; ?>
<?php $_from = $this->_tpl_vars['opt']['page']['body_load']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bodyload'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bodyload']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['loadItem']):
        $this->_foreach['bodyload']['iteration']++;
?><?php if (($this->_foreach['bodyload']['iteration'] <= 1)): ?> onload="<?php endif; ?><?php echo $this->_tpl_vars['loadItem']; ?>
;<?php if (($this->_foreach['bodyload']['iteration'] == $this->_foreach['bodyload']['total'])): ?>"<?php endif; ?><?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['opt']['page']['body_unload']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bodyunload'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bodyunload']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['unloadItem']):
        $this->_foreach['bodyunload']['iteration']++;
?><?php if (($this->_foreach['bodyunload']['iteration'] <= 1)): ?> onunload="<?php endif; ?><?php echo $this->_tpl_vars['unloadItem']; ?>
;<?php if (($this->_foreach['bodyunload']['iteration'] == $this->_foreach['bodyunload']['total'])): ?>"<?php endif; ?><?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['opt']['template']['popup'] != false): ?> class="popup"<?php endif; ?>>
    <?php if ($this->_tpl_vars['opt']['template']['popup'] != true): ?>
        <div id="overall">
            <div id="langstripe">

                                <table class="nav1" cellspacing="0">
                    <tr>
                        <?php if ($this->_tpl_vars['opt']['session']['url'] == true): ?>
                            <div id="sessionWarn">
                                                                Automatische Abmeldung in <div id="sessionTimout">0</div>&nbsp;Minuten - <a href="#" onclick="cancelSessionTimeout()">Abbrechen</a>
                            </div>
                        <?php endif; ?>
                        <td width="100%">
                            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e801462bb463594ee5ec2d1fbd05cdb1#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                &nbsp;
                                <?php if ($this->_tpl_vars['login']['userid'] == 0): ?>
                                    <b><form action="<?php echo $this->_tpl_vars['opt']['page']['login_url']; ?>
" method="post" enctype="application/x-www-form-urlencoded" name="login" dir="ltr" style="display: inline;">Usuario:&nbsp;&nbsp;<input name="email" size="10" type="text" class="textboxes" value="" />&nbsp;&nbsp;&nbsp;Password:&nbsp;&nbsp;<input name="password" size="10" type="password" class="textboxes" value="" />&nbsp;<input type="hidden" name="action" value="login" /><input type="hidden" name="target" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt']['page']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /><input type="hidden" name="source" value="titlebar" />&nbsp;<input name="LogMeIn" value="Acceso" class="formbutton" style="width: 74px;" type="submit" onclick="submitbutton('LogMeIn')" /></form></b>
                                <?php else: ?>                                      <b>Conectado como <a href="myhome.php" class="testing-top-left-corner-username"><?php echo ((is_array($_tmp=$this->_tpl_vars['login']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b> - <a href="login.php?action=logout">Desconectado</a>
                                <?php endif; ?>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:e801462bb463594ee5ec2d1fbd05cdb1#0}'; endif;?>
                        </td>
                        <td><strong>Idioma:&nbsp;</strong></td>
                        <td>
                            <?php $_from = $this->_tpl_vars['opt']['template']['locales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeItem']):
?>
                                <?php if ($this->_tpl_vars['localeItem']['status'] == OC_LOCALE_ACTIVE): ?>
                                <a style="text-decoration: none;" href="<?php echo $this->_tpl_vars['base_pageadr']; ?>
locale=<?php echo $this->_tpl_vars['localeKey']; ?>
"><img src="<?php echo $this->_tpl_vars['localeItem']['flag']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" width="24px" height="18px" /></a>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;<strong>País:&nbsp;</strong></td>
                        <td>
                            <select id="usercountry" onclick="usercountry_change()">
                                <?php $_from = $this->_tpl_vars['opt']['template']['usercountrieslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['userCountryList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['userCountryList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['countryItem']):
        $this->_foreach['userCountryList']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['countryItem']['begin_group'] == 1 || ($this->_foreach['userCountryList']['iteration'] <= 1)): ?>
                                        <option disabled="disabled">
                                            <?php if ($this->_tpl_vars['countryItem']['group'] == 1): ?>
                                                - Esto es un nodo OC -
                                            <?php elseif ($this->_tpl_vars['countryItem']['group'] == 2): ?>
                                                - Otros nodos OC -
                                            <?php elseif ($this->_tpl_vars['countryItem']['group'] == 3): ?>
                                                - Otros -
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </option>
                                    <?php endif; ?>
                                    <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['opt']['template']['country'] == $this->_tpl_vars['countryItem']['country']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['countryItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>&nbsp;
                        </td>
                    </tr>
                </table>
            </div> <!-- langstripe -->
            <div class="page-container-1" style="position: relative;">

            <div id="bg1">&nbsp;</div>
            <div id="bg2">&nbsp;</div>

                                    <?php if (( $this->_tpl_vars['opt']['debug'] & DEBUG_DEVELOPER ) == DEBUG_DEVELOPER): ?>
                <div id="debugoc"><font size="5" face="arial" color="red"><center>Developer system – testing only</center></font></div>
            <?php elseif (( $this->_tpl_vars['opt']['debug'] & DEBUG_TESTING ) == DEBUG_TESTING): ?>
                <div id="debugoc"><font size="5" face="arial" color="red"><center>En pruebas - por favor, no entre.</center></font></div>
            <?php endif; ?>


                        <div class="header">
                <div class="headerimage">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/head/rotator.php?path=<?php echo $this->_tpl_vars['opt']['page']['headimagepath']; ?>
" class="headerimagecontent" />
                </div>
                <div class="headerlogo">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/<?php echo $this->_tpl_vars['opt']['page']['headoverlay']; ?>
.png" class="headerimagecontent" />
                </div>
            </div> <!-- header -->

                        <div class="nav2">
                <ul>
                    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e801462bb463594ee5ec2d1fbd05cdb1#1}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sys_topmenu.tpl", 'smarty_include_vars' => array('items' => ($this->_tpl_vars['topmenu']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:e801462bb463594ee5ec2d1fbd05cdb1#1}'; endif;?>
                </ul>
            </div> <!-- nav 2 -->

                        <div class="buffer" style="height: 30px; width:100%;">
                <?php if ($this->_tpl_vars['opt']['page']['nowpsearch']): ?>
                    <div id="breadcrumb_fullsize"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sys_breadcrumb.tpl", 'smarty_include_vars' => array('items' => ($this->_tpl_vars['breadcrumb']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                <?php else: ?>
                    <div id="breadcrumb"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sys_breadcrumb.tpl", 'smarty_include_vars' => array('items' => ($this->_tpl_vars['breadcrumb']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    <div id="suchbox"><form action="searchplugin.php" method="post"><b>Buscar Waypoint:</b>&nbsp;<input type="hidden" name="sourceid" value="waypoint-search" /> <input type="text" name="userinput" size="10" class="waypoint" /> <input type="submit" name="wpsearch" class="formbutton" style="width:auto" value="&nbsp;Ir&nbsp;" onclick="submitbutton('wpsearch')" /></form></div>
                <?php endif; ?>
            </div>

            <?php if ($this->_tpl_vars['helplink'] != ""): ?>
                <div class="tplhelp"><?php echo $this->_tpl_vars['helplink']; ?>
<img src="resource2/ocstyle/images/misc/32x32-help.png" /></a></div>
                <!--[if IE]><div></div><![endif]-->
            <?php endif; ?>

                                    <div class="nav3">
                <ul>
                    <li class="title">
                        <?php if ($this->_tpl_vars['submenu']['0']['parent'] == 1): ?>Noticias<?php else: ?>Menú<?php endif; ?>
                    </li>
                    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e801462bb463594ee5ec2d1fbd05cdb1#2}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sys_submenu.tpl", 'smarty_include_vars' => array('items' => ($this->_tpl_vars['submenu']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:e801462bb463594ee5ec2d1fbd05cdb1#2}'; endif;?>
                </ul>

                <p class="sidebar-maintitle">Country sites</p>
                <div style="text-align: center;" class="nodeflags">
                    <a href="http://www.opencaching.cz" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-cz.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.de" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-de.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencachingspain.es" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-es.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.fr" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-fr.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.it" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-it.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.nl" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-nl.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.pl" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-pl.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.ro" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-ro.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.org.uk" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-org-uk.png" width="100" height="22" /></a><br />
                    <a href="http://www.opencaching.us" target="_blank"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/nodes/oc-us.png" width="100" height="22" /></a>
                </div>

                                <?php if ($this->_tpl_vars['opt']['page']['showdonations']): ?>
                    <p class="sidebar-maintitle">Donaciones</p>
                    <div style="margin-top:16px; width:100%; text-align:center;">
                        <a href="articles.php?page=donations">
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/donate.gif" alt="Donaciones" style="border:0px;" />
                        </a><br />
                        &nbsp;
                    </div>
                <?php endif; ?>

                                <?php if ($this->_tpl_vars['opt']['page']['showsocialmedia']): ?>
                    <p class="sidebar-maintitle">Social media</p>
                    <div style="margin-top: 10px; margin-bottom: 14px; margin-left: auto; margin-right: auto; text-align: center">
                        <table style="margin-left: auto; margin-right: auto;">
                            <tr>
                                <td class="mediumsmalltext">Follow us:</td>
                                <td><a href="http://blog.opencaching.de/feed"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/media/16x16-feed.png" width="16" height="16" /></a></td>
                                <td><a href="https://twitter.com/opencaching"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/media/16x16-twitter.png" width="16" height="16"  /></a></td>
                                <td><a href="https://plus.google.com/+opencaching"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/media/16x16-google+.png" width="16" height="16"  /></a></td>
                                <td><a href="https://www.facebook.com/opencaching.de"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/media/16x16-facebook.png" width="16" height="16"  /></a></td>
                            </tr>
                            <tr>
                                <td class="mediumsmalltext" colspan="5" style="padding-top:0.6em; text-align:left">Join discussions:</td>
                            </tr>
                        </table>
                        <table style="margin-left: auto; margin-right: auto;">
                            <tr><td><a href="http://forum.opencaching.de/"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/16x16-oc_logo.png" /></a></td><td style="text-align: left"><a href="http://forum.opencaching.de/">Opencaching Forum</a></td></tr>
                            <tr><td><a href="https://plus.google.com/communities/115824614741379300945"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/media/16x16-google+.png" /></a></td><td style="text-align: left"><a href="https://plus.google.com/communities/115824614741379300945">Google+ Community</a></td></tr>
                            <tr><td><a href="https://www.facebook.com/groups/198752500146032/"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/media/16x16-facebook.png" /></a></td><td style="text-align: left"><a href="https://www.facebook.com/groups/198752500146032/">Facebook Group</a></td></tr>
                        </table>
                    </div>
                <?php endif; ?>


                <?php if ($this->_tpl_vars['license_disclaimer'] != ""): ?>
                    <!-- Datalicense -->
                    <p class="sidebar-maintitle">Licencia de datos</p>
                    <div style="margin:20px 0 16px 0; width:100%; text-align:center;">
                        <?php echo $this->_tpl_vars['license_disclaimer']; ?>

                    </div>
                <?php endif; ?>

                <div class="sidebar-txtbox-noshade">
                    <p class="content-txtbox-noshade-size5">
                        <small>
                            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:e801462bb463594ee5ec2d1fbd05cdb1#3}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                Página generada en: <?php echo ((is_array($_tmp=$this->_tpl_vars['sys_runtime'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, "%1.3f") : smarty_modifier_sprintf($_tmp, "%1.3f")); ?>
 sec<br />
                                <?php if (( $this->_tpl_vars['opt']['template']['caching'] == true )): ?>
                                    Página cargando: <?php if ($this->_tpl_vars['sys_cached'] == true): ?>Sí<?php else: ?>No<?php endif; ?><br />
                                <?php endif; ?>
                                                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:e801462bb463594ee5ec2d1fbd05cdb1#3}'; endif;?>
                            Creada el: <?php echo ((is_array($_tmp='0')) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datetime']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datetime'])); ?>

                        </small>
                    </p>
                </div>
            </div> <!-- nav3 -->

                        <div class="content2">
<?php endif; ?>
                <div id="ocmain">
                    <?php if ($this->_tpl_vars['opt']['template']['popup'] != false && $this->_tpl_vars['opt']['template']['popupmargin'] != false): ?>
                        <div style="padding-left: 25px; padding-top: 10px; padding-right: 10px; padding-bottom: 20px; margin: 0; background: white;">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['template']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['template']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                </div> <!-- ocmain -->

<?php if ($this->_tpl_vars['opt']['template']['popup'] != true): ?>
            </div> <!-- content2 -->

            
                        <div class="footer">
                <p><a href="articles.php?page=dsb">Nota informativa</a> | <a href="articles.php?page=impressum">Condiciones de uso e información legal</a> | <a href="articles.php?page=contact">Contactar</a> | <a href="articles.php?page=changelog">Cambios</a> | <a href="sitemap.php">Mapa del Sitio</a></p>
                <p><strong><?php echo $this->_tpl_vars['opt']['page']['sponsor']['bottom']; ?>
</strong></p>
            </div>
            </div> <!-- page-container-1 -->
        </div> <!-- overall -->
<?php endif; ?>
    </body>
</html>