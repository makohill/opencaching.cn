<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_logentry_logitem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'res_logentry_logitem.tpl', 21, false),array('modifier', 'date_format', 'res_logentry_logitem.tpl', 23, false),array('modifier', 'substr', 'res_logentry_logitem.tpl', 23, false),array('modifier', 'escape', 'res_logentry_logitem.tpl', 26, false),array('modifier', 'smiley', 'res_logentry_logitem.tpl', 82, false),array('modifier', 'hyperlink', 'res_logentry_logitem.tpl', 82, false),array('modifier', 'replace', 'res_logentry_logitem.tpl', 91, false),)), $this); ?>
<div id="log<?php echo $this->_tpl_vars['logItem']['id']; ?>
" style="clear:both">
<?php if (isset ( $this->_tpl_vars['logItem']['newcoord'] ) && ( ! $this->_tpl_vars['morelogs'] || $this->_tpl_vars['logItem']['type'] )): ?>
    <p>
        &nbsp;<img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/log/16x16-moved.png" width="16" height="16" />
        <?php if ($this->_tpl_vars['logItem']['type']): ?>Nouvelles coordonnées&nbsp;:<?php else: ?>Coordonnées originales&nbsp;:<?php endif; ?>&nbsp;
        <strong><?php echo $this->_tpl_vars['logItem']['newcoord']['lat']; ?>
 <?php echo $this->_tpl_vars['logItem']['newcoord']['lon']; ?>
</strong><?php if ($this->_tpl_vars['logItem']['movedbym']): ?>,
        déplacé vers <?php echo $this->_tpl_vars['logItem']['movedbym']; ?>
 mètre<?php elseif ($this->_tpl_vars['logItem']['movedbykm']): ?>,
        déplacé vers <?php echo $this->_tpl_vars['logItem']['movedbykm']; ?>
 km<?php endif; ?>
    </p>
<?php endif; ?>
<?php if ($this->_tpl_vars['logItem']['type']): ?>
<div class="content-txtbox-noshade">      <div class="logs">
    <p class="content-title-noshade-size1 <?php if ($this->_tpl_vars['print']): ?>printlogheader<?php endif; ?>" style="display:inline; margin-right:0">
        <?php if ($this->_tpl_vars['logItem']['oc_team_comment']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/oclogo/oc-team-comment.png" alt="OC-Team" title="OC équipe commentaire" /><?php endif; ?>
        <a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cache']['cacheid']; ?>
&log=A#log<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logtype.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['logItem']['type'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></a>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logflags.tpl", 'smarty_include_vars' => array('logItem' => $this->_tpl_vars['logItem'],'withRecommendation' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
<?php if ($this->_tpl_vars['logItem']['time'] != "00:00:00"): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['time'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)); ?>
<?php endif; ?>

        <?php ob_start(); ?>
            <a class="boldlink" href="viewprofile.php?userid=<?php echo $this->_tpl_vars['logItem']['userid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
        <?php $this->_smarty_vars['capture']['username'] = ob_get_contents(); ob_end_clean(); ?>

        <?php if ($this->_tpl_vars['logItem']['type'] == 1): ?>              <?php echo $this->_smarty_vars['capture']['username']; ?>
 trouvé la géocache
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 2): ?>              <?php echo $this->_smarty_vars['capture']['username']; ?>
 n'a pas trouvé le géoacache
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 3): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 a écrit une note
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 7): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 a visité l'événement
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 8): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 veut visiter l'événement
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 9): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 a archivé la géocache
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 10): ?>
            <?php if ($this->_tpl_vars['logItem']['oc_team_comment']): ?>
                <?php echo $this->_smarty_vars['capture']['username']; ?>
 a activé la géocache
            <?php else: ?>
                <?php echo $this->_smarty_vars['capture']['username']; ?>
 a maintenu la géocache
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 11): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 a désactivé la géocache
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 13): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 a verrouillé la géocache
        <?php elseif ($this->_tpl_vars['logItem']['type'] == 14): ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>
 a verrouillé et caché la géocache
        <?php else: ?>
            <?php echo $this->_smarty_vars['capture']['username']; ?>

        <?php endif; ?>
    </p>

        <?php if ($this->_tpl_vars['logItem']['deleted'] !== '1' && ! $this->_tpl_vars['print'] && ( $this->_tpl_vars['cache']['userid'] == $this->_tpl_vars['login']['userid'] || $this->_tpl_vars['logItem']['userid'] == $this->_tpl_vars['login']['userid'] )): ?>
        <p class="editlog"><img src="images/trans.gif" border="0" width="16" height="16" alt="" title="" />
            <?php if ($this->_tpl_vars['logItem']['userid'] == $this->_tpl_vars['login']['userid'] && ( $this->_tpl_vars['cache']['userid'] == $this->_tpl_vars['login']['userid'] || $this->_tpl_vars['cache']['status'] != 6 || $this->_tpl_vars['cache']['adminlog'] )): ?>
                <a href="editlog.php?logid=<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-properties.png" border="0" align="middle" border="0" width="16" height="16" alt="" /></a>
                [<a href="editlog.php?logid=<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Èditer</a>]
            <?php endif; ?>

            <?php if ($this->_tpl_vars['cache']['userid'] == $this->_tpl_vars['login']['userid'] || $this->_tpl_vars['logItem']['userid'] == $this->_tpl_vars['login']['userid']): ?>
                <a href="removelog.php?logid=<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-delete.png" border="0" align="middle" border="0" width="16" height="16" alt="" /></a>
                [<a href="removelog.php?logid=<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">effacer</a>]
            <?php endif; ?>

            <?php if ($this->_tpl_vars['logItem']['userid'] == $this->_tpl_vars['login']['userid'] && $this->_tpl_vars['cache']['status'] != 6): ?>
                <a href="picture.php?action=add&loguuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['uuid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/action/16x16-addimage.png" border="0" align="middle" border="0" width="16" height="16" alt="" /></a>
                [<a href="picture.php?action=add&loguuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['uuid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : smarty_modifier_urlencode($_tmp)); ?>
">Ajouter une image</a>]
            <?php endif; ?>
        </p>
    <?php endif; ?>

    <div class="viewcache_log-content" style="margin-top: 15px;">
        <?php if ($this->_tpl_vars['logItem']['texthtml']): ?>
            <p><?php echo $this->_tpl_vars['logItem']['text']; ?>
</p>
        <?php else: ?>
            <p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['logItem']['text'])) ? $this->_run_mod_handler('smiley', true, $_tmp) : smarty_modifier_smiley($_tmp)))) ? $this->_run_mod_handler('hyperlink', true, $_tmp) : smarty_modifier_hyperlink($_tmp)); ?>
