<?php include 'header.php'; ?>

    <!--slider sec-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8 sexy_nurese ">
                    <div class="slider_wrapper">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/slider/slide(3).jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1>Caption Here</h1>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider/slide(4).jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1>Caption Here</h1>
                                    </div>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 ">
                    <div class="pull-right sexy_nurese" href="#"><img src="images/nurse.png" alt=""/></div>
                </div>
            </div>
        </div>
    </section>

    <!--top rated donor-->
    <section class="main_contents" id="app_view_normal">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Top Donor's List</h1>


                    <div class="list-group">
                        <?php
                        $i = 0;
                        $sql = "SELECT * from donor_info, blood_info WHERE donor_info.DNR_ID = blood_info.DNR_ID ORDER BY `blood_info`.`BLOOD_AMOUNT` DESC ";

                        $result = mysql_query($sql, $bd);

                        for($x = 0; $x < 4; $x++){
                            if($res_row = mysql_fetch_array($result)){
                                ?>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading"><?php echo $res_row['DNR_NAME']; ?></h4>
                                    <p class="list-group-item-text text-muted">Donated: <?php echo $res_row['BLOOD_AMOUNT']; ?> Litre</p>
                                </a>
                                <?
                                }
                            }
                        ?>

                    </div>
                </div>
                <!--near by area -->
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Nearby You</h1>
                    <div class="nearby_point">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                    <span class="caption" style="color: #ffffff">
                                        <h2>Mohakhali</h2>
                                        <p>Reserved Blood: <?php $res_row = mysql_fetch_array(mysql_query("SELECT SUM(BLOOD_AMOUNT) FROM blood_info WHERE blood_info.branch_name = 'Mohakhali'", $bd));  echo $res_row[0] > 0 ? $res_row[0] : 0 ; ?> Litre</p>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                    <span class="caption" style="color: #ffffff">
                                        <h2>Banani</h2>
                                        <p>Reserved Blood: <?php $res_row = mysql_fetch_array(mysql_query("SELECT SUM(BLOOD_AMOUNT) FROM blood_info WHERE blood_info.branch_name = 'Banani'", $bd)); echo $res_row[0] > 0 ? $res_row[0] : 0 ; ?> Litre</p>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                    <span class="caption" style="color: #ffffff">
                                        <h2>Dhanmondi</h2>
                                        <p>Reserved Blood: <?php $res_row = mysql_fetch_array(mysql_query("SELECT SUM(BLOOD_AMOUNT) FROM blood_info WHERE blood_info.branch_name = 'Dhanmondi'", $bd)); echo $res_row[0] > 0 ? $res_row[0] : 0 ; ?> Litre</p>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="images/slider/slide%20(1).png" alt=""/>
                                    <span class="caption" style="color: #ffffff">
                                        <h2>Gulshan</h2>
                                        <p>Reserved Blood: <?php $res_row = mysql_fetch_array(mysql_query("SELECT SUM(BLOOD_AMOUNT) FROM blood_info WHERE blood_info.branch_name = 'Gulshan'", $bd)); echo $res_row[0] > 0 ? $res_row[0] : 0 ; ?> Litre</p>
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--about us-->
    <section class="main_contents" id="app_view_about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h1>Necessary to Know</h1>

                    <p>About us</p>
                </div>
            </div>
        </div>
    </section>

    <!--contact us-->
    <section class="main_contents" id="app_view_contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <h1>Necessary to Know</h1>

                    <p>Contact us</p>
                </div>
            </div>
        </div>
    </section>

    <!--Donate-->
    <section class="main_contents" id="app_view_donate">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Request for Blood</h1>
                    <p class="bg-success" style="padding: 10px">
                        <span>We are now serving total </span><?php $res_row = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM blood_request", $bd)); echo $res_row[0]; ?> <span> Requests</span>
                    </p>
                    <p class="text-muted small">Please fill up all these information (Only for record) </p>

                    <form method="post" action="inc/request_blood.php">
                      <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Kader Molla">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="kader@mail.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Address</label>
                        <textarea name="address" class="form-control" rows="2"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Phone</label>
                        <input name="phone" type="tel" class="form-control" id="exampleInputEmail" placeholder="017211818310">
                      </div>
                      <div class="form-group">
                        <label for="area">Area</label>
                        <select name="area" class="form-control" id="area">
                          <option>Mohakhali</option>
                          <option>Motijheel</option>
                          <option>Dhanmondi</option>
                          <option>Bonani</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="bloodgroup">Blood Group</label>
                        <select name="group" class="form-control" id="bloodgroup">
                          <option>Not Tested</option>
                          <option>AB+</option>
                          <option>AB-</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>O+</option>
                          <option>O-</option>

                        </select>
                      </div>

                        <div class="form-group">
                            <label for="amount">Blood Amount</label>
                            <p class="text-muted small">The Unit of Blood Amount is Litre. Just input a number</p>
                            <input name="amount" type="text" class="form-control" id="amount" placeholder="2">
                        </div>

                        <div class="form-group">
                            <label for="hospital">Hospital Name</label>
                            <input name="hospital" type="text" class="form-control" id="hospital" placeholder="Ibn Sina Hospital, Dhaka">
                        </div>


                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>

                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h1>Necessary things to Know</h1>
                    <div class="who_can">
                        <img class="img-responsive" src="images/who.jpg">
                    </div>

                    <section>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <h1>Blood Donors Must</h1>
                                <p class="bg-warning" style="padding: 1px">
                                    <ul class="bg-danger" style="padding: 30px; font-size: 18px;">
                                        <li>Be in good general health and feeling well*</li>
                                        <li>Be at least 17 years old</li>
                                        <li>Be at least Male - 5'1" || Female - 5'5"</li>
                                        <li>Weigh at least Male - 130 lbs || Female - 150 lbs</li>
                                        <li>You may Donate Blood Every 112 days, up to 3 times / year</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>



<?php include 'footer.php'; ?>