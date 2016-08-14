<div ui-view="createClassForm">
    <div class="mdl-grid demo-content" ng-controller="ClassFormController">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form>
                <div class="form-group label-static is-empty">
                    <h3>Create Class</h3>
                    <div class="form-group label-static is-empty">
                        <input type="text" name="name" class="class-form form-control"
                               id="i2" placeholder="Name" ng-model="name">
                    </div>
                    <div class="class-form form-group label-static is-empty ripple-container">
                        <input type="button" value="Create" class="btn btn-raised btn-primary" ng-click="create()">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

