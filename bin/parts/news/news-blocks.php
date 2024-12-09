
    <?
        require_once('bin/php/db.php');

        $sql = "SELECT imgPath, title, text, tags FROM `news`";
        $result = $conn->query($sql);

        $i = 1;

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $i++;
                if ($i % 2 == 0) {
                    echo '
                    <div class="news-area new-1">
                        <img src="'.$row["imgPath"].'" class="news-area-img">
                        <div class="news-area-information">
                            <h3>'.$row["title"].'</h3>
                            <div>
                                '.$row["text"].'
                            </div>
                            <span>'.$row["tags"].'</span>
                        </div>
                    </div>
                ';
                } else {
                    echo '
                    <div class="news-area new-1">
                        <img src="'.$row["imgPath"].'" class="news-area-img">
                        <div class="news-area-information">
                            <h3>'.$row["title"].'</h3>
                            <div>
                                '.$row["text"].'
                            </div>
                            <span>'.$row["tags"].'</span>
                        </div>
                    </div>
                ';
                };
            }
        }
    ?>