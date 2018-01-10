<div class="container">
    <br>
    <h2>Techniciens</h2>

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
        foreach($technicians as $technician) {
            echo '
    <tr>
        <td>' . $technician['nom'] . '</td>

    </tr>';
        }?>

        </tbody>
    </table>

</div>

