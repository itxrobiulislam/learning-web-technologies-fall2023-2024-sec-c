document.getElementById("loginForm").addEventListener("submit", function(event) {
    var userType = document.getElementsByName("userType")[0].value;

    if (userType === "student") {
        window.location.href = "dashboard_student.html";
    } else if (userType === "admin") {
        window.location.href = "dashboard_admin.html";
    }

    event.preventDefault();
});
