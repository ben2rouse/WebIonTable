<!DOCTYPE html>
<html>
<head>
    <title>Ions</title>
    <style>
        html {
            background-color: black;
        }

        .small {
            width: 25px;
            height: 25px;
        }

        #periodic {
            border-collapse: collapse;
            margin: auto;
            border-bottom: 1px solid black;
            font-size: 12px;

        }

        #periodic th, #periodic td {
            border: 2px solid black;
            height: 75px;
            width: 75px;
            text-align: center;
        }

        .highlight {
            border: 2px solid red;
            padding: 5px;
        }

        .group {
            /* background-color: #ccc; */
            color: white;
            font-size: 20px;
        }

        .blue {
            background-color: #6699ff;
            /* background-color: white; */
            border: 10px solid blue;
        }

        .yellow {
            background-color: #ffff66;
        }

        .faded {
            /* opacity: 25%; */
            background-color: lightgray;
            color: grey;
        }

        .image {
            width: 40px;
            height: 40px;
        }

        .text-content, .text-content-complex {
            display: none;
        }

        img {
            display: inline;
        }

        #toggle, #toggle-complex, #all, #button1, #button2, #button3{
            font-size: 10px;
            border-radius: 5px;
        }

        .complex {
            height: 40px;
        }

        .extraIons {
            border: 2px solid white;
            height: 50px;
            width: 50px;
            text-align: center;
        }

        #complex1, #complex2, #complex3 {
            display: none;
        }

        #pop-up {
            position: fixed;
            border: 1px solid white;
            width: 430px;
            height: 400px;
            background-color: orange;
            padding: 5px;
            padding-left: 60px;
            padding-right: 60px;
            color: white;
            z-index: 1000;
            display: none;
            border-radius: 10px;

            top: 50%;
            left: 50%;
            margin-top: -250px; /* Negative half of height. */
            margin-left: -275px; /* Negative half of width. */
        }

        #popUpCloseButton {
            font-size: 20px;
            border-radius: 5px;
            background-color: black;
            color: white;
            border: orange;
        }

        #popUpCloseButton:hover {
            background-color: white;
            color: black;
        }
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // When the page loads, it sends a pop up message explaining how the page works
        window.onload = function() {
            // Displays the pop up
            document.getElementById("pop-up").style.display = "block";
            document.body.style.overflow = "hidden";
            // makes all other elements opactiy 25% while the pop up is open
            document.getElementById("periodic").style.opacity = "25%";
            document.getElementById("heading").style.opacity = "25%";
            document.getElementById("complexDecision").style.opacity = "25%";
            document.getElementById("allComplex").style.opacity = "25%";
            document.getElementById("complex1").style.opacity = "25%";
            document.getElementById("complex2").style.opacity = "25%";
            document.getElementById("complex3").style.opacity = "25%";

            // Makes all other elements not clickable while the pop up is open
            document.getElementById("periodic").style.pointerEvents = "none";
            document.getElementById("heading").style.pointerEvents = "none";


            // If the user clicks anywhere outside the popup or clicks the button with id of popUpCloseButton, the popup closes
            window.onclick = function(event) {
                if (event.target != document.getElementById("pop-up") || event.target == document.getElementById("popUpCloseButton")) {
                    document.getElementById("pop-up").style.display = "none";
                    document.body.style.overflow = "auto";
                    document.getElementById("periodic").style.opacity = "100%";
                    document.getElementById("heading").style.opacity = "100%";
                    document.getElementById("complexDecision").style.opacity = "100%";
                    document.getElementById("allComplex").style.opacity = "100%";
                    document.getElementById("complex1").style.opacity = "100%";
                    document.getElementById("complex2").style.opacity = "100%";
                    document.getElementById("complex3").style.opacity = "100%";
                    document.getElementById("periodic").style.pointerEvents = "auto";
                    document.getElementById("heading").style.pointerEvents = "auto";
                }
            }

        }


        var toggle = false;

        $(document).ready(function() {
            $(".toggle-cell").click(function() {
                if ($(this).children("img").is(":visible")) {

                    $(this).children(".text-content").show();
                    $(this).children(".text-content-complex").show();
                    $(this).children("img").hide();
                    toggle = false;
                } else {
                    $(this).children(".text-content").hide();
                    $(this).children(".text-content-complex").hide();
                    $(this).children("img").show();
                    toggle = true;
                }
            });
        });

        var overallToggle = true;

        $(document).ready(function() {
            $("#toggle").click(function() {
                if (overallToggle) {
                    $(".text-content").show();
                    $(".image").hide();
                    $(".small").hide();
                    overallToggle = false;
                } else {
                    $(".text-content").hide();
                    $(".image").show();
                    $(".small").show();
                    overallToggle = true;
                }
            });
        });

        var complexToggle = true;

        $(document).ready(function() {
            $("#toggle-complex").click(function() {
                $('html, body').animate({
                    scrollTop: $("#all").offset().top
                }, 700);
                
                if (complexToggle) {
                    $(".text-content-complex").show();
                    $(".complex").hide();
                    complexToggle = false;
                } else {
                    $(".text-content-complex").hide();
                    $(".complex").show();
                    complexToggle = true;
                }
            });
        });


        function showComplex(button) {
            // Scrolls down to place the button with id of all at the top of the users page
            $('html, body').animate({
                scrollTop: $("#all").offset().top
            }, 700);

            if (button.id == "all") {
                $("#allComplex").show();
                $("#complex1").hide();
                $("#complex2").hide();
                $("#complex3").hide();
            } else if (button.id == "button1") {
                $("#allComplex").hide();
                $("#complex1").show();
                $("#complex2").hide();
                $("#complex3").hide();
            } else if (button.id == "button2") {
                $("#allComplex").hide();
                $("#complex1").hide();
                $("#complex2").show();
                $("#complex3").hide();
            } else if (button.id == "button3") {
                $("#allComplex").hide();
                $("#complex1").hide();
                $("#complex2").hide();
                $("#complex3").show();
            }
        }

        // If 
    </script>
