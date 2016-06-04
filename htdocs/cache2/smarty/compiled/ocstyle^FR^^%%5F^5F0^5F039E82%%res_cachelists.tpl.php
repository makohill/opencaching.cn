<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachelists.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'res_cachelists.tpl', 22, false),array('modifier', 'escape', 'res_cachelists.tpl', 27, false),array('modifier', 'urlencode', 'res_cachelists.tpl', 33, false),array('modifier', 'escapejs', 'res_cachelists.tpl', 41, false),)), $this); ?>

    <table class="null" border="0" cellspacing="0" width="98%">
        <tr>
            <td colspan="2">
                <table class="table">
                    <tr class="cachelistheader">
                        <th width="<?php if ($this->_tpl_vars['show_watchers']): ?>330px<?php else: ?>360px<?php endif; ?>"><?php if ($this->_tpl_vars['title_ownlists']): ?>Listes propres<?php elseif ($this->_tpl_vars['title_bookmarks']): ?>Listes signet<?php else: ?>Liste de cache<?php endif; ?></th>
                        <?php if ($this->_tpl_vars['show_user']): ?><th width="<?php if ($this->_tpl_vars['show_watchers']): ?>130px<?php else: ?>160px<?php endif; ?>">par</th><?php endif; ?>
                        <?php if ($this->_tpl_vars['show_status']): ?><th width="70px">Statut</th><?php endif; ?>
                        <th width="50px">Caches</th>
                        <?php if ($this->_tpl_vars['show_watchers']): ?><th width="60px">Observateurs</th><?php endif; ?>
                        <?php if ($this->_tpl_vars['show_edit'] || $this->_tpl_vars['show_unbookmark'] || ( $this->_tpl_vars['togglewatch'] && $this->_tpl_vars['login']['userid'] )): ?><th width="<?php if ($this->_tpl_vars['show_edit']): ?>160px<?php else: ?>140px<?php endif; ?>"></th><?php endif; ?>
                    </tr>
                    <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => 'listcolor2','reset' => true), $this);?>

                    <?php $_from = $this->_tpl_vars['cachelists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachelist']):
?>
                        <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => "listcolor1,listcolor2"), $this);?>

                        <tr class="cachelistitem">
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelist_link.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            <?php if ($this->_tpl_vars['show_user']): ?><td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['cachelist']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td><?php endif; ?>
                            <?php if ($this->_tpl_vars['show_status']): ?><td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><nobr><?php if ($this->_tpl_vars['cachelist']['visibility'] >= 2): ?>public<?php if ($this->_tpl_vars['cachelist']['visibility'] == 3): ?> <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-adddesc.png" title="visible pour tous les utilisateurs dans les listes de cache" /><?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['cachelist']['password']): ?><a class="jslink" onclick="cl = getElementById('sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
'); cl.style.display = (cl.style.display=='none'?'block':'none'); getElementById('permalink_text_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
').select();" <?php if ($this->_tpl_vars['cachelist']['user_id'] == $this->_tpl_vars['login']['userid']): ?>title="La liste a un mot de passe; pour partager cliquez ici"<?php endif; ?> >privé <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/18x16-offer.png" /></a><?php else: ?>privé<?php endif; ?><?php endif; ?></nobr>
                            <?php if ($this->_tpl_vars['cachelist']['password']): ?>
                                <div id="sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
" class="cachelist-popup mapboxframe mapboxshadow" style="display:none" >
                                    <table>
                                        <tr><td><img src="resource2/ocstyle/images/viewcache/link.png" alt="" height="16" width="16" /> Lien pour partager cette liste de cache&nbsp;:</td><td align="right"><a class="jslink" onclick="getElementById('sharelist_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
').style.display='none'"><img src="resource2/ocstyle/images/navigation/19x19-close.png" style="opacity:0.7" /></a></td></tr>
                                        <tr><td><input id="permalink_text_<?php echo $this->_tpl_vars['cachelist']['id']; ?>
" type="text" value="<?php echo $this->_tpl_vars['opt']['page']['absolute_url']; ?>
cachelist.php?id=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
&key=<?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['password'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
" size="65" /></td></tr>
                                    </table>
                                </div><?php endif; ?></td>
                            <?php endif; ?>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center"><?php echo $this->_tpl_vars['cachelist']['entries']; ?>
</td>
                            <?php if ($this->_tpl_vars['show_watchers']): ?><td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:center"><?php if ($this->_tpl_vars['cachelist']['watchers']): ?><?php echo $this->_tpl_vars['cachelist']['watchers']; ?>
<?php endif; ?></td><?php endif; ?>
                            <?php if ($this->_tpl_vars['show_edit'] || $this->_tpl_vars['show_unbookmark'] || ( $this->_tpl_vars['togglewatch'] && $this->_tpl_vars['login']['userid'] )): ?>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
" style="text-align:right" >
                                <?php if ($this->_tpl_vars['show_edit']): ?>[<a class="systemlink" href="mylists.php?edit=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
">éditer</a>]&nbsp;[<a class="systemlink" href="javascript:if(confirm('Voulez-vous vraiment supprimer la liste « <?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['name'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
 » ?'))location.href='mylists.php?delete=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
'">supprimer</a>]<?php endif; ?>
                                <?php if ($this->_tpl_vars['show_unbookmark']): ?>[<a class="systemlink" href="javascript:if(confirm('Voulez-vous vraiment supprimer la liste des signets \'<?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['name'])) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
\' ?'))location.href='mylists.php?unbookmark=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
'">supprimer</a>]<?php endif; ?>
                                <?php if ($this->_tpl_vars['togglewatch']): ?><nobr>[<a href="<?php if ($this->_tpl_vars['cachelist']['watched_by_me'] && $this->_tpl_vars['removewatch_confirm']): ?>javascript:if(confirm('Voulez-vous vraiment supprimer cette entrée ?'))location.href='<?php echo $this->_tpl_vars['togglewatch']; ?>
?dontwatchlist=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
'<?php else: ?><?php echo $this->_tpl_vars['togglewatch']; ?>
?<?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?>dont<?php endif; ?>watchlist=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?>ne regarde pas<?php else: ?>regarder<?php endif; ?></a>]</nobr><?php endif; ?>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="<?php echo $this->_tpl_vars['show_user']; ?>
"><br />Il n'y a pas encore de listes.</td></tr>
                    <?php endif; unset($_from); ?>
                </table>
            </td>
        </tr>
    </table>