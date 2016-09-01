<div ui-view="attendanceForm">
    <div class="mdl-grid demo-content" ng-controller='AttendanceFormController'>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form>
                <div class="form-group label-static is-empty">
                    <h3>Create Attendance</h3>

                    <div class="form-group label-static is-empty">
                        <input type="text" name="user_id" class="signup form-control"
                               id="i2" placeholder="user_id" ng-model="attendance.user_id">
                    </div>

                    <div class="form-group label-static is-empty">
                        <input type="text" name="in_or_out" class="signup form-control"
                               id="i2" placeholder="in_or_out" ng-model="attendance.in_or_out">
                    </div>

                    <div class="form-group label-static is-empty">
                        <input type="text" name="comment" class="signup form-control"
                               id="i2" placeholder="comment" ng-model="attendance.comment">
                    </div>

                    <div class="signup form-group label-static is-empty ripple-container signup">
                        <input type="button" value="Create Attendance" class="btn btn-raised btn-primary" ng-click="createattendance()">
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
