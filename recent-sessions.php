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
    .recent-session-img{
        max-width: 500px;
        display: block;
        border-radius: 10px;
        margin: 20px auto;
    }
</style>


<script>
    var app = angular.module('angApp', []);
    app.controller('appCtrl', $scope => {
        $scope.sessionsList = <?php json_encode(require($recent_session_data_path)); ?>["sessions"];
        $scope.activeSession = $scope.sessionsList[0];
        // $scope.sessionData = {
        //     "Inagural functions": <?php //json_encode(require $session_data_path.'/inagurals.json'); ?>,
        //     "Awareness sessions": <?php //json_encode(require $session_data_path.'/awareness.json'); ?>,
        //     "NGO sessions": <?php //json_encode(require $session_data_path.'/ngo.json'); ?>,
        //     "Competitions": <?php //json_encode(require $session_data_path.'/competitions.json'); ?>,
        //     "Interactive sessions": <?php //json_encode(require $session_data_path.'/interactive.json'); ?>,
        //     "Celebrations": <?php //json_encode(require $session_data_path.'/celebrations.json'); ?>,
        //     "Cleaning sessions": <?php // json_encode(require $session_data_path.'/cleaning.json'); ?>,
        //     "Other sessions": <?php //json_encode(require $session_data_path.'/others.json'); ?>,
        // };        
        // $scope.currentSession = $scope.sessionData[$scope.activeSession];
        
        // // re render current session when active session changes
        // $scope.$watch('activeSession', () => {
        //     $scope.currentSession = $scope.sessionData[$scope.activeSession];
        // });

        $scope.changeActiveSession = (session) => {
            $scope.activeSession = session;
        }

    })
</script>

<style>
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

<?php require './views/footer.php'; ?>