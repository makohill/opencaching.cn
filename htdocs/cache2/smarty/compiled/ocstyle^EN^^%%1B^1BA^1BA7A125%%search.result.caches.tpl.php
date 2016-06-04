<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from search.result.caches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search.result.caches.tpl', 17, false),array('modifier', 'urlencode', 'search.result.caches.tpl', 31, false),array('modifier', 'count', 'search.result.caches.tpl', 65, false),array('function', 'cycle', 'search.result.caches.tpl', 183, false),)), $this); ?>

<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>

<?php if ($this->_tpl_vars['cachelist'] || $this->_tpl_vars['query_name']): ?>
    <div class="content2-container cachelistinfo" style="margin-top:10px" >
        <?php if ($this->_tpl_vars['query_name']): ?>
            <p style="margin-top:0.5em; padding-left:10px; padding-right:8px">
            <img src="resource2/ocstyle/images/misc/32x32-search.png" width="16px" height="16px" />
            <a class="systemlink" href="query.php">Stored query</a> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['query_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b>
            </p>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['cachelist']): ?>
            <p style="margin-top:0.5em; padding-left:10px; padding-right:8px">
            <img src="resource2/ocstyle/images/misc/16x16-list.png" />
            <a class="systemlink" href="cachelists.php">Cache list</a> <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b>
            <?php if ($this->_tpl_vars['cachelist']['bookmarked']): ?><a href="mylists.php#bookmarks"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/cache-rate.png" title="I have bookmarked this list." /></a><?php endif; ?>
            <?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-watch.png" title="I am watching this list." /><?php endif; ?>
            <?php if ($this->_tpl_vars['cachelist']['user_id'] != $this->_tpl_vars['login']['userid']): ?>by <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cachelist']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php elseif ($this->_tpl_vars['cachelist']['visibility'] <= 1): ?>(<?php if ($this->_tpl_vars['cachelist']['password']): ?><a class="jslink" onclick="cl = getElementById('sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
