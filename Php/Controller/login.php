<?php
include("functions.php");
include("login-process.php");
include("header.php");
?>

<div id="page-content-wrapper">
    <div class="container-fluid">
        <form class="" action="login.php" method="post">
                    <div>
                        <label for="input-user">User:</label>
                        <input type="text" name="userName"
                            placeholder="Waka"
                            id="input-user">
                    </div>

                    <div>
                        <label for="input-password">Password:</label>
                        <input type="password" name="password"
                            placeholder="password"
                            id="input-password">
                    </div>

                    <button type="submit">Login</button>

            </form>
    </div>

</div>


<?php
include("footer.php");
?>
