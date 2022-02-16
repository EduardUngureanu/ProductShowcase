<?php
    session_start();
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css" rel="stylesheet">

    <title>Product presentation</title>
</head>

<body>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <?php
                    if(isset($_SESSION["user_id"]))
                    {
                        echo '<a>Username: ' . $_SESSION["user_name"] .'</a>';
                        echo '<a href="logout.php">Logout</a>';
                    }
                    else
                    {
                        echo '<a>Not logged in</a>';
                        echo '<a href="login_page.php">Login</a>';
                    }
                ?>
            </div>
        </div>
        <a href="index.php">Product</a>
        <a href="contacts.php">Producer contacts</a>
    </div>

    <main class="container">

        <!-- Left Column -->
        <div class="left-column">
            <div class="slideshow">

                <div class="mySlides">
                    <img src="images/kama-mecanica-1.jpg">
                </div>
             
                <div class="mySlides">
                    <img src="images/kama-mecanica-2.jpg">
                </div>
             
                <div class="mySlides">
                    <img src="images/kama-mecanica-3.jpg">
                </div>
                
                <div class="mySlides">
                    <img src="images/kama-mecanica-4.jpg">
                </div>
                
                <div class="mySlides">
                    <img src="images/kama-mecanica-5.jpg">
                </div>
                
                <div class="mySlides">
                    <img src="images/kama-mecanica-6.jpg">
                </div>
            
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
             
               <!-- Thumbnail images -->
                <div class="row">
                    <div class="column">
                        <img class="thumnbail cursor" src="images/kama-mecanica-1.jpg" style="width:100%" onclick="currentSlide(1)">
                    </div>
                    <div class="column">
                        <img class="thumnbail cursor" src="images/kama-mecanica-2.jpg" style="width:100%" onclick="currentSlide(2)">
                    </div>
                    <div class="column">
                        <img class="thumnbail cursor" src="images/kama-mecanica-3.jpg" style="width:100%" onclick="currentSlide(3)">
                    </div>
                    <div class="column">
                        <img class="thumnbail cursor" src="images/kama-mecanica-4.jpg" style="width:100%" onclick="currentSlide(4)">
                    </div>
                    <div class="column">
                        <img class="thumnbail cursor" src="images/kama-mecanica-5.jpg" style="width:100%" onclick="currentSlide(5)">
                    </div>
                    <div class="column">
                        <img class="thumnbail cursor" src="images/kama-mecanica-6.jpg" style="width:100%" onclick="currentSlide(6)">
                    </div>
                </div>

             </div>
        </div>

        <!-- Right Column -->
        <div class="right-column">
            <div class="product-info">

                <div class="spacer"></div>
                <span>Mechanical keyboard</span>

                <h1>Redragon Kama RGB</h1>

                <div class="divider"></div>
                <h2>Description</h2>
                <div class="divider"></div>
                <p>A high quality led backlight mechanical keyboard designed for gaming. It has integrated n-key rollover designed to prevent key conflicts and missed keystrokes. Comes with a macro record function, with 2 input speeds. The WIN key can be disabled for uninterupted gaming.</p>
                <p>The RGB backlight comes with 6 themes and 18 total configutations for the lightshow, all with adjustable speeds and luminosity. All can be configured through the use of special keys or the Redragon app.</p>
                <p>Durable and reasonably priced, built with high quality materials, an amazing keyboard for anyone looking to have a great gaming experience.</p>
                <p>The Redragon K578 RGB Backlit Mechanical Gaming Keyboard offers the perfect blend of features, functionality durability and comfort at a fantastic value for any serious gamer.</p>

                <div class="divider"></div>
                <h2>Feature list</h2>
                <div class="divider"></div>
                <ul>
                    <li>104 Double-shot injection molded keycaps </li>
                    <li>RGB backlit keys for razor sharp lighting that doesn't scratch off</li>
                    <li>Durable ABS Keyboard Base </li>
                    <li>All 104 keys are 100% conflict free, anti-ghosting</li>
                    <li>Custom mechanical switches (Cherry Brown Switches  equivalent) </li>
                    <li>18 backlighting effects, 9 different colors</li>
                    <li>5 different Brightness Levels, multiple breathing modes </li>
                    <li>12 Multimedia keys combined with FN keys</li>
                    <li>WIN key can be disabled</li>
                    <li>Adjustable rear feet for the perfect typing angle</li>
                    <li>For Windows 10, Windows 8, Windows 7, Windows Vista, and Windows XP</li>
                    <li>Keyboard dimensions: 17.52x5.22x1.1inches, Weight: 38.3oz</li>
                </ul>

                <div class="divider"></div>
                <h2>Techical Specifications</h2>
                <div class="divider"></div>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>Redragon Kama RGB Mechanical Gaming Keyborad</td>
                    </tr>
                    <tr>
                        <td>Manufaturer model</td>
                        <td>K578RGB-BK</td>
                    </tr>
                    <tr>
                        <td>Form factor</td>
                        <td>Full</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <td>Numeric keys</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Connection</td>
                        <td>Wired</td>
                    </tr>
                    <tr>
                        <td>Interface</td>
                        <td>USB</td>
                    </tr>
                    <tr>
                        <td>Mechanical keyboard</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Switches</td>
                        <td>Outemu Blue</td>
                    </tr>
                    <tr>
                        <td>Palm rest</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Keyboard layout</td>
                        <td>US</td>
                    </tr>
                    <tr>
                        <td>Iluminated</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>LED color</td>
                        <td>RGB</td>
                    </tr>
                </table>

                <div class="divider"></div>
                <h2>Links</h2>
                <div class="divider"></div>
                <a href="https://www.redragonzone.com/collections/keyboard/products/redragon-k578-rgb-gaming-mechanical-keyboard">Redragon product page.</a><br>
                <a href="https://cdn.shopify.com/s/files/1/2695/9506/files/Redragon_K578BR_RGB_software.zip?129">Official software download.</a>
            </div>

        </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var thumnbails = document.getElementsByClassName("thumnbail");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < thumnbails.length; i++) {
              thumnbails[i].className = thumnbails[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          thumnbails[slideIndex-1].className += " active";
        }
        </script>
    </main>
</body>
</html>