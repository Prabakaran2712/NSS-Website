<?php require './views/header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<div ng-app="angApp" ng-controller="appCtrl" class="container mt-3">
    <h1 class="display-2 mb-3">Sessions</h1>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <ul class="session-list">
                <li ng-repeat="session in sessionsList" ng-click="changeData(session.name, session.link)">
                    <a ng-style="{ 'color' : (session.name == activeSession) ? '#303983' : 'gray' }">
                        {{session["name"]}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col" id="curSession">
            <div class="row">
                <div class="col-10">                                        
                    <div ng-repeat="session in currentSession">
                        
                        <div class="accordion col-md-8" id="accordion3">
                            
                            <div class="accordion-item my-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a{{session.id}}">
                                        {{session.title}}
                                    </button>
                                </h2>
                                <div id="a{{session.id}}" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                    <div class="accordion-body">
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

<script>
</script>
<script>
    var app = angular.module('angApp', []);
    app.controller('appCtrl', $scope => {
        $scope.activeSession = 'Inagural functions';
        $scope.sessionsList = <?php json_encode(require('./data/sessions.json')) ?>["sessions"];
        $scope.sessionData = {
            "Inagural functions": <?php json_encode(require './data/SessionDetails/inagurals.json'); ?>,
            "Awareness sessions": <?php json_encode(require './data/SessionDetails/awareness.json'); ?>,
        };
        $scope.currentSession = $scope.sessionData[$scope.activeSession];
        $scope.$watch('activeSession', () => {
            $scope.currentSession = $scope.sessionData[$scope.activeSession];
        });
        $scope.changeData = (name, pageLink) => {
            $scope.activeSession = name;
        }

    })
</script>

<style>
    .session-list{
        text-align: center;
        list-style-type: none;
    }
    .session-list li{
        margin: 20px auto;
    }
    .session-list li a{
        text-decoration: none;
        cursor: pointer;
    }
    #curSession{
        border: 1px solid black;
    }
</style>

<?php require './views/footer.php'; ?>