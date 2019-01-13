<<?php if(isset($notFixed)) echo "div class='footer'"; else echo "footer";?>>
    <div class="footer-top">
        <div class="logos">
            <a href="./index.php" target="_blank"><img class="aula-marina-logo" src="./res/aula-marina-logo.png"></a>
            <a href="http://www.campusdelmar.com/es/" target="_blank"><img class="ceimar-logo" src="./res/ceimar-logo.png"></a>
            <a href="https://www.ual.es/" target="_blank"><img class="ual-logo" src="./res/ual-logo.png"></a>
        </div>
        
        <div class="rrss">
            <div class="rrss-content">	    
                <span>SÍGUENOS EN</span>
                <div class="rrss-icons">
                    <?php 
                    getRRSS($rrss);
                    $fc = $rrss[0]->link;
                    $tw = $rrss[1]->link;
                    $yt = $rrss[2]->link;
                    $ig = $rrss[3]->link;
                    echo "
                        <a href=\"$fc\" target=\"_blank\"><i class=\"fab fa-facebook-square\"></i></a>
                        <a href=\"$tw\" target=\"_blank\"><i class=\"fab fa-twitter-square\"></i></a>
                        <a href=\"$yt\" target=\"_blank\"><i class=\"fab fa-youtube-square\" target=\"_blank\"></i></a>
                        <a href=\"$ig\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    ";
                    ?>
                </div>
             </div>
        </div>
        
        <div class="contact">
            <div class="contact-content">
                <span class="contact-text">LOCALIZACIÓN Y CONTACTO</span>
                <span class="contact-text">Aula Marina
                    <span>Edificio Científico Técnico V</span>
                </span>
                <span class="contact-text">Ctra Sacramento s/n, 04120
                    <span>La Cañada de San Urbano, Almería</span>
                </span>
                <a class="contact-text" href="contact.php">Saber más</a>
            </div>
        </div>	
    </div>
    
    <div class="footer-bot">
        <span>Copyright 2018 Aula Marina</span>
    </div>
</<?php if(isset($notFixed)) echo "div class='footer'"; else echo "footer";?>>