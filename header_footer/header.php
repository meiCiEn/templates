<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="" />
    <title>Header</title>
</head>

<body>
    <header>
        <a id="top"></a>
        <div>
            <!--flex-->
            <div id="navbar">
                <div id="logo-wrapper">
                    <a href="#top"></a>
                    <a href=""><img id="logo" src="" alt="" /></a>
                    <!--link back to homepage-->
                </div>
                <nav id="navbar">
                    <ul>
                        <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == "#") echo "id='active'" ?>>Menu 1</a></li>
                        <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == "#") echo "id='active'" ?>>Menu 2</a></li>
                        <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == "#") echo "id='active'" ?>>Menu 3</a>
                        </li>
                        <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == "#") echo "id='active'" ?>>Menu 4</a></li>
                    </ul>
                </nav>
            </div>
            <div id="top-navigation">
                <div class="burger-wrapper">
                    <div class="burger">
                        <span></span>
                    </div>
                    <nav id="menu">
                        <?php if ($_SERVER['PHP_SELF'] == "#") 
                        { echo '<ul id="mobile-menu">
                                <li id="active">Menu 1</li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#">Menu 3</a></li>
                                <li><a href="#">Menu 4</a></li>
                            </ul>';} 
                            elseif ($_SERVER['PHP_SELF'] == "#") 
                            { echo '<ul id="mobile-menu">
                                <li id="active">Menu 2</li>
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 3</a></li>
                                <li><a href="#">Menu 4</a></li>
                            </ul>';} 
                            elseif ($_SERVER['PHP_SELF'] == "#") 
                            { echo '<ul id="mobile-menu">
                                <li id="active">Menu 3</li>
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#">Menu 4</a></li>
                            </ul>';} 
                            elseif ($_SERVER['PHP_SELF'] == "#") 
                            { echo '<ul id="mobile-menu">
                                <li id="active">Menu 4</li>
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#">Menu 3</a></li>
                            </ul>';}
                            
                            ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script src="burger.js"></script>

</body>

</html>