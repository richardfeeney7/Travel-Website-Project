<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Blog - Fly Away Travels - Start Bootstrap Theme</title>
      <style>#hidden,#hidden2,#hidden3{display:none;}</style>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/business-casual.css" rel="stylesheet">
      <!-- Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         th {
         background-color: #4CAF50;
         color: white;
         }
         table, th, td {
         border: 1px solid black;
         }
         table {
         width: 100%;
         }
         th {
         height: 50px;
         }
      </style>
      <script>
         function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
              myFunction(xhttp);
            }
          };
          xhttp.open("GET", "xml/european_deals.xml", true);  // Locates the img/europe_2.jpg
          xhttp.send();
         }
         function myFunction(xml) { //w3schools, youtube
          var i;
          var xmlDoc = xml.responseXML; //get the response data as XML data
          var table ="<tr> <th>Country   </th> <th>City   </th> <th>Date   </th> <th> </th> + <th>Price   </th> </tr>"; //Sets up a tanle for the list
          var x = xmlDoc.getElementsByTagName("location"); //Gets the Tag Name player and sets it in x
          for (i = 0; i <x.length; i++) { // Loops the length of x pltting name, position etc in the <td>
            table += "<tr><td>" +
            x[i].getElementsByTagName("country")[0].childNodes  [0].nodeValue +  //Add the table data
            "</td><td>" +
            x[i].getElementsByTagName("city")   [0].childNodes  [0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("date")   [0].childNodes  [0].nodeValue +
            "</td><td>" +"</td><td>" + 
            x[i].getElementsByTagName("price")  [0].childNodes  [0].nodeValue +
            "</td></tr>" ;
          }
          document.getElementById("europeanDeals").innerHTML = table; // Sets the id playerlist that is called by the <table> in the doc position
         }
      </script>
      <style type="text/css">
         p{
         text-align: justify; 
         font-style: italic;
         }
      </style>
   </head>
   <body>
      <div class="brand">Fly Away Travels</div>
      <div class="address-bar">Ballymun Town, Dublin 11</div>
      <p class ="address-bar" id="date/time"></p>
      <script>
         document.getElementById("date/time").innerHTML = Date();
      </script>
      <script type="text/javascript"
         src="https://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <!-- Navigation -->
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
               <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li>
                     <a href="index.html">Home</a>
                  </li>
                  <li>
                     <a href="packages.html">Packages</a>
                  </li>
                  <li>
                     <a href="deals.php">Deals</a>
                  </li>
                  <li>
                     <a href="comp.html">Competition</a>
                  </li>
                  <li>
                     <a href="contactPage.php">Contact</a>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <div class="container">
         <div class="row">
            <div class="box">
               <div class="col-lg-12">
                  <hr>
                  <h1 class="intro-text text-center">
                     <strong>Deals on holidays</strong>
                  </h1>
                  <hr>
                  <div class="col-lg-12 text-center">
                     <h4>European Destinations Deals
                        <br>
                        <small>2016</small>
                     </h4>
                     </br>
                     <img class="img-responsive img-border img-full" src="img/europe_2.jpg" alt="">
                  </div>
                  <p>Below is a table shown of all european holiday deals which are on offer at a relatively cheap price. For example August would be 
                     a cheap time to go abroad on a sun holiday such as Spain, as it can be expensive in June/July. Barcelona is a nice place to visit 
                     in times for August as it is a popular city, so we have an offer of 299 per person. With this discount tourists can visit 
                     Barcelona and have an amazing summer in the hot weather.
                     </br>
                     </br>
                     It is 200 euro per person to fly to cities in England such as Manchester. With this dicount tourists can fly over to manchester 
                     for a weekend in september to watch football matches live and visit the city.In Berlin there are culture events in Novemember 
                     such as jazzfest and oktoberfest.
                  </p>
                  <center><button type ="button" onclick="loadDoc()"/> European Deals </button></center>
                  <br><br>
                  <center>
                     <table id="europeanDeals"></table>
                  </center>
                  <hr>
               </div>
               <div class="col-lg-12 text-center">
                  <h4>American Destinations Deals
                     <br>
                     <small>2016</small>
                  </h4>
                  </br>
                  <img class="img-responsive img-border img-full" src="img/America.jpg" alt="">
                  <p>
                     </br>
                     If it is your first visit in America, New York City is a perfect destination for a weekend trip. See the 
                     landmark sites such as Statue of Liberty, see a broadway show live or explore more of the cities key places
                     such as wall street or central park. New York has plenty of hotel options whether your looking for a five star
                     or an old budget one, youll have plenty of options to choose from.
                     </br>
                     </br>
                     Casinos are a major tourist attraction in Las Vegas. However it is not all about gambling, for example choreographed 
                     fountains at the Bellagio 
                     are another tourist attraction for Vegas. The hotels contain indoor amusement activities which 
                     are targeted towards kids.
                     </br>
                     </br>
                     Orlando is Americas most fun tourist destination, as it is the home to Walt Disney World,Sea world and other famous theme 
                     parks such as Universal Studios. Once you all have your joy of theme parks and kids iconic heroes there are golf courses
                     and several family friendly areas for tourists to enjoy.
                     <br>
                     With our relatively low discount we invite families, students and singles to explore American soil with all our
                     discounts. We wish to ensure that tourist have an amazing experience touring America at a cheap price. We understand
                     that travelling to America can be pricy. So contact us for any firther information about travelling to different states
                     in America the choice is yours
                     </br>
                  </p>
                  <center><?php include( '/home/ubuntu/workspace/php/american.php' );?></center>
                  <hr>
               </div>
               </br>
               <hr>
               <div class="col-lg-12 text-center">
                  </br>
                  <h4>Other Destinations We offer
                     <br>
                     <small>2016</small>
                  </h4>
                  <img class="img-responsive img-border img-full" src="img/travel.jpg" alt="">
                  </br>
                  <p> 
                     Our other discount deals include destinations such as Australia, Africa etc apart from only European and American deals.
                  </p>
                  <a class="btn btn-default btn-lg" id="readMore3">Read More</a>
                  <p id="hidden3">
                     We inspire tourists to discover Australia, Africa and other continents around the globe. Australia will make tourists 
                     feel like they are at home. Tourist will be inspired by the adverts and images posted by people enjoying Australia. Australia has many
                     coastal and aquatic experiences,nature and wildlife and a good selection of food and wine. Australia produces brands of fresh wine and this
                     will be a great opportunity for tourists to travel to areas around Australia such as Sydney harbour. Australia is one of the top twenty five destinations
                     we would recommend to travel to.
                     <br>
                     Africa has many popular destinations which are family friendly and where tourists will have an execellent experience. Cape Town Central,
                     Victoria Falls, Morocco, Tunisia,Egypt Kenya etc are the most popular places to visit in Africa. Tourists will enjoy seeing victoria falls live
                     and the pyramids right before their eyes at a relatively cheap price. So why not pick one of these destinations, let your dreams come true.
                  </p>
                  <hr>
               </div>
               <div class="col-lg-12 text-center">
                  <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                  <h2>
                     <br>
                     <small></small>
                  </h2>
                  <p align="center">In order to book your low price package holidays after selecting one of the deals, call us at 01252547887.</p>
                  <hr>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <!-- /.container -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <p>Fly Away Travels 2016</p>
               </div>
            </div>
         </div>
      </footer>
      <!-- jQuery -->
      <script src="js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
      <script>
         $('#readMore').click(function() {
             $( "#hidden" ).slideToggle( "slow", "linear" );
         })
           $('#readMore2').click(function() {
             $( "#hidden2" ).slideToggle( "slow", "linear" );
         })
          $('#readMore3').click(function() {
             $( "#hidden3" ).slideToggle( "slow", "linear" );
         })
          
      </script>
   </body>
</html>