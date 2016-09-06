<div ui-view="CourseListCard">

    {{--<div class="togglebutton">--}}
        {{--<label>--}}
            {{--<input type="checkbox" checked=""><span class="toggle"></span>--}}
        {{--</label>--}}
    {{--</div>--}}

    <div class="mdl-grid demo-content" ng-controller="CourseListCardsController">

        {{--This is where the Table is being created.--}}
        <div ng-show="showTable" class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div id="grid1" ui-grid="gridOptions" ui-grid-selection class="user-grid"></div>
        </div>


        <div ng-show="showCards" class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div ng-repeat="course in courses"
                 class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-desktop">
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    <h2 class="mdl-card__title-text">@{{ course.name }}</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Class ID :: @{{ course.class_id }}
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Grade ID:: @{{ course.grade_id }}
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <!-- make Dynamic Later -->
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Detail</a>
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Students</a> <!-- For Teachers -->
                    <a ui-sref="takeAttendanceOfCourse({id: course.id})" class="mdl-button mdl-js-button mdl-js-ripple-effect">Attendance</a> <!-- For Teachers -->
                </div>
            </div>

        </div>


    </div>
</div>

</div>