<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from sys_oc404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sys_oc404.tpl', 54, false),)), $this); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            404 opencaching.de - DNF
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="Content-Language" content="<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
" />
        <meta http-equiv="gallerimg" content="no" />
        <meta http-equiv="cache-control" content="no-cache" />
        <link rel="SHORTCUT ICON" href="favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/apple-touch-icon-ipad-retina.png" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/css/style_screen.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/css/style_oc404.css" />
    </head>
    <body>
        <div id="frame">
            <div class="header">
                <div class="headerimage">
                    <img src="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/head/rotator.php?path=<?php echo $this->_tpl_vars['opt']['page']['headimagepath']; ?>
" class="headerimagecontent" />
                </div>
                <div class="headerlogo">
                    <img src="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/oc_head_alpha3.png" class="headerimagecontent" />
                </div>
            </div>
            <div id="head">
                <p>
                    <img id="oc404" src="<?php echo $this->_tpl_vars['opt']['page']['absolute_urlpath']; ?>
resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oc_404.png" title="opencaching.de 404" alt="opencaching.de 404" />
                    <span class="dnf">- Page not found - DNF</span>
                </p>
            </div>
            <div id="content">
                <p class="text">The visited website <b><?php echo ((is_array($_tmp=$this->_tpl_vars['website'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> does not exists, we found the following suitable pages:</p>
                <?php if ($this->_tpl_vars['isRedirect404'] === false || $this->_tpl_vars['opt404']['newcaches']['show'] === true): ?>
                <div class="sresult">
                    <p class="content-title-noshade-size2"><a class="links" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt404']['newcaches']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Cache database"><?php echo $this->_tpl_vars['opt404']['newcaches']['urlname']; ?>
</a>&nbsp;Here you can find a lot of individual caches.</p>
                    <div>
                        <p>The newest caches:</p>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_newcaches.tpl", 'smarty_include_vars' => array('newcaches' => $this->_tpl_vars['newcaches'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['isRedirect404'] === false || $this->_tpl_vars['opt404']['forum']['show'] === true): ?>
                <div class="sresult">
                    <p class="content-title-noshade-size2"><a class="links" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt404']['forum']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Opencaching Forum"><?php echo $this->_tpl_vars['opt404']['forum']['urlname']; ?>
</a>&nbsp;Here you can discuss, improve or ask questions.</p>
                    <div>
                        <p>The newest forumposts:</p>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_rssparser.tpl", 'smarty_include_vars' => array('rss' => $this->_tpl_vars['forum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['isRedirect404'] === false || $this->_tpl_vars['opt404']['blog']['show'] === true): ?>
                <div class="sresult">
                    <p class="content-title-noshade-size2"><a class="links" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt404']['blog']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Opencaching Blog"><?php echo $this->_tpl_vars['opt404']['blog']['urlname']; ?>
</a>&nbsp;Any time there are news to post, you'll find them here.</p>
                    <div>
                        <p>The newest blogposts:</p>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_rssparser.tpl", 'smarty_include_vars' => array('rss' => $this->_tpl_vars['blog'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['isRedirect404'] === false || $this->_tpl_vars['opt404']['wiki']['show'] === true): ?>
                <div class="sresult">
                    <p class="content-title-noshade-size2"><a class="links" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['opt404']['wiki']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Opencaching Wiki"><?php echo $this->_tpl_vars['opt404']['wiki']['urlname']; ?>
</a>&nbsp;Here you get tutorials, howtos and any information about Geocaching and Opencaching.</p>
                    <div>
                        <p>The newest wiki articles:</p>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_rssparser.tpl", 'smarty_include_vars' => array('rss' => $this->_tpl_vars['wiki'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div id="foot">
                <p class="text">Not found? Contact us using <a class="links" href="<?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
" title="Contact"><?php echo $this->_tpl_vars['opt']['mail']['contact']; ?>
</a>.</p>
                <p>&nbsp;</p>
                <p class="center"><a class="links" href="/articles.php?page=impressum" title="Juridische informatie">Juridische informatie</a> - <a class="links" href="/articles.php?page=verein" title="Opencaching e.V.">Opencaching Deutschland e.V.</a> - <a class="links" href="/articles.php?page=contact" title="Contact">Contact</a></p>
                <p class="center"><a class="links" href="/fb" title="Opencaching at Facebook">Facebook</a> - <a class="links" href="/+" title="Opencaching at Google+">Google+</a> - <a class="links" href="/t" title="Opencaching at Twitter">Twitter</a></p>
            </div>
        </div>
    </body>
</html>