require('./bootstrap');

setTimeout(function (){
    $('.alert').slideUp(500)
},3000)

var firstUpload = new FileUploadWithPreview('myFirstImage')
