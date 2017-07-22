
<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<p>
  vous ete dans la page de redirection
</p>
<a style="display:hidden; visibility:hidden" href="<?= $this->url('users_home')?>" id="redirection"></a>
<script>
var redirection = document.getElementById("redirection");
var url = redirection.href;
window.setTimeout(function(){
  location.assign(url);
},2000)
</script>
<?php $this->stop('main_content') ?>
