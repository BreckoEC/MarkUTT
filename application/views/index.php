    <div class="row search-form-wrapper">
        <div class="col s12 m10 offset-m1 white little-padding">
            <form action="#" method="POST" id="search_form">
                <div class="input-field col s12 m8">
                    <input type="text" name="search" id="search">
                    <label for="search">Rechercher</label>
                </div>
                
                <div class="input-field col s4">
                    <select id="search-type">
                        <option value="-1" disabled selected>Type de bien</option>
                        <option value="0">Polys / Livres</option>
                        <option value="1">Mobilier</option>
                        <option value="2">Appartement</option>
                        <option value="3">Autre</option>
                    </select>
                </div>
                
                <div class="col s12 hidden" id="state-type">
                    <input class="with-gap" name="type" type="checkbox" id="etat-neuf"/>
                    <label for="etat-neuf">Comme neuf</label>
                    <input class="with-gap" name="type" type="checkbox" id="etat-tbon"  />
                    <label for="etat-tbon">Très bon</label>
                    <input class="with-gap" name="type" type="checkbox" id="etat-bon"  />
                    <label for="etat-bon">Bon</label>
                    <input class="with-gap" name="type" type="checkbox" id="etat-moyen"  />
                    <label for="etat-moyen">Moyen</label>
                </div>
                
                <!-- Appartement only -->
                <div id="appart-only" class="hidden">
                    <div class="col s12" id="bus-line">
                        <label>Ligne de bus :</label>
                        <input class="with-gap" name="type" type="checkbox" id="ligne-6" checked="checked"/>
                        <label for="ligne-6" class="bus-line-margin">Ligne 6</label>
                        <input class="with-gap" name="type" type="checkbox" id="ligne-11"  checked="checked"/>
                        <label for="ligne-11" class="bus-line-margin">Ligne 11</label>
                    </div>

                    <div class="col s12">
                        <p class="range-field">
                            <label for="appart-distance"><span class="bold">Distance max de l'UTT(km) :</span></label>
                            <input class="with-gap" name="type" type="range" min="0" max="40" value="0" id="appart-distance"/>
                        </p>
                    </div>
                    
                    <div class="col s12 m8" id="search-form-price">
                        <span class="inline-block"><label for="min_dimension">Dimension min :</label> <input type="number" name="min_dimension" min="1" max="500" id="min_dimension"></span>
                        <span class="inline-block"><label for="max_dimension">Dimension max :</label> <input type="number" name="max_dimension" min="1" max="500" id="max_dimension"></span>
                    </div>
                </div>
                
                <!-- END Appartement only -->
                <div class="flex col s12 wrap">
                    <div class="col s12 m8" id="search-form-price">
                        <span class="inline-block search-price"><label for="min_price">Prix min :</label> <input type="number" name="min_price" min="1" max="500" id="min_price"></span>
                        <span class="inline-block search-price"><label for="max_price">Prix max :</label> <input type="number" name="max_price" min="1" max="500" id="max_price"></span>
                    </div>

                    <div class="col s12 m4" id="search-button">
                        <input class="waves-effect waves-light btn" type="submit" value="Rechercher">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--Annonces-->
    <div class="row">
        <div class="col s12 m10 offset-m1 white no-padding">
            <?php
                $i = 1;
                foreach($annonces as $annonce){
                    $html = '<!-- Single Annonce-->';
                    ($i%2)? $html.= '<div class="annonce flex odd">' : $html.= '<div class="annonce flex">';
                    $html.= '   <a href="TODOannonce.php" class="flex annonce-link">';
                    $html.= '      <img src="http://placehold.it/200x150" alt="'.$annonce['title'].'"/>';
                    $html.= '      <div class="annonce-content little-padding">';
                    $html.= '          <h2>'.$annonce['title'].'</h2>';
                    $html.= '          <div><span class="price"><span class="bold">Prix :</span> '.$annonce['price'].'€</span></div>';
                    $html.= '          <div><span class="bold">Etat :</span> '.$annonce['state'].'</div>';
                    $html.= '      </div>';
                    $html.= '   </a>';
                    $html.= '   <div class="right-align flex-1 little-padding annonce-user">';
                    $html.= '       <div>';
                    $html.= '           <a href="TODOprofil.php" class="blue-link">TODO</a>';
                    $html.= '           <div class="clight-blue notation-medium">TODO&#9733;&#9733;&#9733;&#9734;&#9734;</div>';
                    $html.= '       </div>';
                    $html.= '   </div>';
                    $html.= '</div>';
                    echo $html;
                    $i++;
                }
            ?>
        </div>
    </div>
    <!--
    <div class="row">
        <div class="col s12 m10 offset-m1 right-align no-padding">
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>
    -->