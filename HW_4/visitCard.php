<?php
	$name = "Alex";
    $prof = "Gamedev";
    $address = "Russia";
    $email = "insame@gmail.com";
    $phone = "+79445241";
    $birthday = "07.10.1980";
    
    $skills = [
    "name" => ["Abobe Photoshop", "Paint", "MS Excel", "IntelliJ IDEA"],
    "level" => [30, 80, 40, 10]
    ];
    
    $languages = [
    "name" => ["Украинский", "Английский", "Латинский"],
    "level" => [70, 30, 5]
    ];
    
    $experience = [
    "speciality" => ["Lead Backend Developer", "Front End Developer", "Graphic Designer / designsomething.com"],
    "dateBegin" => ["April 2020", "July 2016", "September 2012"],
    "dateEnd" => ["Current", "March 2020", "June 2016"],
    "description" => ["Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.","Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste."]
    ];
    
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Моё резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
          <p><i class="fa fa-calendar fa-bounce fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $birthday; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
          <p><?php echo $skills["name"][0]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]; ?>%"><?php echo $skills['level'][0]; ?>%</div>
          </div>
          
          <p><?php echo $skills["name"][1]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]; ?>%">
              <div class="w3-center w3-text-white"><?php echo $skills['level'][1]; ?>%</div>
            </div>
            </div>
          
          <p><?php echo $skills["name"][2]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]; ?>%"><?php echo $skills["level"][2]; ?>%</div>
          </div>
          
          <p><?php echo $skills["name"][3]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][3]; ?>%"><?php echo $skills['level'][3]; ?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p><?php echo $languages["name"][0]; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $languages["level"][0]; ?>%"></div>
          </div>
          <p><?php echo $languages["name"][1]; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $languages["level"][1]; ?>%"></div>
          </div>
          <p><?php echo $languages["name"][2]; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $languages["level"][2]; ?>%"></div>
          </div>
          <br>
        </div>
      </div>
      <div class="w3-white w3-text-grey w3-card-4">
      	<div class="w3-display-container">
          <form action="login.php" method="POST">
            <p>Имя: <input type="text" name="name" /></p>
            <p>Возраст: <input type="number" name="age" /></p>
            <input type="submit" value="Отправить">
          </form>
        </div>
       </div>
      
<?php
$name = "не определено";
$age = "не определен";
if(isset($_POST["name"])){

$name = $_POST["name"];
}
if(isset($_POST["age"])){

$age = $_POST["age"];
}
echo "Имя: $name <br> Возраст: $age";
?>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $experience["speciality"][0]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience["dateBegin"][0]; ?> - <span class="w3-tag w3-teal w3-round"><?php echo $experience["dateEnd"][0]; ?></span></h6>
          <p><?php echo $experience["description"][0]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $experience["speciality"][1]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience["dateBegin"][1]; ?> - <?php echo $experience["dateEnd"][1]; ?></h6>
          <p><?php echo $experience["description"][1]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $experience["speciality"][2]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience["dateBegin"][2]; ?> - <?php echo $experience["dateEnd"][2]; ?></h6>
          <p><?php echo $experience["description"][2]; ?></p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>