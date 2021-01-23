<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$link = '';
if($selecionar != null){
	$link = '../';
}

?>

<!DOCTYPE html>
<html>
	<head>
	    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/texto_central.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark p-3 fixed-top" style="background-color: #202124;">
			<!-- Brand -->
				<a class="navbar-brand" href="index.html">
    				<img id="img-logo" src="<?php echo base_url(); ?>images/mapler-logo.png" alt="Logo do Mapler" style="width: 40px;">
				</a>
			<div class="text-gray">
    			<a href="<?php echo $link.'menu';?>" class="text-decoration-none"><strong><span class="text-white">MAPLER</span></strong></a>
			</div>
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 10px;">
    			<ul class="navbar-nav">
        			<li class="nav-item">
            			<a class="nav-link" href="<?php echo $link.'manuais';?>">Manuais</a>
        			</li>
        			<li class="nav-item">
            			<a class="nav-link" href="<?php echo $link.'forum';?>">Fóruns</a>
        			</li>
        			<li class="nav-item">
            			<a class="nav-link" href="<?php echo $link.'desenvolvimento';?>">Desenvolvimento</a>
        			</li>
        			<li class="nav-item">
            			<a class="nav-link" href="<?php echo $link.'estatisticas';?>">Estatísticas</a>
        			</li>
        			<li class="nav-item">
            			<a class="nav-link" href="<?php echo $link.'contato';?>">Contato</a>
        			</li>
    			</ul>
    		<hr class="d-md-none text-white-50">
    		<div class="ms-md-auto">
        		<ul class="navbar-nav">
            		<li class="nav-item">
                		<a class="nav-link" href="<?php echo $link.'sobre';?>">Sobre</a>
            		</li>
            		<li class="nav-item">
                		<a class="nav-link" href="<?php echo $link.'download';?>">Download</a>
            		</li>
        		</ul>
    		</div>
		</div>
	</nav>
	</body>
</html>