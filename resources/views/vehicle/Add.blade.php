@extends("layouts.app")

@section("content")
    <br>

    <img src="img/clients-sanasa.png" alt="SANASA Logo" width="130px" height="150px" style="margin-left:225px; margin-top:30px;">

    <h1 style="color:#0092df; font-family:Cambria; font-size:50px; font-style:oblique; font-weight:bold; margin-left:50px; margin-top:10px; text-shadow:-1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, 1px 1px 0 #ffffff;">SANASA Water Billing</h1>

    <div class="container">
        <div id="loginbox" style="margin-top:30px; margin-left:-50px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info"  style="background:url(img/water-flow-pipe3.jpg); background-size:cover; border:1px solid black;">
                <div class="panel-heading" >
                    <div class="panel-title">Sign In</div>

                </div>

                <div style="padding-top:30px;" class="panel-body" >

                    <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form action="process.php" method="post">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="username" value="" placeholder="username">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div> <!-- /container -->

    <img src="img/logo_new.png" alt="SANASA Logo" width="75px" height="105px" style="margin-left:1270px; margin-top:-40px;">

    <div style="position:absolute; bottom:0px; right:330px; color:black;">
        <p > <strong > Copyright © 2021 SINHATECH IT Solutions | Water Billing System v1.0 (1366 X 768 Mozilla 3.5 or above) </strong></p>

        <script src="js/ie10-viewport-bug-workaround.js"></script>


    </section>



@endsection

