app.controller('AttendanceForCourseController', function ($scope, $stateParams , FilterService, AttendanceService) {

    $scope.stateParams = $stateParams;

    $scope.getAttendanceModel = function(presentOrAbsent,user_id,comment){
        if(!comment){
            comment = '-';
        }
        var attendance = {user_id:user_id, comment: comment};
        if(presentOrAbsent === true){ // True for present and False for absent
            attendance['in_or_out'] = '1';
        }else{
            attendance['in_or_out'] = '0';
        }
        return attendance;
    }

    $scope.present = function(id,comment){
        var attendanceRecord = $scope.getAttendanceModel(true,id,comment);
        $scope.sendAttendance(attendanceRecord);
    }

    $scope.absent = function(id,comment){
        var attendanceRecord = $scope.getAttendanceModel(false,id,comment);
        $scope.sendAttendance(attendanceRecord);
    }

    $scope.sendAttendance = function(attendance){
        AttendanceService.post(attendance).then(function(response){
            console.log(response.data);
        });

    }

    $scope.loadUsers = function(){

        FilterService.filterUserByCourseId($scope.stateParams.id).then(function(response){
            $scope.users = response.data;
        })
    }

    $scope.loadUsers();

    $scope.getUniqueForNg = function(id,entity_id){
        var unqId =  id+'.'+entity_id ;
        console.log(unqId)
        return unqId;
    }
});


app.controller('AttendanceFormController', function ($scope, AttendanceService) {
    $scope.attendance = {};
    $scope.attendance.user_id;
    $scope.attendance.in_or_out;
    $scope.attendance.comment;
    $scope.loadAttendance = function () {
        $scope.attendance = AttendanceService.get({id:$scope.params.id});
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