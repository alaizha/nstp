<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
    <link rel = "stylesheet" href = "stylesheet.css"/>
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
                <li><?php echo '<a href="/">HOME</a>'; ?></li>
                <li><?php echo '<a href="/login">LOG OUT</a>'; ?></li>
            </ul>
        </nav>
        <h1 class= "Title">CLICK</h1>
        <h4 class= "Subtitle">Community Logistics Integration for Coordinated Kiosks</h4>
    </header>
        <section class = "content container">
            <h2 class= "HOME">ABOUT</h2>
            <img class="Bard" src= "/poblacionLogo.png">

            <p>
                Many individuals face significant challenges when trying to obtain essential certificates like 
indigency, residency, and barangay clearance. This process can be especially burdensome and 
time-consuming for those who no longer reside in the barangay. These certificates are crucial for 
job applications and establishing one's identity. Unfortunately, delays in receiving these forms only 
add frustration for the residents of a certain barangay. 
To address these issues, the proponents proposed the CLICK project: Community Logistics 
Integration for Coordinated Kiosks. With CLICK, residents can easily submit their requests from 
almost anywhere, aiming to modernize and streamline the current operation. By reducing 
paperwork and waiting times, we hope to alleviate the burdens associated with service requests. 
Community Logistics Integration for Coordinated Kiosks (CLICK) aims to strengthen 
community ties by implementing a centralized requisition form system. By simplifying procedures, 
we seek to enhance efficiency and foster a collective sense of accountability among community 
members. This website will serve as a user-friendly platform for residents to submit and track their 
requests, promoting transparency and facilitating immediate updates on resource allocation within 
the community. 
</p>

<p>
The Community Logistics Integration for Coordinated Kiosks (CLICK) project, originating 
from a recognized necessity within the Poblacion, Baco community in Oriental Mindoro, aims to 
modernize and simplify the process of accessing essential forms and services from local barangay 
offices. Historically, citizens have encountered difficulties in obtaining requisition forms and 
certificates due to inefficiencies in traditional paper-based methods. These challenges often lead 
to extended wait times and administrative hurdle
            </p>
</section>

<footer class="main-footer">
    
    <h4></h4>
</footer>
<html>
        
    