<div class="univers univers2 waves-effect waves-light card">
    <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/cowboy2.jpg">
    </div>
    <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Far West<i class="material-icons right">more_vert</i></span>
        <p><a href="#modalCowBoy">Partir dans le FarWest</a></p>
    </div>
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Far West<i class="material-icons right">close</i></span>
        <p>Venez decouvrir le monde du FAR WEST le monde ou vivent des cow boy partez a l'aventure pour faire du rodeo, la chasse au bisons, Rencontrez des indien</p>
        <p>                                    
            <a class="waves-effect waves-light btn btn-block" href="#modalCowBoyBillet">Achat de billet</a>
        </p>
        <p> 
            <a class="waves-effect waves-light btn btn-block" href="#modalCowBoyResa">Réservation de séjour</a>
        </p>
    </div>
</div>
<div id="modalCowBoy" class="modal">
    <div class="modal-content">
    Détails univers
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
    </div>
</div>

<div id="modalCowBoyBillet" class="modal">
    <div class="modal-content">
    Achat billet
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
    </div>
</div>

<form method="post" action="cible.php" id="CoWBoy_sejour_validation">
    <div id="modalCowBoyResa" class="modal">
        <div class="modal-content">
            <h3>Résa séjour</h3>
                <div class="row">
                    <div class="input-field col s4">
                        <select name="hotel">
                            <option value="sakouli">Sakouli</option>
                            <option value="trevani">Trevani</option>
                            <option value="3baobab">3Baobab</option>
                        </select>
                        <label>Hotel de séjour</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="date" name="debut_sejour">
                        <label class="active" for="debut_sejour">Début de séjour</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="date" name="fin_sejour">
                        <label class="active" for="fin_sejour">Fin de séjour</label>
                    </div>
                    
                    <div class="input-field col s4">
                        <input type="number" name="nb_room" placeholder="Nombre de chambre">
                    </div>
                    
                    <div class="input-field col s4">
                        <input type="number" name="nb_adulte" placeholder="Nombre Adulte">
                    </div>
                    <div class="input-field col s4">
                        <input type="number" name="nb_child" placeholder="Nombre Enfant">
                    </div>
                    <input type="hidden" name="univers" value="CoWBoy">
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-green teal">Valider ma résa</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
        </div>
    </div>
</form>
