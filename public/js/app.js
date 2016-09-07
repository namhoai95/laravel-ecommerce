$(document).ready(function() {
    $('.updatecart').click(function() {
        var rowid = $(this).attr('id');
        var id = $(this).parent().parent().find('.product').html();
        var qty = $(this).parent().parent().find('.cart_quantity_input').val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: 'update/' + rowid + '/' + qty,
            type: 'POST',
            cache: false,
            data:{"_token": token,"rowid": rowid,"qty": qty,"id": id},
            success:function(data) {
                data = JSON.parse(data);
                $('#p-' + rowid).html(data.subtotal);
                $('.price_total').html(data.total);
            }
        });
    });
    $('#quantity').change(function() {
        var rowid = $('#rowid').val();
        var id = $('.product').html();
        var qty = $(this).val()
        var token = $("input[name='_token']").val();
        $.ajax({
            url: 'update/' + rowid + '/' + qty,
            type: 'POST',
            cache: false,
            data:{"_token": token,"rowid": rowid,"qty": qty,"id": id},
            success:function(data) {
                data = JSON.parse(data);
                $('#p-' + rowid).html(data.subtotal);
                $('.price_total').html(data.total);
            }
        });
    });
    $('.deletecart').click(function() {
        var rowid = $(this).attr('id');
        var token = $("input[name='_token']").val();
        $.ajax({
            url: 'delete-product/' + rowid,
            type: 'POST',
            cache: false,
            data:{"_token": token, "id": rowid},
            success:function(data) {
                if(data.oke === 'oke') {
                    $('#t-' + rowid).remove();
                    if(data.total == 0) {
                        $('.price_total').empty();
                    }
                    $('.price_total').html(data.total);
                }
            }
        });
    });

    var timer;
    $(window).load(function() {
        $('#tags').keyup(function() {
            timer =setTimeout(function () {
                var keywords = $('#tags').val();
                if(keywords.length > 0) {
                    $.ajax({
                        url: 'search-ajax',
                        type: 'GET',
                        data:{"keywords": keywords},
                        success:function(data) {
                            data = JSON.parse(data);
                            $(function() {
                                var array = data.searchProducts;
                                $( "#tags" ).autocomplete({
                                    source: array
                                });

                            });
                        }
                    });
                }
            },500);
        });
        $('#tags').keydown(function() {
            clearTimeout(timer);
        });
    });

    var myCenter=new google.maps.LatLng(10.7624609,106.6826056);

    function initialize()
    {
        var mapProp = {
            center:myCenter,
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("map"),mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            content:"Scepter Shop"
        });

        infowindow.open(map,marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    $('.btn').click(function() {
        var id = $(this).attr('id');
        var name = $("#name").val();
        var content = $("#content").val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: id + '/comment',
            type: 'POST',
            data: {"_token": token, "id": id, "name": name, "content": content},
            success: function(data) {
                $('#comment').append("<div class='col-sm-12'><ul><li><a href='#'><i class='fa fa-user'></i>" + data.name + "</a></li><li><a href='#'><i class='fa fa-clock-o'></i>" + data.time + "</a></li><li><a href=#'><i class='fa fa-calendar-o'></i>" + data.date + "</a></li></ul><p>" + data.content + "</p></div>");
            }
        });
    });

    $("div.alert").delay(5000).slideUp();
});

$(".signup-form input[name='email']").blur(function() {
    var e = $(".signup-form input[name='email']").val();
    var token = $("input[name='_token']").val();
    $.ajax({
        url: 'check-email',
        type: 'POST',
        data: {"_token": token, "email": e},
        success: function(data) {
            if(data == 1) {
                $("#alert").html('Email đã được đăng ký vui lòng chọn email khác');
                $("#alert").addClass("alert alert-danger");
            }
            else {
                $("#alert").removeClass('alert alert-danger');
                $("#alert").addClass('alert alert-success');
                $("#alert").html('Email có thể sử dụng');
            }
        }
    });
});