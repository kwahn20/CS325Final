$(document).ready(function(){

    $.get({
        url: 'http://cs325.colby.edu/kwahn20/CS325MP/photoGallery2.php',
        success: function(data){
            // let i = 0;
            // let idx = 0;
            // for(i = 0; i < data.length; i++){
            //     if(data[i] == '$'){
            //         idx = i;
            //     }
            // }
            // let address = data.slice(0, idx);
            // let numOfnum = data.slice(idx);
            $("#galleryPic").attr("src", data);
            // $("#numOfnum").innerHTML = numOfnum;
        }
    });
    $("#rightButton").click(function(){
        $.ajax({
            type: 'POST',
            url: 'http://cs325.colby.edu/kwahn/CS325MP/photoGallery.php',
            data: {idx: $("#numOfnum").innerHTML, dir: 1 },
            success: function(data) {
                let i = 0;
                let idx = 0;
                for(i = 0; i < data.length; i++){
                    if(data[i] == '$'){
                        idx = i;
                    }
                }
                let address = data.slice(0, idx);
                let numOfnum = data.slice(idx);
                $("#galleryPic").attr("src", address);
                $("#numOfnum").innerHTML = numOfnum;
            }
        });
    });
    $("#leftButton").click(function(){
        $.ajax({
            type: 'POST',
            url: 'http://cs325.colby.edu/kwahn20/CS325MP/photoGallery.php',
            data: {idx: $("#numOfnum").innerHTML, dir: -1 },
            success: function(data) {
                let i = 0;
                let idx = 0;
                for(i = 0; i < data.length; i++){
                    if(data[i] == '$'){
                        idx = i;
                    }
                }
                let address = data.slice(0, idx);
                let numOfnum = data.slice(idx);
                $("#galleryPic").attr("src", data);
                //$("#numOfnum").innerHTML = numOfnum;
            }
        });
    });
});