<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:41
         compiled from myhome.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'myhome.tpl', 71, false),array('modifier', 'date_format', 'myhome.tpl', 84, false),array('modifier', 'escape', 'myhome.tpl', 86, false),array('function', 'cycle', 'myhome.tpl', 157, false),)), $this); ?>

<script type="text/javascript">
<?php echo '<!--

function toggle_archived()
{
    var archived = document.getElementsByName("row_archived");
    var show;
    if (archived[0].style.display == "none")
    {
        show="";
        document.getElementById("show_archived").style.display = "none";
        document.getElementById("hide_archived").style.display = "";
    }
    else
    {
        show="none";
        document.getElementById("hide_archived").style.display = "none";
        document.getElementById("show_archived").style.display = "";
    }
    for (var i=0; i<archived.length; i++)
        archived[i].style.display = show;

    var dCookieExp = new Date(2049, 12, 31);
    document.cookie = "ocprofilearchived=" + show + ";expires=" + dCookieExp.toUTCString();
}

function myHomeLoad()
{
    '; ?>
<?php echo '
    enl_init();

    var archived = document.getElementsByName("row_archived");
    if (archived.length > 0)  // is 0 for MSIE due to getElementsByName() bug
    {
        var sCookieContent = document.cookie.split(";");
        for (var nIndex = 0; nIndex < sCookieContent.length; nIndex++)
        {
            var sCookieValue = sCookieContent[nIndex].split("=");
            if (sCookieValue[0].replace(/^\\s+/,\'\') == "ocprofilearchived" && sCookieValue[1] == "none")
                toggle_archived();
        }
        document.getElementById("toggle_archived_option").style.display = "";
    }
}

-->'; ?>

</script>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-home.png" border="0" width="32px" height="32px" style="margin-right: 10px;" />
    Hola <?php echo $this->_tpl_vars['login']['username']; ?>

</div>

<?php if (! $this->_tpl_vars['allpics']): ?>
        <div class="content2-container bg-blue02" style="margin-top:20px;">
        <p class="content-title-noshade-size3">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-logs.png" width="22" height="22"  style="margin-right: 10px;" />&nbsp;
            Encontrados: <?php echo $this->_tpl_vars['found']; ?>
 &nbsp;
            <?php if (count($this->_tpl_vars['logs']) > 0): ?><span class="content-title-link">[<a href="search.php?showresult=1&amp;expert=0&amp;output=HTML&amp;sort=bymylastlog&amp;finderid=<?php echo $this->_tpl_vars['login']['userid']; ?>
&amp;searchbyfinder=&amp;f_inactive=0&amp;logtype=1,7&amp;calledbysearch=0">Geocaches encontrados</a>]&nbsp; [<a href="search.php?showresult=1&amp;expert=0&amp;output=HTML&amp;sort=bymylastlog&amp;finderid=<?php echo $this->_tpl_vars['login']['userid']; ?>
&amp;searchbyfinder=&amp;f_inactive=0&amp;logtype=0&amp;calledbysearch=0">Geocaches logged</a>]</span><?php endif; ?>
        </p>
    </div>

        <p style="line-height: 1.6em;"><b>Sus últimas entradas de Logs<?php if ($this->_tpl_vars['morelogs']): ?> </b>(<a class="systemlink" href="ownlogs.php">más</a>)<span></span>:<?php else: ?><span></span>:</b><?php endif; ?></p>

    <table class="table">
        <?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['logItem']):
?>
            <tr>
                <td><nobr>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logtype.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['logItem']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </nobr></td>
                <td style="white-space:nowrap; text-align:center"><?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td>
                <td>
                    <a href="viewcache.php?wp=<?php echo $this->_tpl_vars['logItem']['wp_oc']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['logItem']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    por <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['logItem']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logflags.tpl", 'smarty_include_vars' => array('logItem' => $this->_tpl_vars['logItem'],'withRecommendation' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr><td>No hay encuentros</td></tr>
        <?php endif; unset($_from); ?>
    </table>
<?php endif; ?>

<div class="content2-container bg-blue02" style="margin-top:20px;">
    <p class="content-title-noshade-size3">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-pictures.gif" width="24" height="24"  style="margin-right: 10px;" />&nbsp;
        Log de las imagenes: <?php echo $this->_tpl_vars['total_pictures']; ?>
 &nbsp;
        <?php if (count($this->_tpl_vars['pictures']) > 0 && ! $this->_tpl_vars['allpics']): ?><span class="content-title-link">[<a href="myhome.php?allpics=1">Mostrar todo</a>]</span><?php endif; ?>
    </p>
</div>

<?php if (count($this->_tpl_vars['pictures']) == 0): ?>
    <p>No has subido ninguna foto aún de registro.</p>
    <br />
<?php else: ?>
    <p style="line-height: 1.6em;">
        <?php if (! $this->_tpl_vars['allpics']): ?>
             <b>Los log de las imagenes:</b></p>
            <?php $this->assign('maxlines', 1); ?>
        <?php else: ?>
            <?php $this->assign('subtitle', "Los log de las imagenes:"); ?>
            <?php $this->assign('maxlines', 0); ?>
        <?php endif; ?>
    </p>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => false,'maxlines' => $this->_tpl_vars['maxlines'],'fullyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['allpics']): ?>
        <p>En la configuración del perfil <a href="mydetails.php"> </a> se puede elegir si el registro de imágenes de estadísticas y galería es visible para otros usuarios.</p>
    <?php endif; ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['allpics']): ?>
        <div class="content2-container bg-blue02" id="mycaches" style="margin-top:5px">
        <p class="content-title-noshade-size3">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/22x20-traditional.png" width="22" height="20"  style="margin-right: 10px;" />&nbsp;
            Geocaches escondidos: <?php echo $this->_tpl_vars['hidden']; ?>
 &nbsp;
                        <?php if (count($this->_tpl_vars['caches']) > 0): ?><span class="content-title-link">[<a href="search.php?showresult=1&amp;expert=0&amp;output=HTML&amp;sort=bycreated&amp;ownerid=<?php echo $this->_tpl_vars['login']['userid']; ?>
&amp;searchbyowner=&amp;f_inactive=0&calledbysearch=0">Show details</a><?php if ($this->_tpl_vars['active'] < $this->_tpl_vars['hidden']): ?>]&nbsp; [<a href="search.php?showresult=1&amp;expert=0&amp;output=HTML&amp;sort=bycreated&amp;ownerid=<?php echo $this->_tpl_vars['login']['userid']; ?>
&amp;searchbyowner=&amp;f_inactive=1&calledbysearch=0">... only active caches</a>]<?php endif; ?></span><?php endif; ?>
        </p>
    </div>

    <table class="table" style="max-width:97%">
        <?php if (count($this->_tpl_vars['caches']) == 0): ?>
            <tr><td colspan="4"><p style="margin-bottom:24px">No hay geocaches escondidos</p></td></tr>
        <?php else: ?>
            <?php $this->assign('archived', 0); ?>
            <?php $_from = $this->_tpl_vars['caches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cacheItem']):
?>
                <?php if ($this->_tpl_vars['cacheItem']['status'] > 2): ?>
                    <?php $this->assign('archived', $this->_tpl_vars['archived']+1); ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <tr>
                <td colspan="4"><b><span style="line-height:2em">Tus geocaches escondidos</b><span id="toggle_archived_option" style="display:none"><?php if ($this->_tpl_vars['archived'] > 0): ?> (<a href="javascript:toggle_archived()" style="outline:none"><span id="hide_archived">hide archived</span><span id="show_archived" style="display:none">show archived</span></a>)<?php endif; ?></span><span></span>:</span></td>
                <td style="text-align:right"><span style="line-height:2em"><img src="images/rating-star.gif" width="17" height="16" title="with recommendation" /></td>
                <td style="text-align:right"><span style="line-height:2em"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-found.png" alt="encuentran" title="encuentran"  /></td>
                <td style="text-align:left"><span style="line-height:2em"><b>Último log</b></span></td>
            </tr>
            <?php $_from = $this->_tpl_vars['caches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cacheItem']):
?>
                <?php if ($this->_tpl_vars['dotfill'] == ''): ?>
                    <?php echo smarty_function_cycle(array('values' => "listcolor1,listcolor2",'assign' => 'listcolor'), $this);?>

                <?php else: ?>
                    <?php $this->assign('listcolor', ""); ?>
                <?php endif; ?>
                <tr <?php if ($this->_tpl_vars['cacheItem']['status'] > 2): ?>name="row_archived"<?php endif; ?>>
                    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['cacheItem']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['cacheItem']['oconly'],'size' => '15x21')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheItem']['date_hidden'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
