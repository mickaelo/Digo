<div class="container">
    <br>
    <h2>Techniciens</h2>
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Compétences</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($technicians as $technician) {
            echo '
    <tr>
        <td>' . $technician['nom'] . '</td>
        <td>' . $technician['prenom'] . '</td>
        <td>' . $technician['email'] . '</td>
        <td>' . $technician['competences'] . '</td>
        <td><a href="' . base_url("technicians/details/".$technician['id_technicien']).'">Voir</a></td>
    </tr>';
        }?>

        </tbody>
    </table>

</div>

