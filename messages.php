<?php  include("header.php"); ?>

    <div class="row">
        <div class="col s12 m10 offset-m1 little-padding" id="messages">    
            <div class="col m10 offset-m1">
                <h2>Messages</h2>
                <!-- Single message -->
                <div class="flex grey lighten-4">
                    <img src="http://placehold.it/150x150" alt="Polycopié LO12">
                    <div class="little-padding">
                        <a href="message.php">
                            <strong>J.Barthelemy</strong>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar malesuada rhoncus. Integer consequat semper tincidunt.
                            </p>
                        </a>
                        <div>
                        <a data-target="note" class="modal-trigger blue-link" href="#note" data-id="1">Noter ce vendeur</a></div>
                    </div>
                    <div class="clight-blue notation-medium">&#9733;&#9733;&#9733;&#9734;&#9734;</div>
                </div>
                

                <!-- Single message -->
                <div class="flex grey lighten-4">
                    <img src="http://placehold.it/150x150" alt="Polycopié LO12">
                    <div class="little-padding">
                        <a href="message.php">
                            <strong>J.Barthelemy</strong>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar malesuada rhoncus. Integer consequat semper tincidunt.
                            </p>
                        </a>
                        <div>
                        <a data-target="note" class="modal-trigger blue-link" href="#note" data-id="2">Noter ce vendeur</a></div>
                    </div>
                    <div class="clight-blue notation-medium">&#9733;&#9733;&#9733;&#9734;&#9734;</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="note" class="modal">
        <form action="" method="POST">
            <div class="modal-content flex">
                <div class="flex-1">
                    <h4>Noter ce vendeur</h4>
                    <div class="row">    
                        <div class="col s12">
                            <div id="note-range" class="note-range pointer">
                                <span data-note="1">&#9734;</span>
                                <span data-note="2">&#9734;</span>
                                <span data-note="3">&#9734;</span>
                                <span data-note="4">&#9734;</span>
                                <span data-note="5">&#9734;</span>
                            </div>

                            <input type="hidden" value="0" id="note-hidden" name="note">
                            <input type="hidden" value="0" id="note-hidden" name="annonce_id">
                        </div>

                        <div class="input-field col s12">
                          <textarea id="note-comment" class="materialize-textarea"></textarea>
                          <label for="note-comment">Commentaire</label>
                        </div>
                    </div>
                </div>
                <div class="right-align modal-action modal-close">X</div>
            </div>
            <div class="modal-footer">
                <div class="col s12 m4" id="search-button">
                    <input class="modal-action modal-close waves-effect waves-light btn" type="submit" value="Noter">                    
                </div>
            </div>
            
        </form>
    </div>
<?php  include("footer.php"); ?>