<?php ob_start();
try{
include './includes/title.php';
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $to = 'trevor.b.booth@gmail.com';
    $subject = 'Trevor Booth\'s Portfolio Info';
    $expected = ['name', 'phone', 'email', 'comments' ];
    $required = ['name', 'email', 'comments'];
    $headers = "From: Trevor Booth<trevor.b.booth@gmail.com>\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    require './includes/form.php';
    if ($mailSent) {
        header('Location: http://trevorboothdesign.com/includes/Thank_you.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Trevor Booth</title>
      <?php include_once './includes/analyticstracking.php'; ?>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=.75">
      <link href="https://fonts.googleapis.com/css?family=Nunito:300" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
      <link rel="stylesheet" href="css/baseNew.css"><!--/*My Styles*/-->
      <link rel="stylesheet" href="css/normalize.css"><!--/*Reset*/-->
      <script src="https://use.fontawesome.com/50b6074783.js"></script><!--/*Icons*/-->
      <link href="css/lightbox.min.css" rel="stylesheet"><!--/*Lightbox*/-->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--/*jQuery*/-->
      <!--<script src="js/smoothscroll.js"></script>/*Smooth Scroll*/-->
  </head>
    <body>
      <div id="top"  class="parallax"><!--/*Background Scrolling*/--> 
          <p class="desdev">Design &amp; Development</p>
            <h1  id="trevor">Trevor Booth</h1>
                <a class="smoothScroll" href="#who"><i id="scroll"  class="fa fa-sort-desc fa-5x down1" aria-hidden="true"></i></a>  
            </div>
          <div class="menu" id="menu"><!--/*Navigation Menu*/-->
        <?php include './includes/menu.php'; ?>
    </div>
      <div id="who">
          <div id="social" class="socialContent"><!--/*Social Media Icons */-->
              <?php include './includes/social.php' ?>
            </div>      
          <h3>Who Am I?</h3><!--/*Short Bio & Photo*/-->
        <?php require './includes/who.php' ?>
    </div>
     <!--       ++SKILLS++
      =========================-->
      <div id="skills" class="parallaxSkills">
            <button onclick="skillsSchool()" class="schoolBTN"><i class="fa fa-file-text-o " aria-hidden="true"></i>School Assignments &amp; Notes</button>
            <button onclick="skillsPort()" class="portBTN"><i class="  fa fa-suitcase" aria-hidden="true"></i>Portfolio - Previous Work</button>
        <div> <!--==========     Lightbox for Images           ===============-->
            <?php require './includes/lightbox.php' ?>
        </div>    
          <!--  ==========     Hidden Nav for my Old websites           ===============-->
        <div id="sidenavP" class="sidenavContentP">   
            <?php require './includes/work.php' ?>
        </div>
          <!--  ==========     Hidden nav for school work           ===============-->
        <div id="sidenavS" class="sidenavContentS">    
             <?php require './includes/school.php' ?>
        </div>
      </div>
      <!--  ==========     Form          ===============-->
        <div id="contactBlock" >
            <?php include'./includes/formHTML.php'; ?>
        </div>
		<footer><!--  ==========     Footer with some contact info          ===============-->
           <?php require './includes/footer.php' ?>
        </footer>
<script src="js/lightbox.min.js"></script><!--/*Lightbox*/-->
<script>
    lightbox.option({
      'alwaysShowNavOnTouchDevices': true
    })
</script>
<script src="js/script.js"></script><!--/*My Script*/-->
    </body>
</html>
<?php } catch (Exception $e) {
    ob_end_clean();
    header('Location: http://trevorboothdesign.com/includes/error.php');
}
ob_end_flush();
?>