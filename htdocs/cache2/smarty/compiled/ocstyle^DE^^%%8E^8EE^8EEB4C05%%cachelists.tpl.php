<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from cachelists.tpl */ ?>

<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-list.png" style="margin-right: 10px;" width="32" height="32" />
        Cachelisten
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
                        <td>Listenname:</td>
                        <td><input id="name_filter" name="name" value="<?php echo $this->_tpl_vars['name_filter']; ?>
" class="input170" /></td>
                    </tr>
                    <tr>
                        <td>Von:</td>
                        <td><input id="by_filter" name="by" value="<?php echo $this->_tpl_vars['by_filter']; ?>
" class="input170" /></td>
                    </tr>
                    <tr><td class="separator"></td></tr>
                    <tr>
                        <td colspan="2" style="text-align:right">
                            <input type="submit" name="filter" value="Suchen" class="formbutton" onclick="submitbutton('filter')" />&nbsp;
                            <input type="submit" name="reset" value="Zurücksetzen" class="formbutton" onclick="resetfilter()" />
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
                Seit Juli 2015 können alle registrierten Opencaching-Benutzer über ihr <a href="mylists.php">Benutzerprofil</a> eigene Geocache-Listen erstellen und veröffentlichen. Die folgenden Listen wurden bislang veröffentlicht:
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