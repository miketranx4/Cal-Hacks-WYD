<!DOCTYPE html>
<html lang="en">
<link rel="SHORTCUT ICON" href="assets/img/favicon.png">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Whatyoudoing? | WYD</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- Navbar -->
    
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
          <img src="assets/img/wyd.png" alt="some_text"></a>
        </div>
        <div class="navbar-brand navbar-right" href="index.html" id="test1" style="padding-left:50px;">
          <img src="assets/img/cal.png" alt="some_text">
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav ">
                <li>
                    <button type="button" class="btn btn-default" data-toggle="modal" href="#myModal" id="nav-button">
                        LOG IN
                    </button>
                </li>
                    <button type="button" class="btn btn-default2" data-toggle="modal" href="#myModal2" id="nav-button2">
                        SIGN UP
                    </button>
                </ul>
                
        </div>
        
            </div><!--/.nav-collapse -->

    </div>

    
	
    <!-- Body -->
    <div class="container" id="app">
         
        <div class="row" style="padding-top:25px;">
            <div class="col-md-9">
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">x</button>
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/wyd.png" alt="some_text">
                            </a>
                            <!-- <h3>Login to WYD</h3> -->
                        </div>
                        <div class="modal-body">
                            <form method="post" action='' name="login_form">
                                <p><input type="text" class="input-block-level" name="id" id="search" placeholder="Email"></p>
                                <p><input type="password" class="input-block-level" name="passwd" id="search" placeholder="Password"></p>
                                <p><button type="submit" class="btn btn-primary">Sign in</button>
                                &nbsp <a href="#" style="color:#f89904">Forgot Password?</a>
                                </p>
                            </form>
                        </div>
                        <div class="modal-footer">
                            Don't have an account? &nbsp
                            <a href="#" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">x</button>
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/wyd.png" alt="some_text">
                            </a>
                            <!-- <h3>Login to WYD</h3> -->
                        </div>
                        <div class="modal-body">
                            <form method="post" action='' name="login_form">
                                <p>Please enter an email address</p>
                                <p><input type="text" class="input-block-level" name="id" id="search" placeholder="Email"></p>
                                <p><input type="text" class="input-block-level" name="id" id="search" placeholder="Display name (optional)"></p>
                                <p>Please create a password</p>
                                <p><input type="password" class="input-block-level" name="passwd" id="search" placeholder="Password"></p>
                                <p><input type="password" class="input-block-level" name="passwd" id="search" placeholder="Re-enter Password"></p>
                                <p><button type="submit" class="btn btn-primary">Register</button>
                                </p>
                            </form>
                        </div>
                        <div class="modal-footer">
                            Already have an account? &nbsp
                            <a href="#myModal" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
                <br>
                <img src="assets/img/map.png" height="500" width="800" style="padding-bottom:40px;padding-top:20px"> 
                <br>
            </div>
            
            <div class="col-md-3">
                <div class="row">
                     <div class="list-group" style="padding-top:100px;">
                        
                        <a href="#" class="list-group-item-active">
                            The App
                        </a>
                        <a href="#what" class="list-group-item">
                            What is it?
                        </a>
                        <a href="#how" class="list-group-item">
                            How it works?
                        </a>
                        <a href="#aboutwrap" class="list-group-item">
                            The Team
                        </a>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                <p>In the mood to meet someone new?</p>
                <button class="btn btn-default3" data-toggle="modal" href="#myModal">
                    GO ONLINE
                </button>

                </div>
                
            </div> <!-- /.column -->
        </div>
    </div>
    <div id="what">
        <div class="container">
            <div class="row" >
                <br>
                <h1>"Meet, talk, chill & learn"</h1>
                <hr>
                <div class="row">
                    <div class="col-md-7">
                        <p>In an era where a majority of human interaction takes place behind the screen, WYD (i.e., what’re you doing?) is a web application that aims to reconnect people through direct, in-person interaction. </p>
                        <p>The application enables users to connect with each other, within a specified proximity, where users are looking for refreshing new conversations, someone to share their life theories with, someone to receive unbiased feedback from or just someone to keep them company during a study break or meal. 
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>RECONNECT</b> and <b>COLLABORATE</b> with your fellow bears</p>
                            </div>
                            <div class="col-md-6">
                                <p><b>DISCOVER</b> Cal through the eyes of others</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>CREATE</b> connections both professionally and personally</p>
                            </div>
                            <div class="col-md-6">
                                <p><b>MAXIMIZE</b> your social activity even through a lunch buddy</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <img src="assets/img/talk2.png" alt="some_text">
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    <div id="how">
        <div class="container">
            <div class="row" >
                <br>
                <h1>Four simple steps</h1>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/step1.png" alt="some_text">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/step2.png" alt="some_text">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/step3.png" alt="some_text">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/step4.png" alt="some_text">
                    </div>
                </div>
                <br>
            </div>
        </div>
        <br>
    </div>
    <div class="container" id="aboutwrap">
        <div class="row" >
            <br>
            <h1>The Team</h1>
            <hr>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="he-wrap tpl6">
                <img src="assets/img/brendan.jpg" height="262" width="262">     
                </div><!-- he wrap -->
                <h4>Brendan Hu</h4>
                <h5 class="ctitle">DEVELOPER</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->

            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="he-wrap tpl6">
                <img src="assets/img/abhinav.jpg" height="262" width="262">      
                </div><!-- he wrap -->
                <h4>Abhinav Rai</h4>
                <h5 class="ctitle">FRONT-END DEVELOPER</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->

            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="he-wrap tpl6">
                <img src="assets/img/michael.jpg" height="262" width="262">      
                </div><!-- he wrap -->
                <h4>Michael Tran</h4>
                <h5 class="ctitle">DEVELOPER</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->

            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="he-wrap tpl6">
                <img src="assets/img/jesar.jpg" height="262" width="262"> 
                </div><!-- he wrap -->
                <h4>Jesar Shah</h4>
                <h5 class="ctitle">BUSINESS ANALYST</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->    
        </div>
    </div>
        <div class="row">
        </div>

	
	</row>
	</body>
    </div>
    <br><br>
    <footer id="footer" class="top-space">

        <div class="footer2">
            <div class="container">
                <div style="text-align:right; color:#d8d9d9">
                Copyright &copy; 2014, WYD.
                </div>
            </div>
        </div>
    </footer> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/Chart.js"></script>

</html>
