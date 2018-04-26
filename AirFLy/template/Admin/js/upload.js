$(function(){

$('.x').on('change', function() {
    var my = $('div.formus div:nth-child(3)').find('input').val();
    upload($(this),my);
});




});
function progress(e){

    if(e.lengthComputable){
        var max = e.total;
        var current = e.loaded;

        var Percentage = (current * 100)/max;
        console.log(Percentage);


        if(Percentage >= 100)
        {
           // process completed  
        }
    }  
 }
 function upload(file,nom)
 {
 	var file_data = $(file).prop('files')[0];   
    var form_data = new FormData();
    /*var name=file_data.name;*/
    /*var extension = name.substr(name.lastIndexOf('.')+1,name.length);*/
  
    form_data.append('file', file_data,nom+'.jpg');                           
    $.ajax({
            url: "http://localhost/AirFly/web/upload.php",
            type: "POST",
            data: form_data,
            processData: false,
            contentType: false,
            dataType:"text",
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                                if(myXhr.upload){
                    myXhr.upload.addEventListener('progress',progress, false);
                }
                return myXhr;
            },
            success: function(){
            	console.log("Succes");
            },
            resetForm: true
        });
 }