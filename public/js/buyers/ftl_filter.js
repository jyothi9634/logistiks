$(document).ready(function () {
    $("#ftl_filter").on("change", function () {
        ftlfilters();
    });  
    
});
function ftlfilters() {
        var advance;
        var credits;
        var mileStone;
        var realTime;
        var topSellersOrders;
        var topSellersRated;
        var amount = $('#amount').val();
        console.log(amount);

        $('#advance').is(':checked') ? advance = 1 : advance = 0;
        $('#credits').is(':checked') ? credits = 4 : credits = 0;
        $('#mile_stone').is(':checked') ? mileStone = 1 : mileStone = 0;
        $('#real_time').is(':checked') ? realTime = 2 : realTime = 0;
        $('#top_sellers_orders').is(':checked') ? topSellersOrders = 1 : topSellersOrders = 0;
        $('#top_sellers_rated').is(':checked') ? topSellersRated = 1 : topSellersRated = 0;


        var ftlSearch = $("#ftlSearch").serialize();

        var postData = ftlSearch + "&amount=" + amount + "&advance=" + advance + "&credits=" + credits + "&mileStone=" + mileStone + "&realTime=" + realTime + "&topSellersOrders=" + topSellersOrders + "&topSellersRated=" + topSellersRated;


        var filterResults = advancedFtlFilter(postData);
        
        //alert(filterResults);
        
        var i = 0;
        var filterHtml = '';
        $('.ftlSearchList').html('');
        console.log(filterResults.responseJSON);
        if (filterResults.responseJSON.length) {

            $.each(filterResults.responseJSON, function (key, filterResult) {
                console.log(filterResult);
                filterHtml = ' <div class="post-master-tbl-main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-2">' +
                        '<tbody><tr>' +
                        '<td class="c-1">' + filterResult.name + '</td>' +
                        '<td class="c-2">' + filterResult.valid_from_date + '</td>' +
                        '<td class="c-3">' + filterResult.valid_to_date + '</td>' +
                        '<td class="c-4">' + filterResult.price + '/-</td>' +
                        '<td class="c-5">10 Loads</td>' +
                        '<td class="c-6">20 Loads</td>' +
                        '<td class="c-7"><input type="button" value="Book Now" class="button-red-2 margin-tl-1 "></td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td class="c-1"><img src="/images/ellipse-1.png" alt="ellipse" width="36" height="6"></td>' +
                        '<td class="c-2">&nbsp;</td>' +
                        '<td class="c-3"><span>Open (Valid for 20 Days12)</span></td>' +
                        '<td class="c-4">&nbsp;</td>' +
                        '<td class="c-5">&nbsp;</td>' +
                        '<td class="c-6">&nbsp;</td>' +
                        '<td align="right" valign="top">' +
                        '<a href="#" class="collapse" data_id="collapse' + i + '" class="details-link-2 nav-toggle">+ Details  </a><img src="/images/message-icon3.png" width="12" height="9" alt="Message"></td>' +
                        '</tr>' +
                        '</tbody></table>' +
                        '<div id="collapse' + i + '" style="display:none">' +
                        '<table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-3">' +
                        '<tbody><tr>' +
                        '<td class="c-1">POST TYPE</td>' +
                        '<td class="c-2">LOAD TYPE</td>' +
                        '<td class="c-3">VEHICLE TYPE</td>' +
                        '<td class="c-4">TRANSIT DAYS</td>' +
                        '<td class="c-5">TRACKING</td>' +
                        '<td class="c-6">PAYMENT TERM</td>' +
                        '<td class="c-7">T&amp;C</td>'
                '</tr>' +
                        '<tr>' +
                        '<td class="c-1"><span class="c-3"><span>' + filterResult.private_public_flag + '</span></span></td>' +
                        '<td class="c-2"><span class="c-3"><span>' + filterResult.load_type + '</span></span></td>' +
                        '<td class="c-3"><span>' + filterResult.vehicle_type + '</span></td>' +
                        '<td class="c-4"><span class="c-3"><span>' + filterResult.transit_days + '</span></span></td>' +
                        '<td class="c-5"><span class="c-3"><span>' + filterResult.tracking_type + '</span></span></td>' +
                        '<td class="c-6"><span class="c-3"><span>' + filterResult.payment_term + '</span></td>' +
                        '<td align="right" valign="top">&nbsp;</td>' +
                        '</tr>' +
                        '</tbody></table>' +
                        '</div></div>';
                i++;
                $(".ftlSearchList").append(filterHtml);
            });
        } else {
            $(".ftlSearchList").html("No records found");
        }


}

function advancedFtlFilter(postData) {

    return $.ajax({
        type: "POST",
        url: "/buyerFtlFilter",
        async: false,
        data: postData,
        cache: false,
        success: function (response) {
            ajaxResult = response;
        }
    });
}
function detailsDiv(detailid) {
    alert(this.data_id);
    document.getElementById(detailid).style.display = "block";

}

function priceRange() {
    ftlfilters();
}
$(document).ready(function () {
    $(".newMessage").on("click", function () {
        var to_email_id = $(this).attr('data_email_id');
        var to_user_name = $(this).attr('data_user_name');
        var user_id = $(this).attr('data_to_user_id');
        var post_id = $(this).attr('data_post_id');
        $("#messageModel").css("display","block");
        $("#to_email").val(to_email_id);
        $("#to_user_name").val(to_user_name);
        $("#from_user_name").val("Rakesh");
        $("#from_email").val("phpsureshk11@gmail.com");
        $("#post_id").val(post_id);
        
    });    
});    