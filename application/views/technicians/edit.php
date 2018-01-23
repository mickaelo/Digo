<div class="container">
    <br>
    <h2>Création technicien</h2>

    <form method="post" action="<?php echo base_url('technicians/new_technician')?>">
    <div class="row">
            <div class="col-4 col-sm-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input name="nom" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input name="prenom" type="text" class="form-control" id="exampleInputEmail1" placeholder="Prenom">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="select">Compétences</label>
                    <select id="select" class="js-example-basic-multiple form-control" name="competences[]" multiple="multiple">
                        <option value="php">PHP</option>
                        <option value="html">HTML</option>
                        <option value="serveur">Serveur</option>
                        <option value="système">Système</option>
                        <option value="reseau">Réseau</option>
                        <option value="linux">Linux</option>
                        <option value="debian">Debian</option>
                        <option value="ubuntu">Ubuntu</option>
                        <option value="centos">Centos</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter technicien</button>
            </div>
        </div>
    </form>

</div>
