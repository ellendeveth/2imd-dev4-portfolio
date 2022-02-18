<?php
    const MAX_DISTANCE = 5;
    $posts = [
        [
            "profile_pic" => "/img/person1.jpg",
            "username" => "Jesse",
            "place" => "Assembly 3.0",
            "location" => "San Francisco, CA",
            "img" => "",
            "dist" => 4,
        ],
        [
            "profile_pic" => "/img/person2.jpg",
            "username" => "Michal",
            "place" => "Voxer",
            "location" => "San Francisco, CA",
            "img" => "/img/sea.jpg",
            "dist" => 2,
            
        ],
        [
            "profile_pic" => "/img/person3.jpg",
            "username" => "Petr",
            "place" => "Roxy",
            "location" => "Prague, Czech Republic",
            "img" => "",
            "dist" => 5,
        ],
        [
            "profile_pic" => "/img/person1.jpg",
            "username" => "Jaroslav",
            "place" => "Brno hlavni nadrazi",
            "location" => "Brno, Czech Republic",
            "img" => "",
            "dist" => 3,
        ],
        [
            "profile_pic" => "/img/person2.jpg",
            "username" => "Matej",
            "place" => "Massventures",
            "location" => "San Francisco, CA",
            "img" => "",
            "dist" => 6,
        
        ],
        [
            "profile_pic" => "/img/person3.jpg",
            "username" => "Fien",
            "place" => "The mill",
            "location" => "San Francisco, CA",
            "img" => "",
            "dist" => 4,
        ],
    ]
    /*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken


        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins

    */

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swarm App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include_once("header.inc.php");?>
       
<ul>
    <?php // todo3 : lus over je checkins en print deze visueel af zoals op de screenshots/screenshot1.png?>
    <?php foreach($posts as $post): ?>
    <?php if($post['dist'] <= MAX_DISTANCE ): ?>
    <li>
        
            <div class="posts">

                <img class="profilepic" src="<?php echo $post['profile_pic'] ?>" alt="person">

                <div class="posts_info">
                    <p class="username"> <?php echo $post['username']; ?></p>
                    <p class="place"> <?php echo $post['place']; ?></p>
                    <p class="location">l<?php echo $post['location']; ?></p>

                    <?php if(!empty($post['img'])): ?>
                    <img class="picture" src="<?php echo $post['img'] ?>" alt="image">
                    <?php endif;?>
                </div>
  
            </div>
            
    </li>
    <?php endif;?>
    <?php endforeach; ?>

</ul>
   
        <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen
         include_once("footer.inc.php"); ?>
</body>
</html>