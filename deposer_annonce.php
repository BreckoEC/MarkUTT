<?php  include("header.php"); ?>

    <div class="row">
        <div class="col s12 little-padding white" id="deposit-annonce">
            <form action="#">
                <h1 class="no-margin center-align">Déposer une annonce</h1>
                <div class="flex flex-start " id="deposit-flex">
                    <div class="little-padding center-align">
                        <img src="http://placehold.it/150x150" alt="Polycopié LO12">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Fichier</span>
                                <input type="file" name="photo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <div class="flex" id="deposit-sales-type">
                            <button class="btn waves-effect waves-light flex-1" type="button" id="deposit-sales-pap">Vente de particulier à particulier</button>
                            <button class="btn waves-effect waves-light flex-1 unselected" type="button" id="deposit-sales-bde">Vente via le BDE</button>
                        </div>
                    </div>

                    <div>
                        <div class="input-field col s12 m8">
                            <input type="text" name="deposit-titre" id="deposit-titre">
                            <label for="deposit-titre">Titre</label>
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
                            <div class="col s12">
                                <div><label class="bold">Temps pour aller à l'UTT(min)</label></div>
                                <div class="flex">
                                    <span class="desposit-number"><label for="deposit-walk">&Agrave; pied :</label> <input type="number" name="deposit-walk" min="1" max="500" id="deposit-walk"></span>
                                    <span class="desposit-number"><label for="deposit-bicycle">&Agrave; vélo :</label> <input type="number" name="deposit-bicycle" min="1" max="500" id="deposit-bicycle"></span>
                                    <span class="desposit-number"><label for="deposit-car">En voiture :</label> <input type="number" name="deposit-car" min="1" max="500" id="deposit-car"></span>

                                    <div id="deposit-dimension">
                                        <span><label for="deposit-size">Dimension :</label> <input type="number" name="deposit-size" min="1" max="500" id="deposit-size"></span>
                                    </div>
                                </div>
                            </div>

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
                            <div class="col s12">
                                <div><label class="bold">Zoomez sur votre quartier/rue</label></div>    
                                <div id="deposit-googleMap" data-maps-loaded="false"></div>
                            </div>
                        </div>

                        <!-- END Appartement only -->
                        <div class="flex col s12 wrap">
                            <p class="range-field">
                                <label for="deposit-price"><strong>Prix :</strong></label>
                                <input class="with-gap" name="deposit-price" type="range" min="0" max="40" value="0" id="deposit-price"/>
                            </p>
                        </div>

                        <div class="input-field col s10">
                            <textarea id="deposit-message" class="materialize-textarea"></textarea>
                            <label for="deposit-message">Description</label>
                        </div>

                        <div class="input-field col s10">
                            <input type="text" id="message">
                            <label for="message">Mots cléfs(séparés par des virgules)</label>
                        </div>                            
                    </div>
                </div>

                <div class="col s12 center-align">
                    <input class="waves-effect waves-light btn" type="submit" value="Rechercher">
                    <input class="waves-effect waves-light btn" type="submit" value="Prévisualiser">
                </div>
            </form>            
        </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
<?php  include("footer.php"); ?>1