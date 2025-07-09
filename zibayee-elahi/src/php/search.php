

        <?php

        include_once "/opt/lampp/htdocs/src/php/connection.php";
        if (isset($_GET['q'])) {
            $q = mysqli_real_escape_string($connection, $_GET['q']);

            $query = $connection->prepare('SELECT * FROM links WHERE title LIKE ?');
            $searchTerm = "%$q%";
            $query->bind_param('s', $searchTerm);
            $query->execute();
            $res = $query->get_result();

            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '   <div class="mt-4">
                 
    
                    <h2><a href="'.$row['link'].'">'.$row['title'].' | Hounaar</a></h2>
    
                    <p>
                    '.$row['description'].'
                    </p>
                </div>';
                }
            } else {
                echo '                <h2>404. NOTHING FOUND </h2>
                ';
            }
        } else {
            header("location: /");
        }

        ?>