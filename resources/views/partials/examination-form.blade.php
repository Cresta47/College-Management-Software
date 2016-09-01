
<div ui-view="examinationForm">
    <div class="mdl-grid demo-content" ng-controller="ExaminationFormController">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <form method="post">
                <div class="form-group label-static is-empty">
                    <h3>Create Exam</h3>
                    {{--<div class="form-group label-static is-empty">--}}
                    <input type="hidden" name="id" class="examination form-control"
                           id="i2" placeholder="" ng-model="examination.id" value="@{{examination.id}}">
                {{--</div>--}}


                    <div class="form-group label-static is-empty">
                        <input type="text" name="name" class="examination-form form-control"
                               id="i2" placeholder="name" ng-model="examination.name">
                    </div>
                    <div class="examination-form form-group label-static is-empty ripple-container">
                        <input type="button" value="Create" class="btn btn-raised btn-primary" ng-click="create()">
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
