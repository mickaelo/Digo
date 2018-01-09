<div class="container">
    <br>
    <h2>Création ticket</h2>

    <form>
        <div class="row">
            <div class="col-4 col-sm-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="col-4 col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Objet du ticket</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description du ticket</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="sel1">Priorité :</label>
                    <select class="form-control" id="sel1">
                        <option>Haute</option>
                        <option>Moyenne</option>
                        <option>Basse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sel1">Urgence:</label>
                    <select class="form-control" id="sel1">
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