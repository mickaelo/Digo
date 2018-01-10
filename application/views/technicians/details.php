<div class="container">
    <br>
    <h2>Details du technicien <?php echo $technician[0]['prenom'].' '.$technician[0]['nom']?></h2>

    <table id="example" class="display" cellspacing="0" width="100%">
        <tbody>
    <tr>
        <td><?php echo $technician[0]['nom']?>;</td>
        <td><?php echo $technician[0]['prenom']?>;</td>
        <td><?php echo $technician[0]['competences']?>;</td>
        <td><?php echo $technician[0]['email']?>;</td>
        <td><?php foreach($tickets_technician as $ticket){
                echo $ticket['objet'];
            }?>;</td>
    </tr>
</tbody>
</table>
