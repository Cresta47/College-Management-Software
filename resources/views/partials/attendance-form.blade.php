<div ui-view="attendanceForm">
    <div class="mdl-grid demo-content" ng-controller='AttendanceForCourseController'>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form>
                <div class="form-group label-static is-empty">
                    <h3>Take Attendance</h3>
                    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

                        {{--<div class="mdl-card__actions mdl-card--border">--}}
                            {{--<a href="javascript:void(0)" ng-click="allAbsent()" class="mdl-button mdl-js-button mdl-js-ripple-effect">All Absent</a>--}}
                            {{--<a href="javascript:void(0)" ng-click="allPresent(users)" class="mdl-button mdl-js-button mdl-js-ripple-effect">All Present</a>--}}
                        {{--</div>--}}
                        <div ng-repeat="user in users">
                            <div ng-repeat="(key, user) in user" class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid" >
                            <input type="hidden" name="id" class="signup form-control"
                                   id="i2" placeholder="" ng-model="user.user_id" >

                            <div class="form-group label-static is-empty">
                                <input type="text" name="comment" class="signup form-control"
                                       id="i2" placeholder="Comment" ng-model="user.comment" >
                            </div>

                            <div>
                                <h3>User Id : @{{user.user_id}}</h3>
                            </div>

                            <div class="mdl-card__actions mdl-card--border">
                                <a href="javascript:void(0)" ng-click="absent(user.user_id,user.comment)" class="mdl-button mdl-js-button mdl-js-ripple-effect">Absent</a>
                                <a href="javascript:void(0)" ng-click="present(user.user_id,user.comment)" class="mdl-button mdl-js-button mdl-js-ripple-effect">Present</a>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
