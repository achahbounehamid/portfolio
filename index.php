<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="icon"
      href="./icons/developer_software_software_developer_laptop_user_coding_programmer_icon_251430.ico"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Portfolio</title>
  </head>
  <body>
   
    <main id="main-menu" >
     <div class="row-limit-size">
      <section id="first">
        
        <nav>
  
          <h2>P<span>.</span>F</h2>
          <ul id="actions">
            <li><a href="#first">accueil</a></li>
            <li><a href="#a-propos">a propos</a></li>
            <li><a href="#Compétence">compétences</a></li>
            <li><a href="#projet">projets</a></li>
            <li><a href="#contactez-moi" class="btn">Contactez Moi</a></li>
          </ul>
          <button id="menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </nav>
        
        <div class="content">
          <div class="container-texts">
            <h4>Bonjour, je m'appelle</h4>
            <h1>Hamid <span>ACHAHBOUNE</span></h1>
            <h3>je suis développeur <span> site web </span> et <span>application mobile</span>.</h3>
            
          </div>
          </div>
          <div class="social">
            <a href="mailto:facebook.com/hamid.achahboune/ " target="_blank"><img src="img/icons8-facebook-entouré-50.png" alt="fb" /></a>
            <a href="mailto:linkedin.com/in/hamid-achahboune-0332b9226"><img src="./img/icons8-linkedin-entouré-50.png" alt="linkend" target="_blank"/></a>
            <a href="mailto:github.com/achahbounehamid"><img src="./img/icons8-github-48.png" alt="github" target="_blank"></a>
            <a href="mailto:hamid.achahboune@gmail.com" target="_blank" ><img src="./img/icons8-gmail-50.png" alt="gmail" /></a>
            
          </div>
        
        </div>
      </section>
       <section id="a-propos">
        <h5 >A  propos de <span>Moi</span></h5>
        <div class="a-propos-de-moi">
            <div class="a-propos-texts"> 
                <p>Après plusieurs années d'études et une session de
                  programmation informatique <br> au Canada à Québec,
                  je me suis découvert une passion pour le développement.<br>
                  En pleine reconversion professionnelle, j'ai décidé de me
                  diriger dans cette voie <br> et d'entreprendre une formation
                  afin de concrétiser mon projet professionnel.
                </p>
                <a href="./CV HAMID 2023.pdf " target="_blank"" class="cv">Télécharger CV</a>    
            </div>
            <div class="container-images">
              <img src="./img/photo-hamid.png" alt="photo">
              
            </div>
      </div>
      </section> 
       <section  id="Compétence">
        <h5>Compétence<span>s</span></h5>
        <div class="front-end">

            <figure  class="html">
                 <img src="./img/html_original_logo_icon_146477.png" alt="html">
            </figure>
            <figure class="css">
                 <img src="./img/Css.png" alt="css">
            </figure>
            <figure class="js">
                 <img src="./img/javascript_icon_130900.png" alt="js">
            </figure> 
          </div>


        <div class="back-end">
          <figure class="php">
            <img src="./img/php_icon_130857.png" alt="php">
          </figure>
          <figure class="sql">
           <img src="./img/icon_sql_256_30046.png" alt="sql">
          </figure>
          <figure class="python">
           <img src="./img/python_18894.png" alt="python_18894">
          </figure>
        </div>
      </section>
      <section id="projet">
        <h5>Projet<span>s</span></h5>
          <div class="cards">
              <figure class="gites">
                  <a href="http://gites/" target="_blank"><img src="./img/Gites-Marhaba.png" alt="gites" ><br><span> Mon premier projet one-page <br> en HTML5/CSS3</span></a>
              </figure>

                <figure class="jado">
                  <a href="http://jadoo/" target="_blank"><img src="./img/jado.png" alt="jado" ><br><span>Création d'un site web resturant sushi <br> en HTML5/CSS3 responsive design</span></a>
                </figure>

                <figure class="défi">
                  <a href="http://localhost/js/dispertion/" target="_blank"><img src="./img/desparition-défi-js.png" alt="défi"><br><span>Un défi en javascript</span></a>
                </figure>
          </div> 

      </section >
      <section id="contactez-moi">
        <h5>Contactez <span>Moi</span></h5>

            <div class="formulaire"> 
              <form action="#" method="POST" >
                    <label for="firstname">
                      <input type="text" name="firstname" placeholder="Nom" id="firstname">
                  </label><br>
                  <label for="lastname">
                    <input type="text" name="lastname" placeholder="Prénom" id="lastname">
                </label><br>
                <label for="E-mail">
                  <input type="email" name="mail" placeholder="E-mail" id="mail">
                </label><br>
                
                  <label for="Message">
                    <textarea id="Message" name="Message" placeholder="Message" id="Message"></textarea>
                  </label>  

                <div  id="submit">      
                  <a href="#" >Envoyer</a>
              </div>
 
              </form>

              <?php
              
 if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: message-portfolio@portfolio.fr' . "\r\n";
        $entete .= '<h3> ' . $_POST['firstname"']." ". $_POST['lastname']."</h3>";

        $entete .= "<br>".$_POST['mail'];


        $message = "<p>".htmlspecialchars($_POST['message'])."</p>"  ;

        $retour = mail('hamid.achahboune@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }?>
            </div> 
            <div class="btn-btn-default">
              <a href="#" class="btn btn-default">Retourner en haut ↑</a>
          </div>
      </section> 
      <footer class="content-footer">
          <p>Copyright © 2023 Portfolio<span> Hamid ACHAHBOUNE</span>.</p>
      </footer> 
    
    </div>

    </main>

    <script src="./js/main.js"></script>

  </body>
</html>
