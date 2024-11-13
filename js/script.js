$(document).ready(function() {
    $('.category').click(function() {
        var category = $(this).data('category');

        // Убираем активные классы у других категорий и подкатегорий
        $('.category, .subcategory').removeClass('activeP');
        $(this).addClass('activeP');

        // Показать индикатор загрузки
        $('#loading').show();
        $('#content').empty();

        // Подгрузка краткой информации обо всех подкатегориях категории
        $('#content').load('load_content.php', { category: category }, function() {
            // Скрываем индикатор загрузки после завершения загрузки
            $('#loading').hide();
        });
    });

    // Обработчик клика на подкатегорию
    $('.subcategory').click(function(e) {
        e.stopPropagation(); // Остановим всплытие события, чтобы не сработал клик на категорию

        var category = $(this).data('category');
        var subcategory = $(this).data('subcategory');

        // Убираем активные классы у других категорий и подкатегорий
        $('.category, .subcategory').removeClass('activeP');
        $(this).addClass('activeP');

        // Показать индикатор загрузки
        $('#loading').show();
        $('#content').empty();

        // Подгружаем данные конкретной подкатегории
        $('#content').load('load_content.php', { category: category, subcategory: subcategory }, function() {
            // Скрываем индикатор загрузки после завершения загрузки
            $('#loading').hide();
        });
    });

    // Функция для загрузки подкатегории
    function loadSubcategory(category, subcategory) {
        $('.category, .subcategory').removeClass('activeP');
        $('.category[data-category="' + category + '"]').addClass('activeP');
        $('.subcategory[data-subcategory="' + subcategory + '"]').addClass('activeP');

        $('#loading').show();
        $('#content').empty();

        $('#content').load('load_content.php', { category: category, subcategory: subcategory }, function() {
            $('#loading').hide();
        });
    }

    // Обработчик клика на кнопку "Подробнее" для переключения на подкатегорию
    $(document).on('click', '.btn-more', function() {
        var category = $(this).data('category');
        var subcategory = $(this).data('subcategory');

        loadSubcategory(category, subcategory);
    });
    // По умолчанию загружаем описание всех категорий
    $.ajax({
        url: 'load_content.php',
        type: 'POST',
        success: function(response) {
            $('#content').html(response);
        },
        error: function() {
            alert('Ошибка при загрузке данных.');
        }
    });
    
    // Обработчик кликов для категорий и подкатегорий
    $('.menu-item').click(function() {
        const category = $(this).data('category');

        $.ajax({
            url: 'load_content.php',
            type: 'POST',
            data: { category: category },
            success: function(response) {
                $('#content').html(response);
            },
            error: function() {
                alert('Ошибка при загрузке данных.');
            }
        });
    });

    $(document).on('click', '.btn-more', function() {
        const category = $(this).data('category');
        const subcategory = $(this).data('subcategory');

        $.ajax({
            url: 'load_content.php',
            type: 'POST',
            data: { category: category, subcategory: subcategory },
            success: function(response) {
                $('#content').html(response);
            },
            error: function() {
                alert('Ошибка при загрузке данных.');
            }
        });
    });
});
