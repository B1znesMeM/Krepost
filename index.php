<!doctypehtml><html lang=ru><head><?php require_once __DIR__ . '/components/head.php'; ?><script src="https://api-maps.yandex.ru/2.1/?apikey=ad86c022-34cc-43d6-bb40-3818c43eeb4a&lang=ru_RU"></script><script>function initMap() {

let center = [44.72250257458077,37.77512799999991];

function initMap() {
    let map = new ymaps.Map('map', {
        center: center,
        zoom: 16
    });

    let placemark = new ymaps.Placemark(center,{},{
        iconLayout: 'default#image',
        iconImageHref: '/images/pin.webp',
        iconImageSize: [40, 40],
        iconImageOffset: [-22, -40]
    })

    map.controls.remove('geolocationControl'); // удаляем геолокацию
    map.controls.remove('searchControl'); // удаляем поиск
    map.controls.remove('trafficControl'); // удаляем контроль трафика
    map.controls.remove('typeSelector'); // удаляем тип
    map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    // map.controls.remove('zoomControl'); // удаляем контрол зуммирования
    map.controls.remove('rulerControl'); // удаляем контрол правил
    map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

    map.geoObjects.add(placemark)
}

ymaps.ready(initMap);

}</script><style>#map{width:100%;height:900px}@media (max-width:960px){#map{width:100%;height:600px}}@media (max-width:530px){#map{width:100%;height:400px}}</style><title>Главная</title><body id=index onload=initMap()><main><?php require_once __DIR__ . '/components/loader.php'; ?><section class=mobile-nav><div class=container><div class=header-wrapper><div class=logo><img alt="logo Krepost"src=/images/Oktagon.svg class=logo-bg></div><nav class=header-nav><ul class=ul-nav><li class=header-nav-mobile id=menu-del>Закрыть</ul></nav></div><div class=title id=title><div class=container><img alt="Title svg"src=/images/Title-krepost.svg class=title-img></div></div><nav class=nav-mobile><ul class=ul-nav><li><a href=items.php class=header-nav-a>Недвижимости</a></ul></nav></div></section><header class=header id=header><div class=container><div class=header-wrapper><div class=logo><img alt="logo Krepost"src=/images/Oktagon.svg class=logo-bg id=logo></div><nav class=header-nav id=header-nav><ul class=ul-nav><li><a href=#about class=header-nav-a>О нас</a><li><a href=#contact class=header-nav-a>Контакт</a><li><a href=items.php class=header-nav-a>Недвижимости</a><li><a href=#partners class=header-nav-a>Партёры</a><li class=header-nav-mobile id=menu>Меню</ul></nav></div></div></header><div class=title><div class=container><img alt="Title svg"src=/images/Title-krepost.svg class=title-img></div></div><section class="notch about"><div class=container><div class=about-text><div class=about__text-one><h3 class=about__text-one-title>Компания Крепость поможет вам купить, продать, сдать, арендовать.</h3></div><div class=about__text-two><h2 class=about__text-two-subtitle>С нами большие возможности.</h2></div></div><div class=about-images><div class=about__images-one><img alt="About image one"src=/images/photo-about.webp class=about__images-one-img></div><div class=about__images-two><img alt="About image two"src=/images/photo-demo.webp class="notch about__images-two-img"></div></div><div class=text-title><h1 class=text__title>Крепость - это компания которая ассоциируется с комфортом и надежностью. Работая с нами вы покупаете, арендуете, сдаете или продаёте не просто недвижимость, дом, землю - вы получаете удобство и надежность.</h1></div><div class=about-main><div class="notch about-main-image"><img alt="about image"src=/images/photo-demo-2.webp class=about-main-image-img></div><div class=about-main-text id=about><div class=about-main-text-block><h2 class=about-main-text-title>О нас</h2><h3 class=about-main-text-subtitle>От волнения к умиротворению. От уродливового к совершенству. С компанией Крепость.</h3></div><div class=about-main-text-paragraph><p>20 лет работы с клиентами и 99% довольны нашей работой. Наши клиенты получают превосходную работу. Мы продаём вам более, чем дома или недвижимость, мы продаём вам комфорт и спокойствие.<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi in repudiandae soluta placeat nulla cumque dolor, ut similique ullam possimus. Minima amet consequatur facere ea voluptates debitis atque doloribus dolore. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere amet mollitia id maxime minus consequatur? Repudiandae sunt praesentium quia ducimus deserunt nulla molestiae delectus iure impedit, magni obcaecati natus in.<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, aut quasi officiis neque, tempora saepe hic molestiae, asperiores consequatur incidunt reprehenderit. Dicta deleniti placeat expedita quos ducimus laboriosam recusandae eligendi.</div></div></div><div class=about-bottom><div class=about-bottom-text><h3 class=about-bottom-text-title>Контакты</h3></div></div></div></section><section class="notch contact"id=contact><div class=container><div class="notch contact-forms"><?php require_once __DIR__ . '/components/form.php'; ?><div class=contact-form-image><img alt="Contact photo"src=/images/music.webp></div></div><div class=contact-text><div class=about-main-text-block><h2 class=about-main-text-title>Контакты</h2><h3 class=about-main-text-subtitle>Мы выполняем свою работу также шедевряльно, как музыка.</h3></div><div class=contact-text-paragraph><p>20 лет работы с клиентами и 99% довольны нашей работой. Наши клиенты получают превосходную работу. Мы продаём вам более, чем дома или недвижимость, мы продаём вам комфорт и спокойствие.<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi in repudiandae soluta placeat nulla cumque dolor, ut similique ullam possimus. Minima amet consequatur facere ea voluptates debitis atque doloribus dolore. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere amet mollitia id maxime minus consequatur? Repudiandae sunt praesentium quia ducimus deserunt nulla molestiae delectus iure impedit, magni obcaecati natus in.<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, aut quasi officiis neque, tempora saepe hic molestiae, asperiores consequatur incidunt reprehenderit. Dicta deleniti placeat expedita quos ducimus laboriosam recusandae eligendi.</div></div><div class=contact-bottom><div class=contact-bottom-text><h3 class=contact-bottom-text-title>Недвижимости</h3></div></div></div></section><section class="notch items"><div class=container><div class=items-wrapper id=items><?php

