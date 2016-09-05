<div ui-view="userForm">
<div class="mdl-grid demo-content" ng-controller="UserFormController">
    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <form>
            <div class="form-group label-static is-empty">
                <h3>@{{stateParams.stateTitle}}</h3>
                {{--<div class="form-group label-static is-empty">--}}
                    <input type="hidden" name="id" class="signup form-control"
                           id="i2" placeholder="" ng-model="user.id" value="@{{user.id}}">
                {{--</div>--}}

                <div class="form-group label-static is-empty">
                    <input type="email" name="email" class="signup form-control"
                           id="i2" placeholder="Email" ng-model="user.email">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="password" name="password" class="signup form-control"
                           id="i2" placeholder="Password" ng-model=" user.password">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="password" name="confirmPassword" class="signup form-control"
                           id="i2" placeholder="Confirm" ng-model="user.confirm">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="text" name="firstName" class="signup form-control"
                           id="i2" placeholder="First Name" ng-model="user.firstName">
                </div>

                <div class="form-group label-static is-empty">
                    <input type="text" name="lastName" class="signup form-control"
                           id="i2" placeholder="Last Name" ng-model="user.lastName">
                </div>

                <label ng-repeat="role in roles">
                    <input
                            type="checkbox"
                            name="roles[]"
                            value="@{{role.id}}"
                            ng-model="form.selectedRoles"
                    >@{{role.displayName}}
                </label>

                <div class="signup form-group label-static is-empty ripple-container signup">
                    <input type="button" value="Sign up" class="btn btn-raised btn-primary" ng-click="signUp()">
                </div>
                {{--<div class="edit form-group label-static is-empty ripple-container signup">--}}
                    {{--<input type="button" value="Edit" class="btn btn-raised btn-primary" ng-click="edit()">--}}
                {{--</div>--}}
            </div>
        </form>
    </div>
</div>


</div>