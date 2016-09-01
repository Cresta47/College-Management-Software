<div ui-view="marksForm">
    <div class="mdl-grid demo-content" ng-controller="MarksFormController">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form>
                <div class="form-group label-static is-empty">
                    <h3>Marks</h3>

                    {{--<div class="form-group label-static is-empty">--}}
                    <input type="hidden" name="id" class="signup form-control"
                           id="i2" placeholder="" ng-model="marks.id" value="@{{marks.id}}">
                    {{--</div>--}}

                    <div class="form-group label-static is-empty">
                        <input type="text" name="name" class="signup form-control"
                               id="i2" placeholder="Name" ng-model="marks.name">
                    </div>

                    <div class="form-group label-static is-empty">
                        <input type="text" name="course_id" class="signup form-control"
                               id="i2" placeholder="Course id" ng-model=" marks.course_id">
                    </div>

                    <div class="form-group label-static is-empty">
                        <input type="text" name="exam_id" class="signup form-control"
                               id="i2" placeholder="Exam id" ng-model="marks.exam_id">
                    </div>


                    <div class="signup form-group label-static is-empty ripple-container signup">
                        <input type="button" value="Sign up" class="btn btn-raised btn-primary" ng-click="createMarks()">
                    </div>

                    {{--<div class="edit form-group label-static is-empty ripple-container signup">--}}
                    {{--<input type="button" value="Edit" class="btn btn-raised btn-primary" ng-click="edit()">--}}
                    {{--</div>--}}

                </div>
            </form>
        </div>
    </div>


</div>