$(document).ready(function() {

    var userTable = $("#user").DataTable({
        'processing': false,
        'serverSide': false,
        "paging": true,
        "searching": true,
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        'ajax': {
            "url": "/account/dataset/userData.php",
            "type": "GET"
        },
        'columns': [{
            "data": 'db_id'
        }, {
            "data": 'username'
        }, {
            "data": 'email'
        }, {
            "data": 'password'
        }]
    });

    // setInterval(getDate, 1000);
    setInterval(function () {
        userTable.ajax.reload();
    }, 1000);
});

// $("#userForm").submit(function(event) {
//     event.preventDefault();
    
//     var $form = $(this);
//     var $inputs = $form.find("input, button");
//     var serializeData = $form.serialize();

//     var request = $.ajax({
//             url: "/account/dataset/userData.php",
//             type: "POST",
//             data: serializeData,
//             success: function (result) {
//                 console.log(serializeData);
//             },
//             error: function () {
//                 alert("Something went wrong when adding new user.");
//             }
//     });
// });