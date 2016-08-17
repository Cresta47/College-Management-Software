<div ui-view="userListCard">
    <h1>Users</h1>

<div class="mdl-grid demo-content" ng-controller="UserListCardsController">
    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div ng-repeat="user in userCards"
             ng-show="showCards"
             class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">
            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">@{{ user.name }}</h2>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                @{{ user.email }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Profile</a>
                <a ui-sref="userEdit" class="mdl-button mdl-js-button mdl-js-ripple-effect">Edit</a>
            </div>
        </div>
    </div>

    <table ng-show="showList" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
        <thead>
        <tr>
            <th class="full-width">ID</th>
            <th class="mdl-data-table__cell--non-numeric">Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="user in userList">
            <td>@{{ user.id }}</td>
            <td class="mdl-data-table__cell--non-numeric">John Doe</td>
            <td>@{{ user.email }}</td>
            <td>
                <a href="#" ng-click="showEditForm(user.id)"><i class="fa fa-pencil fa-fw"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</div>