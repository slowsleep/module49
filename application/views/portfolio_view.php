<section>
    <h1>Портфолио</h1>
    <p>Несколько моих проектов на github c github pages:</p>
    <table border="1">
        <tr>
            <td>Год</td>
            <td>Проект</td>
            <td>Попробовать</td>
            <td>Название</td>
        </tr>
        <?php
        foreach ($data as $row) {
            echo '<tr><td>' . $row['year'] . '</td><td><a href=' . $row['site'] . '>github</a></td><td><a href=' . $row['tryIt'] . '>github pages</a></td><td>' . $row['name'] . '</td></tr>';
        }
        ?>
    </table>
</section>
