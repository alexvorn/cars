<?php 
require( dirname(__FILE__) . '/wp-load.php' );


if (isset($_POST['formtype'])) {

    $email = 'vautomir24@gmail.com';

    switch($_POST['formtype']) {
        case "headerform":

            $msg = 'Привет!' . "\n\n";
            $msg .= 'Новый запрос с сайта automir24 с формы '.$_POST['formtype']. "\n\n";
            $msg .= 'Имя пользователя: '.$_POST['yourname']. "\n";
            $msg .= 'Телефон: '.$_POST['yourphonenumber']. "\n\n";
            $msg .= 'Звони! Не упусти клиента!'. "\n\n";

            wp_mail($email, 'Новый запрос с формы: '.$_POST['formtype'], $msg, []);

            header("Location: /?form=ok");
            exit;

            break;
        case "list_form":

            $msg = 'Привет!' . "\n\n";
            $msg .= 'Новый запрос с сайта automir24 с формы Тут были старый и ворона :) '. "\n\n";
            $msg .= 'Имя пользователя: '.$_POST['yourname']. "\n";
            $msg .= 'Телефон: '.$_POST['yourphonenumber']. "\n\n";
            $msg .= 'Марка авто: '.$_POST['modelofcar']. "\n\n";
            $msg .= 'Телефон: '.$_POST['clientemail']. "\n\n";
            $msg .= 'Звони! Не упусти клиента!'. "\n\n";

            wp_mail($email, 'Новый запрос с формы: '.$_POST['formtype'], $msg, []);

            header("Location: /?form=ok");

            exit;
            break;
        default:
            exit;
    }
}


?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Automir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./html/projectautomir/slick/slick-theme.css" />
    <link rel="stylesheet" href="./html/projectautomir/main.css">
    <link rel="stylesheet" type="text/css" href="./html/projectautomir/slick/slick.css" />

