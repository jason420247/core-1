<?php
if (!isConnect('admin')) {
	throw new Exception(__('401 - Accès non autorisé', __FILE__));
}
?>
<style>
	#div_reboot_jeedom_texte{
		width: 400px;
		margin: auto;
		text-align: center;
	}
	#contenu{
		width: 400px;
		margin: auto;
	}
</style>

<div id="contenu">
	<h2 style="opacity:0.8;"><span class="glyphicon glyphicon-off"></span> Eteindre</h2>
	<div class="progress">
		<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" id="progressbar_reboot" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
			<span class="sr-only"></span>
		</div>
	</div>
	<div id="div_reboot_jeedom_texte"><h6>Merci de patienter...</h6></div>
</div>

<iframe src="" id="iframe_reboot" style="display:none"></iframe>

<div id="div_reboot_jeedom" style="display:none;">
	<script type="text/javascript" id="reboot_jeedom"></script>
</div>

<script type="text/javascript">
	var rebooti = '0';
	var testjeedom = '0';
	jeedom.haltSystem();

	function reboot_jeedom(rebooti){
		$('#div_reboot_jeedom_texte').empty().html('<h6>Votre box Jeedom est éteinte.<br /> Pour la redémarrer, débranchez-la et rebranchez-la.</h6>');
		$('#progressbar_reboot').width('100%');
		$('#progressbar_reboot').addClass('progress-bar-danger').removeClass('progress-bar-success').removeClass('active');
	}

	setTimeout('reboot_jeedom(rebooti)', 10000);
	setTimeout("$('#progressbar_reboot').width('50%');", 5000);
	$('#progressbar_reboot').width('5%');
</script>
