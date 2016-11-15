<!DOCTYPE html>
<html ng-app="adminApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Camara Municipal do Porto Novo</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Materialize  style shee-->
	<link type="text/css" rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"/>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<!-- 
	<link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'> -->
	<link type="text/css" rel="stylesheet" href="css/materialize/materialize.min.css"  media="screen,projection"/>
	<!-- Angular Material style sheet -->
	<link rel="stylesheet prefetch" href="bower_components/angular-material/angular-material.min.css">

	<link rel="stylesheet prefetch" href="css/animations.css">
	<link rel="stylesheet prefetch" href="css/cmpnStyle.css">
	<link rel="stylesheet prefetch" href="css/adminStyle.css">


</head>

<body bg ng-controller="adminCtrl as admin" ng-cloak>
	
	<md-toolbar ng-hide="search"  class="navbar-fixed" ng-class="color">

		<nav class="{{color}}">
			<div class="row md-whiteframe-z3" ng-class="color">
				<div class="nav-wrapper " ng-class="{logIN: admin.isLogin}">
					<div  class="brand-logo  col s12 offset-s7 l6 offset-l3">
						<h5><md-icon>home</md-icon>{{admin.title}}</h5><h6 class="loc" >{{admin.activeTab()}}</h6>

					</div>	
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<div class="right hide-on-med-and-down" ng-if="!admin">

						<md-button  ng-repeat="item in items" class="md-icon-button" href="{{item.link}}"  aria-label="{{item.name}}"  ng-click="item.click()">
							<ng-md-icon icon="{{item.icon}}" style="fill: white" size="26"></ng-md-icon> 


							<md-tooltip md-delay="0.4" md-direction="bottom" md-autohide="true">
								{{item.name}}
							</md-tooltip>

						</md-button>
						<md-button class="md-icon-button" href="#/login"  aria-label="login" ng-hide="admin.isLogin">
							<ng-md-icon icon="account_circle" style="fill: white" size="26"></ng-md-icon> 


							<md-tooltip md-delay="0.4" md-direction="bottom" md-autohide="true">
								Login
							</md-tooltip>

						</md-button>
						<!-- <img  ng-click="location()" src="img/avatar.jpg" alt="userProfile" class="circle userProfile" ng-if="admin.isLogin"> -->





					</div>

				</div>

			</div>
		</nav>
		<a href="#!" class="button-collapse" data-activates="slide-out"><img  src="img/avatar.jpg" alt="userProfile" class="circle userProfile" ng-if="admin.isLogin" hide-sm hide-xs></a>
	</md-toolbar>


	<md-toolbar  ng-if="search" class="md-hue-1 md-whiteframe-z4 page-home " fixedMenu>
		<div class="md-toolbar-tools">
			<md-button  id="procurar" class="md-icon-button"  aria-label="Back" ng-click="clean()">
				<ng-md-icon icon="arrow_back" style="fill:black" ></ng-md-icon>
			</md-button>
			<!-- <h3 flex="10">
				Back
			</h3> -->
			<md-input-container flex >
				<label>&nbsp;</label>
				<input ng-model="procurar" placeholder="Procurar" name="proc" style="margin-top:23px">
			</md-input-container>
			<md-button aria-label="Search" ng-click="clean()" class="md-icon-button">
				<ng-md-icon icon="search" style="fill:black" ></ng-md-icon>
			</md-button>

		</div>

	</md-toolbar>


	<ul class="side-nav" id="mobile-demo" >


		<li><div class="userView " >
			<img class="background md-whiteframe-z2" src="img/nature-3.jpg">
			<a href="#!user"><img class="circle" src="img/cm.png" ng-hide="admin.isLogin"></a>
			<a href="#!user"><img class="circle" src="img/avatar.jpg" ng-show="admin.isLogin"></a>
			<a href="#!name"><span class="white-text name">{{admin.user.name}}</span></a>
			<a href="#!email"><span class="white-text email">{{admin.user.email}}</span></a>
		</div>
	</li>
	<div class=" hide-on-large-only">
		<li ng-hide="!admin.isLogin"><a class="subheader">Account Settings</a></li>
		<!-- <li><a class="subheader">Configurações de Conta</a></li> -->
		<li ng-hide="!admin.isLogin"><a href="#/perfil"><i class="material-icons blue-text">settings</i>Definições</a></li>
		<!-- <li><a href="#!"><i class="material-icons green-text">inbox</i>Inbox</a></li> -->
		<li ng-hide="!admin.isLogin"><a href="#!" ng-click="admin.logout()"><i class="material-icons red-text" >power_settings_new</i>Sair</a></li>
	</div>
	<li><a class="subheader">Menu</a></li>
	<li ng-repeat="item in items" ><a class="waves-effect" href="{{item.link}}"  ng-click="item.click()"><i class="material-icons">{{item.icon}}</i>{{item.name}}</a></li>
	
	<!-- fsdafas -->

</ul>	

