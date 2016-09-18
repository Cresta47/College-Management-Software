<div ng-controller="UserController" class="">
     <span>
        @{{ user.email }}
    </span>
    <h3>Left-Side-Bar</h3>
    <a ui-sref="dashboard" class="" href="">Home</a><br/>
    <a ui-sref="examinationCreate" class="">Create Examination</a><br/>
    <a ui-sref="classCreate" class="">Create Class</a><br/>
    <a ui-sref="userCreate" class="">Register</a><br/>
    <a ui-sref="roleCreate" class="">Create Role</a><br/>
    <a ui-sref="userListCard" class="">Users</a><br/>
    <a ui-sref="courseListCard" class="">My Subjects</a><br/>
    <a ui-sref="attendanceListCard" class="">Attendance</a><br/>
    <a ui-sref="examinationListCard" class="">My Examinations</a><br/>
    <a ui-sref="marksListCard" class=" ">My Marks</a><br/>
    <a class="" href="">{{$serverName}}</a><br/>
</div>
