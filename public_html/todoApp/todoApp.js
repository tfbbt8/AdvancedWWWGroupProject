var app = angular.module('ToDo',[]);
app.factory('todoList',[function(){
        var l = {list:[]};
        try{
		l.list=angular.fromJson(localStorage.todoList);
		if(l.list) return l;
	}
	catch(err){
		console.log(err);
	}
	l={list:[],done:false};
	localStorage.todoList = angular.toJson(l.list);
	return l;
}]);
app.controller('todoController',['$scope','todoList',function($scope,todoList){
	$scope.todos=todoList.list;

	$scope.addTodo = function(){
		$scope.todos.push({'title':$scope.newTodo,done:false});
		$scope.newTodo = '';
		localStorage.todoList = angular.toJson($scope.todos);
	}
	$scope.clearCompleted = function(){
		$scope.todos=$scope.todos.filter(function(item){
			return !item.done;
		})
		localStorage.todoList = angular.toJson($scope.todos);
	}
	
	$scope.todoLength= function(){
		return $scope.todos.length;
	}
}]);
