
app.controller('ScheduleFormController', function ($scope, ScheduleService) {
    $scope.schedule = {};
    $scope.schedule.name;
    

    $scope.loadSchedule = function () {
        
        $scope.schedule = ScheduleService.get({id:$scope.params.id});
    }

    $scope.create = function () {
                schedule = {name:$scope.schedule.name,
                
                }

        ScheduleService.post(schedule).then(function(response){
            alert('Schedule successfully added in the system.'+'\n'+'Check console.log for response.');
            console.log(response.data);
        });

    }
});

app.controller('ScheduleListCardsController', function ($scope, ScheduleService) {

    $scope.schedule;


    $scope.gridOptions = { data: 'schedules',

        columnDefs:
            [
             {field: 'id', displayName: 'ID', width: 50 },
             {field: 'name', displayName: 'Name', width: 300  },
             
            ],
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
    };

    $scope.loadAll = function(){
        ScheduleService.all().then(function(response) {
            $scope.schedules = response.data;
        });
    }

    $scope.loadAll();

});