<div ui-view="courseListCard">
    <h1>My Subjects</h1>

    <div class="mdl-grid demo-content" ng-controller="CourseListCardsController">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div ng-repeat="course in courseCards"
                 ng-show="showCards"
                 class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">
                <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                    <h2 class="mdl-card__title-text">@{{ course.name }}</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    <b>Course Name :</b> @{{ course.name }}<br>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Details</a>
                    {{--<a ui-sref="@{{courseEdit({id:course.id, partialTitle:'Edit Course'})}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">Edit</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>