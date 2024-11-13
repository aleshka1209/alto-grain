<?php
if (!isset($_POST['category']) && !isset($_POST['subcategory'])) {
    // По умолчанию отображается краткое описание всех категорий
    echo "<h2 class='category__title'>Продукция</h2>";

    // Краткое описание для "Зерновые культуры"
    echo "<div class='category__item'>";
    echo '<div class="products__img"><img src="/img/prod/1.png" alt="Зерновые культуры" style="width: 100%; max-width: 300px; margin-bottom: 10px;"> </div>';
    echo '<div class="products__info">';
    echo '<h3>Зерновые культуры</h3>';
    echo "<p class='products__text'>Зерновые культуры - важнейшая группа возделываемых растений, дающих зерно, основной продукт питания человека, сырьё для многих отраслей промышленности и корма для сельскохозяйственных животн...</p>";
    echo '<button class="btn-more btn header__item_active" data-category="zernovye">Подробнее</button>';
    echo '</div>';
    echo "</div><hr>";

    // Краткое описание для "Масличные культуры"
    echo "<div class='category__item'>";
    echo '<div class="products__img"><img src="/img/prod/2.png" alt="Масличные культуры" style="width: 100%; max-width: 300px; margin-bottom: 10px;"> </div>';
    echo '<div class="products__info">';
    echo '<h3>Масличные культуры</h3>';
    echo "<p class='products__text'>Масличные культуры - растения, возделываемые для получения жирных масел. Объединяют однолетние и многолетние растения различных семейств: сложноцветных - подсолнечник, сафлор; бобовых - соя,...</p>";
    echo '<button class="btn-more btn header__item_active" data-category="zernovye">Подробнее</button>';
    echo '</div>';
    echo "</div><hr>";

    // Краткое описание для "Бобовые культуры"
    echo "<div class='category__item'>";
    echo '<div class="products__img"><img src="/img/prod/3.png" alt="Бобовые культуры" style="width: 100%; max-width: 300px; margin-bottom: 10px;"> </div>';
    echo '<div class="products__info">';
    echo '<h3>Бобовые культуры</h3>';
    echo "<p class='products__text'>Бобовые культуры (зерновые бобовые культуры, в кулинарии - просто бобовые) - группа некоторых растений порядка Бобовые, возделываемых ради плодов, являющихся продуктами питания. Бобовым при...</p>";
    echo '<button class="btn-more btn header__item_active" data-category="zernovye">Подробнее</button>';
    echo '</div>';
    echo "</div><hr>";


} elseif (isset($_POST['category']) && !isset($_POST['subcategory'])) {
    // Логика для отображения конкретной категории (например, "Зерновые культуры")
    $category = $_POST['category'];
    // В зависимости от категории выводим нужную информацию
    if ($category == 'zernovye') {
        echo "<h2 Продукция class='category__title'>Продукция</h2>";

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/1.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Пшеница</h3>';
            echo "<p>Пшеница - основная зерновая культура. По срокам посева ее подразделяют на яровую и озимую. В зависимости от ботанических особенностей делят на основные виды — мягкую и твердую Мягкая пшени...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="zernovye" data-subcategory="pshenica">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/2.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Ячмень</h3>';
            echo "<p>Ячмень - быстросозревающая (вегетационный период длится 70 дней) яровая культура, произрастающая повсеместно. Делится на шестирядный и двурядный. Из ячменя вырабатывают перловую и ячневую кр...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="zernovye" data-subcategory="yachmen">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/3.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Кукуруза</h3>';
            echo "<p>Кукуруза по форме, строению початка и зерна подразделяется на кремнистую, зубовидную, полузубовидную, сахарную, пленчатую, крахмалистую, восковидную, лопающуюся и др. Содержит меньше, чем ...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="zernovye" data-subcategory="kukuruza">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/4.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Гречиха</h3>';
            echo "<p>Гречиха имеет плод трехгранной формы, покрытый не цветочными пленками, как у злаков, а плотной плодовой оболочкой, под которой находится ядро, состоящее из семенной оболочки, алейронового сл...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="zernovye" data-subcategory="buckwheat">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        

        

    } elseif ($category == 'maslichnye') {
        echo "<h2 Продукция class='category__title'>Продукция</h2>";

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/5.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Подсолнечник</h3>';
            echo "<p>Подсолнечник — перекрестноопыляющееся растение, что сильно затрудняет классификацию его разнообразных форм, сортов и гибридов. В современной классификации подсолнечник относится к семейств...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="maslichnye" data-subcategory="podsolnechnik">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/6.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Рапс</h3>';
            echo "<p>Рапс – это травянистое растение семейства капустных с очень развитым корнем (стержнем), который проникает в почву до 3 м. Основная часть корня – на глубине 20-30 см, что имеет важное техниче...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="maslichnye" data-subcategory="raps">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/7.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Лен</h3>';
            echo "<p>Масличность семян льна масличного — 42...44%, они содержат до 23 % белка. Из семян вырабатывают масло, которое используют главным образом для технических целей. Способность его быстро ...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="maslichnye" data-subcategory="len">Подробнее</button>';
        echo '</div>';
        echo '</div>';

    } elseif ($category == 'bobovye') {
        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/8.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Горох</h3>';
            echo "<p>Горох происходит из Афганистана и Восточной Индии. Плод гороха — боб — состоит из створок и семян. По строению створок бобов сорта гороха делят на сахарные и лущильные. Бобы саха...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="bobovye" data-subcategory="goroh">Подробнее</button>';
        echo '</div>';
        echo '</div>';

        echo '<div class="category__item">';
        echo '<div class="category__img"><img src="img/category/9.jpg" alt="Зерновые культуры"></div>';
        echo '<div class="products__info">';
            echo '<h3>Соя</h3>';
            echo "<p>Соя - универсальная мировая бобовая культура. Из сои получают муку, масло, молоко, сыр; ее добавляют в кондитерские изделия, консервы, соусы и другие продукты питания. Сою используют только ...</p>";
            echo '<button class="btn-more btn header__item_active" data-category="bobovye" data-subcategory="soya">Подробнее</button>';
        echo '</div>';
        echo '</div>';

    }
} elseif (isset($_POST['subcategory'])) {
    $subcategory = $_POST['subcategory'];
    
    if ($subcategory == 'pshenica') {
        echo "<h2 class='category__title'>Пшеница</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>Пшеница - основная зерновая культура. По срокам посева ее подразделяют на яровую и озимую. В зависимости от ботанических особенностей делят на основные виды — мягкую и твердую</p>";

        echo "<p>Мягкая пшеница имеет зерно стекловидной, полустекловидной или мучнистой консистенции, округлой или овальной формы, слегка расширенной к зародышу, с выраженной бородкой и глубокой бороздкой. Цвет зерна может быть белый, красный или желтый. Мягкая пшеница используется в кондитерском и хлебопекарном производствах.</p>";

        echo "<p>Твердая пшеница значительно отличается от мягкой. Зерно ее более удлиненной формы с утолщением на спинке у зародыша, ребристое, на разрезе стекловидное, просвечивающее, бородка развита слабо, бороздка открытая, неглубоко входящая внутрь зерна. Цвет от светло- до темно-янтарного. Оно содержит больше белка, сахара и минеральных веществ, чем мягкая пшеница. Твердую пшеницу используют для производства макаронных изделий, манной крупы, добавляют при размоле пшеницы с низкими хлебопекарными свойствами, получают муку-крупчатку.</p>";
        
        echo '<h3>Качественные показатели: СТ РК 10-46-2008</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Показатели</th>
                        <th colspan="5">Стандартные требования к качеству поставляемой пшеницы <br> (мягкихсортов)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1 класс</td>
                        <td>2 класс</td>
                        <td>3 класс</td>
                        <td>4 класс</td>
                        <td>5 класс</td>
                    </tr>
                    <tr>
                        <td>Натура, г/л, не менее</td>
                        <td>750</td>
                        <td>730</td>
                        <td>710</td>
                        <td>700</td>
                        <td>Не ограничивается</td>
                    </tr>
                    <tr>
                        <td>Влажность, % не более</td>
                        <td>14</td>
                        <td>14</td>
                        <td>14</td>
                        <td>14</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Зерновая примесь, % не более</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Сорная примесь, % не более</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>5</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Массовая доля белка, % на сухое вещество, не менее</td>
                        <td>13,5</td>
                        <td>12,5</td>
                        <td>11,5</td>
                        <td>9,5</td>
                        <td>Не ограничивается</td>
                    </tr>
                    <tr>
                        <td>Массовая доля сырой клейковины, %, не менее</td>
                        <td>28</td>
                        <td>25</td>
                        <td>23</td>
                        <td>18</td>
                        <td>Не ограничивается</td>
                    </tr>
                    <tr>
                        <td>Число падения, с, не менее</td>
                        <td>200</td>
                        <td>200</td>
                        <td>200</td>
                        <td>80</td>
                        <td>Не ограничивается</td>
                    </tr>
                </tbody>
            </table>
        ';


    } elseif ($subcategory == 'yachmen') {
        echo "<h2 class='category__title'>Ячмень</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>Ячмень - быстросозревающая (вегетационный период длится 70 дней) яровая культура, произрастающая повсеместно. Делится на шестирядный и двурядный. Из ячменя вырабатывают перловую и ячневую крупы, частично получают муку и солод. Этот злак является главным сырьем пивоваренного производства и используется на корм скоту.</p>";
        
        echo '<h3>Ячмень Гост 28672-90</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th rowspan="2">Наименование показателя</th>
                        <th colspan="3">Норма для поставляемого ячменя</th>
                    </tr>
                    <tr>
                        <th>На продовольственные цели</th>
                        <th>Для выработки солода в спиртовом производстве</th>
                        <th>На кормовые цели и для выработки комбикормов</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Цвет</td>
                        <td>Желтый с разными оттенками</td>
                        <td colspan="2">Свойственный здоровому зерну. Допускается потемневший</td>
                    </tr>
                    <tr>
                        <td>Влажность, %, не более</td>
                        <td>14,5</td>
                        <td>15,5</td>
                        <td>Не ограничивается</td>
                    </tr>
                    <tr>
                        <td>Натура, г/л, не менее</td>
                        <td>630</td>
                        <td>570</td>
                        <td>Не ограничивается</td>
                    </tr>
                    <tr>
                        <td>Сорная примесь, %, не более</td>
                        <td>2,0</td>
                        <td>2,0</td>
                        <td>5,0</td>
                    </tr>
                    <tr>
                        <td>Зерновая примесь, %, не более</td>
                        <td>7,0</td>
                        <td>3,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Мелкие зерна, %, не более</td>
                        <td>5,0</td>
                        <td>5,0</td>
                        <td>Не ограничивается</td>
                    </tr>
                    <tr>
                        <td>Зараженность вредителями</td>
                        <td colspan="3">Не допускается, кроме зараженности клещом не выше Iстепени</td>
                    </tr>
                    <tr>
                        <td>Способность прорастания, %, не менее</td>
                        <td></td>
                        <td>92,0</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        ';
    } elseif ($subcategory == 'kukuruza') {
        echo "<h2 class='category__title'>Кукуруза</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>Кукуруза по форме, строению початка и зерна подразделяется на кремнистую, зубовидную, полузубовидную, сахарную, пленчатую, крахмалистую, восковидную, лопающуюся и др. Содержит меньше, чем другие злаки, белка, но больше жира (до 5 %), который находится в основном в зародыше. Зародыш отделяют и используют для производства масла. Из кукурузы получают крупы, крахмал, спирт, патоку.</p>";
        
        echo '<h3>ГОСТ 13634-90</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th>Наименование показателя</th>
                        <th>Ограничительныенормы для переработки в крупу и муку</th>
                        <th>Ограничительныенормы для выработки комбикормов и на кормовые цели</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Влажность, %, не более</td>
                        <td>15,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Сорная примесь, %, неболее</td>
                        <td>2,0</td>
                        <td>5,0</td>
                    </tr>
                    <tr>
                        <td>Зерновая примесь, %,не более</td>
                        <td>7,0</td>
                        <td>15,0</td>
                    </tr>
                    <tr>
                        <td>Зараженность вредителями</td>
                        <td>Недопускается, кроме зараженности клещом не выше I степени</td>
                        <td>Недопускается, кроме зараженности клещом не выше I степени</td>
                    </tr>
                </tbody>
            </table>
        ';
    }
    elseif ($subcategory == 'buckwheat') {
        echo "<h2 class='category__title'>Гречиха</h2>";
        echo '<hr>';
        echo '<br>';
        echo "<p>Гречиха имеет плод трехгранной формы, покрытый не цветочными пленками, как у злаков, а плотной плодовой оболочкой, под которой находится ядро, состоящее из семенной оболочки, алейронового слоя, эндосперма и крупного зародыша в виде S-образно изогнутой пластины. Плод гречихи — трехгранный орешек серой, коричневой или черной окраски, масса 100 плодов 20-30 г, пленчатость 18-30 %.</p>";
        
        echo '<h3>ГОСТ 5550-74</h3>';

        echo '
            <table>
                <thead>
                    <tr>
                        <th rowspan="3">
                            Наименование показателя
                        </th>
                        <th colspan="4">Характеристика и норма для</th>
                    </tr>
                    <tr>
                        <th colspan="3">ядрицы и ядрицы быстроразвариваюшейся</th>
                        <th rowspan="2">Продела ипродела быстроразвариваюшегося</th>
                    </tr>
                    <tr>
                        <th>Первый сорт</th>
                        <th>Второй сорт</th>
                        <th>Третий сорт</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Цвет</td>
                        <td colspan="4">Кремовый сжелтоватым или зеленоватым оттенком; для быстроразвариваюшейся крупы –коричневый разных оттенков</td>
                    </tr>
                    <tr>
                        <td>Запах</td>
                        <td colspan="4">Свойственныйгречневой крупе, без посторонних запахов, не затхлый, не плесневелый</td>
                    </tr>
                    <tr>
                        <td>Вкус</td>
                        <td colspan="4">Свойственныйгречневой крупе, без посторонних привкусов, не кислый, не горький</td>
                    </tr>
                    <tr>
                        <td>Влажность,%,не более</td>
                        <td colspan="4">14,0</td>
                    </tr>
                </tbody>
            </table>
        ';
    }
    // Аналогично для остальных подкатегорий
}
?>
