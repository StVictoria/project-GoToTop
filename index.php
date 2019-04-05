<?php
    $title = "Создание сайта для бизнеса";
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    $template['cards'] = [];

    $sql_content = "SELECT * FROM cards ORDER BY priority DESC";

    $result = mysqli_query($db_content, $sql_content);

    while ($row = mysqli_fetch_assoc($result)){
        $template['cards'][] = $row;
    }
?>
    <div class="header_pic">
        <div class="header_pic_background">
            <div class="wrapper">
                <a href="#" class="header_pic_previous"></a>
                <a href="#" class="header_pic_next"></a>
                <div class="header_pic_space_for_content">
                    <div class="header_pic_content">
                        <h1>Ваш сайт - главный бизнес-инструмент</h1>
                        <p>GO TO TOP - Ваш быстрый старт продаж</p>
                    </div>
                </div>
                <div class="button">О нас</div>
            </div>
        </div>
    </div>
    <div class="suggestions_box">
        <div class="wrapper">
            <div class="suggestions_box_menu">
                <?php foreach ($template['cards'] as $cardItems):?>
                    <div class="suggestions_box_menu_card">
                        <div class="pic_site details" style="background-image: url(<?=$cardItems['pic']?>);"></div>
                        <h2><?=$cardItems['h2']?></h2>
                        <p><?=$cardItems['description']?></p>
                    </div>
                <?php endforeach;?>
                <!-- <div class="suggestions_box_menu_card">
                    <div class="pic_audience details"></div>
                    <h2>Выберем аудиторию</h2>
                    <p>Составим аудиторию Ваших потенциальных клиентов для качественных продаж.</p>
                </div>
                <div class="suggestions_box_menu_card">
                    <div class="pic_statistics details"></div>
                    <h2>Настроим статистику</h2>
                    <p>Настроим статистику сайта, будем анализировать действия пользователей и улучшать функционал.</p>
                </div>
                <div class="suggestions_box_menu_card">
                    <div class="pic_social details"></div>
                    <h2>Разовьём соц. сети</h2>
                    <p>Для качественных продаж крайне необходимо вести активную деятельность в социальных сетях. Наши специалисты комплексно подойдут к вопросу привлечения клиентов через соц. сети.</p>
                </div>
                <div class="suggestions_box_menu_card">
                    <div class="pic_budget details"></div>
                    <h2>Минимизируем бюджет</h2>
                    <p>Главное не тратить деньги впустую. Мы следим за тем, какая реклама даёт максимальный результат и стремимся найти самые активные точки продаж для минимизации рекламного бюджета.</p>
                </div>
                <div class="suggestions_box_menu_card">
                    <div class="pic_clients details"></div>
                    <h2>Привлечём клиентов</h2>
                    <p>Наша цель - максимальное количество клиентов для Ваших продаж. Мы работаем по всем направлениям в интернет-маркетинге для того, чтобы найти именно Ваших потенциальных клиентов!</p>
                </div> -->
            </div>
        </div>
    </div>
    <div class="connection">
        <div class="wrapper">
            <div class="connection_box">
                 <h2>Хотите начать зарабатывать в интернете? Просто свяжитесь с нами.</h2>
                 <div class="button">Связаться</div>
             </div>
         </div>
    </div>
    <div class="last_projects">
        <div class="wrapper">
            <h2>Последние работы</h2>
            <div class="last_projects_examples">
                <!-- <img src="/pics/site1.jpg" alt="Блестящая коллекция Confetty">
                <img src="/pics/site2.jpg" alt="Покрытия для сцены">
                <img src="/pics/site3.jpg" alt="Toy Land"> -->
                <div class="confetty details"></div>
                <div class="floors details"></div>
                <div class="toys details"></div>
            </div>
        </div>
    </div>
    <div class="representation">
        <div class="wrapper">
            <div class="representation_box">
                <div class="representation_box_item">
                    <h2>456</h2>
                    <p>Счастливых клиентов</p>
                </div>
                <div class="representation_box_item">
                    <h2>322</h2>
                    <p>Проекта</p>
                </div>
                <div class="representation_box_item">
                    <h2>290</h2>
                    <p>Сайтов в топ</p>
                </div>
                <div class="representation_box_item">
                    <h2>132</h2>
                    <p>Сайта разработано</p>
                </div>
            </div>
        </div>
    </div>
   <div class="news">
       <div class="wrapper">
           <h2>Новости</h2>
           <div class="news_box">
               <div class="news_box_event">
                   <div class="photo_left"></div>
                   <div class="news_box_event_content">
                       <p><i>1 января 2018</i></p>
                       <p>Мы начинаем этот год с наших новых разработок в области маркетинга. Ждём Вас на наших тренингах и лекциях</p>
                        <div class="button">Подробнее</div>
                    </div>
               </div>
               <div class="news_box_event">
                    <div class="photo_right"></div>
                    <div class="news_box_event_content">
                        <p><i>12 марта 2018</i></p>
                        <p>Мы работаем, Вы отдыхаете! Теперь мы предоставляем полный спектр услуг по привлечению клиентов.</p>
                        <div class="button">Подробнее</div>
                    </div>
               </div>
           </div>
       </div>
   </div>
   <div class="write_us">
       <div class="wrapper">
            <h2>Напишите нам</h2>
            <form method="POST" action="form.php">
                <div class="info_block">
                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="phone" placeholder="Телефон">
                    <textarea name="comment_for_adaptive" placeholder="Ваше сообщение"></textarea>
                    <button type="submit">Отправить вопрос</button>
                </div>
                <textarea name="comment" placeholder="Ваше сообщение"></textarea>
            </form>
            <div class="error_message"></div>
       </div>
   </div>
<?php
    include('parts/footer.php');
?>