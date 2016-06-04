<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:41
         compiled from mylists.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'mylists.tpl', 17, false),array('modifier', 'count', 'mylists.tpl', 22, false),)), $this); ?>

<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-list.png" style="margin-right: 10px;" width="32" height="32" />
        <?php if ($this->_tpl_vars['newlist_mode']): ?>Créer un nouveau cachelist<?php elseif ($this->_tpl_vars['edit_list']): ?>Modifier la liste de cache<?php else: ?>Mes listes de cache<?php endif; ?>
    </div>

    <?php if ($this->_tpl_vars['invalid_waypoints']): ?>
        <p class="errormsg">Les waypoints suivants ne sont pas valides et ne peuvent pas être ajoutés à la liste&nbsp;:&nbsp; <?php echo ((is_array($_tmp=$this->_tpl_vars['invalid_waypoints'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['edit_list'] && ! $this->_tpl_vars['newlist_mode'] && ! $this->_tpl_vars['name_error']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelists.tpl", 'smarty_include_vars' => array('title_ownlists' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if (count($this->_tpl_vars['cachelists'])): ?>
            <p><br />Listes publiques sont affichés dans votre <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['login']['userid']; ?>
">profil utilisateur public</a>, sur le <a href="cachelists.php">page d´sommaire liste</a> et (si activé) dans les listes de cache.</p>
        <?php endif; ?>
        <br />
        <form method="post" action="mylists.php">
            &nbsp;<input type="submit" name="new" value="Créer nouvelle liste" class="formbutton widebutton" />
        </form>
        <br />
    <?php else: ?>

    <?php echo '
    <script type="text/javascript">
    function showdesc()
    {
        document.getElementById(\'desc0\').style.display = \'none\';
        document.getElementById(\'desc1\').style.display = \'\';
        document.getElementById(\'desc2\').style.display = \'\';
        document.getElementById(\'desc3\').style.display = \'\';
        document.getElementById(\'desc3\').style.width = \'580px\';
    }
    function state_changed()
    {
        var lkd =  document.getElementById("list_password_data");
        if (typeof(lkd) !== \'undefined\' && lkd != null)
            lkd.style.display = (document.getElementById("s_private").checked ? "inline" : "none");
    }
    </script>
    '; ?>


    <form method="post" action="mylists.php?id=<?php echo $this->_tpl_vars['listid']; ?>
" name="editform" id="editlist_form">
        <?php if ($this->_tpl_vars['edit_list']): ?><input type="hidden" name="listid" value="<?php echo $this->_tpl_vars['listid']; ?>
" /><?php endif; ?>
        <input id="descMode" type="hidden" name="descMode" value="3" />
        <input id="oldDescMode" type="hidden" name="oldDescMode" value="3" />
        <input type="hidden" id="switchDescMode" name="switchDescMode" value="0" />
        <?php if ($this->_tpl_vars['fromsearch']): ?><input type="hidden" name="fromsearch" value="<?php echo $this->_tpl_vars['fromsearch']; ?>
" /><?php endif; ?>
        <input type="hidden" name="scrollposx" value="<?php echo $this->_tpl_vars['scrollposx']; ?>
" />
        <input type="hidden" name="scrollposy" value="<?php echo $this->_tpl_vars['scrollposy']; ?>
" />

        <table class="table" id="addlist" <?php if (! ( $this->_tpl_vars['name_error'] || $this->_tpl_vars['edit_list'] || $this->_tpl_vars['newlist_mode'] )): ?>style="display:none"<?php endif; ?>>
            <tr><td class="separator"></td></tr>
            <tr><td class="separator"></td></tr>
            <tr>
                <td>Nom&nbsp;:</td>
                <td><input type="text" id="list_name" name="list_name" maxlength="80" value="<?php echo $this->_tpl_vars['list_name']; ?>
" class="input500" /></td>
            </tr>
            <?php if ($this->_tpl_vars['name_error']): ?>
                <tr><td></td>
                <td><nobr><span id="name_error"><?php if ($this->_tpl_vars['name_error']): ?>&nbsp;<span class="errormsg"><?php if ($this->_tpl_vars['name_error'] == ERROR_DUPLICATE_LISTNAME): ?>Une autre de vos listes de cache a déjà ce nom.<?php else: ?><?php if ($this->_tpl_vars['name_error'] == ERROR_BAD_LISTNAME): ?>Nom invalide<?php if ($this->_tpl_vars['list_visibility'] >= 2): ?>; longueur minimale pour les listes publiques est de 10 caractères<?php endif; ?><?php endif; ?><?php endif; ?></span></nobr><?php endif; ?></span></td>
                </tr>
            <?php endif; ?>
            <tr><td class="separator"></td></tr>
            <tr>
                <td style="vertical-align:top">Statut&nbsp;:</td>
                <td><input type="radio" class="radio" id="s_private" name="list_visibility" value="0" <?php if ($this->_tpl_vars['list_visibility'] == 0): ?>checked="checked"<?php endif; ?> onchange="state_changed()" onfocus="state_changed()"  /><label for="s_private">privé</label><span id="list_password_data" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mot de passe pour le partage: &nbsp;<input type="text" id="list_password" name="list_password" maxlength="80" value="<?php echo $this->_tpl_vars['list_password']; ?>
" class="input200" /></span><br />
                <input type="radio" class="radio" id="s_public" name="list_visibility" value="2" <?php if ($this->_tpl_vars['list_visibility'] == 2): ?>checked="checked"<?php endif; ?> onchange="state_changed()" onfocus="state_changed()"  /><label for="s_public">public</label><br />
                <input type="radio" class="radio" id="s_public3" name="list_visibility" value="3" <?php if ($this->_tpl_vars['list_visibility'] == 3): ?>checked="checked"<?php endif; ?> onchange="state_changed()" onfocus="state_changed()" /><label for="s_public3" >public + visible pour tous les utilisateurs dans les listes de cache</label><br />
                </td>
            </tr>
            <tr><td class="separator"></td></tr>
            <tr>
                <td>Regardez&nbsp;:</td>
                <td><input type="checkbox" class="checkbox" id="watch" name="watch" value="1" <?php if ($this->_tpl_vars['watch']): ?>checked="checked"<?php endif; ?> /> <label for="watch">Je veux recevoir des notifications à propos de tous les logs de caches dans cette liste.</label></td>
            </tr>
            <tr><td class="separator"></td></tr>

            <tr id="desc1" style="<?php if ($this->_tpl_vars['desctext'] == '' && ! $this->_tpl_vars['show_editor']): ?>display:none<?php endif; ?>" >
                <td></td>
                <td><span id="scriptwarning" class="errormsg">JavaScript est désactivé dans votre navigateur, vous pouvez entrer des textes (HTML) uniquement. Pour utiliser l'éditeur, s'il vous plaît activer JavaScript.</span></td>
            </tr>
            <tr>
                <td style="vertical-align:top; padding-top:0.2em;">
                    Description&nbsp;:<br />
                    <div id="desc2" class="menuBar" style="margin-top:12px; <?php if ($this->_tpl_vars['desctext'] == '' && ! $this->_tpl_vars['show_editor']): ?>display:none<?php endif; ?>" >
                        <nobr>
                        <span id="descHtmlEdit" class="buttonNormal" onclick="btnSelect(3)" onmouseover="btnMouseOver(3)" onmouseout="btnMouseOut(3)">Éditeur</span>
                        <span class="buttonSplitter">|</span>
                        <span id="descHtml" class="buttonNormal" onclick="btnSelect(2)" onmouseover="btnMouseOver(2)" onmouseout="btnMouseOut(2)">&lt;html&gt;</span>
                        </nobr>
                    </div>
                </td>
                <td id="desc0" style="<?php if ($this->_tpl_vars['desctext'] != '' || $this->_tpl_vars['show_editor']): ?>display:none<?php endif; ?>" >
                    <input type="button" value="Ajouter" onclick="javascript:showdesc()" class="formbutton" />
                </td>
                <td id="desc3" style="<?php if ($this->_tpl_vars['desctext'] == '' && ! $this->_tpl_vars['show_editor']): ?>display:none<?php endif; ?>" >
                    <textarea name="desctext" id="desctext" cols="70" rows="7" class="listdesc<?php echo $this->_tpl_vars['descMode']; ?>
" ><?php echo $this->_tpl_vars['desctext']; ?>
</textarea>
                    <?php if ($this->_tpl_vars['descMode'] == 2): ?><br /><?php endif; ?>
                    <span class="smalltext">En soumettant j'accepte les <a href="articles.php?page=impressum#tos" target="_blank">conditions de service d'Opencaching.de</a> et la <a href="articles.php?page=impressum#datalicense" target="_blank">licence de données d'Opencaching.de</a>.</span>
                </td>
            </tr>
            <tr><td class="separator"></td></tr>
            <tr><td class="separator"></td></tr>
            <tr>
                <td style="vertical-align:top; white-space:nowrap"><?php if ($this->_tpl_vars['edit_list']): ?>Ajouter des caches&nbsp;:<?php else: ?>Caches&nbsp;:<?php endif; ?></td>
                <td><input type="text" id="list_caches" name="list_caches" maxlength="1000" value="<?php echo $this->_tpl_vars['list_caches']; ?>
" class="input500 waypoint" /><br /></td>
            </tr>
            <tr>
                <td></td>
                <td><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" alt="Indices" align="middle" /> Liste de waypoints OC séparées par des espaces. <?php if ($this->_tpl_vars['edit_list']): ?>Vous pouvez également ajouter des caches via le bouton "Ajouter à la liste" dans les listes de cache.<?php else: ?>Cette étape est facultative, les caches peuvent être ajoutés à la liste plus tard.<?php endif; ?></td>
            </tr>
            <?php if ($this->_tpl_vars['edit_list'] && count($this->_tpl_vars['caches'])): ?>
                <tr><td class="separator"></td></tr>
                <tr>
                    <td style="vertical-align:top; padding-top:0.6em">Retirer des caches&nbsp;:</td>
                    <td>
                        <table class="narrowtable">
                        <?php $_from = $this->_tpl_vars['caches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cache']):
?>
                            <tr>
                                <td style="margin-left:0; padding-left:0; padding-right:3px"><input type="checkbox" name="remove_<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
" value="1" /></td>
                                <td><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/16x16-<?php echo $this->_tpl_vars['cache']['type']; ?>
.gif" /></td>
                                <td style="line-height:1.5em"><a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cache_id']; ?>
"><span style="<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachestatus_span.tpl", 'smarty_include_vars' => array('status' => $this->_tpl_vars['cache']['status'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>"><?php if ($this->_tpl_vars['cache']['visible']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['cache']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><i>verrouillée cache / cachée</i><?php endif; ?></span></a> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly.tpl", 'smarty_include_vars' => array('oconly' => $this->_tpl_vars['cache']['oconly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>
                        </table>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td colspan="2"><br />
                <input type="submit" name="cancel" value="Annuler" class="formbutton" onclick="submitbutton('cancel')" />&nbsp;&nbsp;
                <?php if ($this->_tpl_vars['newlist_mode']): ?>
                    <input type="submit" name="create" value="Créez une liste" class="formbutton" onclick="submitbutton('create')" />
                <?php else: ?>
                    <input type="submit" name="save" value="Sauvegarder" class="formbutton" onclick="submitbutton('save')" />
                <?php endif; ?>
            </tr>
            <tr><td>&nbsp;</td></tr>
        </table>
    </form>

    <script type="text/javascript">
    var descMode = 2;
    OcInitEditor();
    <?php if ($this->_tpl_vars['name_error'] || $this->_tpl_vars['newlist_mode']): ?>
        document.getElementById('list_name').focus();
    <?php endif; ?>
        state_changed();
    </script>

    <?php endif; ?>   
    <?php if (count($this->_tpl_vars['bookmarked_lists']) && ! $this->_tpl_vars['edit_list'] && ! $this->_tpl_vars['newlist_mode'] && ! $this->_tpl_vars['name_error']): ?>
        <br id="bookmarks" />
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelists.tpl", 'smarty_include_vars' => array('cachelists' => $this->_tpl_vars['bookmarked_lists'],'title_bookmarks' => true,'show_bookmarks' => true,'show_user' => 'tre','show_watchers' => false,'show_edit' => false,'show_unbookmark' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>