</head>
<body>

    <div id="pop-up">
        <center><h2 style="color:white;">Welcome to the Ions page</h2></center>
        <p>There are a few instructions before you continue:</p>

        <ul>
            <li>All spaces that have an ion name or symbol are <b>clickable</b></li>
            <li>Clicking on the ion will <u>toggle between the name and the symbol</u></li>
            <li>Clicking on the "Toggle symbols and names" button will toggle <b>ALL</b> the symbols and names at the same time</li>
        </ul>

        <p>For memorizing the ions that are not monatomic, there is a section below. The section is divided into 4 parts:</p>
        <ol>
            <li>All: This section contains all the ions</li>
            <li>x^-: This section contains all the ions that have a 1- charge</li>
            <li>x^2-: This section contains all the ions that have a 2- charge</li>
            <li>x^3-: This section contains all the ions that have a 3- charge</li>
        </ol>
        <center><button id="popUpCloseButton">Close</button></center>
    </div>

    <center>
    <h1 style="color:white;" id="heading">Ions</h1>
    </center>
    <table border="0px" id="periodic">
        <tr>
            <th class="group">1</th>  <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>       <th></th>   <th></th>       <th></th>   <th></th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <th class="group">18</th>
        </tr>  
        <tr>
            <td class="blue toggle-cell"><img src="./images/hydrogen_ion.png" class="image"><span class="text-content">hydrogen ion</span></td>   <th class="group">2</th>  <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th></th>   <th colspan="2"><button id="toggle">Toggle <br>symbols<br>and names</button></th>   <th></th>   <th></th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <th class="group">13</th>                                                               <th class="group">14</th>                                                                   <th class="group">15</th>                                                                   <th class="group">16</th>                                                                                                                               <th class="group">17</th>                                                                                                                                   <td class="faded">Ne</td>
        </tr>   
        <tr>
            <td class="blue toggle-cell"><img src="./images/lithium_ion.png" class="image"><span class="text-content">lithium ion</span></td>    <td class="blue toggle-cell"><img src="./images/beryllium_ion.png" class="image"><span class="text-content">beryllium ion</span></td> <td></td>   <td></td>   <td></td>   <td></td>   <td></td>   <td></td>   <td></td>   <td></td>   <td></td>   <td></td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <td class="faded">B</td>                                                                <td class="faded">C</td>                                                                    <td class="yellow toggle-cell"><img src="./images/nitride_ion.png" class="image"><span class="text-content">nitride ion</span></td>      <td class="yellow toggle-cell"><img src="./images/oxide_ion.png" class="small highlight"><span class="text-content">oxide ion</span><br><img src="./images/peroxide_ion.png" class="small"><span class="text-content">peroxide ion</span></td>   <td class="yellow toggle-cell"><img src="./images/fluoride_ion.png" class="image"><span class="text-content">fluoride ion</span></td>                                                                     <td class="faded">Ne</td>
        </tr>  
        <tr>
            <td class="blue toggle-cell"><img src="./images/sodium_ion.png" class="image"><span class="text-content">sodium ion</span></td>     <td class="blue toggle-cell"><img src="./images/magnesium_ion.png" class="image"><span class="text-content">magnesium ion</span></td>  <th class="group">3</th>    <th class="group">4</th>    <th class="group">5</th>    <th class="group">6</th>                                                                        <th class="group">7</th>                                                                    <th class="group">8</th>                                                                        <th class="group">9</th>                                                                <th class="group">10</th>                                                                   <th class="group">11</th>                                                                           <th class="group">12</th>                                                                                                                                       <td class="blue toggle-cell"><img src="./images/aluminum_ion.png" class="image"><span class="text-content">aluminum ion</span></td>   <td class="faded">Si</td>                                                                   <td class="yellow toggle-cell"><img src="./images/phosphide_ion.png" class="image"><span class="text-content">phosphide ion</span></td>    <td class="yellow toggle-cell"><img src="./images/sulfide_ion.png" class="image"><span class="text-content">sulfide ion</span></td>                                                                  <td class="yellow toggle-cell"><img src="./images/chloride_ion.png" class="image"><span class="text-content">chloride ion</span></td>                                                                     <td class="faded">Ar</td>
        </tr>  
        <tr>
            <td class="blue toggle-cell"><img src="./images/potassium_ion.png" class="image"><span class="text-content">potassium ion</span></td>  <td class="blue toggle-cell"><img src="./images/calcium_ion.png" class="image"><span class="text-content">calcium ion</span></td>    <td class="faded">Sc</td>   <td class="faded">Ti</td>   <td class="faded">V</td>    <td class="blue toggle-cell"><img src="./images/chromium(III)_ion.png" class="image"><span class="text-content">chromium(III) ion</span></td>      <td class="blue toggle-cell"><img src="./images/manganese(II)_ion.png" class="image"><span class="text-content">manganese (III) ion</span></td>  <td class="blue toggle-cell"><img src="./images/iron(II)_ion.png" class="image highlight"><span class="text-content">iron (II) ion</span></td> <td class="blue toggle-cell"><img src="./images/cobalt(II)_ion.png" class="image"><span class="text-content">cobalt (II) ion</span></td> <td class="blue toggle-cell"><img src="./images/nickel(II)_ion.png" class="image"><span class="text-content">nickel (II) ion</span></td>     <td class="blue toggle-cell"><img src="./images/copper(II)_ion.png" class="image highlight"><span class="text-content">copper (II) ion</span></td>   <td class="yellow toggle-cell"><img src="./images/zinc_ion.png" class="image"><span class="text-content">zinc ion</span></td>                                                                             <td class="faded">Ga</td>                                                               <td class="faded">Ge</td>                                                                   <td class="faded">As</td>                                                                   <td class="faded">Se</td>                                                                                                                               <td class="yellow toggle-cell"><img src="./images/bromide_ion.png" class="image"><span class="text-content">bromide ion</span></td>                                                                      <td class="faded">Kr</td>
        </tr>  
        <tr>
            <td class="blue toggle-cell"><img src="./images/rubidium_ion.png" class="image"><span class="text-content">rubidium ion</span></td>   <td class="blue toggle-cell"><img src="./images/strontium_ion.png" class="image"><span class="text-content">strontium ion</span></td>  <td class="faded">Y</td>    <td class="faded">Zr</td>   <td class="faded">Nb</td>   <td class="faded">Mo</td>                                                                       <td class="faded">Tc</td>                                                                   <td class="faded">Ru</td>                                                                       <td class="faded">Rh</td>                                                               <td class="faded">Pd</td>                                                                   <td class="yellow toggle-cell"><img src="./images/silver_ion.png" class="image"><span class="text-content">silver ion</span></td>               <td class="yellow toggle-cell"><img src="./images/cadmium_ion.png" class="image"><span class="text-content">cadmium ion</span></td>                                                                          <td class="faded">In<In/td>                                                             <td class="faded">Sn</td>                                                                   <td class="faded">Sb</td>                                                                   <td class="faded">Te</td>                                                                                                                               <td class="yellow toggle-cell"><img src="./images/iodide_ion.png" class="small highlight"><span class="text-content">iodide ion</span><br><img src="./images/triiodide_ion.png" class="small"><span class="text-content">triiodide ion</span></td>     <td class="faded">Xe</td>
        </tr>  
        <tr>
            <td class="blue toggle-cell"><img src="./images/cesium_ion.png" class="image"><span class="text-content">cesium ion</span></td>     <td class="blue toggle-cell"><img src="./images/barium_ion.png" class="image"><span class="text-content">barium ion</span></td>     <td class="faded">La</td>   <td class="faded">Hf</td>   <td class="faded">Ta</td>   <td class="faded">W</td>                                                                        <td class="faded">Re</td>                                                                   <td class="faded">Os</td>                                                                       <td class="faded">Ir</td>                                                               <td class="faded">Pt</td>                                                                   <td class="faded">Au</td>                                                                           <td class="yellow toggle-cell"><img src="./images/murcury(I)_ion.png" class="highlight small"><span class="text-content">murcury (I) ion</span><br><img src="./images/murcury(II)_ion.png" class="small"><span class="text-content">murcury (II) ion</span></td>   <td class="faded">Tl</td>                                                               <td class="yellow toggle-cell"><img src="./images/lead(II)_ion.png" class="image"><span class="text-content">lead (II) ion</span></td>     <td class="faded">Bi</td>                                                                   <td class="faded">Po</td>                                                                                                                               <td class="faded">At</td>                                                                                                                                   <td class="faded">Rn</td>
        </tr>  
        <tr>
            <td class="faded">Fr</td>                                                               <td class="blue toggle-cell"><img src="./images/radium_ion.png" class="image"><span class="text-content">radium ion</span></td>     <td class="faded">Ac</td>   <td class="faded">Rf</td>   <td class="faded">Db</td>   <td class="faded">Sg</td>                                                                       <td class="faded">Bh</td>                                                                   <td class="faded">Hs</td>                                                                       <td class="faded">Mt</td>                                                               <td class="faded">Ds</td>                                                                   <td class="faded">Rg</td>                                                                           <td class="faded">Cn</td>                                                                                                                                       <td class="faded">Nh</td>                                                               <td class="faded">Fl</td>                                                                   <td class="faded">Mc</td>                                                                   <td class="faded">Lv</td>                                                                                                                               <td class="faded">Ts</td>                                                                                                                                   <td class="faded">Og</th>
        </tr>  
    </table>
    <br>
    <hr>
    <br>
    <table id="complexDecision">
        <tr>
            <td><button id="all" onclick="showComplex(this)">All</button></td>
            <td><button id="button1" onclick="showComplex(this)">x^-</button></td>
            <td><button id="button2" onclick="showComplex(this)">x^2-</button></td>
            <td><button id="button3" onclick="showComplex(this)">x^3-</button></td>
        </tr>
        <tr style="height:10px;"></tr>
        <tr>
            <td colspan="4" style="text-align: center;"><button id="toggle-complex">Toggle <br>symbols<br>and names</button></td>
        </tr>
    </table>
    <br>
    <br>
    <br>

    <div id="allComplex">
        <?php 
            $dir = "./AllComplex";
            $files = scandir($dir);
            echo "<table border='0px'>";
            foreach ($files as $file) {
                // Takes the image file name and removes the extension and the underscore
                $fileName = substr($file, 0, -4);
                $fileName = str_replace("_", " ", $fileName);
                if ($file != "." && $file != ".." && $file != ".DS_Store") {
                    echo "<tr style='color:white;'><td style='width:150px;' class='toggle-cell extraIons'><img src='./AllComplex/$file' class='complex'><span class='text-content-complex'>$fileName</span></td><td><input type='text'></td><tr>";
                }
            }
            echo "</table>";
        ?>
    </div>

    <div id="complex1">
        <?php 
            $dir = "./complex1";
            $files = scandir($dir);
            echo "<table border='0px'>";
            foreach ($files as $file) {
                // Takes the image file name and removes the extension and the underscore
                $fileName = substr($file, 0, -4);
                $fileName = str_replace("_", " ", $fileName);
                if ($file != "." && $file != ".." && $file != ".DS_Store") {
                    echo "<tr style='color:white;'><td style='width:150px;' class='toggle-cell extraIons'><img src='./complex1/$file' class='complex'><span class='text-content-complex'>$fileName</span></td><td><input type='text'></td><tr>";
                }
            }
            echo "</table>";
        ?>
    </div>

    <div id="complex2">
        <?php 
            $dir = "./complex2";
            $files = scandir($dir);
            echo "<table border='0px'>";
            foreach ($files as $file) {
                // Takes the image file name and removes the extension and the underscore
                $fileName = substr($file, 0, -4);
                $fileName = str_replace("_", " ", $fileName);
                if ($file != "." && $file != ".." && $file != ".DS_Store") {
                    echo "<tr style='color:white;'><td style='width:150px;' class='toggle-cell extraIons'><img src='./complex2/$file' class='complex'><span class='text-content-complex'>$fileName</span></td><td><input type='text'></td><tr>";
                }
            }
            echo "</table>";
        ?>
    </div>


    <div id="complex3">
        <?php 
            $dir = "./complex3";
            $files = scandir($dir);
            echo "<table border='0px'>";
            foreach ($files as $file) {
                // Takes the image file name and removes the extension and the underscore
                $fileName = substr($file, 0, -4);
                $fileName = str_replace("_", " ", $fileName);
                if ($file != "." && $file != ".." && $file != ".DS_Store") {
                    echo "<tr style='color:white;'><td style='width:150px;' class='toggle-cell extraIons'><img src='./complex3/$file' class='complex'><span class='text-content-complex'>$fileName</span></td><td><input type='text'></td><tr>";
                }
            }
            echo "</table>";
        ?>
    </div>

    <?php 
    // For loop that prints "<br>" 10 times
    for ($i = 0; $i < 34; $i++) {
        echo "<br>";
    }
    ?>

</body>
</html>
