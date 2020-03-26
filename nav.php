<?php 
    echo
    '
    <nav>
        <div class="logo"><a href="index.php"><img src="logo.jpg" alt="GameLab" id="limg"></a></div>
            <ul class="navlinks">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about-us.php">About</a>
                </li>
                <li>
                    <a href="#">Community</a>
                </li>
            </ul>

            <ul class="navlinks">
                <li>
                    <a href="signin.php" id="sc">Sign in</a>
                </li>
                <li>
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
            </ul>
    </nav>
    '
    
?>