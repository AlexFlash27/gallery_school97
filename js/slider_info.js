$(document).ready(function () {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'insert_info.php',
        data: 'json',
        success: function (data) {

            var i = 0; 			//START POINT
            var z = 0;
            var left = data['content_l']; //LEFT TEXT ARRAY
            var right = data['content_r']; //RIGHT TEXT ARRAY
            var time = 5000;	//TIME BETWEEN SWITCH

            console.log(left);
            console.log(right);

            if (left.length != 0 && right.length != 0) {

                 function changeleft() {

                    document.getElementById('left').innerHTML = left[i];

                    if (i < left.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        i++; //ADD 1 TO INDEX
                    } else {
                        i = 0; //RESET BACK TO 0
                    }
                    setTimeout(changeleft, time); //RUN FUNCTION EVERY X SECONDS
                }
                window.onload = changeleft(); //RUN FUNCTION WHEN PAGE LOADS

                function changeright() {

                    document.getElementById('right').innerHTML = right[z];

                    if (z < right.length - 1) { //CHECK IF INDEX IS UNDER MAX
                        z++; //ADD 1 TO INDEX
                    } else {
                        z = 0; //RESET BACK TO 0
                    }
                    setTimeout(changeright, time); //RUN FUNCTION EVERY X SECONDS
                }
                window.onload = changeright(); //RUN FUNCTION WHEN PAGE LOADS
            }
        }
    });
});