<div class="container">
    <br>
    <h2>Création de ticket</h2>

    <form method="post" action="<?php echo base_url('tickets/new_ticket')?>">
        <div class="row">
            <div class="col-4 col-sm-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Signalé par</label>
                    <input name="nom" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input name="prenom" type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom">
                </div>
            </div>
            <div class="col-4 col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Objet du ticket</label>
                    <input name="objet" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet du ticket">
                </div>
                <div class="form-group">
                    <label for="comment">Description du ticket</label>
                    <textarea name="description" class="form-control" placeholder="Description" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="sel1">Priorité :</label>
                    <select name="priorite" class="form-control" id="sel1">
                        <option>Haute</option>
                        <option>Moyenne</option>
                        <option>Basse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sel1">Urgence:</label>
                    <select name="urgence" class="form-control" id="sel1">
                        <option>Haute</option>
                        <option>Moyenne</option>
                        <option>Basse</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Créer une demande</button>
            </div>
        </div>
    </form>

</div>