<?php
require "header.php";
?>
<main>
        <div class="container">
            <div class="color-xs-6">
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="uid" placeholder="Username" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="CGPA/GPA">CGPA</label>
                    <input type="text" name="CGPA" placeholder="CGPA" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="ScholarNo.">ScholarNo</label>
                    <input type="text" name="ScholarNo" placeholder="ScholarNo" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pwd" placeholder="Password" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pwd-repeat" placeholder="Password-Repeat" class ="form-control">
                    </div>
                    <button type="submit" name="signup-submit" class ="form-control">Signup</button>  
                </form>
            </div>
        </div>
        
    </form>
</main>
<?php
require "footer.php";
?>