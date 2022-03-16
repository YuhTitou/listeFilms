<h2><?php echo $title ?></h2>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
    </thead>
    <?php foreach($collectionneurlist as $collectionneur):?>
    <tbody>
        <tr>
            <td><?php echo $collectionneur['identifiant'];?></td>
            <td><?php echo $collectionneur['nom'];?></td>
            <td><?php echo $collectionneur['prenom'];?></td>
            <td><?php echo anchor('http://webetuinfo.iutlan.univ-rennes1.fr/b13/html/index.php/films/supprimeColl/'.$collectionneur["identifiant"],'Supprimer')?></td>
        </tr>
    </tbody>
    <?php endforeach ?>
</table>
