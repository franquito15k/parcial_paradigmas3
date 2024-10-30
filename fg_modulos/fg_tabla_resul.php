<section>
    <div>
        <h2>Tabla de Resultados</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>Nombre</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT usuarios.id, usuarios.nombre, puntajes.puntaje 
                            FROM puntajes 
                            JOIN usuarios ON puntajes.id = usuarios.id 
                            ORDER BY puntajes.puntaje DESC";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['nombre'] . '</td>';
                        echo '<td>' . $row['puntaje'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>