</p>
        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['logItem']['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pictures'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pictures']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['pictureItem']):
        $this->_foreach['pictures']['iteration']++;
?>
            <?php if (($this->_foreach['pictures']['iteration'] <= 1)): ?>
                <b>Les images pour ce log&nbsp;:</b><br />
            <?php endif; ?>

                        <a name="piclink" href="<?php echo $this->_tpl_vars['pictureItem']['url']; ?>
" onclick="enlarge(document.getElementById('pic<?php echo $this->_tpl_vars['pictureItem']['id']; ?>
'))" style="cursor:pointer"><?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<img id="pic<?php echo $this->_tpl_vars['pictureItem']['id']; ?>
" class="enlargegroup<?php echo $this->_tpl_vars['logItem']['id']; ?>
" src="resource2/ocstyle/images/misc/empty.png" longdesc="<?php echo $this->_tpl_vars['pictureItem']['url']; ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "´") : smarty_modifier_replace($_tmp, "'", "´")))) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '´´') : smarty_modifier_replace($_tmp, '"', '´´')); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['pictureItem']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "´") : smarty_modifier_replace($_tmp, "'", "´")))) ? $this->_run_mod_handler('replace', true, $_tmp, '"', '´´') : smarty_modifier_replace($_tmp, '"', '´´')); ?>
" /></a>             <?php if ($this->_tpl_vars['pictureItem']['spoiler']): ?>
                (Spoiler)
            <?php endif; ?>
            <?php if ($this->_tpl_vars['logItem']['userid'] == $this->_tpl_vars['login']['userid']): ?>
                &nbsp;
                [<a href="picture.php?action=edit&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Èditer</a>]
                [<a href="javascript:if(confirm('Voulez-vous vraiment supprimer cette image&nbsp;?'))location.href='picture.php?action=delete&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'">effacer</a>]
                <?php if (! ($this->_foreach['pictures']['iteration'] <= 1)): ?>[<a href="picture.php?action=up&uuid=<?php echo ((is_array($_tmp=$this->_tpl_vars['pictureItem']['uuid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">vers le haut</a>]<?php endif; ?>
            <?php endif; ?>
            <br />
        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['logItem']['late_modified']): ?>
            <p><?php if ($this->_tpl_vars['logItem']['pictures']): ?><br /><?php endif; ?>
            <small><em>Dernière modification le <?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['entry_last_modified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['datelong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['datelong'])); ?>
</em></small></p>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['logItem']['deleted_by_name'] != ""): ?>
            <p><span style="color:red">Supprimé par <?php echo $this->_tpl_vars['logItem']['deleted_by_name']; ?>
,
            <?php echo ((is_array($_tmp=$this->_tpl_vars['logItem']['deletion_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</span></p>
        <?php endif; ?>

    </div>
    <div style="clear:both"></div>
    </div>
</div>
<?php endif; ?>
</div>