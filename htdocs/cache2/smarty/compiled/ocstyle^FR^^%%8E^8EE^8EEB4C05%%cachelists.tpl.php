<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from cachelists.tpl */ ?>

<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-list.png" style="margin-right: 10px;" width="32" height="32" />
        Listes de cache
    </div>

    <?php echo '
    <script type="text/javascript">
    function resetfilter()
    {
        document.getElementById(\'name_filter\').value = \'\';
        document.getElementById(\'by_filter\').value = \'\';
        submitbutton(\'reset\');
    }
    </script>
    '; ?>


    <div class="content2-container">
        <div class="floatbox">
            <form method="get" action="cachelists.php">
                <table class="table" >
                    <tr>
                        <td>Nom de la liste&nbsp;:</td>
                        <td><input id="name_filter" name="name" value="<?php echo $this->_tpl_vars['name_filter']; ?>
" class="input170" /></td>
                    </tr>
                    <tr>
                        <td>Par&nbsp;:</td>
                        <td><input id="by_filter" name="by" value="<?php echo $this->_tpl_vars['by_filter']; ?>
" class="input170" /></td>
                    </tr>
                    <tr><td class="separator"></td></tr>
                    <tr>
                        <td colspan="2" style="text-align:right">
                            <input type="submit" name="filter" value="Chercher" class="formbutton" onclick="submitbutton('filter')" />&nbsp;
                            <input type="submit" name="reset" value="Réinitialiser" class="formbutton" onclick="resetfilter()" />
                        </td>
                    </tr>
                    <tr><td class="separator"></td></tr>
                    <tr><td class="separator"></td></tr>
                </table>
            </form>
        </div>

        <div>
            <div style="height:4px"></div>
            <p>
                Depuis Juillet 2015, tous les utilisateurs enregistrés sur Opencaching peuvent créer et publier des propres listes de géocache via leur <a href="mylists.php">profil d'utilisateur</a>. Les listes suivantes ont été publiées à ce jour&nbsp;:
            </p>
        </div>
    </div>

    <div style="height:6px"></div>

    <table>
        <tr>
            <td class="header-small">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
        <tr><td class="spacer"></td></tr>
    </table>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelists.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <table>
        <tr><td class="spacer"></td></tr>
        <tr>
            <td class="header-small">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>