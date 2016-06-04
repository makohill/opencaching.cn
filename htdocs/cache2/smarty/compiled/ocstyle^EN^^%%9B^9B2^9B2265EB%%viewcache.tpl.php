<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:48
         compiled from viewcache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'viewcache.tpl', 118, false),array('modifier', 'escape', 'viewcache.tpl', 162, false),array('modifier', 'lower', 'viewcache.tpl', 170, false),array('modifier', 'format_hour', 'viewcache.tpl', 228, false),array('modifier', 'date_format', 'viewcache.tpl', 234, false),array('modifier', 'count', 'viewcache.tpl', 316, false),array('modifier', 'smiley', 'viewcache.tpl', 377, false),array('modifier', 'hyperlink', 'viewcache.tpl', 377, false),array('modifier', 'replace', 'viewcache.tpl', 416, false),array('modifier', 'rot13html', 'viewcache.tpl', 444, false),array('function', 'cycle', 'viewcache.tpl', 413, false),)), $this); ?>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tip_balloon.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/tip_centerwindow.js"></script>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/rot13.js"></script>

<script type="text/javascript">
<?php echo '
<!--
    var bNoCrypt = 0;
    var last="";var rot13map;function decryptinit(){var a=new Array();var s="abcdefghijklmnopqrstuvwxyz";for(i=0;i<s.length;i++)a[s.charAt(i)]=s.charAt((i+13)%26);for(i=0;i<s.length;i++)a[s.charAt(i).toUpperCase()]=s.charAt((i+13)%26).toUpperCase();return a}
    function decrypt(elem){if(elem.nodeType != 3) return; var a = elem.data;if(!rot13map)rot13map=decryptinit();s="";var dec=1;for(i=0;i<a.length;i++){var b=a.charAt(i);if(b==\'[\')dec=0;else if(b==\']\')dec=1;s+=(dec&&(b>=\'A\'&&b<=\'Z\'||b>=\'a\'&&b<=\'z\')?rot13map[b]:b);}elem.data = s}

    function visitCounter()
    {
        var xmlReq = createXMLHttp();
        var params = \'cacheid='; ?>
<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
<?php echo '&visitcounter=1\';
        if (!xmlReq) return;

        xmlReq.open(\'POST\', \'viewcache.php\', true);
        xmlReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlReq.setRequestHeader("Content-length", params.length);
        xmlReq.setRequestHeader("Connection", "close");
        xmlReq.send(params);
    }

    window.setTimeout("visitCounter()", 1000);

    function loadRestOfLogs()
    {
        var xmlhttp = createXMLHttp();
        if (!xmlhttp)
            return;

        document.getElementById(\'showalllogs_img\').src = \'resource2/ocstyle/images/misc/16x16-ajax-loader.gif\';
        document.getElementById(\'showalllogs_text\').innerHTML = "'; ?>
Loading more log entries ...<?php echo '";

        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var logblockstart = xmlhttp.responseText.indexOf(\'<ocloadlogs>\');
                var logblockend = xmlhttp.responseText.indexOf(\'</ocloadlogs>\');
                if (logblockstart > 0 && logblockend > logblockstart)
                {
                    document.getElementById(\'logblock\').innerHTML = xmlhttp.responseText.substring(logblockstart+12, logblockend);
                    init_enlargeit_for_logentries();
                }
            }
        }
        xmlhttp.open("GET", "viewlogs.php?cacheid='; ?>
<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
<?php echo '&tagloadlogs=1", true);
        xmlhttp.send();
    }

    function onScroll(oEvent)
    {
        if (scrolledToBottom(70))
        {
            window.onscroll = null;
            loadRestOfLogs();
        }
    }

    function enable_wpt_conversion()
    {
        var wpt_convert_links = document.getElementsByName(\'wpt_convert\');
        for (var i=0; i<wpt_convert_links.length; ++i)
            wpt_convert_links[i].style.display = \'\';
        document.getElementById(\'convert_waypoints\').style.display = \'none\';
    }

//-->
'; ?>

</script>

<?php if ($this->_tpl_vars['cache']['status'] == 7): ?>
<div class="buffer" style="width: 500px;">&nbsp;</div>
<p style="line-height: 1.6em; color: red; font-weight: 900;">
    This geocache has been locked by an administrator because it did not comply with the Opencaching terms of use. If you wish to unlock it, contact us using the "report cache" link. Please choose "other" as reason and explain briefly what you have changed to make the listing compliant with our terms of use. Thank you!
</p>
<div class="buffer" style="width: 500px;">&nbsp;</div>
<?php endif; ?>

<!-- Already found this cache? -->
<?php if ($this->_tpl_vars['cache']['userhasfound'] || $this->_tpl_vars['cache']['needs_maintenance'] || $this->_tpl_vars['cache']['listing_outdated'] || $this->_tpl_vars['cache']['status'] == 2 || $this->_tpl_vars['cache']['status'] == 3 || $this->_tpl_vars['cache']['status'] == 6 || $this->_tpl_vars['cache']['status'] == 7): ?>
    <div id="havefound">
        <?php echo '<p>'; ?><?php if ($this->_tpl_vars['cache']['status'] == 2): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/cachestatus/32x32-disabled.png" width="32" height="32" style="padding-right: 6px;" alt="Temporarily not available" title="Temporarily not available" />'; ?><?php elseif ($this->_tpl_vars['cache']['status'] == 3): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/cachestatus/32x32-archived.png" width="32" height="32" style="padding-right: 6px;" alt="Archived" title="Archived" />'; ?><?php elseif ($this->_tpl_vars['cache']['status'] == 6): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/cachestatus/32x32-locked.png" width="32" height="32" style="padding-right: 6px;" alt="Locked" title="Locked" />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['needs_maintenance']): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/cachestatus/needs-maintenance.png" width="32" height="32" style="padding-right: 5px;" alt="The geocache needs maintenance." title="The geocache needs maintenance." />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['listing_outdated']): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/cachestatus/listing-outdated.png" width="32" height="32" style="padding-right: 5px;" alt="The geocache description is outdated." title="The geocache description is outdated." />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['cache']['userhasfound']): ?><?php echo '&nbsp;<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/viewcache/have-found.png" width="35" height="35" style="padding-right: 5px;" alt="'; ?><?php if ($this->_tpl_vars['cache']['type'] == 6): ?><?php echo 'You have attended this event!'; ?><?php else: ?><?php echo 'You have already found this cache!'; ?><?php endif; ?><?php echo '" title="'; ?><?php if ($this->_tpl_vars['cache']['type'] == 6): ?><?php echo 'You have attended this event!'; ?><?php else: ?><?php echo 'You have already found this cache!'; ?><?php endif; ?><?php echo '" />'; ?><?php endif; ?><?php echo '</p>'; ?>

    </div>
    <!--[if IE]><div></div><![endif]-->
<?php endif; ?>

<!-- Cachemeta -->
<div class="content2-container line-box" style="float:left">      <div class="">
        <div class="nav4">
            <ul>
                <li class="title" >Cache Menu</li>
                <?php if ($this->_tpl_vars['cache']['log_allowed'] || $this->_tpl_vars['cache']['adminlog']): ?>
                    <li class="group <?php if ($this->_tpl_vars['cache']['adminlog']): ?>hilite<?php endif; ?>"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/new-entry-18.png);background-repeat:no-repeat;background-position:left center;" href="<?php if ($this->_tpl_vars['login']['userid'] != 0): ?>log.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php else: ?>login.php?target=log.php%3Fcacheid%3D<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php endif; ?>">Log this cache</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['watched'] == 1): ?>                      <li class="group"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/watch-18.png);background-repeat:no-repeat;background-position:left center;" href="mywatches.php?action=remove&amp;cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
&amp;target=viewcache.php%3Fcacheid%3D<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
%26watchinfo=1">Don't watch</a></li>
                <?php else: ?>
                    <li class="group"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/watch-18.png);background-repeat:no-repeat;background-position:left center;" href="<?php if ($this->_tpl_vars['login']['userid'] != 0): ?>mywatches.php?action=add&amp;cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
&amp;target=viewcache.php%3Fcacheid%3D<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
%26watchinfo=1<?php else: ?>login.php?target=mywatches.php%3Faction%3Dadd%26cacheid%3D<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
%26target%3Dviewcache.php%253Fcacheid%253D<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php endif; ?>">Watch</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['login']['userid'] != 0): ?>
                    <?php if ($this->_tpl_vars['ignored'] == 1): ?>
                        <li class="group"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/ignore-18.png);background-repeat:no-repeat;background-position:left center;" href="ignore.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
&amp;action=removeignore">Don't ignore</a></li>
                    <?php else: ?>
                        <li class="group"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/ignore-18.png);background-repeat:no-repeat;background-position:left center;" href="ignore.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
&amp;action=addignore">Ignore</a></li>
                    <?php endif; ?>
                <?php endif; ?>
                <li class="group"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/list-18.png);background-repeat:no-repeat;background-position:left center;" href="addtolist.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Add to list</a></li>
                <?php if ($this->_tpl_vars['login']['userid'] != 0): ?>
                    <?php if ($this->_tpl_vars['login']['userid'] == $this->_tpl_vars['cache']['userid'] || $this->_tpl_vars['listing_admin']): ?>
                        <li class="group <?php if ($this->_tpl_vars['login']['userid'] != $this->_tpl_vars['cache']['userid']): ?>hilite<?php endif; ?>"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/page.png);background-repeat:no-repeat;background-position:left center;" href="editcache.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Edit</a></li>
                    <?php endif; ?>
                <?php endif; ?>

                <li class="group"><a style="background-image: url(resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/report-problem-18.png);background-repeat:no-repeat;background-position:left center;" href="<?php if ($this->_tpl_vars['login']['userid'] != 0): ?>reportcache.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php else: ?>login.php?target=reportcache.php%3Fcacheid%3D<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php endif; ?>">Report this cache</a></li>
            </ul>
        </div>
        <?php if ($this->_tpl_vars['watchclinfo'] && $this->_tpl_vars['watched'] == 0): ?>
            <div style="clear:both; padding-top:4px">
                <p>
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-info.png" class="icon16" alt="Info" />
                    You are still watching this geocache via one or more cache lists.
                </p>
            </div>
        <?php endif; ?>
        <div class="buffer" style="width: 500px;">&nbsp;</div>

        <div class="content2-container-2col-left" style="width:60px; clear: left;">
            <div><a href="articles.php?page=cacheinfo#cachetype"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['cache']['type'],'status' => $this->_tpl_vars['cache']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a></div>
            <div><a href="articles.php?page=cacheinfo#difficulty"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_difficon.tpl", 'smarty_include_vars' => array('difficulty' => $this->_tpl_vars['cache']['difficulty'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a></div>
            <div><a href="articles.php?page=cacheinfo#difficulty"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_terricon.tpl", 'smarty_include_vars' => array('terrain' => $this->_tpl_vars['cache']['terrain'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a></div>
            <div></div>
        </div>

        <div class="content2-container-2col-left" id="cache_name_block">
            <span class="content-title-noshade-size5"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
            <?php if ($this->_tpl_vars['cache']['shortdesc'] != ''): ?>
                <!-- <br /> --><p class="content-title-noshade-size1">&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['shortdesc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
            <?php endif; ?>

            <p>by&nbsp;<b><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cache']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b>&nbsp;&nbsp;
                <span style="color: rgb(88, 144, 168); font-weight: bold;">
                    <?php if ($this->_tpl_vars['cache']['code1'] == "" || $this->_tpl_vars['cache']['code1'] != $this->_tpl_vars['cache']['countryCode']): ?>
                        <img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['countryCode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" style="vertical-align:middle" />&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php else: ?>
                        <img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['code1'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" style="vertical-align:middle" />&nbsp;
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['adm1'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if ($this->_tpl_vars['cache']['adm1'] != null & $this->_tpl_vars['cache']['adm2'] != null): ?> &gt; <?php endif; ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['adm2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if (( $this->_tpl_vars['cache']['adm2'] != null & $this->_tpl_vars['cache']['adm4'] != null ) | ( $this->_tpl_vars['cache']['adm1'] != null & $this->_tpl_vars['cache']['adm4'] != null )): ?> &gt; <?php endif; ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['adm4'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php endif; ?>
                </span>
            </p>
            <?php if ($this->_tpl_vars['cache']['type'] == 6): ?>
                <span class="participants"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/16x16-event.gif" width="16" height="16" alt="" />&nbsp;<a href="javascript:;" onclick="window.open('event_attendance.php?id=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&popup=y','List','width=320,height=440,resizable=no,scrollbars=1')">List of attendees</a></span>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End Cachemeta -->

<?php if ($this->_tpl_vars['show_logpics']): ?>
    <!-- picture gallery -->
    <div class="content2-container">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpictures.tpl", 'smarty_include_vars' => array('logdate' => true,'loguser' => true,'profilelink' => true,'shortyear' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php if ($this->_tpl_vars['cache']['type'] != 5 && $this->_tpl_vars['cache']['type'] != 6): ?>
            <br />
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="" align="middle" />
            "Spoiler" pictures which show details of the stash should not be visible here. If you encounter an open visible spoiler, you may contact the logger by the e-mail button in his profile and ask him to mark it as spoiler.<br />
        <?php endif; ?>
    </div>

<?php else: ?>
<!-- Warning, if temporary not available, archived or locked -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_state_warning.tpl", 'smarty_include_vars' => array('cache' => $this->_tpl_vars['cache'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--  End Warning -->

<!-- Cachedetails -->
<div class="content2-container" style="margin-bottom:8px">
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td style="vertical-align:top">
                <table>
                    <tr><td colspan="2">
                        <p class="content-title-noshade-size2">
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/kompass.png" class="icon32" alt="" title="" />
                            <b><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['coordinates']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</nobr> <nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['coordinates']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</nobr></b> <span class="content-title-noshade-size0">(WGS84)</span><br />                          </p>
                    </td></tr>
                    <tr><td style="vertical-align:top; width:370px">
        <p style="line-height: 1.6em;">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/map.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a href="#" onclick="window.open('coordinates.php?lat=<?php echo $this->_tpl_vars['cache']['latitude']; ?>
&lon=<?php echo $this->_tpl_vars['cache']['longitude']; ?>
&popup=y&wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&country=<?php echo $this->_tpl_vars['cache']['countryCode']; ?>
&desclang=<?php echo $this->_tpl_vars['cache']['desclanguage']; ?>
','Coordinates','width=280,height=550,resizable=no,scrollbars=1')">Convert coordinates</a><br />
            <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/box.png" class="icon16" alt="" title="" align="middle" />&nbsp;Cache type: <b>Traditional</b><br /> -->
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/package_green.png" class="icon16" alt="" title="" align="middle" />&nbsp;Size: <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['sizeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><br />
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/page.png" class="icon16" alt="" title="" align="middle" />
            <?php if ($this->_tpl_vars['cache']['status'] != 1): ?>                  Status: <span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
            <?php else: ?>
                Status: <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php endif; ?><br />
            <?php if ($this->_tpl_vars['cache']['searchtime'] > 0): ?>
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/time.png" class="icon16" alt="" title="" align="middle" />&nbsp;Time required: <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['searchtime'])) ? $this->_run_mod_handler('format_hour', true, $_tmp) : smarty_modifier_format_hour($_tmp)); ?>
 h&nbsp;
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cache']['waylength'] > 0): ?>
                <span style="white-space:nowrap"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/arrow_roundtrip.png" class="icon16" alt="" title="" align="middle" />&nbsp;Route: <?php echo $this->_tpl_vars['cache']['waylength']; ?>
 km</span>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cache']['searchtime'] > 0 || $this->_tpl_vars['cache']['waylength'] > 0): ?><br /><?php endif; ?>
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/date.png" class="icon16" alt="" title="" align="middle" />&nbsp;<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>Event date:<?php else: ?>Hidden on:<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['datehidden'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
<br />
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/date.png" class="icon16" alt="" title="" align="middle" />&nbsp;<?php if ($this->_tpl_vars['cache']['is_publishdate'] == 0): ?>Listed since:<?php else: ?>Published on:<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['datecreated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
<br />
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/date.png" class="icon16" alt="" title="" align="middle" />&nbsp;Last update: <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['lastmodified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
<br />              <!-- Ocprop: <br /> Wegpunkt: <b><?php echo $this->_tpl_vars['cache']['wpoc']; ?>
</b><br /> -->
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/arrow_in.png" class="icon16" alt="" title="" align="middle" />&nbsp;Listing<span></span>: <?php if ($this->_tpl_vars['shortlink_url'] !== false): ?><?php echo $this->_tpl_vars['shortlink_url']; ?>
<?php endif; ?><b><?php echo $this->_tpl_vars['cache']['wpoc']; ?>
</b><br />
            <?php if ($this->_tpl_vars['cache']['wpgc'] != ''): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/link.png" class="icon16" alt="" title="" align="middle" />
                Also listed at:                  <?php if ($this->_tpl_vars['cache']['wpgc'] != ''): ?>
                    <a href="http://www.geocaching.com/seek/cache_details.aspx?wp=<?php echo $this->_tpl_vars['cache']['wpgc']; ?>
" target="_blank">geocaching.com&nbsp;</a>
                <?php endif; ?>
            <?php endif; ?>
        </p>
                    </td>
                    <td style="vertical-align:top">
                        <p style="line-height: 1.4em;">
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>log<?php else: ?>viewcache<?php endif; ?>/16x16-<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>attended<?php else: ?>found<?php endif; ?>.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['found']; ?>
 <?php if ($this->_tpl_vars['cache']['type'] == 6): ?> Attended<?php else: ?>Found<?php endif; ?><br />
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>log<?php else: ?>viewcache<?php endif; ?>/16x16-<?php if ($this->_tpl_vars['cache']['type'] == 6): ?>will_attend<?php else: ?>dnf<?php endif; ?>.png" class="icon16" alt="" /> <?php if ($this->_tpl_vars['cache']['type'] == 6): ?> <?php echo $this->_tpl_vars['cache']['willattend']; ?>
 Will attend<?php else: ?> <?php echo $this->_tpl_vars['cache']['notfound']; ?>
 Not found<?php endif; ?><br />
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-note.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['note']; ?>
 <?php if ($this->_tpl_vars['cache']['note'] == 1): ?>Note<?php else: ?>Notes<?php endif; ?><br />
                            <?php if ($this->_tpl_vars['cache']['maintenance']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-maintenance.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['maintenance']; ?>
 <?php if ($this->_tpl_vars['cache']['maintenance'] == 1): ?>Maintenance log<?php else: ?>Maintenance logs<?php endif; ?><br /><?php endif; ?>
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-watch.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['watcher']; ?>
 <?php if ($this->_tpl_vars['cache']['watcher'] == 1): ?>Watcher<?php else: ?>Watchers<?php endif; ?><br />
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/ignore-16.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['ignorercount']; ?>
 <?php if ($this->_tpl_vars['cache']['ignorecount'] == 1): ?>Ignorer<?php else: ?>Ignorers<?php endif; ?><br />
                            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-visitors.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['visits']; ?>
 <?php if ($this->_tpl_vars['cache']['visits'] == 1): ?>Page visit<?php else: ?>Page visits<?php endif; ?><br />
                            <span style="white-space:nowrap;"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-pictures.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['logpics']; ?>
 <?php if ($this->_tpl_vars['logpics'] > 0): ?><a class="link" href="viewcache.php?cacheid=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['cacheid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
&logpics=1"><?php endif; ?><?php if ($this->_tpl_vars['logpics'] == 1): ?>Log picture<?php else: ?>Log pictures<?php endif; ?><?php if ($this->_tpl_vars['logpics'] > 0): ?></a><?php endif; ?></span><br />
                            <span style="white-space:nowrap;"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/gk.png" class="icon16" alt="" title="" /> <a href="http://geokrety.org/szukaj.php?lang=<?php echo $this->_tpl_vars['opt']['geokrety']['locales'][$this->_tpl_vars['opt']['template']['locale']]; ?>
&wpt=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
" target="_blank">Geokrety history</a></span><br />
                            <?php if ($this->_tpl_vars['cache']['topratings'] > 0): ?>
                                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/rating-star.gif" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['topratings']; ?>
 Recommendations<br />
                            <?php endif; ?>
                        </p>
                    </td>
                    </tr>
                </table>
            </td>

            <td style="text-align:right">
                <a href="map2.php?wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
" target="_blank">
                <?php if ($this->_tpl_vars['cachemap']['iframe']): ?>
                    <div class="img-shadow">
                        <iframe src="<?php echo $this->_tpl_vars['cachemap']['url']; ?>
" width="185px" height="185px" frameborder="0">
                        </iframe>
                    </div>
                <?php else: ?>
                    <img src="<?php echo $this->_tpl_vars['cachemap']['url']; ?>
" height="185px" width="185px" />
                <?php endif; ?>
                </a>
                <p style="margin-right:0"><a href="map2.php?wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
" target="_blank"><span style="line-height:1.5em">Large map</span></a></p>
            </td>
        </tr>

        <tr>
            <td colspan="2"><p>
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/print-18.png" class="icon16" alt="" />
                <select class="exportlist" onchange="location.href=this.options[this.selectedIndex].value+'&nocrypt='+bNoCrypt">
                    <option value="#">Print …</option>
                    <option value="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>print=y&log=N">without logs</option>
                    <option value="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>print=y&log=5">with 5 logs</option>
                    <option value="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>print=y&log=10">with 10 logs</option>
                    <option value="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>print=y&log=A">with all logs</option>
                </select>&nbsp;
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-save.png" class="icon16" alt="" />
                <select class="exportlist" onchange="location.href=this.options[this.selectedIndex].value">
                    <option value="#">Download as...</option>
                    <option value="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=gpx">GPX</option>
                    <option value="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=loc">LOC</option>
                    <option value="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=kml">KML</option>
                    <option value="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=ov2">OV2</option>
                    <option value="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=ovl">OVL</option>
                    <option value="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=txt">TXT</option>
                </select>&nbsp;
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/14x19-gps-device.png" class="icon16" alt="" />
                <input type="button" class="exportbutton" value="Send to GPS device" onclick="window.open('<?php echo $this->_tpl_vars['garmin_url']; ?>
garmin.php?lat=<?php echo $this->_tpl_vars['cache']['latitude']; ?>
&lon=<?php echo $this->_tpl_vars['cache']['longitude']; ?>
&wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&templocale=<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
','Send','width=640,height=320,resizable=no,scrollbars=1')" />
            </p></td>
        </tr>
    </table>

</div>
<!-- End Cachedetails -->

<!-- Attributes & cache lists -->
<script type="text/javascript">
function showalllists()
<?php echo '{'; ?>

    document.getElementById('morelists').style.display = 'none';
    for (n=5; n<=<?php echo count($this->_tpl_vars['cachelists']); ?>
; ++n)
        document.getElementById('cachelist' + n.toString()).style.display = '';
<?php echo '}'; ?>

</script>

<?php if (count($this->_tpl_vars['attributes']) || count($this->_tpl_vars['cachelists'])): ?>
    <div class="content2-container line-box" style="height:0px"></div>     <div class="content2-container">
        <?php if (count($this->_tpl_vars['cachelists'])): ?>
            <div style="float:right; min-width:183px; max-width:350px; margin-left:32px; margin-bottom:12px; padding-left:16px; <?php if (count($this->_tpl_vars['attributes'])): ?>border-left:1px solid #c0c0c0<?php endif; ?>">
                <p><a href="cachelists.php"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/16x16-list.png" title="Cache list" style="padding-right:1px"/></a> <b>Cache lists</b></p>
                <?php $this->assign('n', '0'); ?>
                <?php $_from = $this->_tpl_vars['cachelists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachelist']):
?>
                    <?php $this->assign('n', $this->_tpl_vars['n']+1); ?>
                    <?php if ($this->_tpl_vars['n'] == 5 && count($this->_tpl_vars['cachelists']) > 5): ?>
                        <p id="morelists" style="padding:0; line-height:1em"><a href="javascript:showalllists()">more ...</a></p>
                    <?php endif; ?>
                    <p id="cachelist<?php echo $this->_tpl_vars['n']; ?>
" style="padding:0; line-height:1em; <?php if ($this->_tpl_vars['n'] >= 5 && count($this->_tpl_vars['cachelists']) > 5): ?>display:none<?php endif; ?>">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelist_link.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php if ($this->_tpl_vars['cachelist']['user_id'] != $this->_tpl_vars['login']['userid'] || ( $this->_tpl_vars['cachelist']['visibility'] == 3 && $this->_tpl_vars['cache']['show_cachelists'] )): ?> by <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cachelist']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php else: ?><span class="greytext"> (<?php if ($this->_tpl_vars['cachelist']['visibility'] == 3): ?>hidden<?php elseif ($this->_tpl_vars['cachelist']['visibility'] == 2): ?>semi-public<?php else: ?>private<?php endif; ?>)</span><?php endif; ?>
                    </p>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        <?php endif; ?>
        <?php if (count($this->_tpl_vars['attributes'])): ?>
            <div style="padding-left:2px">
                <p style="line-height: 1.6em;">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_attribgroup.tpl", 'smarty_include_vars' => array('attriblist' => $this->_tpl_vars['attributes'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
    <div style="clear:both; height:2px"></div>
<?php else: ?>
    <br />
<?php endif; ?>
<!-- End Attributes & cache lists-->

<!-- Description -->
<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size2">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-description.png" style="margin-right: 10px;" width="22" height="22" alt="" /> Description&nbsp;&nbsp;&nbsp;
        <span class="content-title-link" style="font-weight:bold" >
        <?php $_from = $this->_tpl_vars['cache']['desclanguages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['desclanguagesItem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['desclanguagesItem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['desclanguagesItem']):
        $this->_foreach['desclanguagesItem']['iteration']++;
?>
                <?php if (($this->_foreach['desclanguagesItem']['iteration'] <= 1) == false): ?> &nbsp;&middot;&nbsp; <?php endif; ?>
                <?php if ($this->_tpl_vars['cache']['desclanguage'] == $this->_tpl_vars['desclanguagesItem']['code']): ?>
                    <span class="txt-black" ><?php echo ((is_array($_tmp=$this->_tpl_vars['desclanguagesItem']['native_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                    <?php if ($this->_tpl_vars['desclanguagesItem']['name'] != $this->_tpl_vars['desclanguagesItem']['native_name'] && ! ( $this->_tpl_vars['desclanguagesItem']['name'] == 'Englisch' && $this->_tpl_vars['desclanguagesItem']['native_name'] == 'English' )): ?>
                        <span style="font-weight:normal" class="txt-black">(<?php echo $this->_tpl_vars['desclanguagesItem']['name']; ?>
)</span>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="viewcache.php?wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&desclang=<?php echo ((is_array($_tmp=$this->_tpl_vars['desclanguagesItem']['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="systemlink" title="<?php echo $this->_tpl_vars['desclanguagesItem']['name']; ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['desclanguagesItem']['native_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </span>
  </p>
</div>

<div style="height:2px"></div>
<div class="content2-container cachedesc">
    <?php if ($this->_tpl_vars['cache']['deschtml'] == 0): ?>
        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['desc'])) ? $this->_run_mod_handler('smiley', true, $_tmp) : smarty_modifier_smiley($_tmp)))) ? $this->_run_mod_handler('hyperlink', true, $_tmp) : smarty_modifier_hyperlink($_tmp)); ?>

    <?php else: ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['desc'])) ? $this->_run_mod_handler('smiley', true, $_tmp) : smarty_modifier_smiley($_tmp)); ?>

    <?php endif; ?>
</div>
<!-- End Description -->

<!-- Personal Note -->
<?php if ($this->_tpl_vars['enableCacheNote']): ?>
    <div class="content2-container bg-blue02" id="personal_note">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/20x20-cache-note.png" style="margin-right: 10px;" alt="" />
            Personal cache note
        </p>
    </div>

    <div class="content2-container">
        <form action="viewcache.php" method="post" name="cache_note">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'cache_note.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </form>
    </div>
<?php endif; ?>
<!-- End Personal Note -->

<!-- Additional Waypoints / Child Waypoints-->
<?php if (count ( $this->_tpl_vars['childWaypoints'] ) > 0): ?>
    <div class="content2-container bg-blue02 content2-section-no-p">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/20x20-compass.png" style="margin-right: 10px;" alt="" />
            Additional waypoints <span id="convert_waypoints">&nbsp; <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/map.png" class="icon16" style="margin-right: 10px;" alt="" /><span class="content-title-link" ><a href="javascript:enable_wpt_conversion()">Convert coordinates</a></span></span>
        </p>
    </div>

    <div class="content2-container content2-section-no-p" style="margin:4px 0 0 10px" >
        <table class="waypointtable" cellpadding="5%" cellspacing="1">
        <?php $_from = $this->_tpl_vars['childWaypoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['childWaypoint']):
?>
            <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#ffffff,#f4f4f4"), $this);?>
">
                <td width="25%"><table cellspacing="0" cellpadding="0"><tr><td><img src="<?php echo $this->_tpl_vars['childWaypoint']['image']; ?>
" /></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['childWaypoint']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td></tr></table></td>
                <td class="wpt_text" width="18%"><?php echo $this->_tpl_vars['childWaypoint']['coordinateHtml']; ?>
<span id="wpt_convert" name="wpt_convert"  style="display:none"><br /><a href="javascript:;" onclick="window.open('coordinates.php?lat=<?php echo $this->_tpl_vars['childWaypoint']['coord']['lat']; ?>
&lon=<?php echo $this->_tpl_vars['childWaypoint']['coord']['lon']; ?>
&popup=y&wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&childwp=<?php echo $this->_tpl_vars['childWaypoint']['position']; ?>
&country=<?php echo $this->_tpl_vars['cache']['countryCode']; ?>
&desclang=<?php echo $this->_tpl_vars['cache']['desclanguage']; ?>
','Coordinates','width=280,height=550,resizable=no,scrollbars=1')">convert</a></td>
                <td class="wpt_text" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['childWaypoint']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "\r\n", "<br />") : smarty_modifier_replace($_tmp, "\r\n", "<br />")); ?>
</td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        </table>
        <div style="padding-top:4px">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-info.png" class="icon16" alt="Info" />
        The additional waypoints are shown on the map when the cache is selected, are included in GPX file downloads and will be sent to the GPS device.
        </div>
    </div>
<?php endif; ?>
<!-- End Addtional Waypoints -->

<!-- Hints -->
<?php if ($this->_tpl_vars['cache']['hint'] != ''): ?>
    <div class="content2-container bg-blue02">
      <p class="content-title-noshade-size2">
          <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-encrypted.png" style="margin-right: 10px;" width="22" height="22" alt="" /> Additional hint&nbsp;&nbsp;
          <span id="decrypt-info"><?php if ($this->_tpl_vars['crypt']): ?>
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/decrypt.png" class="icon32" width="22" height="22" alt="" />
                <span class="content-title-link" ><a href="viewcache.php?wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&nocrypt=1&desclang=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['desclanguage'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
#decrypt-info" <?php echo 'onclick="var ch = document.getElementById(\'decrypt-hints\').childNodes;for(var i=0;i < ch.length;++i) {var e = ch[i]; decrypt(e);}'; ?>
 document.getElementById('crypt-text').innerHTML = (bNoCrypt ? 'Decrypt' : 'Encrypt');
                bNoCrypt = 1 - bNoCrypt;
                return false;"><span id="crypt-text">Decrypt</span></a><?php endif; ?></span>
            </span>
        </p>
    </div>

    <div class="content2-container">
        <div style="float:left; margin:0 0 12px 10px">
            <p id="decrypt-hints"><?php if ($this->_tpl_vars['crypt']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['hint'])) ? $this->_run_mod_handler('rot13html', true, $_tmp) : smarty_modifier_rot13html($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['cache']['hint']; ?>
<?php endif; ?></p>
        </div>
        <div style="float:right; margin-bottom:12px">
            <p>
                <font style="font-family: 'Courier New',FreeMono,Monospace;" face="Courier" size="2">A|B|C|D|E|F|G|H|I|J|K|L|M</font>
                <br />
                <font style="font-family: 'Courier New',FreeMono,Monospace;" face="Courier" size="2">N|O|P|Q|R|S|T|U|V|W|X|Y|Z</font>
            </p>
        </div>
    </div>
<?php endif; ?>
<!-- End Hints -->

<!-- Pictures -->
<?php if (count ( $this->_tpl_vars['pictures'] ) > 0): ?>
    <div class="content2-container bg-blue02">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-image.png" style="margin-right: 10px;" width="22" height="22" alt="" />
            Pictures
        </p>
    </div>

    <div class="content2-container content2-section-no-p" style="float:left">         <?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pictureItem']):
?>
            <div class="viewcache-pictureblock">
                <div class="img-shadow">
                    <!-- a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank" -->
                        <img class="enlargegroup_cachepics" src="thumbs.php?type=2&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
" longdesc="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" border="0" align="bottom" onclick="enlarge(this)" />
                    <!-- /a -->
                </div>
                <span class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
            </div>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>
<!-- End Pictures -->

<!-- Utilities -->
<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size2">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-utility.png" style="margin-right: 10px;" width="22" height="22" alt="" />
        Utilities
    </p>
</div>

<div class="content2-container">
    <?php if (count ( $this->_tpl_vars['npaareasWarning'] ) > 0): ?>
        <div style="border: solid 1px red; padding:10px 10px 0px 10px; margin: 3px 0 8px 0">
            <p style="line-height: 1.6em;">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/npa.gif" align="left" style="margin-right: 25px;" width="32" height="32" alt="" />
                This geocache is probably placed within a nature reserve! Please see <?php echo $this->_tpl_vars['npahelplink']; ?>
here</a> for further information.<br />
                <?php $_from = $this->_tpl_vars['npaareasWarning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['npaareas'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['npaareas']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['npaItem']):
        $this->_foreach['npaareas']['iteration']++;
?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaTypeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (<a href="http://www.google.de/search?q=<?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaTypeName'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaName'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
" target="_blank">Info</a>)<?php if (! ($this->_foreach['npaareas']['iteration'] == $this->_foreach['npaareas']['total'])): ?>,<?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </p>
        </div>
    <?php endif; ?>

    <?php if (count ( $this->_tpl_vars['npaareasNoWarning'] ) > 0): ?>
        <p style="line-height: 1.6em;">
            This geocache is probably placed within the following protected areas (<?php echo $this->_tpl_vars['npahelplink']; ?>
Info</a>):
            <?php $_from = $this->_tpl_vars['npaareasNoWarning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['npaareas'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['npaareas']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['npaItem']):
        $this->_foreach['npaareas']['iteration']++;
?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaTypeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (<a href="http://www.google.de/search?q=<?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaTypeName'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaName'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
" target="_blank">Info</a>)<?php if (! ($this->_foreach['npaareas']['iteration'] == $this->_foreach['npaareas']['total'])): ?>,<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </p>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['print'] != true): ?>
        <p>
            <?php if ($this->_tpl_vars['cache']['topratings'] > 0): ?>
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/rating-star.gif" class="icon16" alt="" />
                Show cache recommendations from users that recommended this geocache: <a href="recommendations.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
">all</a>
                <br />
            <?php endif; ?>

            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-search.png" class="icon16" alt="" />
            Search geocaches nearby:
            <a href="search.php?searchto=searchbywaypoint&showresult=1&expert=0&output=HTML&sort=bydistance&f_userowner=0&f_userfound=0&f_inactive=1&waypoint=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&distance=150&unit=km" rel="nofollow">all</a> -
            <a href="search.php?searchto=searchbywaypoint&showresult=1&expert=0&output=HTML&sort=bydistance&f_userowner=1&f_userfound=1&f_inactive=1&f_disabled=1&waypoint=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&distance=150&unit=km" rel="nofollow">searchable</a> -
            <a href="search.php?searchto=searchbywaypoint&showresult=1&expert=0&output=HTML&sort=bydistance&f_userowner=1&f_userfound=1&f_inactive=1&f_disabled=1&waypoint=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&distance=150&unit=km&cachetype=<?php echo $this->_tpl_vars['cache']['type']; ?>
" rel="nofollow">same type</a>
            <br />

            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-search.png" class="icon16" alt="" /> Send this waypoint to GPS device: <a href="#" onclick="window.open('<?php echo $this->_tpl_vars['garmin_url']; ?>
garmin.php?&lat=<?php echo $this->_tpl_vars['cache']['latitude']; ?>
&lon=<?php echo $this->_tpl_vars['cache']['longitude']; ?>
&wp=<?php echo $this->_tpl_vars['cache']['wpoc']; ?>
&templocale=<?php echo $this->_tpl_vars['opt']['template']['locale']; ?>
','Send','width=640,height=320,resizable=no,scrollbars=1')">Garmin</a><br />
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-save.png" class="icon16" alt="" /> Download as file:
            <a href="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=gpx" rel="nofollow" title="GPS Exchange Format .gpx">GPX</a> -
            <a href="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=loc" rel="nofollow" title="Waypoint file .loc">LOC</a> -
            <a href="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=kml" rel="nofollow" title="Google Earth .kml">KML</a> -
            <a href="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=ov2" rel="nofollow" title="TomTom POI .ov2">OV2</a> -
            <a href="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=ovl" rel="nofollow" title="TOP50 Overlay .ovl">OVL</a> -
            <a href="search.php?searchto=searchbycacheid&showresult=1&f_inactive=0&f_ignored=0&startat=0s&cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&output=txt" rel="nofollow" title="Text file .txt">TXT</a>
            <br />

            <small>
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-info.png" class="icon16" alt="" />
                When downloading this file, you accept our <a href="articles.php?page=impressum#tos">terms of use</a> and <a href="articles.php?page=impressum#datalicense" target="_blank">Data license</a>.            </small>
            <br />
        </p>
    <?php endif; ?>
</div>
<!-- End Utilities -->

<!-- GK -->
<?php if ($this->_tpl_vars['geokret_count'] != 0): ?>
    <div class="content2-container bg-blue02">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-geokret.gif" style="margin-right: 10px;" width="22" height="22" alt="" />
            Geokrets
        </p>
    </div>

    <div class="content2-container">
         <p>
             <?php $_from = $this->_tpl_vars['geokret']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['geokret'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['geokret']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['geokretItem']):
        $this->_foreach['geokret']['iteration']++;
?>
                <a href="http://geokrety.org/konkret.php?id=<?php echo $this->_tpl_vars['geokretItem']['id']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['geokretItem']['itemname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
                by
                <?php echo ((is_array($_tmp=$this->_tpl_vars['geokretItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>


                <?php if (! ($this->_foreach['geokret']['iteration'] == $this->_foreach['geokret']['total'])): ?><br /><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </p>
    </div>
<?php endif; ?>
<!-- End GK -->

<!-- Logs -->
<div id="logblock">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logentry.tpl", 'smarty_include_vars' => array('header_footer' => true,'footbacklink' => false,'logs' => $this->_tpl_vars['logs'],'cache' => $this->_tpl_vars['cache'],'morelogs' => $this->_tpl_vars['morelogs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['morelogs']): ?>
        <div class="content2-container bg-blue02">
            <p id="showalllogs" class="content-title-noshade-size2">
                <img id="showalllogs_img" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-showall.png" style="margin-right: 10px;" width="16" height="16" alt="" />
                <span id="showalllogs_text">[<a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&log=A#logentries">Show all log entries</a>]</span>
            </p>
        </div>
        <div style="clear:both"></div>      <?php endif; ?>
</div>

<?php if ($this->_tpl_vars['morelogs'] && $this->_tpl_vars['autoload_logs']): ?>
<script type="text/javascript">
    window.onscroll = onScroll;
</script>
<?php endif; ?>

<?php if ($this->_tpl_vars['enableCacheNote'] && isset ( $this->_tpl_vars['coord_error'] )): ?>
<script type="text/javascript">
    document.getElementById('personal_note').scrollIntoView();
</script>
<?php endif; ?>

<!-- End Logs -->
<?php endif; ?>  