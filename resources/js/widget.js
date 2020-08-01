
var myWidget = cloudinary.createUploadWidget(
    {
        cloudName: 'dzpmsbjzh',
        uploadPreset: 'atlr6nn5',
        multiple: true,
        form: '#product_form',
        fieldName: 'thumbnails[]',
        thumbnails: '.thumbnails'
    }, function (error, result) {
        if (!error && result && result.event === "success") {
            console.log('Done! Here is the image info: ', result.info.url);
            var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
            for (let i = 0; i < arrayThumnailInputs.length; i++) {
                arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
            }
        }
    }
);
$('#upload_widget').click(function () {
    myWidget.open();
})
// xử lý js trên dynamic content.
$('body').on('click', '.cloudinary-delete', function () {
    var splittedImg = $(this).parent().find('img').attr('src').split('/');
    var imgName = splittedImg[splittedImg.length - 1];
    imgName = imgName.replace('.jpg', '');
    $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
});

