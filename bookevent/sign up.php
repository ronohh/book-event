<!DOCTYPE html>
<html>
    <head>
        <title>
     sign up
        </title>
        <link rel="stylesheet" href="style.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <section class="header" >
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="sign up.php" >GET STARTED</a></li>
                    </ul>
                </div>

                </nav>

                <div class="sign-up">
                    <form   action="database.php" method="POST">
                    <label>Name</label><br>
                    <input type="text" name="name" required><br>

                    <label>Email</label><br>
                    <input type="text" name="email" required><br>

                    <label>Id number</label><br>
                    <input type="text" name="IdNumber" required><br>

                    <label>Password</label><br>
                    <input type="text" name="password" required><br>

                    <button class="button">submit</button><br>

                        <p>already have an account</p>

                    <button id="submit" name="submit" class="button"><a href="login.php" >login</a></button>
                
                    </form>
                </div>
                    

                
                </section>

                </body>

                </html>
                