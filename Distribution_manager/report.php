<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  <center>    <h1>This is Report Writeing Box</h1>
    <h3>You can write for Admin, Operator and Association</h3>

    <form action="#" method="POST">
      Selection To:  <select name="select" id="select">
            <option value="admin">Admin</option>
            <option value="association">Association</option>
            <option value="operator">Operator</option>
        </select><br> <br>
        <textarea id="textarea" name="textarea" rows="4" cols="50" placeholder="You can write anything in here..."> </textarea> <br>
        <br>Text From: <input type="text" placeholder="UserName" name="username"> <br>
        <br> <input type="submit" values="Send" name="send">
    </form>
    </center>
</body>
</html>