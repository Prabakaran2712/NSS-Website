<?php
 require './views/header.php'; 
 $recent_session_data_path = './data/recentSessions.json';
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<div ng-app="angApp" ng-controller="appCtrl" class="container mt-3 mb-5">
    <h1 class="display-3 mb-3">Recent Sessions</h1>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <ul class="session-list">
                <li ng-repeat="session in sessionsList" ng-click="changeActiveSession(session)">
                    <a ng-class="{activeSession: (session.title === activeSession.title), inactiveSession: (session.title != activeSession.title)}" class="fw-bold">
                        {{session["title"]}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col" id="curSession">
            <div class="container">                                        
                <h3 class="display-6 mt-3">{{activeSession['title']}}</h3>
                <img class="img-fluid" src="{{activeSession['image']}}" alt="session-image">
                <p class="mt-3 fs-6">{{activeSession['content']}}</p>
            </div>
        </div>
    </div>
</div>

<style>
    .activeSession{
        color: grey;
        cursor: text !important;
    }
    .activeSession:hover{
        color: grey;
    }
    .inactiveSession{
        color: #303983;
    }
    .inactiveSession:hover {
        font-size: 17px;
    }
    .session-list{
        text-align: left;
        list-style-type: none;
    }
    .session-list li{
        margin: 20px auto;
    }
    .session-list li a{
        text-decoration: none;
        cursor: pointer;
    }
</style>


<script>
    var app = angular.module('angApp', []);
    app.controller('appCtrl', $scope => {
        $scope.sessionsList = <?php json_encode(require($recent_session_data_path)); ?>["sessions"];
        $scope.activeSession = $scope.sessionsList[0];
        $scope.changeActiveSession = (session) => {
            $scope.activeSession = session;
        }

    })
</script>

<?php require './views/footer.php'; ?>