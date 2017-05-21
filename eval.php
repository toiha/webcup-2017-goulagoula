
<div id="modalEval" class="modal">
<form action="cible_eval.php" method="post">
    <div class="modal-content">
        <h4>Evaluation</h4>
        <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" name="pseudo" id="pseudo" />
                  <label for="pseudo">Pseudo</label>
                </div>
                <div class="input-field col s12">
                  <textarea id="message" class="materialize-textarea" name="message"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
          </div>
        <center>
            <div class="rating rating2">
                <a href="#!?eval=5" title="Give 5 stars">★</a>
                <a href="#!?eval=4" title="Give 4 stars">★</a>
                <a href="#!?eval=3" title="Give 3 stars">★</a>
                <a href="#!?eval=2" title="Give 2 stars">★</a>
                <a href="#!?eval=1" title="Give 1 star">★</a>
            </div>
        </center>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-green teal "  type="submit">Envoyer</button>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </form>
</div>
