<div class="container">
    <br>
    <h2>Demandes en cours</h2>
    <?php echo $this->session->flashdata('msg'); ?>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Signalé par</th>
            <th>Objet du ticket</th>
            <th>Description</th>
            <th>Priorité</th>
            <th>Urgence</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($tickets as $ticket) {
            echo '
    <tr>
        <td>' . $ticket['signale_par'] . '</td>
        <td>' . $ticket['objet'] . '</td>
        <td>' . $ticket['description'] . '</td>
        <td>' . $ticket['priorite'] . '</td>
        <td>' . $ticket['urgence'] . '</td>
    </tr>';
        }?>

        </tbody>
    </table>

</div>

