app.factory('RoomRESTClient', function ($resource) {
     return $resource('api/room/:id');
});