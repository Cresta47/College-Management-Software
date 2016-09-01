
app.controller('AttendanceFormController', function ($scope, AttendanceService) {
    $scope.attendance = {};
    $scope.attendance.user_id;
    $scope.attendance.in_or_out;
    $scope.attendance.comment;
    $scope.loadAttendance = function () {
        $scope.attendance = AttendanceService.get({id:$scope.params.id});
    }
    $scope.createattendance = function () {
        attendance = {user_id:$scope.attendance.user_id,
            in_or_out:$scope.attendance.in_or_out,
            comment:$scope.attendance.comment
        }
        AttendanceService.post(attendance).then(function(response){
            alert('Attendance successfully added in the system.'+'\n'+'Check console.log for response.');
            console.log(response.data);
        });
    }
});

app.controller('AttendanceListCardsController', function ($scope, AttendanceService) {

    $scope.attendance;

    $scope.gridOptions = { data: 'attendances',
        columnDefs:
            [{field: 'id', displayName: 'ID', width: 50 },
                {field: 'in_or_out', displayName: 'Status', width: 150  },
                 {field: 'comment', displayName: 'Comment', width: 150  }
            ],
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
    };

    $scope.loadAll = function(){
        AttendanceService.all().then(function(response) {
            $scope.attendances = response.data;
        });
    }

    $scope.loadAll();

});