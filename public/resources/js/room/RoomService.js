var RoomService = app.service('RoomService', function (RoomRESTClient) {
    return {
        get: function (id) {
            return RoomRESTClient.get({id: id.id});
        },

        post: function (value) {

        },
    }
});