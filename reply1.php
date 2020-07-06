<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header id="main-header">
        <div class="container">
            <h1 class="hf">HF</h1>
            <h1>RESPONSES</h1>
        </div>
    </header>

        <nav id="navbar">
            <div class="container">
               <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="services.php">Services</a></li> 
                    <li><a href="enquiries.php">Enquiries</a></li>
                    <li><a href="admin.html">Admin</a></li>
                </ul>
            </div>
        </nav>
    
    <form class="my-form" action="reply.php" method="POST">
        CUSTOMER_ID:
        <input type="text" name="Client_ID" id="">
        <br>
        <br>
        RESPONSE:
        <textarea name="response1" id="" cols="30" rows="10" style="font-family: 'Times New Roman', Times, serif;"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="RESPOND" class="btn">
        
    </form>
</body>
</html>