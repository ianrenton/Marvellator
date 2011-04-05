<?php
    $adjectives = array("Obsequious","Flatulent","Worrisome","Puny","Sub-standard","Laconic","Sarcastic","Delinquent","Adolescent","Persistent","Pointless","Meticulous","Widely-Distributed","Inebriated","Ubiquitous","Adventures of Tiny","Underperforming","Flavoursome","Narcotic","Subsidized","Surreptitious","Transgender","Cathartic","Bigoted","Curmudgeonly","Tasteless","Credible","Perjorative","Racist");
    $heroes = array("Superman","Supergirl","Spiderman","Batman","X-Men","Wolverine","Cyclops","Jean Gray","Professor X","Flash","Hulk","She-Hulk","Avengers","Iron Man","Captain America","Thor","Justice League","Wonder Woman","Four","Silver Surfer","Judge Dredd","Daredevil","Catwoman","Green Lantern","Hawkman","Aquaman","Watchmen","Doctor Manhattan","Rorschach","Spider Jerusalem","Electra","Galactus","Batgirl","Poison Ivy","Witchblade","Zatanna","Conan");
    $heroesWithoutThe = array("X-Men");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>The Marvellator</title>
        <meta http-equiv="Cache-control" content="no-cache"> 
        <style type="text/css">
            h1, h2, p, form { text-align:center; }
            h2 {margin-bottom:3em;}
            form {margin: 4em 0;}
            span.title { background-color:red; color:white; font-family:"Impact",sans-serif; text-transform: uppercase; font-weight: normal; font-size:2em; padding:5px 10px;}
            p.bottompad{margin-bottom:2.5em;}
            ul.share{margin-bottom:2.5em; padding:0; width:100%; text-align: center;}
            ul.share li {display: inline; list-style-type: none; margin:0; padding: 0 20px 0 20px;}
        </style>
    </head>
    <body>
        <h2><span class="title">The Marvellator</span></h2>
        <p>Coming soon to a comic shop near you:</p>
        <h1>
        
<?php
    $adjective = $adjectives[rand(0, count($adjectives)-1)];
    $hero = $heroes[rand(0, count($heroes)-1)];
    $the = (in_array($hero, $heroesWithoutThe))?"":"The ";
    $volume = rand(1,100);
    
    echo($the . $adjective . " " . $hero . " vol. " . $volume);
?>

        </h1>
        <form submit=""><input type="submit" value="Generate another!" /></form>

        <p class="bottompad">The Mavellator is a random comic name generator, written by <a href="http://onlydreaming.net/about-me">this guy</a>. It is not affiliated with Marvel Comics (as if there was any doubt in your mind).</p>
        <ul class="share">
            <li><a href="http://twitter.com/home?status=Behold the #Marvellator! http://onlydreaming.net/marvellator">Tweet it</a></li>
            <li><a href="http://www.facebook.com/share.php?u=http://onlydreaming.net/marvellator">Facebookify it</a></li>
            <li><a href="mailto:marvellator@onlydreaming.net?subject=Marvellator%20Suggestion">Suggest more things</a></li>
            <li><a href="mailto:someone%20who%20gives%20a%20damn?subject=Paging%20the%20Internet%20Police!">Complain about it</a></li>
        </ul>
        <p class="bottompad"><em>Life Imitates Art</em>, or, "things the Marvellator has produced that, oddly, actually exist":<br/><a href="http://gunshowcomic.com/133">Adventures of Tiny Rorschach</a> | <a href="http://bit.ly/gYh9A0">Transgender Justice League</a></p>
    </body>
</html>
