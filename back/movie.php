<button onclick="location.href='?do=add_movie'">新增電影</button>
<hr>
<style>
    .item div {
        box-sizing: border-box;
        color: black;
    }

    .item {
        background-color: white;
        width: 100%;
        display: flex;
        padding: 3px;
        box-sizing: border-box;
        margin: 3px 0;
    }

    .item>div:nth-child(1) {
        width: 15%;
    }

    .item>div:nth-child(2) {
        width: 12%;
    }

    .item>div:nth-child(3) {
        width: 73%;
    }
</style>
<div style="width:100%;height:415px;overflow:auto">
    <?php
    $movies = $Movie->all("order by rank");
    foreach ($movies as $movies) {
    ?>
        <div class="item">
            <div>
                <img src="./img/<?= $movies['poster']; ?>" style="width: 100%;">
            </div>
            <div>分級:
                <img src="./icon/03c0<?= $movies['level']; ?>.png" alt="" style="width: 25px;">
            </div>
            <div>
                <div style="display:flex;width:100%">
                    <div style="width: 33.33%;">
                        片名:<?= $movies['name']; ?>
                    </div>
                    <div style="width: 33.33%;">
                        片長:<?= $movies['length']; ?>
                    </div>
                    <div style="width: 33.33%;">
                        上映時間:<?= $movies['ondate']; ?>
                    </div>
                </div>
                <div>
                    <button>顯示</button>
                    <button>往上</button>
                    <button>往下</button>
                    <button>編輯電影</button>
                    <button>刪除電影</button>
                </div>
                <div>
                    劇情介紹:<?= $movies['intro']; ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>