</head>
<body class="body">
    <?php if (isset($_GET['form']) && $_GET['form'] == 'ok'){ ?>
    <div class="banner">
        <p>Cпасибо что выбрали компанию automir24. Мы свяжемся с Вами в ближайшее время</p> <!-- всплывающее окно с уведомлением о том что сообщение отпралвено -->
            <div class="closebanner">
                <div></div>
                <div></div>
            </div>
    </div>
    <?php } ?>
    <main>
        <header class="header">
            <div class="container">
                <div class="conteiner-flex">
                    <div class="image">
                        <img src="./html/projectautomir/logos/automir.png" alt="automir">
                    </div>
                    <div class="block2">
                        <div class="header-right">
                            <div class="aboutus redoval"><a href="#aboot">О нас</a><img src="./html/projectautomir/logos/redoval.svg" alt="redoval"></div>
                            <div class="accessories redoval"><a href="#AutoAccessories">Автоаксессуары</a><img src="./html/projectautomir/logos/redoval.svg" alt="redoval"></div>
                            <div class="contacts redoval"><a href="#contacts">Контакты</a><img src="./html/projectautomir/logos/redoval.svg" alt="redoval"></div>
                        </div>
                        <div>
                            <div class="buttomtop showmodal"><a href="#call">Заказать звонок</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
          <section class="main-section">
                <div class="container container-flex">
                    <div class="left-block">
                        <h1>Автоаксессуары с гарантией качества по низким ценам</h1>
                        <p class="description">Быстрая и бесплатная доставка по Украине</p>
                        <a href="#AutoAccessories" class="red">Перейти в каталог</a>
                        <div class="cards-wrap">
                            <div class="card">
                                <img src="./html/projectautomir/images/cube.svg" alt="cube">
                                <div class="cardtext">Возможен обмен либо возврат товара</div>
                            </div>
                            <div class="card">
                                <img src="./html/projectautomir/images/hand.svg" alt="hand">
                                <div class="cardtext">Более 10 лет на рынке</div>
                            </div>
                            <div class="card">
                                <img src="./html/projectautomir/images/heart.svg" alt="heart">
                                <div class="cardtext">Пошив чехлов под заказ</div>
                            </div>
                        </div>
                        <img src="./html/projectautomir/images/main-img.png" class="main-img" alt="main">
                    </div>
                    <img src="./html/projectautomir/images/main-img.png" class="main-img" alt="main">
                </div>
            </section>
        <section class="catalog">
            <div class="container">
                <a id="AutoAccessories"></a>
                <span class="hidetext">Качество</span>
                <h2>Наш каталог</h2>
                <p>Более 5 000 наименований товаров в наличии на складе</p>
                <div class="catalogtext">
                    <div class="catalogtexttop">
                        <div class="buttom-tabs active">Чехлы для авто</div>
                        <div class="buttom-tabs">Коврики в салон</div>
                        <div class="buttom-tabs">Коврики в багажник</div>
                        <div class="buttom-tabs">Дифлекторы</div>
                        <div class="buttom-tabs">Брызговики</div>
                    </div>
                    <div class="linetopblock"></div>
                </div>
                <div class="catalogblock">
                    <div class="tab-item active">
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/leather/33.jpg" alt="33">
                            <div class="textblock">
                                <div class="toptext">Чехлы экокожа</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Продление срока эксплуатации обивки сидений
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Легкость в уходе </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Создание привлекательного интерьера автомобиля
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Высокая износостойкость </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 1500грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/leather/11.jpg" alt="11" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/22.jpg" alt="22"/>
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/44.png" alt="44" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/55.png" alt="55" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/66.png" alt="66"/>
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/77.png" alt="77" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/8.jpg" alt="8" />
                                    </div>
                                    <!-- <div>
                                        <img src="./html/projectautomir/images/leather/9.jpg" alt="9" />
                                    </div> -->
                                    <div>
                                        <img src="./html/projectautomir/images/leather/10.jpg" alt="10" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/11.jpg" alt="11" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/12.jpg" alt="12" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/13.jpg" alt="13" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/leather/14.jpg" alt="14" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/comb/2.jpg" alt="2">
                            <div class="textblock">
                                <div class="toptext">Чехлы комбинированные</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Иностранные производители </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Плотная ткань </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Высокая теплопроводность </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Не вызывает прелость сидения </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 1300грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/comb/1.jpg" alt="1" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/comb/3.jpg" alt="3"/>
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/comb/4.jpg" alt="4" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/comb/5.jpg" alt="5" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/comb/6.jpg" alt="6" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/comb/7.jpg" alt="7" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/comb/8.jpg" alt="8" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/cloth/2.jpg" alt="2">
                            <div class="textblock">
                                <div class="toptext">Чехлы тканевые</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Высокая износоустойчивость </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Стойкость к выгоранию на солнце </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Приятная на ощупь </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Легко чистить и стирать </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 650грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/cloth/1.jpg" alt="1" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/cloth/3.jpg" alt="3"/>
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/cloth/4.jpg" alt="4" />
                                    </div>
                                    <!-- <div>
                                        <img src="./html/projectautomir/images/cloth/5.jpg" alt="5" />
                                    </div> -->
                                    <div>
                                        <img src="./html/projectautomir/images/cloth/6.jpg" alt="6" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-flex tab-item">
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/interior_mats/7.jpg" alt="7">
                            <div class="textblock">
                                <div class="toptext">Резиновые</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow" >Высокий борт </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Не лопаются при низких температура</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Устойчивость к износу </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 380грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/6.jpg" alt="2"
                                        />
                                    </div>
                                     <div>
                                        <img src="./html/projectautomir/images/interior_mats/32.jpg" alt="3" />
                                    </div> 
                                     <div>
                                        <img src="./html/projectautomir/images/interior_mats/20.jpg" alt="3" />
                                    </div> 
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/4.jpg" alt="3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/interior_mats/29.jpg" alt="2">
                            <div class="textblock">
                                <div class="toptext">Текстильные</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Придают дополнительный комфорт </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Отлично задерживают в себе пыль и песок </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Хорошо впитывают грязь и влагу </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Легко моются и чистятся </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 450грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/22.jpg" alt="22" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/23.jpg" alt="33"
                                        />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/24.jpg" alt="44" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/25.jpg" alt="55" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/26.jpg" alt="66" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/27.jpg" alt="66" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/28.jpg" alt="66" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/29.jpg" alt="66" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/30.jpg" alt="66" />
                                    </div>
                                     <div>
                                        <img src="./html/projectautomir/images/interior_mats/21.jpg" alt="66" />
                                    </div> 
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/31.jpg" alt="66" />
                                    </div>
                                    <!-- <div>
                                        <img src="./html/projectautomir/images/interior_mats/32.jpg" alt="66" />
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/interior_mats/2.jpg" alt="11">
                            <div class="textblock">
                                <div class="toptext">Полиуретановые</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">В точности повторяют конфигурацию пола </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">В два раза легче резиновых </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Большой ресурс службы </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 450грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <!-- <div>
                                        <img src="./html/projectautomir/images/interior_mats/5.jpg" alt="4" />
                                    </div> -->
                                     <div>
                                        <img src="./html/projectautomir/images/interior_mats/33.jpg" alt="5"
                                        />
                                    </div> 
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/9.jpg" alt="6" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/10.jpg" alt="7" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/11.jpg" alt="7" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/35.jpg" alt="7" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/36.jpg" alt="7" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/interior_mats/37.jpg" alt="7" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/trunk_mats/55.jpg" alt="55">
                            <div class="textblock">
                                <div class="toptext">Текстильные</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Легко чистятся
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">В точности повторяют конфигурацию пола </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Хорошо впитывают грязь и влагу
                                </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 450грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/11.jpg" alt="11" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/22.jpg" alt="22"
                                        />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/33.jpg" alt="33" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/44.jpg" alt="44" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/trunk_mats/1.jpg" alt="covers">
                            <div class="textblock">
                                <div class="toptext">Полиуретановые</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Большой модельный ряд </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Высокий порт </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Эластичны , и практичны при низких температурах
                                </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 500грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/2.jpg" alt="2" />
                                    </div>
                                        <div>
                                        <img src="./html/projectautomir/images/trunk_mats/3.jpg" alt="3"
                                        />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/4.jpg" alt="4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/trunk_mats/222.jpg" alt="222">
                            <div class="textblock">
                                <div class="toptext">Резиновые</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Доступная цена </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Большой модельный ряд </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Практичность в использовании </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 350грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/trunk_mats/111.jpg" alt="111" />
                                    </div>
                                        <div>
                                        <img src="./html/projectautomir/images/trunk_mats/333.jpg" alt="333"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/window_deflectors/1.jpg" alt="1">
                            <div class="textblock">
                                <div class="toptext">Дифлекторы окон</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Не выгорают при высоких температурах
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Не лопаются при низких температурах
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Возможность приобрести поштучно </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 320грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/window_deflectors/2.jpg" alt="2" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/window_deflectors/3.jpg" alt="3"/>
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/window_deflectors/4.jpg" alt="4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/hood_deflectors/7.jpg" alt="covers">
                            <div class="textblock">
                                <div class="toptext">Дифлектор капоты (Мухобойка)</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Качественные и надежные крепления
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Широкий ассортимент </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Доступная цена
                                </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 350грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/hood_deflectors/1.jpg" alt="covers" />
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/hood_deflectors/3.jpg" alt="covers"/>
                                    </div>
                                    <div>
                                        <img src="./html/projectautomir/images/hood_deflectors/4.jpg" alt="covers" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/mud_flaps/1.jpg" alt="1">
                            <div class="textblock">
                                <div class="toptext">Оригинальные</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Качественные и надежные крепления
                                </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Высокая устойчивость к износу </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 650грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/mud_flaps/3.jpg" alt="3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cataloginteriorblock">
                            <img src="./html/projectautomir/images/mud_flaps/4.jpg" alt="covers">
                            <div class="textblock">
                                <div class="toptext">Универсальные</div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Широкий ассортимент </div>
                                <div class="texttabs"><img src="./html/projectautomir/logos/red_arrow.png" alt="red_arrow">Доступная цена </div>
                            </div>
                            <div class="show-more">Смотреть еще</div>
                            <div class="linecenterblock"></div>
                            <div class="container-flex">
                                <div class="bottomtext">От 150грн</div>
                                <div class="buttonbuy showmodal">Купить</div>
                            </div>
                            <div class="slider-wrap">
                                <div class="layer"></div>
                                <div class="slick-wrap">
                                    <div>
                                        <img src="./html/projectautomir/images/mud_flaps/2.jpg" alt="2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="catalog2">
            <div class="container">
                <span class="hidetext">ДОВЕРИЕ</span>
                <h3>Так и не смогли выбрать? Мы вам поможем!</h3>
                <p>Заполните форму и наш специалист подберет вам лучший вариант</p>
                <div class="list">
                    <form action="/" method="POST"> <!-- эта строка обязательна и менять не нужно -->
                        <input type="hidden" name="formtype" value="list_form" /> <!-- обязательна: тип запроса, нужно менять value -->
                        <div class="container container-flex2">
                            <ul class="menu ">
                                <li>
                                    <!-- <a id="select-button" href="javascipt:void(0)">Выберите аксессуар</a>
                                    <ul id="advancing-list" class="advancing ">
                                        <li><a href="javascipt:void(0)">Коврики в салон</a></li>
                                        <li><a href="javascipt:void(0)">Чехлы для авто</a></li>
                                        <li><a href="javascipt:void(0)">Коврики в багажник</a></li>
                                        <li><a href="javascipt:void(0)">Дифлекторы</a></li>
                                        <li><a href="javascipt:void(0)">Брызговики</a></li>
                                    </ul> -->
                                    <!-- <ul> -->
                                        <li><input type="text" name="modelofcar" placeholder="Модель авто" class="modelofcar"></li>
                                        <li><input type="text" name="yourname" placeholder="Ваше имя" class="yourname"></li>
                                        <li><input type="tel" name="yourphonenumber" placeholder="Номер телефона" class="yourphonenumber"></li>
                                        <li><input type="text" name="clientemail" placeholder="Электронная почта" class="yourphonenumber"></li>
                                    <!-- </ul> -->
                                </li>
                                <button type="submit" class="red widthbottom">Помочь подобрать</button>
                                <!-- <li id="btn-help" class="red width">Помочь подобрать</li> -->
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </section>
         <section class="information ">
            <div class="container">
                <span class="hidetext">ДОВЕРИЕ</span>
                <h4>Почему именно мы</h4>
                <p>Более 5 000 наименований товаров в наличии на складе</p>
                <div class="container-flex">
                    <a name="aboot"></a>
                    <div class="information2 ">
                        <h5>О нас</h5>
                        <p>Помечу именно нас выбирают автовладельцы? Еженедельно у нашей компании около 300-та клиентов заказывают
                            модельные чехлы,чехлы под индивидуальный пошив ,коврики и прочие аксессуары по причине качественного
                            сервиса! Что в нашем понимании качественный сервис? Человек приобретает не вещь, он приобретает
                            эмоцию,это самое главное в жизни! И мы построили свою работу таким образом,что бы наши клиенты
                            получали позитивные эмоции на каждом этапе работы с нами! Работа с консультантом,большой ассортимент
                            ,быстрая доставка,качество товара,скидки и решение любых вопросов в пользу наших клиентов! Для
                            нас очень важны позитивные эмоции наших клиентов! Ответ прост!
                        </p>
                        <ul class="card2">
                            <li>
                                <img src="./html/projectautomir/logos/package.svg" alt="package" /> Аксессуары для более <span class="colortext">200</span>                                марок авто
                            </li>
                            <li>
                                <img src="./html/projectautomir/logos/Shape.svg" alt="shape" />
                                <span class="colortext">Лучшие</span> производители со всего мира
                            </li>
                            <li>
                                <img src="./html/projectautomir/logos/Shape2.svg" alt="shape2" /> Оплата любым <span class="colortext">удобным</span>                                способом
                            </li>
                        </ul>
                    </div>
                    <div class="commend">
                        <div class="block-right">
                            <img src="./html/projectautomir/logos/chehli.png" alt="chehli">
                        </div>
                    </div>
                </div>
                <div class="commendtext">
                    <h6>Отзывы</h6>
                    <div class="container-flex">
                        <div class="slider-wrap">
                            <div class="comments">
                                <div>
                                    <div class="firstcommend">
                                        <div class="commendimg">
                                            <div class="commend-title">
                                                <span class="name">Оксана Войтенко</span>
                                                <span class="avto">Водитель Nissan Qashqai</span>
                                            </div>
                                        </div>
                                        <p>"Решила купить мужу в машину новые чехлы, но были сомнение какого типа взять чехлы
                                            в чем их разница и главное понравятся ли мужу. Но ребята консультанты отлично
                                            объяснили и подобрали. Муж довольный и я тоже)Спасибо!"
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="firstcommend">
                                        <div class="commendimg">
                                            <div class="commend-title">
                                                <span class="name">Антон Брюховетский</span>
                                                <span class="avto">Водитель Deo Lanos</span>
                                            </div>
                                        </div>
                                        <p>"Ребята молодцы! Заказал коврики в салон, пришли ко мне, но не понравился цвет. Переживал
                                            на счет обмена или возврата, но консультант Егор меня успокоил по этому поводу.
                                            Выбрали другой цвет, а потом еще мне рассказали за акции и вдобавок я взял чехлы."
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="firstcommend">
                                        <div class="commendimg">
                                            <div class="commend-title">
                                                <span class="name">Квавец Сергей</span>
                                                <span class="avto">Водитель Audi A6</span>
                                            </div>
                                        </div>
                                        <p>"Заказал в другом магазине чехлы для отца на день рождение, сказали что пришлют через
                                            день. В итоге я прождал 7 и отказался от заказа. Наткнулся на ресурс Automir,
                                            понравился сайт и решил попробовать заказать, времени было мало. На в течении
                                            нескольких дней чехлы были у меня! Выручили, спасибо."
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="firstcommend">
                                        <div class="commendimg">
                                            <div class="commend-title">
                                                <span class="name">Дмитрий Мальцев</span>
                                                <span class="avto">Водитель Renault Logan</span>
                                            </div>
                                        </div>
                                        <p>"Хороший, качественные продукт за приемлемую цену !"
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="firstcommend">
                                        <div class="commendimg">
                                            <div class="commend-title">
                                                <span class="name">Лобос Константин</span>
                                                <span class="avto">Водитель Mazda x3</span>
                                            </div>
                                        </div>
                                        <p>Купил в Avtomir чехлы в машину и через 11 дней разлезся шев! Позвонил, пообщялись,
                                            ивинивись и мне по гарантии все оперативно поменяли."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="communications">
            <div class="container">
                <div class="textposition">
                    <div class="hidetext position">Комфорт</div>
                    <h7>С нами удобно</h7>
                    <p>Более 5 000 наименований товаров в наличии на складе</p>
                </div>
                <div class="allblock">
                    <div class="calls">
                        <img src="./html/projectautomir/logos/callalls.svg" class="callall" alt="callall">
                        <div class="textcommunit">Связывайтесь с нами любым удобным способом</div>
                    </div>
                    <div class="days">
                        <img src="./html/projectautomir/logos/greendays.png" class="whitegreen" alt="whitegreen">
                        <div class="textcommunitday">Возврат в течении 14 дней</div>
                    </div>
                    <div class="payment">
                        <img src="./html/projectautomir/logos/oplata.svg" class="oplata" alt="oplata">
                        <div class="textcommunitoplata">Доставим и примим оплату любым удобным способом</div>
                    </div>
                </div>
            </div>
        </section>
          <section class="bottom-section">
            <div class="fon">
                <img src="./html/projectautomir/logos/audi.jpg" alt="audi">
            </div>
            <div class="container">
                <div class="textposition">
                    <div class="hidetext">ДОВЕРИЕ</div>
                    <div class="textbottom">Остались вопросы? Закажите обратный звонок и мы перезвоним вам в течении 5 минут</div>
                </div>
                <div class="bottombutton">
                    <button class="red showmodal">Заказать звонок</button>
                </div>
                <div class="blockline">
                    <div class="line"></div>
                </div>
                <div class="bottomblock">
                    <div class="textredaction">Либо свяжитесь удобным вам способом</div>
                    <div class="container-centr">
                        <a name="contacts"></a>
                        <div class="number">
                            <img src="./html/projectautomir/logos/phone.svg" alt="phone">
                            <div class="allnumber">(095) 040 57 98</div>
                        </div>
                        <div class="numbertwo">
                            <img src="./html/projectautomir/logos/phonetwo.svg" alt="phonetwo">
                            <div class="allnumber">(063) 874 04 74</div>
                        </div>
                        <div class="mail">
                            <img src="./html/projectautomir/logos/mail.svg" alt="mail">
                            <div class="allnumber">vautomir24@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <footer class="bottom">
            <div class="container container-flex">
                <div class="bottomright">
                    <img src="./html/projectautomir/logos/automirbottom.png" alt="automirbottom">
                </div>
                <div class="bottomleft">Copyright 2017. By AutoAs LLC.</div>
            </div>
        </footer>
         <div class="modal">
         	<form action="/" method="POST"> <!-- эта строка обязательна и менять не нужно -->
         		<input type="hidden" name="formtype" value="headerform" /> <!-- обязательна: тип запроса, нужно менять value -->
	            <div class="menucalls">
	                <div class="close">
	                    <div></div>
	                    <div></div>
	                </div>
	                <div class="modalblock">
	                    <div class="textmenucalls">Есть вопросы? Закажите обратный звонок и мы перезвоним вам в течении 5 минут</div>
	                    <div class="menunamecalls">
	                        <input type="text" name="yourname" placeholder="Ваше имя" class="yourname"> <!-- любое: имя -->
	                    </div>
	                    <div class="menunumbercalls">
	                        <input type="text" name="yourphonenumber" placeholder="Номер телефона" class="yourphonenumber"> <!-- любое: телефон -->
	                    </div>
	                    <button type="submit" class="red widthbottom">Оставить заявку</button> <!-- кнопка submit --> <!-- эта строка обязательна и менять не нужно -->
	                </div>
	            </div>
        	</form> <!-- эта строка обязательна и менять не нужно -->
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
        <script src="./html/projectautomir/slick/slick.min.js"></script>
        <script src="./html/projectautomir/index.js"></script>
    </main>
</body>
</html>
<?php echo 'Сейчас: '.date('Y-m-d H:i:s'); ?>

<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
//define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' );