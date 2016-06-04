<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewcache_print.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'viewcache_print.tpl', 33, false),array('modifier', 'format_hour', 'viewcache_print.tpl', 71, false),array('modifier', 'date_format', 'viewcache_print.tpl', 82, false),array('modifier', 'lower', 'viewcache_print.tpl', 97, false),array('modifier', 'count', 'viewcache_print.tpl', 168, false),array('modifier', 'smiley', 'viewcache_print.tpl', 181, false),array('modifier', 'hyperlink', 'viewcache_print.tpl', 181, false),array('modifier', 'nl2br', 'viewcache_print.tpl', 201, false),array('modifier', 'replace', 'viewcache_print.tpl', 229, false),array('modifier', 'urlencode', 'viewcache_print.tpl', 248, false),array('modifier', 'rot13html', 'viewcache_print.tpl', 269, false),)), $this); ?>
<table class="table print" width="100%">
    <tr>
        <td class="header-print">

            <table class="null" border="0">
                <tr>
                    <td width="30">
                        <img src="images/newlogo.png" height="66" border="0" alt="" align="left" />
                    </td>
                    <td align="center">
                        <font size="4"><?php if ($this->_tpl_vars['shortlink_url'] !== false): ?><?php echo $this->_tpl_vars['shortlink_url']; ?>
