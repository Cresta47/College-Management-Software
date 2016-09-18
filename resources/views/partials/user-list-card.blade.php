<div ui-view="userListCard">
    <h1>Users</h1>
<div class="" ng-controller="UserListCardsController">

    {{--This is where the Table is being created.--}}
    <div id="grid1" ui-grid="gridOptions" ui-grid-selection class="user-grid"></div>

    <md-content class="md-padding" layout-xs="column" layout="row">
        <div flex-xs flex-gt-xs="50" layout="column">
    <md-card ng-repeat="user in users">
        {{--<img ng-src="{{imagePath}}" class="md-card-image" alt="Washed Out">--}}
        <md-card-title>
            <md-card-title-text>
                <span class="md-headline"> @{{ user.email }}</span>
            </md-card-title-text>
        </md-card-title>
        <md-card-content>
            <p>
               Registered Date  @{{ user.createAt }}
            </p>
        </md-card-content>
        <md-card-actions layout="row" layout-align="end center">

            <button class="md-raised md-primary md-button md-ink-ripple"
                    type="button"
                    ui-sref="userProfile({id: user.id})">
                <span class="ng-scope">Profile</span>
                <div class="md-ripple-container"></div>
            </button>


            <button class="md-button md-ink-ripple"
                    type="button"
                    ui-sref="userEdit({id: user.id})">
                <span class="ng-scope">Edit</span>
                <div class="md-ripple-container"></div>
            </button>

            <button class="md-button md-ink-ripple"
                    type="button"
                    ng-click="deleteUser(user.id)">
                <span class="ng-scope">Delete</span>
                <div class="md-ripple-container"></div>
            </button>

        </md-card-actions>
    </md-card>
        </div>
    </md-content>

</div>
</div>
</div>