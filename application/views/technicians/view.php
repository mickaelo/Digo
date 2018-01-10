<div class="container">
    <br>
    <h2>Techniciens</h2>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Compétences</th>
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
    </tr>';
        }?>

        </tbody>
    </table>

</div>

