<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
    <link rel = "stylesheet" href = "stylesheet.css"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        * {
    box-sizing: border-box ;
    color:#000000;
}

html, body {
   margin: 0;
   padding: 0;
}

.nav ul {
   margin: 0;
}

.nav li{
   display: inline ;
}

.nav a{
   display: inline-block ;
   padding: .5em;
   text-decoration: none;
   color: white;
}

nav a:hover {
   background-color: rgba (255,255,255,.3);
}

.main-nav {
   text-align: center ;
   font-size: 1.1em;
   font-weight: lighter ;
   border-bottom: 1px solid rgba (255,255,255,.3);
}

.main-nav li{
   padding: 0 5%;
}

.main-header{
   background-color: rgba(0, 0, 0, 0.6);
   background-image: url("bgBaco.png");
   background-blend-mode: multiply;
   background-size: cover;
   padding-bottom: 20px;
}

body {
   font-family:"Times New Roman" ;
   background-color: rgb(218, 242, 219);
}

.Title {
   text-align:center;
   margin: 0;
   font-size: 4em;
   color: white;
}

.About {
   text-align:center;
   font-size: 2.5em;
}

.content {
   margin: 1em;
   text-align:justify;
}

.container {
   max-width: 900px;
   margin: 0 auto;
   padding: 0 1em;
}

.Bard {
   float:right;
   height:200px;
   width:200px;
   margin:10px;
   border-radius: 50%;
}

.main-footer{
    background-image: url("footerbg.png");
   background-blend-mode: multiply;
   background-size: cover;
   color: white;
   text-align: center;
   background-color: rgb (0,0,0,0.6);
   padding: .50em 0;
   margin-bottom: 0px;
   font-size: 1.5em;
   
}

.main-footer-content a{
   text-decoration: none;
   text-align:center;
   margin: 0;
   font-size: 1em;  
}

h2{
    text-align: center;
}

h3{
    text-align: center;
}

.Subtitle{
    text-align:center;
   margin: 0;
   font-size: 1em;
   color: white;
}




.nav a:hover {
   background-color: rgba(255, 255, 255, 0.3);
}

.main-header {
   background-color: rgba(0, 0, 0, 0.6);
   background-image: url("bgBaco.png");
   background-blend-mode: multiply;
   background-size: cover;
   padding: 20px 0;
   text-align: center;
}

.Title {
   margin: 0;
   font-size: 4em;
   color: white;
}

.Subtitle {
   margin: 0;
   font-size: 1em;
   color: white;
}

.content {
   margin: 1em 0;
   text-align: justify;
}

.container {
   max-width: 900px;
   margin: 0 auto;
   padding: 0 1em;
}

form {
   text-align: center;
}

form label {
   display: block;
   margin-bottom: 5px;
}

form input[type="text"] {
   width: 100%;
   padding: 8px;
   margin-bottom: 10px;
   box-sizing: border-box;
}

select {
   width: 100%;
   padding: 8px;
   margin-bottom: 10px;
   box-sizing: border-box;
}

input[type="submit"] {
   background-color: #007bff;
   color: white;
   border: none;
   padding: 10px 20px;
   cursor: pointer;
}

input[type="submit"]:hover {
   background-color: #0056b3;
}

.main-footer {
   background-image: url("footerbg.png");
   background-blend-mode: multiply;
   background-size: cover;
   color: white;
   text-align: center;
   padding: .50em 0;
   margin-top: 20px;
   font-size: 1.5em;
}

.main-footer-content a {
   text-decoration: none;
   margin: 0;
   font-size: 1em;
}
</style>
</head>
<body>
    <header class = "main-header" id = "header">
        <nav class= "nav main-nav">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><?php echo '<a href="/about">ABOUT US</a>'; ?></li>
                <li><?php echo '<a href="/login">LOG OUT</a>'; ?></li>
            </ul>
        </nav>
        <h1 class= "Title">CLICK</h1>
        <h4 class= "Subtitle">Community Logistics Integration for Coordinated Kiosks</h4>
    </header>
        <section class ="content container">
            <p>
                Step 1: Please select which form to request.
            </p>

            <p>


                <div style="text-align: left;">
                    <label for="forms">Select form:</label>
                    <select name="forms" id="forms">
                        <option value="clearance">Barangay Clearance</option>
                        <option value="indigency">Certificate Indigency</option>
                        <option value="affidavit">Certificate of Affidavit</option>
                        <option value="residency">Certificate of Residency</option>
                        <option value="business">Business Clearance</option>
                        <option value="soloparent">Solo Parent Certification</option>
                        <option value="lupa">Pagpapatunay sa Lupa</option>
                        <option value="appearance">Certificate of Appearance</option>
                        <option value="noValidID">Certificate of With no Valid ID</option>
                    </select>
                </div>


            </p>

            <p>
                Step 2: Enter valid information.
            </p>

            <p>

                <form action="connect.php" method="post">
                    <div style="text-align: left;">
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname"><br><br>
                        <label for="mname">Middle name:</label>
                        <input type="text" id="mname" name="mname"><br><br>
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname"><br><br>
                    </div>
                    
                </form>

            </p>

            <p>


                
                <div style="text-align: left;">
                    <label for="payment">Step 3: Select mode of payment:</label>
                    <select name="payment" id="payment">
                        <option value="cash">Cash on Claim</option>
                        <option value="gcash">Gcash</option>
                        <option value="paymaya">PayMaya</option>
                    </select>
                </div><br>
            
            <br>
            <div id="fileInputContainer" style="display: none;">
        <label for="paymentImage">Upload Payment Proof:</label>
        <input type="file" name="paymentImage" id="paymentImage">
    </div>


                
            </p>
            <input type="submit" name="submit">
        </section>

        <script>
        $(document).ready(function(){
            $('#payment').change(function(){
                var paymentMethod = $(this).val();
                if(paymentMethod == 'gcash' || paymentMethod == 'paymaya'){
                    $('#fileInputContainer').show();
                } else {
                    $('#fileInputContainer').hide();
                }
            });

            // Initially hide the file input container
            $('#fileInputContainer').hide();
        });
    </script>
        <p>

<html>

    