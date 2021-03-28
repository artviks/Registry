<?php require 'Partials/header.php' ?>

<h2>DATA</h2>

<table>
<tr>
    <th>Name</th>
    <th>Surname</th>
    <th>Personal Code</th>
    <th>Description</th>
</tr>
<?php foreach ($persons->collection() as $person) :?>
    <tr>
        <td><?= $person->name() ?></td>
        <td><?= $person->surname() ?></td>
        <td><?= $person->code() ?></td>
        <td><?= $person->description() ?></td>
    </tr>
<?php endforeach; ?>

<?php require 'Partials/footer.php' ?>