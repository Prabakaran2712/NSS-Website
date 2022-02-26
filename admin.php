<?php
require('./views/config.php');
session_start();
if (!isset($_SESSION['user']))
{
    header("location: 403.php");
}
else
{
    // check if user is admin
    $user = $_SESSION['user'];
    $is_admin_sql = "SELECT isAdmin FROM users WHERE username='$user'";
    $is_admin_result = mysqli_query($con, $is_admin_sql);
    $is_admin_val = mysqli_fetch_row($is_admin_result)[0];
    if ($is_admin_val == 0)
    {
        header("location: 403.php");
    }
}

$analytics_sql = "SELECT * FROM analytics";
$analytics_res = mysqli_query($con, $analytics_sql);
$analytics = json_encode(mysqli_fetch_all($analytics_res, MYSQLI_ASSOC));

require('./views/header.php');

?>

<!-- angularjs -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<div ng-app="angApp" class="container py-3 my-3" ng-controller="adminController">
    <div>
        <div class="row align-items-center">
            <h1 class="col display-4 accent-color mt-5 mb-3">Site analytics</h1>
            <a href="logout.php" class="col-1 btn accent-bg-color text-light">Logout</a>
        </div>
        <div class="my-3 row">
            <p class="lead col-auto">Total site visits: {{analytics.length}}</p>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User agent</th>
                    <th scope="col">City</th>
                    <th scope="col">Region</th>
                    <th scope="col">Country</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="data in analytics | startFrom:currentPage*pageSize | limitTo:pageSize">
                    <th scope="col">{{data.index}}</th>
                    <td style="max-width: 300px;">{{data.ua}}</td>
                    <td>{{data.city}}</td>
                    <td>{{data.region}}</td>
                    <td>{{data.country}}</td>        
                    <td>{{data.loggedAt}}</td> 
                </tr>
            </tbody>
        </table>

        <!-- pagination -->
        <div class="row justify-content-center align-items-center" ng-hide="analytics.length/pageSize <= 1">
            <div class="col-auto">
                <button class="btn btn-primary" ng-disabled="currentPage == 0" ng-click="currentPage=currentPage-1">Previous</button>
            </div>
            <div class="col-auto">
                <div class="lead">Page {{currentPage+1}} of {{numberOfPages()}}</div>
            </div>
            <div class="col-auto">
                <button ng-disabled="currentPage >= analytics.length/pageSize - 1" ng-click="currentPage=currentPage+1" class="btn btn-primary">Next</button>
            </div>
        </div>
    </div>

</div>

<script>
    var app = angular.module('angApp', []);
    app.controller('adminController', $scope => {

        $scope.analytics = <?php echo $analytics; ?>;

        // add index
        for (let j = 0; j < $scope.analytics.length; j++) {
            $scope.analytics[j].index = j + 1;
        }

        // pagination for analytics
        $scope.currentPage = 0;
        $scope.pageSize = 10;
        $scope.numberOfPages = function() {
            return Math.ceil($scope.analytics.length / $scope.pageSize);
        }

    })

    // startFrom filter
    app.filter('startFrom', function() {
        return function(input, start) {
            start = +start; //parse to int
            return input.slice(start);
        }
    });
</script>

<?php

//footer file
require('./views/footer.php');

?>