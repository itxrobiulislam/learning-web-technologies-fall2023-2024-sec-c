<!DOCTYPE html>
<html>
<head>
    <title>PUBLIC HOME</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        
      
        .header{
            display: flex;
        }

        .header div{
            display: flex;
            align-items: center;
        }

        .header img {
            margin-right: 70%; 
        }
        

    </style>
</head>
<body>
    <table style="width: 100%;">
        <tr> 
            <td colspan="3">
                <div class="header" >
                    <img src="x.png" alt="">
                    <div >
                    <div><a href="lab5_public_home.php">Home</a></div>|
                    <div><a href="login.php">Login</a></div>|
                    <div><a href="registration.php">Registration</a></div>
                    </div>
                </div>
            </td>
        </tr>
        
        <tr>
            <td>
            <table style="margin-left:30% ;margin-top:10px;">
        <tr>
            <th colspan="3"> <b>REGISTRATION</b></th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text"></td>
            
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text"></td>
            
        </tr>
        
        <tr>
            <td>User Name</td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <fieldset>
                <input type="radio" name="gender" value="" /> Male
                <input type="radio" name="gender" value="" /> Female
                <input type="radio" name="gender" value="" /> Other <br>
                
                </fieldset>
            </td>
            
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="" value="" /> <br></td>
            
        </tr>
        <tr>
            <td colspan="2" style="text-align: left">
                <input type="submit" name="" value="Submit" />
                <input type="submit" name="" value="Reset" />
            </td>
            
        </tr>
    </table>
    <tr>
        <td align="center">Copyright c 2017</td>
    </tr>
    </table>
</body>
</html>
