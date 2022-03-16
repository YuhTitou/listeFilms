<h2><?php echo $title ?></h2>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Release</th>
            <th>Overview</th>
            <th>Cover</th>
        </tr>
    </thead>
    <?php foreach($filmslist as $film):?>
    <tbody>
        <tr>
            <td><?php echo $film['idimdb'];?></td>
            <td><?php echo $film['title'];?></td>
            <td><?php echo $film['release'];?></td>
            <td><?php echo $film['overview'];?></td>
            <td><img src="<?php echo $film['poster'];?>" width="100" height="150"/></td>
        </tr>
    </tbody>
    <?php endforeach ?>
</table>

<!--
//copie de ca + main,
//rajouter bouton au bout de la ligne qui renvoie a la fonction dans films/gererfilms
//films/gererfilms prend en param id user + id film et renvoie a fonction dans user_model
//qui ajoute dans la table collection iduser + idimdb-->

