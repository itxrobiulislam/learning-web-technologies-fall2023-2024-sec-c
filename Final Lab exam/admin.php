<html>
<head>
    <title>Online Shop Management System</title>
    <script src="script.js"></script>
</head>
<body>
    <h1>Online Shop Management System</h1>

    <h2>Admin Panel</h2>

    <h3>Register New Employee</h3>
    <form id="registerForm">
        <label for="employeeName">Employee Name:</label>
        <input type="text" id="employeeName" required>
        <label for="contactNo">Contact No:</label>
        <input type="text" id="contactNo" required>
        <label for="username">Username:</label>
        <input type="text" id="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" required>
        <button type="button" onclick="registerEmployee()">Register</button>
    </form>

    <h3>Update Employee Info</h3>
    <form id="updateForm">
        <label for="updateUsername">Username:</label>
        <input type="text" id="updateUsername" required>
        <label for="newContactNo">New Contact No:</label>
        <input type="text" id="newContactNo" required>
        <button type="button" onclick="updateEmployee()">Update</button>
    </form>

    <h3>Delete Employee Info</h3>
    <form id="deleteForm">
        <label for="deleteUsername">Username:</label>
        <input type="text" id="deleteUsername" required>
        <button type="button" onclick="deleteEmployee()">Delete</button>
    </form>

    <h3>Search Employee Info</h3>
    <form id="searchForm">
        <label for="searchUsername">Username:</label>
        <input type="text" id="searchUsername" required>
        <button type="button" onclick="searchEmployee()">Search</button>
    </form>

    <div id="result"></div>
</body>
</html>
