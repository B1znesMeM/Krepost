<!doctypehtml><html lang=ru><head><?php require_once __DIR__ . '/components/head.php'; ?><title>Недвижимости</title><?php
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 8;
    $offset = $limit * ($page - 1);

    $count = $db->query("SELECT COUNT(*) FROM `items`")->fetchColumn();

    $total_pages = $count / $limit;

?><body id=items><main class=body-items><?php require_once __DIR__ . '/components/loader.php'; ?><div class=container><header class=header-items><div class=logo><a href=/ ><img alt="logo Krepost"src=/images/logo-items.webp class=logo-bg id=logo></a></div><div class=header-title>Предложения от компании Крепость</div></header><form action=/items.php class=search><input aria-label="Поиск заявок"class=search-input name=q placeholder="Поиск заявок..."type=search> <button class=search-button type=submit>Поиск</button></form><div class=items-main><div class=items-title><h1>Недвижимости</h1></div><div class=items-main-wrapper><?php
                                    if(isset($_GET['q'])){
                                        $q = $db->prepare("SELECT * FROM `items` WHERE `title` LIKE :q ORDER BY `id` DESC");
                                        $q->execute(['q' => "%{$_GET['q']}%"]);
                                        $items = $q->fetchAll(PDO::FETCH_ASSOC);

                                    } else {
                                        $items = $db->query("SELECT * FROM `items` ORDER BY `id` DESC LIMIT $limit OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC);
                                    }
                                    if(empty($items)) {
                                    ?><div class="alert alert-warning"role=alert>Ничего не найдено</div><?php
                                    }

                                    foreach($items as $item):  
                                        
                                    $q = $db->prepare("SELECT * FROM `tags` WHERE `id` = :id ");
                                    $q->execute(['id' => $item['type_action']]);
                                    $tag = $q->fetch(PDO::FETCH_ASSOC);
                                    
                                    ?><a href="item.php?id=<?= $item['id'] ?>"class=items-main-item-a><div class=items-main-item><h2><?= $item['title'] ?></h2><p><?= substr($item['description'], 0, 100) . '...'; ?><div class=items__item-text-additionally><div><p>Цена:</p><span><?= $item['price'] . '₽' ?></span></div><div><p>Тип действия:</p><span><?= $tag['label'] ?></span></div><div><p>Тип:</p><span><?= $item['type'] ?></span></div></div><div class="items-main-item-image notch"><img alt="<?= $item['title']; ?>"src="<?= $item['image'] ?>"></div></div></a><?php endforeach; ?></div><div class=more><?php
                $radius = 3;
                $current = $page;

                for($i = 0; $i <= $total_pages; $i++):
                if($i == $current - $radius || $i == $current + $radius) {
                    echo "... ";
                }
            ?><a href="?page=<?= $i + 1 ?>"class=more-a><?= $i + 1 ?></a><?php
            endfor; 
            ?></div></div><?php require_once __DIR__ . '/components/footer-items.php'; ?></div></main><?php require_once __DIR__ . '/components/script.php'; ?>