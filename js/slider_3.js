$(document).ready(function () {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'insert_3.php',
        data: 'json',
        success: function (data) {

            var i = 0; 			//START POINT
            var images = data;	//UNFILTERED IMAGES ARRAY
            var time = 5000;	//TIME BETWEEN SWITCH

            console.log(images);

            if (images.length != 0) {

                function changeImg() {

                    document.getElementById('slide').src = "/" + images[i];
                    document.getElementById('sign').innerHTML = images[i].substring(images[i].lastIndexOf('\\')+1,images[i].lastIndexOf(".")).slice(1);

                    if (i < images.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        i++; //ADD 1 TO INDEX
                    } else {
                        i = 0; //RESET BACK TO 0
                    }
                    setTimeout(changeImg, time); //RUN FUNCTION EVERY X SECONDS
                }

                window.onload = changeImg(); //RUN FUNCTION WHEN PAGE LOADS
            }
        }
    });
});