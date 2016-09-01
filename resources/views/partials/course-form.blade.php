<div ui-view="courseForm">
<div class="mdl-grid demo-content" ng-controller="CourseFormController">
    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <form>
            {{--<div class="form-group label-static is-empty">--}}
            <input type="hidden" name="id" class="course form-control"
                   id="i2" placeholder="" ng-model="course.id" value="@{{course.id}}">
            {{--</div>--}}

            <div class="form-group label-static is-empty">
                <h3>Create Course</h3>
                <div class="form-group label-static is-empty">
                    <input type="text" name="name" class="course-form form-control"
                           id="i2" placeholder="Name" ng-model="course.name">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="text" name="class_id" class="course-form form-control"
                           id="i2" placeholder="class_id" ng-model="course.class_id">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="text" name="grade_id" class="course-form form-control"
                           id="i2" placeholder="grade_id" ng-model="course.grade_id">
                </div>


                <div class="course-form form-group label-static is-empty ripple-container">
                    <input type="button" value="Create" class="btn btn-raised btn-primary" ng-click="createCourse()">
                </div>
            </div>
        </form>
    </div>
</div>
</div>