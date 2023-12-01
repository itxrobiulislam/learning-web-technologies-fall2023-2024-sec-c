function registerEmployee() {
}

function updateEmployee() {
}

function deleteEmployee() {
}

function searchEmployee() {
    const username = $("#searchUsername").val();

    $.ajax({
        type: "GET",
        url: "search_employee.php", 
        data: { username: username },
        success: function (response) {
            $("#result").html(response);
        },
        error: function () {
            $("#result").html("Error in AJAX request.");
        }
    });
}