'); cl.style.display = (cl.style.display=='none'?'block':'none'); getElementById('permalink_text_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
').select();" <?php if ($this->_tpl_vars['cachelist']['user_id'] == $this->_tpl_vars['login']['userid']): ?>title="List has password; click here to share it"<?php endif; ?> >private <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/18x16-offer.png" /></a><?php else: ?>private<?php endif; ?>)<?php endif; ?>
            <?php if ($this->_tpl_vars['cachelist']['visibility'] >= 2): ?>(<a class="jslink" onclick="cl = getElementById('sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
'); cl.style.display = (cl.style.display=='none'?'block':'none'); getElementById('permalink_text_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
').select();" >share public list <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/link.png" /></a>)<?php endif; ?>
            &nbsp;
            <?php if ($this->_tpl_vars['cachelist']['user_id'] == $this->_tpl_vars['login']['userid']): ?>[<a class="systemlink" href="mylists.php?edit=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
&fromsearch=1">edit</a>]<?php endif; ?>
            <?php if ($this->_tpl_vars['login']['userid']): ?>[<a class="systemlink" href="cachelist.php?id=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
&<?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?>dont<?php endif; ?>watch"><?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?>don't watch<?php else: ?>watch<?php endif; ?></a>]<?php endif; ?>
            <?php if ($this->_tpl_vars['login']['userid'] && ! $this->_tpl_vars['cachelist']['bookmarked'] && $this->_tpl_vars['cachelist']['user_id'] != $this->_tpl_vars['login']['userid']): ?>[<a class="systemlink" href="cachelist.php?id=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
&key=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist_pw'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
&bookmark">bookmark</a>]<?php endif; ?>
            <?php if ($this->_tpl_vars['login']['userid'] && $this->_tpl_vars['cachelist']['bookmarked'] && $this->_tpl_vars['cachelist']['user_id'] != $this->_tpl_vars['login']['userid']): ?>[<a class="systemlink" href="cachelist.php?id=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
&unbookmark">unbookmark</a>]<?php endif; ?>
            </p>
        <?php endif; ?>
        <div id="sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
" class="cachelist-popup mapboxframe mapboxshadow" style="display:none" >
            <table>
                <tr><td><img src="resource2/ocstyle/images/viewcache/link.png" alt="" height="16" width="16" /> Link to share this cache list:</td><td align="right"><a class="jslink" onclick="getElementById('sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
').style.display='none'"><img src="resource2/ocstyle/images/navigation/19x19-close.png" style="opacity:0.7" /></a></td></tr>
                <tr><td><input id="permalink_text_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
" type="text" value="<?php echo $this->_tpl_vars['opt']['page']['absolute_url']; ?>
cachelist.php?id=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
<?php if ($this->_tpl_vars['cachelist']['password']): ?>&key=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['password'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
<?php endif; ?>" size="65" /></td></tr>
            </table>
        </div>

    <?php if ($this->_tpl_vars['cachelist']['description_for_display'] != ''): ?>
        <div style="padding: 0.3em 8px 4px 10px">
            <?php echo $this->_tpl_vars['cachelist']['description_for_display']; ?>

        </div>
        <div style="clear:both; width:100%"></div>
    <?php endif; ?>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['invalid_waypoints']): ?>
    <p class="errormsg">The following waypoints are invalid and could not be added to the list:&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['invalid_waypoints'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
<?php endif; ?>

<div class="content2-container bg-blue02" style="margin-top:20px;">
    <table cellspacing="0" cellpadding="0" width="100%" border="0"><tr>
        <td style="white-space:nowrap; min-width:150px">
            <?php if ($this->_tpl_vars['search_headline_caches']): ?>
                <?php $this->assign('showmatched', ''); ?>
            <?php else: ?>
                <?php $this->assign('showmatched', 'display:none'); ?>
            <?php endif; ?>
            <p class="content-title-noshade-size15" style="padding:0; margin:4px;">&nbsp;<?php echo $this->_tpl_vars['results_count']; ?>
 caches<span style="<?php echo $this->_tpl_vars['showmatched']; ?>
"> matched</span>&nbsp;</p>
        </td>
        <?php if (count($this->_tpl_vars['caches']) && $this->_tpl_vars['enable_mapdisplay']): ?>
            <td style="text-align:right; width:1px">
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=map2bounds&showresult=1&skipqueryid=1&expert=0&utf8=1" class="nooutline"><img src="resource2/ocstyle/images/misc/32x32-world.png" /></a>
            </td>
            <td style="white-space:nowrap; text-align:left; padding-bottom:2px">
                <p class="inheader"><a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=map2bounds&showresult=1&skipqueryid=1&expert=0&utf8=1">Show on map</a></p>
            </td>
        <?php endif; ?>
        <td style="text-align:right; padding-bottom:2px"><p class="inheader">
            <span style="white-space:nowrap">[<a href="query.php?action=save&queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&sortby=<?php echo $this->_tpl_vars['sortby']; ?>
<?php if ($this->_tpl_vars['sortorder']): ?>&sortorder=<?php echo $this->_tpl_vars['sortorder']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['creationdate']): ?>$&creationdate=1<?php endif; ?>">Save options</a>]</span>
            <?php if (! $this->_tpl_vars['disable_edit_options']): ?>&nbsp;<span style="white-space:nowrap">[<a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&showresult=0&sortby=<?php echo $this->_tpl_vars['sortby']; ?>
">Edit options</a>]</span><?php endif; ?></p>
        </td>
    </tr></table>
</div>
<div class="buffer" style="height:5px;"></div>

<font size="2">
    <table cellspacing="0" cellpadding="0">

        <?php if (count($this->_tpl_vars['caches'])): ?>
        <tr>
            <td class="header-small" colspan="2">
                <table width="98.5%">
                    <tr>
                        <td rowspan="1" style="width:300px; padding:0; margin:0"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array('smallnumbers' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                        <td style="text-align:right; padding:0; margin:0">Download<span></span>:&nbsp;</td>
                        <td><nobr>
                            <select class="exportlist" onChange="location.href=this.options[this.selectedIndex].value">
                                <option value="#">Results on this page</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=gpx&startat=<?php echo $this->_tpl_vars['startat']; ?>
">GPX</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=loc&startat=<?php echo $this->_tpl_vars['startat']; ?>
">LOC</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=kml&startat=<?php echo $this->_tpl_vars['startat']; ?>
">KML</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ov2&startat=<?php echo $this->_tpl_vars['startat']; ?>
">OV2</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ovl&startat=<?php echo $this->_tpl_vars['startat']; ?>
">OVL</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=txt&startat=<?php echo $this->_tpl_vars['startat']; ?>
">TXT</option>
                            </select>
                            <select class="exportlist" onChange="location.href=this.options[this.selectedIndex].value">
                                <option value="#">Result <?php echo $this->_tpl_vars['startatp1']; ?>
 to <?php echo $this->_tpl_vars['endat']; ?>
 (as zip)</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=gpx&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1">GPX</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=loc&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1">LOC</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=kml&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1">KML</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ov2&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1">OV2</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ovl&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1">OVL</option>
                                <option value="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=txt&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1">TXT</option>
                            </select></nobr>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <?php endif; ?>

        <tr><td class="spacer" colspan="2">&nbsp;</td></tr>
        <tr>
            <td colspan="2" style="padding-left: 0px; padding-right: 0px;">
                <table class="searchtable" border="0" cellspacing="0" cellpadding="0" width="98.5%">
                    <tr>
                    <th width="10">&nbsp;</th>
                    <th width="40">
                        <?php echo '<a href="search.php?queryid='; ?><?php echo $this->_tpl_vars['queryid']; ?><?php echo '&showresult=1&sortby=bydistance&sortorder='; ?><?php if ($this->_tpl_vars['sortby'] != 'bydistance' || $this->_tpl_vars['sortorder'] == 'desc'): ?><?php echo 'asc'; ?><?php else: ?><?php echo 'desc'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['startat']): ?><?php echo '&startat='; ?><?php echo $this->_tpl_vars['startat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['creationdate']): ?><?php echo '&creationdate=1'; ?><?php endif; ?><?php echo '"><nobr>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['distanceunit'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php if ($this->_tpl_vars['sortby'] == 'bydistance'): ?><?php echo '&nbsp;'; ?><?php if ($this->_tpl_vars['sortorder'] == 'desc'): ?><?php echo '&#x25B2;'; ?><?php else: ?><?php echo '&#x25BC;'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</nobr></a>&nbsp;&nbsp;'; ?>

                    </th>
                    <th width="40">Type</th>
                    <th width="25">&nbsp;D</th>
                    <th width="28">&nbsp;T</th>
                    <th width="450" colspan="2">
                            <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&showresult=1&sortby=byname&sortorder=<?php if ($this->_tpl_vars['sortby'] != 'byname' || $this->_tpl_vars['sortorder'] == 'desc'): ?>asc<?php else: ?>desc<?php endif; ?><?php if ($this->_tpl_vars['startat']): ?>&startat=<?php echo $this->_tpl_vars['startat']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['creationdate']): ?>&creationdate=1<?php endif; ?>">
                        Name
                        <?php if ($this->_tpl_vars['sortby'] == 'byname'): ?>
                            &nbsp;<?php if ($this->_tpl_vars['sortorder'] == 'desc'): ?>&#x25B2;<?php else: ?>&#x25BC;<?php endif; ?>
                        <?php endif; ?></a>
                    </th>
                    <th width="90">
                        <?php if ($this->_tpl_vars['creationdate']): ?>
                            <?php echo '<a href="search.php?queryid='; ?><?php echo $this->_tpl_vars['queryid']; ?><?php echo '&showresult=1&sortby=bycreated&sortorder='; ?><?php if ($this->_tpl_vars['sortby'] != 'bycreated' || $this->_tpl_vars['sortorder'] == 'asc'): ?><?php echo 'desc'; ?><?php else: ?><?php echo 'asc'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['startat']): ?><?php echo '&startat='; ?><?php echo $this->_tpl_vars['startat']; ?><?php echo ''; ?><?php endif; ?><?php echo '"><nobr>Listed since'; ?><?php if ($this->_tpl_vars['sortby'] == 'bycreated'): ?><?php echo '&nbsp;'; ?><?php if ($this->_tpl_vars['sortorder'] == 'desc' || $this->_tpl_vars['sortorder'] == ''): ?><?php echo '&#x25B2;'; ?><?php else: ?><?php echo '&#x25BC;'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</nobr></a>&nbsp;&nbsp;'; ?>

                        <?php else: ?>
                            &nbsp;
                        <?php endif; ?>
                    </th>
                    <th width="90">
                        <?php echo ''; ?><?php if ($this->_tpl_vars['displayownlogs']): ?><?php echo '<a href="search.php?queryid='; ?><?php echo $this->_tpl_vars['queryid']; ?><?php echo '&showresult=1&sortby=bymylastlog&sortorder='; ?><?php if (( $this->_tpl_vars['sortby'] != 'bymylastlog' && $this->_tpl_vars['sortby'] != 'bylastlog' ) || $this->_tpl_vars['sortorder'] == 'asc'): ?><?php echo 'desc'; ?><?php else: ?><?php echo 'asc'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['startat']): ?><?php echo '&startat='; ?><?php echo $this->_tpl_vars['startat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['creationdate']): ?><?php echo '&creationdate=1'; ?><?php endif; ?><?php echo '"><nobr>Own logs'; ?><?php if ($this->_tpl_vars['sortby'] == 'bymylastlog'): ?><?php echo '&nbsp;'; ?><?php if ($this->_tpl_vars['sortorder'] == 'desc' || $this->_tpl_vars['sortorder'] == ''): ?><?php echo '&#x25B2;'; ?><?php else: ?><?php echo '&#x25BC;'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</nobr></a>'; ?><?php else: ?><?php echo '<a href="search.php?queryid='; ?><?php echo $this->_tpl_vars['queryid']; ?><?php echo '&showresult=1&sortby=bylastlog&sortorder='; ?><?php if (( $this->_tpl_vars['sortby'] != 'bymylastlog' && $this->_tpl_vars['sortby'] != 'bylastlog' ) || $this->_tpl_vars['sortorder'] == 'asc'): ?><?php echo 'desc'; ?><?php else: ?><?php echo 'asc'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['startat']): ?><?php echo '&startat='; ?><?php echo $this->_tpl_vars['startat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['creationdate']): ?><?php echo '&creationdate=1'; ?><?php endif; ?><?php echo '"><nobr>Last logs'; ?><?php if ($this->_tpl_vars['sortby'] == 'bylastlog'): ?><?php echo '&nbsp;'; ?><?php if ($this->_tpl_vars['sortorder'] == 'desc' || $this->_tpl_vars['sortorder'] == ''): ?><?php echo '&#x25B2;'; ?><?php else: ?><?php echo '&#x25BC;'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</nobr></a>&nbsp;'; ?><?php endif; ?><?php echo ''; ?>
&nbsp;
                    </th>
                    </tr>
                    <tr><td></td></tr>
                    <!--a-->
                    <?php $_from = $this->_tpl_vars['caches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cache']):
?>
                        <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => "search_listcolor1,search_listcolor2"), $this);?>

                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search.result.caches.row.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <!--z-->
                </table>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2">&nbsp;</td></tr>
        <?php if ($this->_tpl_vars['pages_list']): ?>
            <tr>
                <td colspan="2" class="header-small"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
            </tr>
            <tr><td style="height:0.6em"></td></tr>
        <?php endif; ?>
    </table>

    <?php if (count($this->_tpl_vars['caches'])): ?>
    <table width="100%">
        <tr>
            <td style="text-align:right; width:50%">Download<span></span>:&nbsp;&nbsp;</td>
            <td align="right" style="padding-right:20px; white-space:nowrap">
                <b>Results on this page:</b>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=gpx&startat=<?php echo $this->_tpl_vars['startat']; ?>
" title="GPS Exchange Format .gpx">GPX</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=loc&startat=<?php echo $this->_tpl_vars['startat']; ?>
" title="Waypoint file .loc">LOC</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=kml&startat=<?php echo $this->_tpl_vars['startat']; ?>
" title="Google Earth .kml">KML</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ov2&startat=<?php echo $this->_tpl_vars['startat']; ?>
" title="TomTom POI .ov2">OV2</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ovl&startat=<?php echo $this->_tpl_vars['startat']; ?>
" title="TOP50 Overlay .ovl">OVL</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=txt&startat=<?php echo $this->_tpl_vars['startat']; ?>
" title="Text file .txt">TXT</a>
                <br />
                <b>Result <?php echo $this->_tpl_vars['startatp1']; ?>
 to <?php echo $this->_tpl_vars['endat']; ?>
 (as zip)<span></span>:</b>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=gpx&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1" title="GPS Exchange Format .gpx">GPX</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=loc&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1" title="Waypoint file .loc">LOC</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=kml&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1" title="Google Earth .kml">KML</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ov2&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1" title="TomTom POI .ov2">OV2</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=ovl&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1" title="TOP50 Overlay .ovl">OVL</a>
                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queryid']; ?>
&output=txt&startat=<?php echo $this->_tpl_vars['startat']; ?>
&count=max&zip=1" title="Text file .txt">TXT</a>
            </td>
        </tr>
        <tr>
            <td class="help" colspan="2" align="right" style="line-height:2em;">
                With the download you accept the <a href="articles.php?page=impressum#tos">terms of use</a> from opencaching.de.&nbsp;&nbsp;
            </td>
        </tr>
    </table>
    <?php endif; ?>
</font>