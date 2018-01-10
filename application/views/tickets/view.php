<div class="container">
    <br>
    <h2>Demandes en cours</h2>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
        </tr>
        </tfoot>
        <tbody>
        <?php
        foreach($tickets as $ticket) {
            echo '
    <tr>
        <td>' . $ticket['objet'] . '</td>

    </tr>';
        }?>

        </tbody>
    </table>

</div>

