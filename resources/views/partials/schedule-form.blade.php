
<div ui-view="scheduleForm">
    <div class="mdl-grid demo-content" ng-controller="ScheduleFormController">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form method="post">
                <div class="form-group label-static is-empty">
                    <h3>Create Schedule</h3>


                    <div class="form-group label-static is-empty">
                        <input type="text" name="name" class="schedule-form form-control"
                               id="i2" placeholder="name" ng-model="schedule.name">
                    </div>
                    <div class="schedule-form form-group label-static is-empty ripple-container">
                        <input type="button" value="Create" class="btn btn-raised btn-primary" ng-click="create()">
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
