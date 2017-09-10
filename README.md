# w3cssPhpWrapper
A php folder to use w3css without going into much details
# 0. Basic setup:
<?php
include('html/card.php');
include('html/body.php');
head_include();
?>

# 1. html/body.php
I : head_include() : Initializes with the necessary files in the header
II: nav1() : Creates a navigation bar with dropdowns/(left/right alignment) etc
    eg:
    nav1('["'.$nav.
        '","Home","#",
            "Profile","?nav=Profile",
            "Search","?nav=Search",
            "My Projects","?nav=My Projects",
            ["-d","Hey","do1","#","do2","#","do3","#","do4","#","do5","#"],
            ["-r","Login","login.php"],
            ["-r","Sign Up","signup.php"]
            
    ]');
    note : It requires string in Json formate :)
# 2. html/card.php
I : Contains classes and functions to create different types of cards
