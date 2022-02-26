<?php require('views/header.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<div ng-app="angApp" ng-controller="appCtrl">
  <h1>Incharges</h1>
</div>


<!-- angular scripts -->
<script>
  var app = angular.module('angApp', []);
  app.controller('appCtrl', function($scope){
    $scope.incharges = <?php json_encode(require('./data/incharges.json')); ?>;
    $scope.designTeam = <?php json_encode(require('./data/designTeam.json')); ?>;
  });
</script>
<?php require('views/footer.php'); ?>