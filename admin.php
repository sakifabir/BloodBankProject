<?php include 'header.php'; ?>




<div class="container">
    <div class="welcome">
        <?php
            if(isset($_SESSION['SESS_MEMBER_ID'])) {
                echo "Welcome {$_SESSION['SESS_NAME']}";
                ?>

                <h1>Add Donor Info </h1>
                <p class="text-muted small"> Please update these info after the Donor Donate Blood</p>

                <form method="post" action="inc/donate.php">
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
                            <option>Banani</option>
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
                        <label for="age">Age</label>
                        <input name="age" type="text" class="form-control" id="age" placeholder="21">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight (KG)</label>
                        <input name="weight" type="text" class="form-control" id="weight" placeholder="70">
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>
                </form>



                <?



            } else {
                echo "Not logged in, please login first. ";
            }
        ?>

    </div>
</div>









<?php include 'footer.php'; ?>