<?php else: ?>Waypoint&nbsp;: <?php endif; ?><?php echo $this->_tpl_vars['cache']['wpoc']; ?>
</font>
                    </td>
                    <td class="null" border="0">
                        <?php if ($this->_tpl_vars['opt']['page']['sponsor']['popup'] != ''): ?>
                            <?php echo $this->_tpl_vars['opt']['page']['sponsor']['popup']; ?>

                        <?php endif; ?>
                    </td>
                </tr>
            </table>

            <table border="0">
                <tr>
                    <td align="right" valign="top" width="20">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cacheicon.tpl", 'smarty_include_vars' => array('cachetype' => $this->_tpl_vars['cache']['type'],'status' => $this->_tpl_vars['cache']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </td>
                    <td align="left" valign="top" width="99%">
                        <font size="3"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b></font><br />
                        <span style="font-weight:400">&nbsp;par <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><br />
                        <?php if ($this->_tpl_vars['cache']['shortdesc'] != ''): ?>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['shortdesc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br />
                        <?php endif; ?>
                    </td>
                    <td valign="top" nowrap="1" width="1%" style="text-align:right"><nobr>
                        Difficulté&nbsp;:
                        <img src="./resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/difficulty/diff-<?php echo $this->_tpl_vars['cache']['difficulty']*5; ?>
.gif" border="0" width="19" height="16" hspace="2" /><br />
                        Terrain&nbsp;:
                        <img src="./resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/difficulty/terr-<?php echo $this->_tpl_vars['cache']['terrain']*5; ?>
.gif" border="0" width="19" height="16" hspace="2" />
                        </nobr>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <?php if ($this->_tpl_vars['cache']['status'] == 7): ?>
        <tr>
            <td class="errormsg">
                La géocache a été verrouillé par un administrateur parce qu'il n'a pas respecté les termes d'utilisation d'Opencaching. Si vous souhaitez le déverrouiller, contacter nous en utilisant le «&nbsp;rapport cache&nbsp;» -link. S'il vous plaît choisissez «&nbsp;autre&nbsp;» comme raison et expliquer brièvement ce que vous avez changé de rendre la liste conforme à nos conditions d'utilisation. Merci&nbsp;!
            </td>
        </tr>
    <?php endif; ?>

    <tr>
        <td class="inner-print">

            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td valign="top" style="padding-left:0">
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-location.png"  width="22" height="22" border="0" alt="" title="" align="left" />&nbsp;
                        <font size="3"><b><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['coordinates']['lat'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</nobr> <nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['coordinates']['lon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</nobr></b></font> <font size="1">(WGS84)</font><br />
                        <div style="height:0.5em"></div>
                        <table class="print-cachemeta" cellspacing="0" cellpadding="0">
                            <tr><td>Taille&nbsp;:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['sizeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br /></td></tr>
                        <?php if ($this->_tpl_vars['cache']['searchtime'] > 0): ?>
                            <tr><td><nobr>Temps nécessaire&nbsp;:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['searchtime'])) ? $this->_run_mod_handler('format_hour', true, $_tmp) : smarty_modifier_format_hour($_tmp)); ?>

                                h<?php if ($this->_tpl_vars['cache']['waylength'] > 0): ?>, &nbsp;Distance&nbsp;: <?php echo $this->_tpl_vars['cache']['waylength']; ?>
 km<?php endif; ?>
                            </nobr></td>
                        <?php elseif ($this->_tpl_vars['cache']['waylength'] > 0): ?>
                            <tr><td><nobr>Distance&nbsp;:</td><td><?php echo $this->_tpl_vars['cache']['waylength']; ?>
 km</nobr></td></tr>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['cache']['status'] != 1): ?>
                            <tr><td>Statut&nbsp;:</td><td><span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></td></tr>
                        <?php else: ?>
                            <tr><td>Statut&nbsp;:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['statusName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td></tr>
                        <?php endif; ?>
                        <tr><td>Caché en&nbsp;:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['datehidden'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td></tr>
                        <tr><td><?php if ($this->_tpl_vars['cache']['is_publishdate'] == 0): ?>Affiché depuis&nbsp;:<?php else: ?>Publié le&nbsp;:<?php endif; ?></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['datecreated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td></tr>
                        <tr><td>Dernière mise à jour&nbsp;:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['lastmodified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</td></tr>

                        <?php if ($this->_tpl_vars['cache']['wpgc'] != ''): ?>
                            <tr>
                            <td>Aussi repris comme&nbsp;:</td>
                            <td><?php echo $this->_tpl_vars['cache']['wpgc']; ?>
</td>
                        <?php endif; ?>

                        <tr><td class="spacer-print"></td></td>
                        </table>
                    </td>
                    <td valign="top">
                        <?php if ($this->_tpl_vars['cache']['code1'] == "" || $this->_tpl_vars['cache']['code1'] != $this->_tpl_vars['cache']['countryCode']): ?>
                            <img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['countryCode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" style="vertical-align:middle" />&nbsp; <b><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><br />
                        <?php else: ?>
                            <img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['code1'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" style="vertical-align:middle" />&nbsp;
                            <b><?php echo $this->_tpl_vars['cache']['adm1']; ?>
</b><br />
                            <?php if (( $this->_tpl_vars['cache']['adm2'] != null | $this->_tpl_vars['cache']['adm4'] != null )): ?>
                                <font size="1">
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['adm2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php if (( $this->_tpl_vars['cache']['adm2'] != null & $this->_tpl_vars['cache']['adm4'] != null )): ?> &gt; <?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['adm4'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                                </font>
                                <br />
                            <?php endif; ?>
                        <?php endif; ?>

                        <div style="height:2px"></div>

                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-found.png" width="16" height="16" border="0" /> <?php echo $this->_tpl_vars['cache']['found']; ?>
 <?php if ($this->_tpl_vars['cache']['type'] == 6): ?>participation<?php else: ?>trouvé<?php endif; ?><br />
                        <nobr><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-dnf.png" width="16" height="16" border="0" /><?php if ($this->_tpl_vars['cache']['type'] == 6): ?> <?php echo $this->_tpl_vars['cache']['willattend']; ?>
 sera présent<?php else: ?> <?php echo $this->_tpl_vars['cache']['notfound']; ?>
 pas trouvé<?php endif; ?></nobr><br />
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-note.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['note']; ?>
 <?php if ($this->_tpl_vars['cache']['note'] == 1): ?>Note<?php else: ?>Remarques<?php endif; ?><br />
                        <?php if ($this->_tpl_vars['cache']['maintenance']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-maintenance.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['maintenance']; ?>
 <?php if ($this->_tpl_vars['cache']['maintenance'] == 1): ?>Log maintenance<?php else: ?>Logs d'entretien<?php endif; ?><br /><?php endif; ?>
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-watch.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['watcher']; ?>
 <?php if ($this->_tpl_vars['cache']['watcher'] == 1): ?>Observateur<?php else: ?>Observateurs<?php endif; ?><br />
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/ignore-16.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['ignorercount']; ?>
 <?php if ($this->_tpl_vars['cache']['ignorecount'] == 1): ?>Ignorer<?php else: ?>Ignoré<?php endif; ?><br />
                        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-visitors.png" class="icon16" alt="" /> <?php echo $this->_tpl_vars['cache']['visits']; ?>
 <?php if ($this->_tpl_vars['cache']['visits'] == 1): ?>Visite de page<?php else: ?>Visites de la page<?php endif; ?><br />
                        <?php if ($this->_tpl_vars['cache']['topratings'] > 0): ?>
                            <img src="images/rating-star.gif" border="0"> <?php echo $this->_tpl_vars['cache']['topratings']; ?>
 Recommandations<br />
                        <?php endif; ?>
                    </td>

                                   <!-- Begin changes Uwe Neumann 20100614 - Take out the google map.                                                                                                                                              -->
                                   <!--     <td valign="top">                                                                                                                                                                                      -->
                   <!--        <div style="position:relative;height:200px;width:200px;">                                                                                                                                          -->
                                   <!--                 <iframe src="http://maps.geocaching.de/gm/oc-mini-mitcaches.php?lat=<?php echo $this->_tpl_vars['cache']['latitude']; ?>
&lon=<?php echo $this->_tpl_vars['cache']['longitude']; ?>
&zoom=<?php echo $this->_tpl_vars['userzoom']; ?>
" width="200px" height="200px" frameborder="0"></iframe>      -->
                   <!--        </div>                                                                                                                                                                                             -->
                       <!--        </td>                                                                                                                                                                                                  -->
                                   <!-- End changes Uwe Neumann 20100614 - Take out the google map.                                                                                                                                                -->

                </tr>
            </table>
        </td>
    </tr>

      <?php if (count ( $this->_tpl_vars['attributes'] ) > 0): ?>
      <tr>
          <td valign="top">
                <?php $_from = $this->_tpl_vars['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attributGroup']):
?>
                    <div class="attribgroup" style="padding-right:6px">
                        <table cellspacing="0">
                            <tr>
                                <td bgcolor="<?php echo ((is_array($_tmp=$this->_tpl_vars['attributGroup']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="line-height:9px;padding-top:2px;margin:0 0 0 0;border-left:1px solid gray;border-right:1px solid gray;border-top:1px solid gray;">
                                    <font size="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['attributGroup']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</font>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#F8F8F8" style="margin:0 0 0 0;border-left:1px solid gray;border-right:1px solid gray;border-bottom:1px solid gray;">
                                    <?php $_from = $this->_tpl_vars['attributGroup']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attributeItem']):
?>
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_attribute.tpl", 'smarty_include_vars' => array('id' => $this->_tpl_vars['attributeItem']['id'],'state' => 1,'name' => $this->_tpl_vars['attributeItem']['name'],'icon' => $this->_tpl_vars['attributeItem']['icon'],'html_desc' => $this->_tpl_vars['attributeItem']['html_desc'],'color' => $this->_tpl_vars['attributGroup']['color'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
          </td>
      </tr>
      <tr><td class="spacer-print"><div style="height:0.5em"></div></td></tr>
    <?php endif; ?>

        <tr>
        <td class="header-small-print">
            <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-description.png" width="22" height="22" style="vertical-align:middle" border="0" /> -->
            Description&nbsp;
            <?php if (count($this->_tpl_vars['cache']['desclanguages']) > 1): ?>
                <span style="font-weight: 400;">
                    <?php $_from = $this->_tpl_vars['cache']['desclanguages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['desclanguagesItem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['desclanguagesItem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['desclanguagesItem']):
        $this->_foreach['desclanguagesItem']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['cache']['desclanguage'] == $this->_tpl_vars['desclanguagesItem']['code']): ?>(<?php echo $this->_tpl_vars['desclanguagesItem']['name']; ?>
)<?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </span>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="inner-print">
            <div class="cachedesc-print">
                <?php if ($this->_tpl_vars['cache']['deschtml'] == 0): ?>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cache']['desc'])) ? $this->_run_mod_handler('smiley', true, $_tmp) : smarty_modifier_smiley($_tmp)))) ? $this->_run_mod_handler('hyperlink', true, $_tmp) : smarty_modifier_hyperlink($_tmp)); ?>

                <?php else: ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['desc'])) ? $this->_run_mod_handler('smiley', true, $_tmp) : smarty_modifier_smiley($_tmp)); ?>

                <?php endif; ?>
            </div>
        </td>
    </tr>

        <?php if ($this->_tpl_vars['enableCacheNote'] && ( $this->_tpl_vars['note'] != "" || $this->_tpl_vars['inclCoord'] )): ?>
        <tr>
            <td class="header-small-print">
                <br />
                <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-description.png" width="20" height="20" style="vertical-align:middle" border="0" /> -->
                Note de cache personnelle
            </td>
        </tr>
        <?php if ($this->_tpl_vars['inclCoord']): ?>
            <tr><td><?php echo $this->_tpl_vars['lat_hem']; ?>
 <?php echo $this->_tpl_vars['lat_deg']; ?>
° <?php echo $this->_tpl_vars['lat_min']; ?>
' &nbsp; <?php echo $this->_tpl_vars['lon_hem']; ?>
 <?php echo $this->_tpl_vars['lon_deg']; ?>
° <?php echo $this->_tpl_vars['lon_min']; ?>
'</td></tr>
        <?php endif; ?>
        <tr><td><font size="2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['note'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</font></td></tr>
    <?php endif; ?>

        <?php if (count ( $this->_tpl_vars['childWaypoints'] ) > 0): ?>
        <tr>
            <td class="header-small-print">
                <br />
                <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/20x20-compass.png" width="20" height="20" style="vertical-align:middle" border="0" /> -->
                Des waypoints supplémentaires
            </td>
        </tr>

        <tr>
            <td class="inner-print">
                <table class="table printwptable">
                <?php $_from = $this->_tpl_vars['childWaypoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['childWaypoint']):
?>
                    <tr>
                        <td class="framed" width="1%">
                            <table class="table">
                                <tr>
                                    <td style="margin:0; padding:0"><img src="<?php echo $this->_tpl_vars['childWaypoint']['image']; ?>
" /></td>
                                    <td><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['childWaypoint']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</nobr></td>
                                </tr>
                            </table>
                        </td>
                        <td class="framed" width="1%" style="white-space:norwap"><nobr><?php echo $this->_tpl_vars['childWaypoint']['coordinateHtml']; ?>
</nobr></td>
                        <td class="framed" width="1%"></td>
                        <td class="framed" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['childWaypoint']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "\r\n", "<br />") : smarty_modifier_replace($_tmp, "\r\n", "<br />")); ?>
</td>
                        <td></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                </table>
            </td>
        </tr>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['cache']['hint'] != ''): ?>
        <tr>
            <td class="header-small-print">
                <br />
                <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-encrypted.png" width="22" height="22" style="vertical-align:middle" border="0" /> -->
                Indice additionnels&nbsp;&nbsp;
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-encrypt.png" width="16" height="16" style="vertical-align:middle" border="0" />
                <?php if ($this->_tpl_vars['crypt'] == true): ?>
                    <?php if ($this->_tpl_vars['log'] == '5'): ?>
                        <span style="font-weight:400">[<a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>log=5&print=y&nocrypt=1&desclang=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['desclanguage'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Déchiffrer</a>]
                        </span>
                    <?php elseif ($this->_tpl_vars['log'] == 'N'): ?>
                        <span style="font-weight:400">
                        [<a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>log=N&print=y&nocrypt=1&desclang=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['desclanguage'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Déchiffrer</a>]
                        </span>
                    <?php else: ?>
                        <span style="font-weight:400">
                        [<a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&<?php if ($this->_tpl_vars['desclang']): ?>desclang=<?php echo $this->_tpl_vars['desclang']; ?>
&<?php endif; ?>log=A&print=y&nocrypt=1&desclang=<?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['desclanguage'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Déchiffrer</a>]
                        </span>
                    <?php endif; ?>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td class="inner-print">
                <?php if ($this->_tpl_vars['crypt'] == true): ?>
                    <table width="100%" cellspacing="0" border="0" cellpadding="0">
                        <tr>
                            <td valign="top">
                                <p>
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['hint'])) ? $this->_run_mod_handler('rot13html', true, $_tmp) : smarty_modifier_rot13html($_tmp)); ?>

                                </p>
                            </td>
                            <td width="100" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="border-bottom-color : #808080; border-bottom-style : solid; border-bottom-width : 1px;" nowrap="1">
                                            <font face="Courier" style="font-family : 'Courier New', FreeMono, Monospace;">A|B|C|D|E|F|G|H|I|J|K|L|M</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font face="Courier" style="font-family : 'Courier New', FreeMono, Monospace;">N|O|P|Q|R|S|T|U|V|W|X|Y|Z</font>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                <?php else: ?>
                    <?php echo $this->_tpl_vars['cache']['hint']; ?>

                <?php endif; ?>
            </td>
        </tr>
    <?php endif; ?>

        <?php if (count ( $this->_tpl_vars['pictures'] ) > 0): ?>
        <tr>
            <td class="header-small-print">
                <br />
                <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-image.png" width="22" height="22" style="vertical-align:middle" border="0" /> -->
                Images
            </td>
        </tr>
        <tr>
            <td class="header-small-print">
                <?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pictureItem']):
?>
                    <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><img src="thumbs.php?type=2&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" border="0" align="bottom" /></a>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
    <?php endif; ?>

        <?php if (count ( $this->_tpl_vars['npaareasWarning'] ) + count ( $this->_tpl_vars['npaareasNoWarning'] ) > 0): ?>
        <tr>
            <td class="header-small-print" valign="middle">
                <br />
                <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-utility.png" width="22" height="22" style="vertical-align:middle" border="0" title="" /> -->
                Protection de la nature
            </td>
        </tr>
    <?php endif; ?>

    <?php if (count ( $this->_tpl_vars['npaareasWarning'] ) > 0): ?>
        <tr>
            <td>
                <p align="center">
                    <table border="0" cellpadding="0" cellspacing="0" style="background-color:#FEFEFE;border:solid 1px black;">
                        <tr>
                            <td width="70px" style="vertical-align:top">
                                <img src="./images/npa.gif" alt="" />
                            </td>
                            <td style="text-align:left; vertical-align:top">
                                Cette géocache est probablement placé dans une zone de protection de la nature&nbsp;! Voir <a href="<?php echo $this->_tpl_vars['opt']['cms']['npa']; ?>
">ici</a> pour plus d'informations, s'il vous plaît.<br />
                                <font size="2">
                                    <?php $_from = $this->_tpl_vars['npaareasWarning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['npaareas'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['npaareas']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['npaItem']):
        $this->_foreach['npaareas']['iteration']++;
?>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaTypeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (! ($this->_foreach['npaareas']['iteration'] == $this->_foreach['npaareas']['total'])): ?>,<?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </font>
                            </td>
                        </tr>
                    </table>
                </p>
            </td>
        </tr>
    <?php endif; ?>
    <?php if (count ( $this->_tpl_vars['npaareasNoWarning'] ) > 0): ?>
        <tr>
            <td>
                <font size="2">
                    Cette géocache est probablement placée dans les zones de protection suivantes&nbsp;:
                    <?php $_from = $this->_tpl_vars['npaareasNoWarning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['npaareas'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['npaareas']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['npaItem']):
        $this->_foreach['npaareas']['iteration']++;
?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaTypeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                        <?php echo ((is_array($_tmp=$this->_tpl_vars['npaItem']['npaName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (! ($this->_foreach['npaareas']['iteration'] == $this->_foreach['npaareas']['total'])): ?>,<?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </font>
            </td>
        </tr>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['geokret_count'] != 0): ?>
        <tr>
            <td class="header-small-print" valign="middle">
                <br />
                <!-- <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/description/22x22-geokret.gif" width="22" height="22" style="vertical-align:middle" border="0" title="" /> -->
                Geokrets
            </td>
        </tr>
        <tr><td class="spacer-print"><br /></td></tr>
        <tr>
            <td>
              <?php $_from = $this->_tpl_vars['geokret']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['geokret'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['geokret']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['geokretItem']):
        $this->_foreach['geokret']['iteration']++;
?>
                    <a href="http://geokrety.org/konkret.php?id=<?php echo $this->_tpl_vars['geokretItem']['id']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['geokretItem']['itemname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> von <?php echo ((is_array($_tmp=$this->_tpl_vars['geokretItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php if (! ($this->_foreach['geokret']['iteration'] == $this->_foreach['geokret']['total'])): ?><br /><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
    <?php endif; ?>

        <tr><td class="spacer-print"><br /></td></tr>
    <tr>
        <td class="inner-print">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logentry.tpl", 'smarty_include_vars' => array('header_footer' => true,'footbacklink' => false,'logs' => $this->_tpl_vars['logs'],'cache' => $this->_tpl_vars['cache'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </td>
    </tr>
</table>