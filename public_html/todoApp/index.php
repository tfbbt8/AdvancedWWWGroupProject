<!DOCTYPE html>
<html ng-app="ToDo">
<head>
	<title>AngularJS MVC</title>
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script src="todoApp.js"></script>
	<link rel="stylesheet" type="text/css" href="ang.css">
	<script src="//use.edgefonts.net/vast-shadow:n4:all.js"></script>
	<style>
		.done{text-decoration: line-through;color:gray;}
	</style>
</head>
<body ng-controller="todoController">
	<div ng-controller="todoController" class="todo-wrapper">
		<h2>You've got <span class="emphasis">{{todoLength()}}</span> things to do</h2>
		<ul>
                        <li ng-repeat="todo in todos">
                          <input type="checkbox" ng-model="todo.done"/>
                          <span ng-class="{'done':todo.done}">{{todo.title}}</span>
                        </li>
                </ul>
		<form name="frm" ng-submit="addTodo()">
			<input type = "text" name="newTodo" ng-model="newTodo" required class="add-input" placeholder="New todo item..."/>
			<button ng-disabled="frm.$invalid" class="add-btn"><h2>Add</h2></button>
		</form>
		<button ng-click="clearCompleted()" class="clear-btn">Clear Completed</button>
	</div>
</body>
</html>
