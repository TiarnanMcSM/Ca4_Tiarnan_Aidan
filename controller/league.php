<?php include '../view/header.php'; ?>
<main>

    <h1>League table</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Played</th>
            <th>Points</th>
        </tr>
        <?php foreach ($teams as $team) : ?>
        <tr>
            <td><?php echo $team['teamName']; ?></td>
            <td><?php echo $team['played']; ?></td>
            <td><?php echo $team['points']; ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Team</h2>
    <form id="add_team_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_team">

        <label>Name:</label>
        <input type="input" name="name">
        <input type="submit" value="Add">
    </form>

    <p><a href="index.php?action=list_players">List Players</a></p>

</main>
<?php include '../view/footer.php'; ?>