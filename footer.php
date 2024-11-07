    
    <footer class="footer">
        <div class="container">
            <div class="footer__block">
                <div class="footer__left">
                    <div class="footer__img">
                        <img src="/img/alto-logo-white.png" alt="logo-footer">
                    </div>
                    <div class="footer__text">
                         © alto-grain.kz 2024. Все права защищены		
                    </div>
                </div>
                <div class="footer__right">
                    <p>Разработка сайтов в Астане</p>
                    <img src="/img/itspk.svg" alt="itspk-logo" class="footer__rigth_img">
                </div>
            </div>
        </div>
    </footer>


    
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW({animateClass: 'animate__animated'})
        wow.init();

        $(document).ready(function() {

            $('.burger__menu').on('click', function(){
                $(this).toggleClass('active');
                $('.header__menu').toggleClass('open');
            }); 

        function setActiveMenuItem(menuSelector) {
            // Получаем текущий путь страницы
            let currentPath = window.location.pathname.split("/").pop();
            let isActiveSet = false; // Флаг для отслеживания, установлен ли активный класс

            // Проходим по всем пунктам меню
            $(menuSelector).find('a').each(function() {
                let linkPath = $(this).attr('href').split("/").pop();

                // Если путь совпадает с текущим, добавляем класс 'active'
                if (linkPath === currentPath) {
                    $(this).addClass('header__item_active');
                    isActiveSet = true; // Устанавливаем флаг, что активный класс добавлен
                } else {
                    $(this).removeClass('header__item_active'); // Убираем 'active' у других элементов
                }
            });

            // Если ни один пункт меню не совпал с текущим путем, устанавливаем класс 'active' на первую ссылку
            if (!isActiveSet) {
                $(menuSelector).find('a').first().addClass('header__item_active');
            }
                let about = 'about.php';
                let products = 'products.php';
                let work = 'work.php';
                let procurement = 'procurement.php';
                let news = 'news.php';
                let contact = 'contact.php';

                headerShow(about);
                headerShow(products);
                headerShow(work);
                headerShow(procurement);
                headerShow(news);
                headerShow(contact);

                function headerShow(headerlink){
                if(currentPath === headerlink){
                    $('.header').addClass('header__min');
                    $('.header__promo').addClass('dn');
                    $('.header__nav').addClass('align-start');
                }
                }
        }

        // Вызываем функцию для меню с ID #menu
        setActiveMenuItem("#menu");
        });

    </script>
</body>
</html>