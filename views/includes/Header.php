<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>

<div class = "tabcontent">
    <p class = "detail">
        Pro<span class = "book">-Book</span>
    </p>
    <div class = "hi-username">
        Hi, <?php echo $_COOKIE['username'];?>
    </div>
    <a href="<?php echo Config::APP_URL . '/Controller/LogoutController.php' ?>">
        <button class="logout" type="submit" ><i class = "fas fa-power-off" style = "font-size : 25px";></i></button>
    </a>
</div>
<div class="navbar">
    <a href="Search.php" <?php if ($_SESSION['page']==='Search') {echo "class='active'";}?> >
        B<span class="navname">ROWSE</span>
    <a id="history" href="History.php" <?php if ($_SESSION['page']==='History') {echo "class='active'";}?> >
        H<span class="navname">ISTORY</span>    
    </a> 
    <a href="Profile.php" <?php if ($_SESSION['page']==='Profile') {echo "class='active'";}?>>
        P<span class="navname">ROFILE</span>    
    </a> 
</div>

    