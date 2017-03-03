<?php

require_once 'includes/database.php';

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact me</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="styles/cssPlugins.css" type="text/css" />
        <link rel="stylesheet" href="styles/main.css" type="text/css" />
        <link rel="stylesheet" href="styles/layout.css" type="text/css" />
        
        <script src="scripts/jquery lib v2.2.5.js"></script>
        <script src="scripts/jqueryvalidation-plugin v1.16.0.js"></script>
        <script src="scripts/initAll.js"></script>
        
        <script>
            $(document).ready(function(){
               $("#contactForm").validate({
                   rules: {
                       contactName: "required",
                       contactEmail: {
                                    required: true,
                                    email: true
                       },
                       contactMessage: "required"
                   },
                   messages: {
                       contactName: "please enter your name above",
                       contactEmail: {
                                    required: "please enter email address",
                                    email: "please enter valid email addresss"
                       },
                       contactMessage: "please enter a message to send"
                   }
               });
               
            });
        </script>
    </head>
    <body>
        <div id="contact" class="w3-animate-left">
            <div class="navbar navbar-fixed-top" id="nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuItems">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="background: #06aae8;"></span>
                            <span class="icon-bar" style="background: #06aae8;"></span>
                            <span class="icon-bar" style="background: #06aae8;"></span>
                            <span class="icon-bar" style="background: #06aae8;"></span>
                        </button> 
                    </div>
                    <div class="navbar-collapse collapse" id="menuItems">
                        <div id="aboutnavWrap">
                            <ul class="nav navbar-nav" id="navItems">
                                <li><a href="index.html"><i class="fa fa-home"></i> HOME</a></li>
                                <li><a href="about.html"><i class="fa fa-user"></i> ABOUT ME</a></li>
                                <li><a href="services.html"><i class="fa fa-list"></i> SERVICES</a></li>
                                <li><a href="portfolio.html"><i class="fa fa-briefcase"></i> PORTFOLIO</a></li>
                                <li class="selected"><a href="#contact"><i class="fa fa-envelope"></i> CONTACT ME</a></li>
                            </ul> 
                            <ul class="nav navbar-right" id="searchNav">
                                <li>
                                    <form action="" method="get" class="navbar-form" role="search">
                                    <div class="form-group">
                                      <span class="fa fa-search" id="searchBtn"></span>  
                                      <input type="text" class="form-control hide" placeholder="Search..." id="search">
                                      
                                    </div>
                                    </form>
                                </li>    
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="contactWrap">
                    <div class="row">
                        <div class="col-sm-7 col-md-8 col-lg-8" id="contactWrap2">
                            <h1>CONTACT FORM</h1>
                            <div class="w3-card-4">
                                <div class="contactForm">
                                    <form id="contactForm" action="" method="post" name="contactForm">
                                        <div class="form-group">
                                            <label for="contactName">Name <span class="require">*</span></label>
                                            <input type="text" name="contactName" class="form-control required" id="contactName">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactEmail">Email <span class="require">*</span></label>
                                            <input type="text" name="contactEmail" class="form-control required email" id="contactEmail">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactSubject">Subject</label>
                                            <input type="text" name="contactSubject" class="form-control" id="contactSubject">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactMessage">Message <span class="require">*</span></label>
                                            <textarea id="contactMessage"  class="form-control required" name="contactMessage"></textarea>
                                        </div>
                                        <button class="btn w3-ripple" id="contactbtn">SEND MESSAGE</button>
                                        <span id="loader"><img src="img/loading.gif"</span>
                                    </form>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-4 col0lg-4">
                            <h4>Address and Phone</h4>
                            <P><address>ASSBIFI HOUSE: 4, ASSBIFI Road, Alausa CBD, Ikeja, Lagos.</address></P>
                            <p>+234 0706 051 1748 | kennylevi@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
               <p class="scrolldown"><a href="index.html"><i class="fa fa-chevron-left"></i></a></p>  
        </div>
        
        
        <script src="scripts/bootstrap.js"></script>
    </body>
</html>
