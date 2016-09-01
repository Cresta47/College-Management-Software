<div ng-controller="UserController" class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
<header class="demo-drawer-header">
    <img src="resources/images/user.jpg" class="demo-avatar">
    <div class="demo-avatar-dropdown">
            <span>
                @{{ user.email }}
            </span>
        <div class="mdl-layout-spacer"></div>
        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_drop_down</i>
            <span class="visuallyhidden">Accounts</span>
        </button>
        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
            <li class="mdl-menu__item">hello@example.com</li>
            <li class="mdl-menu__item">info@example.com</li>
            <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
        </ul>
    </div>
</header>

<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
    <a ui-sref="dashboard" class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
    <a ui-sref="attendanceCreate" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_box</i>Take Attendance</a>
    <a ui-sref="examinationCreate" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_box</i>Create Examination</a>

    <a ui-sref="classCreate" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_box</i>Create Class</a>
    <a ui-sref="userCreate" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_box</i>Register</a>
    <a ui-sref="roleCreate" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_box</i>Create Role</a>
    <a ui-sref="userListCard" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Users</a>
    {{--<a ui-sref="classListCard" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>My Class Rooms</a>--}}
    <a ui-sref="courseListCard" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>My Subjects</a>
    <a ui-sref="attendanceListCard" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Attendance</a>
    <a ui-sref="examinationListCard" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>My Examinations</a>
    <a ui-sref="marksListCard" class="mdl-navigation__link"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>My Marks</a>

    <div class="mdl-layout-spacer"></div>
    <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>{{$serverName}}</a>
</nav>


</div>