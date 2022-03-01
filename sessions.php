<?php
 require './views/header.php'; 
 $session_data_path = './data/sessionDetails';
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<div ng-app="angApp" ng-controller="appCtrl" class="container mt-3">
    <h1 class="display-3 mb-3">Sessions</h1>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <ul class="session-list">
                <li ng-repeat="session in sessionsList" ng-click="changeData(session.name)">
                    <a ng-class="{activeSession: (session.name === activeSession), inactiveSession: (session.name != activeSession)}">
                        {{session["name"]}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col" id="curSession">
            <div class="row">
                <div class="col-fluid">                                        
                    <h3 class="display-6 mt-3">{{activeSession}}</h3>
                    <div ng-repeat="session in currentSession['events']">
                                            
                        <div class="accordion" id="accordion3">
                            
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a{{session.id}}">
                                        {{session.title}}
                                    </button>
                                </h2>
                                <div id="a{{session.id}}" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                    <div class="accordion-body">
                                        <div class="flex-item">
                                            <img src="{{session.image}}" alt="session-image">
                                        </div>
                                        <div class="flex-item">
                                            {{session.content}}                            
                                        </div>
                                    </div>
                            </div>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .accordion-body{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }
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
    .accordion-body img{
        max-width: 300px;
    }
    .flex-item{
        margin: 10px;
    }
    @media (min-width: 992px) { 
        .accordion-body{
            flex-wrap: nowrap;
        }
     }
</style>


<script>
    var app = angular.module('angApp', []);
    app.controller('appCtrl', $scope => {
        $scope.activeSession = 'Inagural functions';
        $scope.sessionsList = <?php json_encode(require('./data/sessions.json')); ?>["sessions"];
        $scope.sessionData = {
            "Inagural functions": <?php json_encode(require $session_data_path.'/inagurals.json'); ?>,
            "Awareness sessions": <?php json_encode(require $session_data_path.'/awareness.json'); ?>,
            "NGO sessions": <?php json_encode(require $session_data_path.'/ngo.json'); ?>,
            "Competitions": <?php json_encode(require $session_data_path.'/competitions.json'); ?>,
            "Interactive sessions": <?php json_encode(require $session_data_path.'/interactive.json'); ?>,
            "Celebrations": <?php json_encode(require $session_data_path.'/celebrations.json'); ?>,
            "Cleaning sessions": <?php json_encode(require $session_data_path.'/cleaning.json'); ?>,
            "Other sessions": <?php json_encode(require $session_data_path.'/others.json'); ?>,
        };        
        $scope.currentSession = $scope.sessionData[$scope.activeSession];
        
        // re render current session when active session changes
        $scope.$watch('activeSession', () => {
            $scope.currentSession = $scope.sessionData[$scope.activeSession];
        });

        $scope.changeData = (name) => {
            $scope.activeSession = name;
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