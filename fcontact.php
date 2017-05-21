<div  id="modalContact" class="modal">
	<form action="fcdatabase.php" method="post"> 
	<div class="modal-content">
		<h5>Formulaire de contact</h5>
		<div class="row">
            
            <div class="input-field col s12">
              <input type="text" name="nom" id="nom" />
              <label for="nom">Nom</label>
            </div>

            <div class="input-field col s12">
              <input type="text" name="prenom" id="prenom" />
              <label for="prenom">Prénom</label>
            </div>
			
            <div class="input-field col s12">
              <input type="text" name="sujet" id="sujet" />
              <label for="sujet">Sujet</label>
            </div>

		        <div class="input-field col s12">
		          <textarea id="message" name="message" class="materialize-textarea"></textarea>
		          <label for="message">Textarea</label>
		        </div>
		      
		  </div>
		</div>
		<div class="modal-footer">
	        <button class="btn waves-effect waves-green teal "  type="submit">Envoyer</button>
	        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
	</form >
</div>