&nbsp;</nobr></td>
                    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['cacheItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="<?php if (strlen ( $this->_tpl_vars['cacheItem']['name'] ) < 45): ?>white-space:nowrap;<?php endif; ?>min-width:300px;max-width:<?php if ($this->_tpl_vars['dotfill'] == ''): ?>400<?php else: ?>300<?php endif; ?>px;overflow:hidden;"><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['cacheItem']['wp_oc']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php if (strlen ( $this->_tpl_vars['cacheItem']['name'] ) < 45): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logflags.tpl", 'smarty_include_vars' => array('logItem' => $this->_tpl_vars['cacheItem'],'lfSpace' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> &nbsp;&nbsp; <span style="color:#b0b0b0"><?php echo $this->_tpl_vars['dotfill']; ?>
</span><?php endif; ?></td>
                    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:right;" align="right"><nobr><?php if ($this->_tpl_vars['cacheItem']['toprating'] > 0): ?><?php echo $this->_tpl_vars['cacheItem']['toprating']; ?>
<?php endif; ?></nobr></td>
                    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:right;" align="right"><nobr><?php if ($this->_tpl_vars['cacheItem']['found'] > 0): ?><?php echo $this->_tpl_vars['cacheItem']['found']; ?>
<?php endif; ?></nobr></td>
                    <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:right;" align="right"><nobr><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cacheItem']['cache_id']; ?>
#logentries"><?php echo ((is_array($_tmp=$this->_tpl_vars['cacheItem']['lastlog'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</a>&nbsp; <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logtype.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['cacheItem']['lastlog_type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></nobr></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
            <tr><td class="spacer" colspan="3"></td></tr>
            <tr><td colspan="3"><a class="systemlink" href="ownerlogs.php">Show log history</a></td></tr>
        <?php endif; ?>

                <?php if (count($this->_tpl_vars['notpublished'])): ?>
            <tr>
                <td colspan="4">
                    <p style="margin-top:16px"><b>Tus geocaches pendientes de publicar</b></p>
                </td>
            </tr>
            <?php $_from = $this->_tpl_vars['notpublished']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['notpublishedItem']):
?>
                <tr>
                    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon_22.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['notpublishedItem']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['cacheItem']['oconly'],'size' => '15x21')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['notpublishedItem']['date_activate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td>
                    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['notpublishedItem']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                    <td><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['notpublishedItem']['wp_oc']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['notpublishedItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
    </table>

        <?php endif; ?>

<div class="buffer">&nbsp;</div>