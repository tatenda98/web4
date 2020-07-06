<!DOCTYPE html>
<html>
<head>
<title>Enquiries</title>
<style>
    table, thead, tbody, tr { width: 100%; }
    table { table-layout: fixed }
    table > thead > tr > th { width: auto; }
    table {
    border-color: black;
    width: 100%;
    color: black;
    font-family: monospace;
    font-size: 15px;
    text-align: left;
    }
    th {
    background-color: darkblue;
    color: white;
    }
    tr:nth-child(even) {background-color: lightblue}
    .btn{
        text-align: center;
    vertical-align: middle;
    padding: .3em;
    width: 10%;
    cursor: pointer;
    background-color: red;
    height: 40px;
    color: wheat;
    border-radius: 5px;
    border: 1px solid black;
    background-color: #00908E;
    cursor: pointer;
    }
</style>
</head>
<body>

<input type="submit" value="Reply Enquiries" class="btn" onclick="window.location.href='reply1.php'">
<input type="submit" value="Return" class= "btn" onclick="window.location.href='admin.html'">
</body>
</html>