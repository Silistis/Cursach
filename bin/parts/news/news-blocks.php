
    <?
        require_once('bin/php/db.php');

        $sql = "SELECT id, imgPath, title, text, tags FROM `news`";
        $result = $conn->query($sql);

        $i = 1;

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $i++;
                if ($i % 2 == 0) {
                    echo '
                        <div class="news-area new-1" id="'.$row["id"].'">
                            <img src="'.$row["imgPath"].'" class="news-area-img">
                            <div class="news-area-information">
                                <h3>'.$row["title"].'</h3>
                                <div>
                                    '.$row["text"].'
                                </div>
                                <span>'.$row["tags"].'</span>
                            </div>';
                        if ($title == 'Панель администратора') {
                            echo '<div class="btnRegBOX">
                                    <form action="bin/php/del.php" method="POST">
                                        <input type="hidden" value="'.$row["id"].'" name="newsName">
                                        <button class="adminRegBTN" id="adminDelete">🗑️</button>
                                    </form>
                                </div>';
                            echo
                            '<form action="bin/php/reg.php" method="POST" style="visibility: none">
                                <input class="regNewsTitle"  placeholder="Введите новый заголовок" name="title" value="'.$row["title"].'">
                                <textarea class="regNewsText" placeholder="Введите новый текст" name="text">'.$row["text"].'</textarea>
                                <input type="hidden" value="'.$row["id"].'" name="newsName">
                                <button class="adminEditBTN" id="adminReg">🖊️</button>
                            </form>';
                        };
                    echo '</div>';
                } else {
                    echo '
                    <div class="news-area new-2" id="'.$row["id"].'">
                        <img src="'.$row["imgPath"].'" class="news-area-img">
                        <div class="news-area-information">
                            <h3>'.$row["title"].'</h3>
                            <div>
                                '.$row["text"].'
                            </div>
                            <span>'.$row["tags"].'</span>
                        </div>';
                        if ($title == 'Панель администратора') {
                            echo '<div class="btnRegBOX">
                                    <form action="bin/php/del.php" method="POST">
                                        <input type="hidden" value="'.$row["id"].'" name="newsName">
                                        <button class="adminRegBTN" id="adminDelete">🗑️</button>
                                    </form>
                                </div>';
                            echo
                            '<form action="bin/php/reg.php" method="POST" style="visibility: none">
                                <input class="regNewsTitle"  placeholder="Введите новый заголовок" name="title" value="'.$row["title"].'">
                                <textarea class="regNewsText" placeholder="Введите новый текст" name="text">'.$row["text"].'</textarea>
                                <input type="hidden" value="'.$row["id"].'" name="newsName">
                                <button class="adminEditBTN" id="adminReg">🖊️</button>
                            </form>';
                        };
                    echo '</div>';
                }
            }
        }
    ?>