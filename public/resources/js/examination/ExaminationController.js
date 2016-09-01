
app.controller('ExaminationFormController', function ($scope, ExaminationService) {
    $scope.examination = {};
    $scope.examination.name;
    

    $scope.loadExamination = function () {
        $scope.examination = ExaminationService.get({id:$scope.params.id});
    }

    $scope.create = function () {
        examination = {name:$scope.examination.name,
                
                }

        ExaminationService.post(examination).then(function(response){
            alert('Examination successfully added in the system.'+'\n'+'Check console.log for response.');
            console.log(response.data);
        });

    }
});

app.controller('ExaminationListCardsController', function ($scope, ExaminationService) {

    $scope.examinations;


    $scope.gridOptions = { data: 'examinations',

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
        ExaminationService.all().then(function(response) {
            $scope.examinations = response.data;
        });
    }

    $scope.loadAll();

});