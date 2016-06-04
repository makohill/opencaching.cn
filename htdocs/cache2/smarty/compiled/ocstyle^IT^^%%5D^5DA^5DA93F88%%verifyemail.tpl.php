<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from verifyemail.tpl */ ?>

<form action="verifyemail.php" method="post" style="display:inline;">

    <input type="hidden" name="page" value="<?php echo $this->_tpl_vars['orgpage']; ?>
" />

    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" border="0" align="middle" width="32" height="32" alt="" />
        Verifica l\'indirizzo email
    </div>

    <br />
    <p>Una o più email non possono essere consegnate all\'indirizzo specificato nel tuo profilo utente:</p>
    <p><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $this->_tpl_vars['emailadr']; ?>
</strong></p>
    <p><br />Per favore conferma che questa email è corretta, o inseriscine una nuova.</p>
    <br />

    <input type="submit" name="new" value="Inserisci il nuovo indirizzo email" class="formbutton" style="width:200px" onclick="submitbutton('new')" />&nbsp;&nbsp;
    <input type="submit" name="confirm" value="Conferma questo indirizzo email" class="formbutton" style="width:200px" onclick="submitbutton('confirm')" />
    <br />

    <?php echo $this->_tpl_vars['datalicensemail']; ?>


</form>