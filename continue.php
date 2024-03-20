<?php
require_once 'hero.php';
require_once 'mysql.php';
continueGame();
// continueGame($hero);
function continueGame()
{
    echo "選擇你的角色名稱" . PHP_EOL;
    //串接DB原有角色
    global $dblink;

    // 用mysqli_query方法執行(sql語法)將結果存在變數中
    $result = mysqli_query($dblink, "select * from hero");
    if (mysqli_num_rows($result) === 0) {
        echo '還沒有英雄，請先創建角色';
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"] . PHP_EOL;
    }

    $heroName = trim(fgets(STDIN));
    // $sql = "select * from `hero` where `name`=" . $heroName;
    $sql = "select * from hero where name=" . "'" . $heroName . "'";
    // $sql = "select * from hero where name='test2'";
    // $sql = "select * from 'hero' where 'name'=newHero";
    $result = mysqli_query($dblink, $sql);
    $hero = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) === 0) {
        echo '角色名字打錯摟' . PHP_EOL;
        // throw new Exception('角色名字打錯摟');
    }
    echo implode('' . PHP_EOL, $hero);



    echo "數字選擇 1.進到下一關 2.存擋 3.查看目前英雄能力：";
    $start = fgets(STDIN);
    if ($start == 1) {
        // echo "進入 ($hero->stage+1)關";
    } else if ($start == 2) {
        // save();
    } else if ($start == 3) {
        // $hero->printAttributes();
    } else {
        echo "請輸入1/2/3";
    }
}

?>