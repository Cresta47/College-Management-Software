<div class="mdl-grid demo-content" ng-controller="SignupController">
    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <form>
            <div class="form-group label-static is-empty">
                <h3>Signup</h3>

                <div class="form-group label-static is-empty">
                    <input type="email" name="email" class="signup form-control"
                           id="i2" placeholder="Email" ng-model="email">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="password" name="password" class="signup form-control"
                           id="i2" placeholder="Password" ng-model="password">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="password" name="confirmPassword" class="signup form-control"
                           id="i2" placeholder="Confirm" ng-model="confirm">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="text" name="firstName" class="signup form-control"
                           id="i2" placeholder="First Name" ng-model="firstName">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="text" name="lastName" class="signup form-control"
                           id="i2" placeholder="Last Name" ng-model="lastName">
                </div>

                <div class="signup form-group label-static is-empty ripple-container signup">
                    <input type="button" value="Sign up" class="btn btn-raised btn-primary" ng-click="signup()">
                </div>

            </div>
        </form>
    </div>
</div>





{{--<div class="mdl-grid demo-content" ng-controller="UserCardsController">--}}
    {{--<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">--}}


            {{--<div ng-repeat="user in users" class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">--}}
                {{--<div class="mdl-card__title mdl-card--expand mdl-color--teal-300">--}}
                    {{--<h2 class="mdl-card__title-text">@{{ user.name }}</h2>--}}
                {{--</div>--}}
                {{--<div class="mdl-card__supporting-text mdl-color-text--grey-600">--}}
                    {{--@{{ user.email }}--}}
                {{--</div>--}}
                {{--<div class="mdl-card__actions mdl-card--border">--}}
                    {{--<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Profile</a>--}}
                {{--</div>--}}
            {{--</div>--}}


    {{--</div>--}}
{{--</div>--}}