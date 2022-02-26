<?php require('views/header.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<div ng-app="angApp" ng-controller="appCtrl" class="container mb-5">

  <h1 class="display-2 mt-5 my-3">Incharges</h1>

  <div class="row">

    <!-- left side -->
    <div class="col-sm-12 col-md-6">

      <div class="accordion" id="accordionExample">

        <div class="accordion-item my-3">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#finalYears">
              Final years
            </button>
          </h2>
          <div id="finalYears" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['finalYears'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#preFinalYears">
              Pre final years
            </button>
          </h2>
          <div id="preFinalYears" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['preFinalYears'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#eventCoordinators">
              Event coordinators
            </button>
          </h2>
          <div id="eventCoordinators" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['eventCoordinators'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#treasurer">
              Treasurer
            </button>
          </h2>
          <div id="treasurer" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div>
                <b>Name: </b>
                {{ incharges["treasurer"]["name"] }}
              </div>
              <div>
                <b>Reg: </b>
                {{ incharges["treasurer"]["reg"] }}
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#joinTreasurer">
              Joint Treasurer
            </button>
          </h2>
          <div id="joinTreasurer" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div>
                <b>Name: </b>
                {{ incharges["jointTreasurer"]["name"] }}
              </div>
              <div>
                <b>Reg: </b>
                {{ incharges["jointTreasurer"]["reg"] }}
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- right side -->
    <div class="col-sm-12 col-md-6">
      <div class="accordion" id="accordion2">
        <div class="accordion-item my-3">
          <h2 class="accordion-header" id="headingROne">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#regAct">
              Regular activities incharges
            </button>
          </h2>
          <div id="regAct" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['regularActivitiesIncharges'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingRTwo">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#weekend">
              Weekend activities incharges
            </button>
          </h2>
          <div id="weekend" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['weekendActivities'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingRThree">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#report">
              Report incharges
            </button>
          </h2>
          <div id="report" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['report'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header" id="headingRFour">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pr">
              Public relation
            </button>
          </h2>
          <div id="pr" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in incharges['publicRelation'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- design team -->
  <h1 class="display-2 mt-5 my-3">Design Team</h1>
  <div class="row">

    <!-- left -->
    <div class="col-sm-12 col-md-6">

      <div class="accordion" id="accordion3">
        <div class="accordion-item my-3">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#posters">
              Posters
            </button>
          </h2>
          <div id="posters" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in designTeam['posters'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#insta">
              Instagram
            </button>
          </h2>
          <div id="insta" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in designTeam['instagram'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- right -->
    <div class="col-sm-12 col-md-6">

      <div class="accordion" id="accordion3">
        <div class="accordion-item my-3">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#fb">
              Facebook
            </button>
          </h2>
          <div id="fb" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in designTeam['facebook'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item my-3 border-top">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#drive">
              Drive
            </button>
          </h2>
          <div id="drive" class="accordion-collapse collapse" data-bs-parent="#accordion2">
            <div class="accordion-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in designTeam['drive'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div class="row justify-content-center">

    <div class="accordion col-md-8" id="accordion3">

      <div class="accordion-item my-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#web">
            Website team
          </button>
        </h2>
        <div id="web" class="accordion-collapse collapse" data-bs-parent="#accordion2">
          <div class="accordion-body">
          <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Reg. no.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="student in designTeam['website'] track by $index ">
                    <td>{{ $index+1 }}</td>
                    <td>{{ student['name'] }}</td>
                    <td>{{ student['reg'] }}</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>


<!-- angular scripts -->
<script>
  var app = angular.module('angApp', []);
  app.controller('appCtrl', function($scope) {
    $scope.incharges = <?php json_encode(require('./data/incharges.json')); ?>;
    $scope.designTeam = <?php json_encode(require('./data/designTeam.json')); ?>;
  });
</script>
<?php require('views/footer.php'); ?>