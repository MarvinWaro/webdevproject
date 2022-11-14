<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>

<body>
    <h1>Add Subject</h1>
    <a href="..index.php">Home</a>
    <br/><br/>
    <form action="../functions/add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text"name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>