$("div.alert").delay(5000).slideUp();
$(window).load(function() {
    $('.category').click(function () {
        var id = $(this).attr('id');
        $.ajax({
            url: 'delete/' + id,
            type: 'GET',
            success: function(data) {
                if(data === 'success') {
                    $('#category-' + id).remove();
                    $('.toolbar').append("<div class='alert alert-success'>Xóa thành công</div>");
                    $("div.alert").delay(1500).slideUp();
                }
            }
        });
    });

    $('.hide-category').change(function() {
        var id = $(this).attr('id');
        var hide = $('#' + id).val();
        $.ajax({
            url: 'update-hide/' + id + '/' + hide,
            type: 'GET',
            cache: false,
            data: {"id": id, "hide": hide},
            success: function(data) {
                $('.toolbar').append("<div class='alert alert-success'>Cập nhật ẩn hiện thành công</div>");
                $("div.alert").delay(1500).slideUp();
                $('#updated-category-' + id).html(data);
            }
        });
    });

    $('.manufacturer').click(function () {
        var id = $(this).attr('id');
        $.ajax({
            url: 'delete/' + id,
            type: 'GET',
            success: function(data) {
                if(data == 'success') {
                    $('#manufacturer-' + id).remove();
                    $('.toolbar').append("<div class='alert alert-success'>Xóa thành công</div>");
                    $("div.alert").delay(1500).slideUp();
                }
            }
        });
    });

    $('.hide-manufacturer').change(function() {
        var id = $(this).attr('id');
        var hide = $('#' + id).val();
        $.ajax({
            url: 'update-hide/' + id + '/' + hide,
            type: 'GET',
            cache: false,
            data: {"id": id, "hide": hide},
            success: function(data) {
                $('.toolbar').append("<div class='alert alert-success'>Cập nhật ẩn hiện thành công</div>");
                $("div.alert").delay(1500).slideUp();
                $('#updated-manufacturer-' + id).html(data);
            }
        });
    });

    $('.hide-product').change(function() {
        var id = $(this).attr('id');
        var hide = $('#' + id).val();
        $.ajax({
            url: 'update-hide/' + id + '/' + hide,
            type: 'GET',
            cache: false,
            data: {"id": id, "hide": hide},
            success: function(data) {
                if(data === 'success') {
                    $('.toolbar').append("<div class='alert alert-success'>Cập nhật ẩn hiện thành công</div>");
                    $("div.alert").delay(1500).slideUp();
                }
            }
        });
    });

    $('.product').click(function () {
        var id = $(this).attr('id');
        $.ajax({
            url: 'delete/' + id,
            type: 'GET',
            success: function(data) {
                if(data === 'success') {
                    $('#product-' + id).remove();
                    $('.toolbar').append("<div class='alert alert-success'>Xóa thành công</div>");
                    $("div.alert").delay(1500).slideUp();
                }
            }
        });
    });
});