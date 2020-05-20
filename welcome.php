<link rel="shortcut icon" href="img/fav.png">
<div class="menutop-wrap">
    <div class="menu-top container">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (!empty($_SESSION["email"])) {

                if ($_SESSION["role"] == "seller") {
                    echo "<ul class=\"list\"  >";
                    echo " <li><a href='http://localhost/realestate/index.php#home'>";
                    echo "Welcome   " . $_SESSION["fullname"];
                    echo "</li> </a></ul>";
                    echo "<ul class=\"list\" >";
            ?>
                    <li>
                        <form name="cairo" method="post" action="viewProfile.php" id="cform">
                            <a href="javascript:{}" onclick="document.getElementById('cform').submit();"> My Profile
                                <input type="hidden" name="ID" value="<?php echo $_SESSION["ID"]; ?>">
                            </a>
                        </form>
                    </li>

            <?php
                    echo "<li> <a href='http://localhost/realestate/seller/myprop.php'>My properties ";
                    echo "</li> </a>";
                    echo "<li> <a href='http://localhost/realestate/seller/requested.php'>Requests ";
                    echo "</li> </a>";
                    echo "<li> <a href='http://localhost/realestate/Account/signout.php'>Sign Out";
                    echo "</li></a></ul>";
                } else if ($_SESSION["role"] == "buyer") {
                    echo "<ul class=\"list\"  >";
                    echo " <li><a href='http://localhost/realestate/index.php#home'>";
                    echo "Welcome   " . $_SESSION["fullname"];
                    echo "</li> </a></ul>";
                    echo "<ul class=\"list\" >";
                    echo "<li> <a href='seller/sellerprofile.php'>My Profile";
                    echo "</li> </a>";

                    echo "<li> <a href='http://localhost/realestate/buyer/requestprop.php'>My Requests ";
                    echo "</li> </a>";

                    echo "<li> <a href='http://localhost/realestate/Account/signout.php'>Sign Out";
                    echo "</li></a></ul>";
                } else if ($_SESSION["role"] == "admin") {
                    echo "<ul class=\"list\"  >";
                    echo " <li><a href='http://localhost/realestate/index.php#home'>";
                    echo "Welcome   " . $_SESSION["fullname"];
                    echo "</li> </a></ul>";
                    echo "<ul class=\"list\" >";
                    echo "<li> <a href='profile.php'>My Profile";

                    echo "</li> </a>";
                    echo "<li> <a href='http://localhost/realestate/Account/signout.php'>Sign Out";
                    echo "</li></a></ul>";
                }
            } else {
                echo "<ul class=\"list\" >";
                echo "<li> <a href='#'> Welcome ";
                echo "</li></a>";
                echo "<li> <a href='#'> +12312-3-1209";
                echo "</li></a>";
                echo "<li><a href='account/login.php'>Login / Register";
                echo "</li></a></ul>";
            }
            ?>
        </div>
    </div>
</div>