<!-- fixed Side nav -->
<ul class="side-nav fixed" style="width: 340px">


	<li><div class="userView " >
		<img class="background md-whiteframe-z2" src="img/nature-3.jpg">
		<a href="#!user"><img class="circle" src="img/cm.png" ng-hide="admin.isLogin"></a>
		<a href="#!user"><img class="circle" src="img/avatar.jpg" ng-show="admin.isLogin"></a>
		<a href="#!name"><span class="white-text name">{{admin.user.name}}</span></a>
		<a href="#!email"><span class="white-text email">{{admin.user.email}}</span></a>
	</div>
</li>
<li><a class="subheader">Menu</a></li>

<li ng-repeat="item in items"><a class="waves-effect" href="{{item.link}}"  ng-click="item.click()"><i class="material-icons {{item.color}}">{{item.icon}}</i>{{item.name}}</a></li>


<!-- fsdafas -->

</ul>
<!-- ------User Nav Bar ----- -->

<ul id="slide-out" class="side-nav">
	<li><div class="userView">
		<img class="background" src="img/nature-2.jpg">
		<a href="#!user"><img class="circle" src="img/avatar.jpg"> </a>
		<a href="#!name"><span class="white-text name">{{admin.user.name}} </span></a>
		<a href="#!email"><span class="white-text email">{{admin.user.email}}</span></a>
	</div>
</li>
<li ><a class="subheader">Configurações de Conta</a></li>
<li ><a href="#/perfil"><i class="material-icons blue-text">settings</i>Definições</a></li>
<li ><a href="#!"><i class="material-icons green-text">inbox</i>Inbox</a></li>
<li ><a href="#!" ng-click="cmpn.logout()"><i class="material-icons red-text" >power_settings_new</i>Sair</a></li>

<li><div class="divider"></div></li>
<li><a href="#!" ><i class="material-icons ">feedback</i>Enviar Sugestões</a></li>
<li><a href="#!"><i class="material-icons ">help</i>Ajuda</a></li>

</ul>


<!-- fab button -->
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large {{color}}">
		<i class="material-icons">playlist_add</i>
	</a>
	<ul>
		<li><a class="btn-floating purple" ng-click="clean()"><i class="material-icons" >search</i> <md-tooltip md-direction="left">Procurar</md-tooltip></a></li>
		<li><a class="btn-floating red "><i class="material-icons">delete_forever</i><md-tooltip md-direction="left">Eliminar</md-tooltip></a></li>
		<li><a class="btn-floating green" ><i class="material-icons">assignment</i><md-tooltip md-direction="left">Editar</md-tooltip></a></li>
		<li><a class="btn-floating yellow" ><i class="material-icons">playlist_add_check</i><md-tooltip md-direction="left">Listar</md-tooltip></a></li>
		<li ng-show="admin.isLogin"><a class="btn-floating blue button-collapse"  data-activates="slide-out"><i class="material-icons">add</i><md-tooltip md-direction="left">{{add}}</md-tooltip></a></li>
		<li ng-hide="admin.isLogin"><a class="btn-floating blue" href="#/login" ><i class="ion-ios-person"></i><md-tooltip md-direction="left">Login</md-tooltip></a></li>

	</ul>
</div>
<!-- fab button -->




</div>
<div ng-view>
	
</div>

<script type="text/javascript" src="js/jQuery/jquery-2.2.3.min.js"></script>



<!-- Angular.js Libraries-->
<script src="bower_components/angular/angular.min.js"></script>
<script src="bower_components/angular-material/angular-material.min.js"></script>
<script src="bower_components/angular-animate/angular-animate.min.js"></script>
<script src="bower_components/angular-aria/angular-aria.min.js"></script>
<script src="bower_components/angular-messages/angular-messages.min.js"></script>
<script src="bower_components/satellizer/dist/satellizer.min.js"></script>
<script src="bower_components/ngstorage/ngStorage.min.js"></script>
<script src="bower_components/ngRoute/angular-route.min.js"></script>
<script src="bower_components/angular-material-icons/angular-material-icons.min.js"></script>
<script src="bower_components/angular-resource/angular-resource.min.js"></script>

<!--Modules -->
<script src="js/angular/modules/admin.js"></script>
<!--Directives-->
<script src="js/angular/directives/cmpnMenu.js"></script>
<!-- Services-->
<script src="js/angular/services/authService.js"></script>
<script src="js/angular/services/departamentoService.js"></script>



<!-- <script src="js/angular/services/departamentoService.js"></script> -->
<!--Controllers-->
<script src="js/angular/controllers/adminCtrl.js"></script>
<script src="js/angular/controllers/admin/departamentoController.js"></script>
<!-- 	routes -->
<script src="js/angular/routes/adminRoute.js"></script> 
<!--Config-->
<script src="js/angular/config/theme.js"></script>
<script src="js/angular/config/filter.js"></script>


<!--Plugins-->

<!--Materialize-->
<script type="text/javascript" src="js/materialize/materialize.min.js"></script>



<script>

	$( document ).ready(function(){
		$(".button-collapse").sideNav({
			  menuWidth: 340, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
  });



	});
</script>


</body>
</html>
