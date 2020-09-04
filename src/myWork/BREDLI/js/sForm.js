$(document).ready(function ($) {
	// Добавляем маску для поля с номера телефона
	$('#modal_tel').mask('9 (999) 999-99-99');

	// Проверяет отмечен ли чекбокс согласия
    // с обработкой персональных данных
    $('#check_modal').on('click', function () {
    	if ($('#check_modal').prop('checked')) {
    		$('#submit_modal').attr('disabled', false);
    	} else {
    		$('#submit_modal')..attr('disabled', true);
    	}
    });

    // Отправляет данные из формы на сервер и получает ответ
    $(#modal_form).on('submit', function (event) {
    	 
    	 event.preventDefault();

        var form = $('#modal_form'),
            button = $('#submit_modal'),
            answer = $('#answer'),
            loader = $('#loader');

            $.ajax({
            url: 'handler.php',
            type: 'POST',
            data: form.serialize(),
            beforeSend: function() {
                answer.empty();
                button.attr('disabled', true).css('margin-bottom', '20px');
                loader.fadeIn();
            },
            success: function(result) {
                loader.fadeOut(300, function() {
                    answer.text(result);
                });
                form.find('.field').val('');
                button.attr('disabled', false);
            },
            error: function() {
                loader.fadeOut(300, function() {
                    answer.text('Произошла ошибка! Попробуйте позже.');
                });
                button.attr('disabled', false);
            }
        });
    });
});

