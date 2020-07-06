<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enquiries</title>
    <link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
			integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
			crossorigin="anonymous"
		/>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body onLoad="document.enquiries.userid.focus();">
    <header id="main-header">
        <div class="container">
            <h1 class="hf">HF</h1>
            <h1>ENQUIRIES</h1>
        </div>
    </header>

        <nav id="navbar">
            <div class="container">
               <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="services.php">Services</a></li> 
                    <li><a href="enquiries.php">Enquiries</a></li>
                    
                </ul>
            </div>
        </nav>
    <h1 class="my-form-h1">Do you have any enquiries?</h1>

        <form class="my-form" onSubmit="return validateForm()" name="enquiries" action="connecting.php" method="POST" >
            <div class="form-group">
                <label for="userid"><b>Name: </b></label>
                <input type="text"  name="name1" size="10" id="" required>
                
            
                <label for="phone"><b>Phone number: </b></label>
                <input type="number"  name="number1" id="" required>
            
                <label for="email"><b>Email: </b></label>
                <input type="text" class="form-control" name="email" id="" required>
                
           
                <label for="enquiries"><b>Enquiry: </b></label>
                <textarea name="enquiry"  class="txt-area"></textarea>
            
               <div>
               <button type="submit" class="btn" onSubmit= "return validateForm()" onclick="submitForm()"value="Submit" name="submit"><b>SUBMIT</b></button>
               <a href="check.html">Check on enquiry</a>
               <style>
               form a{
                background-color: #00908E;
                color: white;
                padding: 12px 18px;
                margin: 8px 0;
                border: 2px solid gray;
                cursor: pointer;
                width: 20%;
                text-decoration: none;
                }
                </style>
                 
               </div>
            
            </div>    
        </form>
    
        <h2><p>We Value Your Thoughts, Concerns, Opinions and Suggestions</p></h2>
        <br>
        <hr>
        <section>
            <div class="block">
                <h3>Contact Information</h3>
                <ul>
                    <li> <b>Address:</b> No28 Corner Elm and Pine Street, Harare </li>
                    <br>
                    <li> <b>Phone:</b> +263 (0)24 275 0420, (0)24 275 7769</li>
                    <br>
                    <li> <b>Email:</b>enquires@HomeFurnitures.co.zw </li>
                    <br>
                    <li>Please contact us about anything at all.</li>
                    <li>We would love to hear about your furnishing and décor design ideas, request for a quotation or for a specific product, or for recommendations on how we could improve our business. </li>
                    <li>You can reach us by email, by phone </li>
    
                </ul>
            </div>
    
            <div class="block">
            <h3>About Us</h3>
          <ul>
            Welcome to Home Furnitures
            <li>Home Furnitures is a new household brand in Zimbabwe that brings you the widest range of the world's leading brands of furniture and appliances, at the very best prices.</li>
            <li> We offer products that are the best quality and the latest trends and designs at the best prices, to ensure that we increase our market share in Zimbabwe.</li> 
            <li>The Home Furnitures team are also very proud to support the local manufacturers, as the demand for quality locally produced furniture, bedding and electronics increases.</li>    
            <li>We have few outlets in Zimbabwe for your shopping convenience.</li>
            </ul>
            </div>
    
            <div class="block">
            <h3>Customer Care</h3>
            <ul>
                <li>Getting to know us</li>
                    <br>
                    <li>Our brand</li>
                    <br>
                    <li>Deliveries</li>
                    <br>
                    <li>Product warranty</li> 
                    <br>
                    <li>Customer care</li> 
                    <br>  
                    <li>Promotions</li>
                    <br>
                    <li>News</li> 
               
            </ul>
                </p>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> 
        
            <footer id="main-footer">
                <br>
                <p>Copyright &copy; 2020 HomeFurnitures</p>
                <br>
        </footer>
        
</body>
</html>