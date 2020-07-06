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

<form action="" method="post">

<?php
$conn = mysqli_connect("localhost", "root", "", "forms");
if(isset($_POST['submit'])){
    
    $sql = "SELECT * FROM clients where name1 = '".$_POST['name1']."' and number1 = '".$_POST['number1']."' and email = '".$_POST['email']."'";
    
                            if($result = mysqli_query($conn, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){

                                    echo    "<table>";
                                    echo     "<tr>";
                                    echo     "<th scope = 'col'>CUSTOMER ID</th>";
                                    echo     "<th scope = 'col'>NAME</th>";
                                    echo     "<th scope = 'col'>EMAIL</th>";
                                    echo     "<th scope = 'col'>NUMBER</th>";
                                    echo     "<th scope = 'col'>ENQUIRY</th>";
                                    echo     "</tr>";
                                    
                                    echo "<tr><td>" . $row["Client_ID"]. "</td><td>" . $row["name1"] . "</td><td>" . $row["email"]. "</td><td>". $row["number1"]."</td><td>" .$row["enquiry"]. "</td></tr>";
                                }
                                echo "</table>";

                                    }
                                    mysqli_free_result($result);
                                } else{
                                    echo '<h4 class="no-annot">No Record</h4>';
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                            }
                        
                        $conn->close();
?>

</form>
