$(document).ready(function () {
    // =====================Reviews================================
            
    var reviewCount = 1;
    var lastPost = 0;

        function showReviews() {
            $.post(
                    "select.php",
                    function (data) {
                        if(lastPost < data[data.length-1].reviewID){
                        for (i = 0; i < data.length; i++) {
                            $("body").append("<div class=users id=feed" + reviewCount +">"  + "@" +  data[i].username + "</div>" + "<div class=posts id=feed" + reviewCount +">"  +  data[i].review + "<div class=date id=feedDate" + reviewCount + ">"   + data[i].timePosted + "</div> </div>");
                            reviewCount++;
                        }
                    }
                        lastPost = data[data.length-1].reviewID;

                    }
            );
        }
        setInterval(function () { // sets interval of 1 second
            showReviews();
        }, 1000);
});