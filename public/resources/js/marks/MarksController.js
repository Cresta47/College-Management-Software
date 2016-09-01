

app.controller('MarksFormController', function ($scope, MarksService) {
    $scope.marks = {};
    $scope.marks.name;
    $scope.marks.exam_id;
    $scope.marks.course_id;

    $scope.loadMarks = function () {
        $scope.marks = MarksService.get({id:$scope.params.id});
    }

    $scope.createMarks = function () {

        marks = {name:$scope.marks.name,
            exam_id:$scope.marks.exam_id,
            course_id:$scope.marks.course_id,
        }

        MarksService.post(marks).then(function(response){
            alert('Marks successfully added in the system.'+'\n'+'Check console.log for response.');
            console.log(response.data);
        });

    }
});

app.controller('MarksListCardsController', function ($scope, MarksService) {

    $scope.marks;

    $scope.gridOptions = { data: 'marks',
        columnDefs:
            [{field: 'name', displayName: 'Name', width: 300 }
            ],
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
    };

    $scope.loadAll = function(){
        MarksService.all().then(function(response) {
            $scope.marks = response.data;
        });
    }

    $scope.loadAll();

});