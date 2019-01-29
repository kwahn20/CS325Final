$(document).ready(function(){

    $.get({
        url: 'http://cs325.colby.edu/kwahn/CS325MP/photoGallery.php',
        success: function(data){
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
    $("button").click(function(){
        $.ajax({
            type: 'POST',
            url: 'http://cs325.colby.edu/kwahn/CS325MP/photoGallery.php',
            data: {idx: $("#numOfnum").innerHTML },
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
});