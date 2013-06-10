jQuery(document).ready(function($) 
{
    window.send_to_editor = function(html) 
    {
        imgurl = $('img',html).attr('src');
        imgsrc = '<img src="'+imgurl+'" class="link-featured-image">';
        $('#link_image').val(imgurl);
        $('#my-link-img').html(imgsrc);
        $('#remove-image-text').show();
        $('#upload_image_button').hide();
        $('.link-help-text').hide();
        tb_remove(); 
    }

    function remove_image()
    {
        $('#my-link-img').html('');
        $('#link_image').val('');
        $('#remove-image-text').hide();
        $('#upload_image_button').show();
        $('.link-help-text').show();
        return false;
    }
    
    $('#upload_image_button').click(function() 
    {
        formfield = $('#link_image').attr('name');
        tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;tab=library&amp;fli_type=true&amp;TB_iframe=true');
        return false;       
    });
    
    $('#remove-image-text').click(function()
    {
        remove_image();
    });
    
});
