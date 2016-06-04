<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:45
         compiled from res_userstats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'res_userstats.tpl', 18, false),array('modifier', 'lower', 'res_userstats.tpl', 69, false),)), $this); ?>
 
    <tr>
        <td valign="middle" class="header-small" style="padding-top:5px;padding-bottom:5px;white-space:nowrap" width="1%">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/22x20-traditional.png" width="22" height="20" align="middle" border="0" style="padding-right:2px" />&nbsp;<b>Caches cachés&nbsp;:</b></td>
        <td class="header-small"><?php echo $this->_tpl_vars['hidden']; ?>

            <?php if ($this->_tpl_vars['hidden'] > 0): ?>&nbsp;[<a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=bycreated&amp;ownerid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyowner=&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>">affichier</a>]<?php if ($this->_tpl_vars['hidden_active'] < $this->_tpl_vars['hidden']): ?>, &nbsp;<?php echo $this->_tpl_vars['hidden_active']; ?>
 de ceux-ci sont actifs <?php if ($this->_tpl_vars['hidden_active'] > 0): ?>&nbsp;[<a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=1&amp;output=HTML&amp;sort=bycreated&amp;ownerid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyowner=&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>">affichier</a>]<?php endif; ?><?php endif; ?><?php endif; ?>
        </td>
    </tr>


    <?php if ($this->_tpl_vars['show_statistics'] == true): ?>
        <?php if (count($this->_tpl_vars['hidden_by_cachetype'])): ?>
            <tr>
                <td style="padding-left:34px; vertical-align:top; line-height:1.8em">... par type de cache&nbsp;:</td>
                <td>
                    <div style="padding-left:6px">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachetypestats.tpl", 'smarty_include_vars' => array('stat' => $this->_tpl_vars['hidden_by_cachetype'],'total' => $this->_tpl_vars['hidden'],'logs' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </td>
            </tr>
        <?php endif; ?>
        <?php if (count($this->_tpl_vars['hidden_by_cachetype']) || count($this->_tpl_vars['found_by_cachetype'])): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
        <?php endif; ?>
    <?php endif; ?>

    <tr>
        <td valign="middle" class="header-small" style="padding-top:5px;padding-bottom:5px;white-space:nowrap" width="1%">
            <img src="resource2/ocstyle/images/log/16x16-found.png" style="padding-right:2px"  />
            &nbsp;<b>Caches trouvé&nbsp;:</b>
        </td>
        <td class="header-small">
            <?php echo $this->_tpl_vars['found']; ?>

            <?php if ($this->_tpl_vars['found'] > 0): ?>&nbsp;[<a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=byname&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=&amp;logtype=1,7&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>">affichier</a>]<?php endif; ?>
        </td>
    </tr>

    <?php if ($this->_tpl_vars['show_statistics'] == true): ?>
        <?php if (count($this->_tpl_vars['found_by_cachetype'])): ?>
            <tr>
                <td style="padding-left:34px; vertical-align:top; line-height:1.8em">... par type de cache&nbsp;:</td>
                <td>
                    <div style="padding-left:6px">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachetypestats.tpl", 'smarty_include_vars' => array('stat' => $this->_tpl_vars['found_by_cachetype'],'total' => $this->_tpl_vars['found'],'logs' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td valign="top" style="padding-left:34px">
                    ... par région&nbsp;
                </td>
                <td>
                    <table cellspacing="0" cellpadding="0">
                    <?php $_from = $this->_tpl_vars['regionstat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['regions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['regions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['region']):
        $this->_foreach['regions']['iteration']++;
?>
                        <tr>
                            <td class="default" style="text-align:right; padding:0">
                                <?php echo $this->_tpl_vars['region']['count']; ?>
 &nbsp;
                            </td>
                            <td class="default" style="padding:0">
                                <?php if (! $this->_tpl_vars['region']['state']): ?><a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=byname&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=&amp;logtype=1,7&amp;country=<?php echo $this->_tpl_vars['region']['countrycode']; ?>
&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>&amp;cache_attribs_not=61"><?php echo $this->_tpl_vars['region']['country']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['region']['country']; ?>
<?php endif; ?>
                                 <?php if ($this->_tpl_vars['region']['state']): ?>&gt; <a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=byname&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=&amp;logtype=1,7&amp;adm2=<?php echo $this->_tpl_vars['region']['adm2code']; ?>
&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>&amp;cache_attribs_not=61"><?php echo $this->_tpl_vars['region']['state']; ?>
</a><?php endif; ?>
                                &nbsp;<img src="images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['region']['countrycode'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.gif" />
                            </td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    </table>
                </td>
            </tr>
        <?php endif; ?>
        <?php if (count($this->_tpl_vars['hidden_by_cachetype']) || count($this->_tpl_vars['found_by_cachetype'])): ?>
            <tr><td class="spacer" colspan="2"></td></tr>
        <?php endif; ?>

        <tr>
            <td valign="middle" class="header-small" style="padding-top:5px;padding-bottom:5px;white-space:nowrap">
            <img src="resource2/ocstyle/images/log/16x16-dnf.png" />&nbsp;&nbsp;&nbsp;<b>pas trouvé&nbsp;:</b></td>
            <td class="header-small" ><?php echo $this->_tpl_vars['dnf']; ?>

                <?php if ($this->_tpl_vars['dnf'] > 0): ?>&nbsp;[<a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=byname&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=&amp;logtype=2&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>">affichier</a>]<?php endif; ?>
            </td>
        </tr>
        <tr>
            <td valign="middle" class="header-small" style="padding-bottom:5px;white-space:nowrap">
            <img src="resource2/ocstyle/images/log/16x16-note.png" />&nbsp;&nbsp;&nbsp;<b>Remarques&nbsp;:</b></td>
            <td class="header-small" ><?php echo $this->_tpl_vars['notes']; ?>

                <?php if ($this->_tpl_vars['notes'] > 0): ?>&nbsp;[<a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=byname&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=&amp;logtype=3&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>">affichier</a>]<?php endif; ?>
            </td>
        </tr>
        <?php if ($this->_tpl_vars['maintainence'] > 0): ?>
        <tr>
            <td valign="middle" class="header-small" style="padding-bottom:5px;white-space:nowrap">
            <img src="resource2/ocstyle/images/viewcache/16x16-maintenance.png" />&nbsp;&nbsp;&nbsp;<b>Logs d'entretien&nbsp;:</b></td>
            <td class="header-small" ><?php echo $this->_tpl_vars['maintainence']; ?>

                &nbsp;[<a href="search.php?showresult=1&amp;expert=0&amp;f_inactive=0&amp;output=HTML&amp;sort=byname&amp;finderid=<?php echo $this->_tpl_vars['userid']; ?>
&amp;searchbyfinder=&amp;logtype=9,10,11,13,14&amp;calledbysearch=0<?php if ($this->_tpl_vars['oconly']): ?>&amp;cache_attribs=6<?php endif; ?>">affichier</a>]
            </td>
        </tr>
        <?php endif; ?>
    <?php endif; ?>

    <tr>
        <td valign="middle" class="header-small" style="padding-bottom:5px;white-space:nowrap">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/rating-star.gif" align="middle" border="0" style="padding-right:2px" />&nbsp;&nbsp;<b>Recommandations&nbsp;:</b></td>
        <td class="header-small" ><?php if ($this->_tpl_vars['maxrecommended'] !== null): ?><?php echo $this->_tpl_vars['recommended']; ?>
 de <?php echo $this->_tpl_vars['maxrecommended']; ?>
 possibles<?php else: ?><?php echo $this->_tpl_vars['recommended']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['recommended'] > 0): ?>&nbsp;[<a href="usertops.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
<?php if ($this->_tpl_vars['oconly']): ?>&oconly=1<?php endif; ?>">affichier</a>]<?php endif; ?>
        </td>
    </tr>

    <?php if ($this->_tpl_vars['show_picstat'] && $this->_tpl_vars['logpics'] !== null): ?>
        <tr>
            <td class="header-small">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-addimage.png" align="middle" border="0" />&nbsp;&nbsp;&nbsp;<b>Images de log&nbsp;:</b></td>
            <td class="header-small" ><?php echo $this->_tpl_vars['logpics']; ?>
 <?php if ($this->_tpl_vars['logpics'] > 0): ?>&nbsp;[<a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
&allpics=1">affichier</a>]<?php endif; ?>
            </td>
        </tr>
    <?php endif; ?>