$items = $db->query("SELECT * FROM `items`  ORDER BY `id` DESC LIMIT 9")->fetchAll(PDO::FETCH_ASSOC);

foreach($items as $item): ?><div class=card><div class="cover item-a"style="background-image:url(<?= $item['image']; ?>)"><h1><?= $item['title'] ?></h1><span class=price><?= $item['price'] ?><span>₽</span></span><div class=card-back><a href="item.php?id=<?= $item['id']; ?>">Подробнее...</a> <a href=items.php>Недвижимости</a></div></div></div><?php endforeach; ?></div><div class=items__a><a href=items.php class=items__text-a>Посмотреть больше...</a></div></div></section><section class="notch partners"><div class=partners-wrapper><div class=map><div id=map></div></div><div class=partners-block-text><h2 class=partners-title>Банки-партнёры</h2><div class=partners-icons id=partners><ul><li><img alt="icon VTB bank"src=/images/vtb.svg><li><img alt="icon Sovkombank bank"src=/images/sovcombank.svg><li><img alt="icon Sberbank bank"src=/images/sberbank.svg><li><img alt="icon Kuban bank bank"src=/images/kk-bank.svg></ul></div><div class=partners-text><div class="partners-text__item partners-text__item-one">Смотрите</div><div class="partners-text__item partners-text__item-two">В будущее</div><div class="partners-text__item partners-text__item-three">С нами</div></div></div></div></section><footer class="notch footer"><div class=container><div class=footer-title-image><img alt="Title svg"src=/images/Title-krepost.svg class=title-img></div><div class=footer-images><div class=footer-image><a href=#header><img alt=footer-image-header src=/images/footer-photo-one.webp></a></div><div class=footer-image><a href=#about><img alt=footer-image-about src=/images/footer-photo-two.webp></a></div><div class=footer-image><a href=#contact><img alt=footer-image-contact src=/images/footer-photo-three.webp></a></div><div class=footer-image><a href=#items><img alt=footer-image-items src=/images/footer-photo-four.webp></a></div><div class=footer-image><a href=#partners><img alt=footer-image-partners src=/images/footer-photo-five.webp></a></div></div></div><div class=container><p class=footer-map__site>В соответствии с положениями п. 1 ст. 1229 ГК РФ, исключительные права на все материалы, размещенные на сайте https://krepostagenstvo.ru, принадлежат их правообладателям. Использование материалов размещенных на сайте возможно только с письменного согласия правообладателя. Любое неправомерное использование указанных материалов третьими лицами и/или организациями, а именно, копирование, цитирование, размещение на других сайтах без официального разрешения правообладателей влечет за собой ответственность, предусмотренную действующим законодательством РФ о защите исключительных прав.</div><p class=copyright>©<span id=year></span> Крепость | Все права защишены</footer></main><?php require_once __DIR__ . '/components/script.php'; ?>