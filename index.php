<?php
include('html/card.php');
include('html/body.php');
head_include();
?>

<body>
<?php
	$nav="Profile";
if(isset($_GET['nav']))
{
	$nav=$_GET['nav'];
        //To show which one is selected
}
nav1('["'.$nav.'",
            "Home","#",
            "Profile","?nav=Profile",
            "Search","?nav=Search",
            "My Projects","?nav=My Projects",
            ["-d","Hey","do1","#","do2","#","do3","#","do4","#","do5","#"],
            ["-r","Login","login.php"],
            ["-r","Sign Up","signup.php"]
            
]');
//




?>

