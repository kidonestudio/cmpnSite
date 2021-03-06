/**
* adminApp l
*
* Description
*/
(function(){
	'use strict';

	angular.module('adminApp')

	angular.module('adminApp')
	.controller('departamentoCtrl',function($scope,departamentoService,$location){
		
		$scope.pushPin =[
		{link:'#/departamentos/adicionar', nome:'Adicionar Departamentos '}
		]

		$scope.card=[
		{name:'Adicionar', link:'#/departamentos/adicionar', icon:'add_circle', path:'departamentos/adicionar'},
		{name:'Listar',link:'#/departamentos/listar', icon:'playlist_add_check',path:'departamentos/listar'},
		{name:'Remover',link:'#/departamentos/remover',icon:'delete_forever',path:'departamentos/remover'},
		{name:'Noticias',link:'#/departamentos/noticias',icon:'language',path:'departamentos/noticias'},
		
		];
		$scope.link = function(ev){
			$location.path(ev)

		}

		$scope.add="adicionar departamento"

		$scope.fab=[
		{name:'Adicionar', icon:'add', color:'blue', link:'#/departamentos/adicionar'},
		{name:'Listar', icon:'playlist_add_check', color:'green', link:'#/departamentos/listar'},
		{name:'Remover', icon:'delete_forever', color:'red', link:'#/departamentos/listar'},
		];


	})

	.controller('listarDepartamentoCtrl',function($scope,departamentoService){
		var vm =this;
		$scope.rowsPerPage = 4;

		$scope.dep=departamentoService.listar();


		$scope.pushPin =[
		{link:'#/departamentos/adicionar', nome:'Adicionar Departamentos '}
		]

		$scope.fab=[
		{name:'Adicionar', icon:'add', color:'blue', link:'#/departamentos/adicionar'},
		{name:'Listar', icon:'playlist_add_check', color:'green', link:'#/departamentos/listar'},
		{name:'Remover', icon:'delete_forever', color:'red', link:'#/departamentos/listar'},
		];

		
	}).controller('adiconarDepartamentoCtrl',function ($scope, departamentoService,$mdDialog) {

		$scope.pushPin =[
		{link:'#/departamentos/adicionar', nome:'Adicionar Departamentos '}
		]

		$scope.showPrerenderedDialog = function(ev) {
			$mdDialog.show({
				//controller: DialogController,
				contentElement: '#myDialog',
				parent: angular.element(document.body),
				targetEvent: ev,
				clickOutsideToClose: true
			});
		};

		$scope.cancel=function(){
			$mdDialog.hide();
		}


		var vm = this;
		$scope.title="Adicionar Departamento"
		$scope.button="adicionar";
		$scope.dep={};
		$scope.guardar = function(){
			return departamentoService.guardar($scope.dep, $scope.dep.name)
		}


		$scope.fab=[
		{name:'Adicionar', icon:'add', color:'blue', link:'#/departamentos/adicionar'},
		{name:'Listar', icon:'playlist_add_check', color:'green', link:'#/departamentos/listar'},
		{name:'Remover', icon:'delete_forever', color:'red', link:'#/departamentos/listar'},
		];

		

	})

})();