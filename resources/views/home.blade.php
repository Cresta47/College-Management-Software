<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$orgName}}</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="resources/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="resources/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="resources/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="resources/images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendor/material/material.min.css">
    <link rel="stylesheet" href="vendor/template/styles.css">
    <link rel="stylesheet" href="resources/css/main.css">

    <link rel="stylesheet" href="vendor/angular-ui-grid/ui-grid.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link rel="stylesheet" href="http://fezvrasta.github.io/bootstrap-material-design/dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script>
        $.material.init();
    </script>

</head>
<body ng-app="app">
{{--<div ng-controller="SessionController">--}}
{{--<div ng-if="isUserLoggedIn">--}}

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    @include('partials.top-menu')
    @include('partials.left-side-bar')
    <main class="mdl-layout__content mdl-color--grey-100">
        <div ui-view></div>
    </main>
</div>

{{--</div>--}}
{{--</div>--}}

<script src="vendor/material/material.min.js"></script>
<script src="vendor/angular/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.1/angular-ui-router.js"></script>

<script src="vendor/angular-ui-grid/ui-grid.js"></script>

<script src="vendor/angular/angular-resource/angular-resource.js"></script>
<script src="resources/js/app.js"></script>
<script src="resources/js/routes.js"></script>


<script src="resources/js/user-userdetail/UserService.js"></script>
<script src="resources/js/user-userdetail/UserFactory.js"></script>
<script src="resources/js/user-userdetail/UserController.js"></script>

<script src="resources/js/grade/GradeService.js"></script>
<script src="resources/js/grade/GradeFactory.js"></script>
<script src="resources/js/grade/GradeController.js"></script>

<script src="resources/js/class/ClassService.js"></script>
<script src="resources/js/class/ClassFactory.js"></script>
<script src="resources/js/class/ClassController.js"></script>

<script src="resources/js/course/CourseService.js"></script>
<script src="resources/js/course/CourseFactory.js"></script>
<script src="resources/js/course/CourseController.js"></script>

<script src="resources/js/role/RoleController.js"></script>
<script src="resources/js/role/RoleService.js"></script>
<script src="resources/js/role/RoleFactory.js"></script>

<script src="resources/js/attendance/AttendanceController.js"></script>
<script src="resources/js/attendance/AttendanceService.js"></script>
<script src="resources/js/attendance/AttendanceFactory.js"></script>


<script src="resources/js/marks/MarksController.js"></script>
<script src="resources/js/marks/MarksService.js"></script>
<script src="resources/js/marks/MarksFactory.js"></script>

<script src="resources/js/examination/ExaminationController.js"></script>
<script src="resources/js/examination/ExaminationService.js"></script>
<script src="resources/js/examination/ExaminationFactory.js"></script>

<script src="resources/js/session/SessionController.js"></script>
<script src="resources/js/session/SessionService.js"></script>

<script src="resources/js/auth/auth.js"></script>

<script src="resources/js/filter/FilterController.js"></script>
<script src="resources/js/filter/FilterService.js"></script>

</body>
</html>