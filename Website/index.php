<?php
if(isset($_GET['user']))
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    
    <title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="styles/home_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <div id="home" class="wrapper">
            
            <script>
                $("#home").fadeIn(4000);
            </script>

            <div class="logo_picture">
                <img src="styles/images/logo.png" alt="Logo">
                
                <?php if(isset($_GET['user'])) { ?>
                    <p>Hello <?php echo $_SESSION['name'] ?></p>
                    <a href="#about">About</a>
                <?php } else { ?>
                    <p>Hello Guest<p>
                    <a href="#about">About</a>
                <?php } ?>
            
            </div>
            
            <div class="logo">
                <h1 class="logo">Muffin Games</h1>
            </div>
            
            <div class="menu">
                <ul class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="https://www.google.com/search?q=games" target="_blank">Games</a></li>
                
                    <?php if(isset($_GET['user'])) { ?>
                        <li><p>Hello <?php echo $_SESSION['name']; ?></p></li>
                        <li><a href="logout.php">Logout</a><li>
                    <?php } else { ?>
                        <li><a href="loginPage.php">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
            
            <div id="about" class="text">
                <h1>About Me:</h1>
                <p>Im a game developer who realy loves to create game for fun and i hope my games will be ok </p>
                <a href="#home">Home</a>
            </div>
            
        </div>
    
    </header>
    <script type="text/javascript" src="smooth.js"></script>
    <script>
        $("body").on('click', '.logo', function() {
            document.getElementById('home').scrollIntoView(0);
        });
    </script>
</body>
</html>
