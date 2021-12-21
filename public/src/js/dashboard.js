/**
 * Created by Dell on 26-03-2017.
 */

$(document).ready(function(){
   $('#post_new').on('change',function(){
        $('#forms>div').addClass('hidden');
        var id = $("select#post_new option:selected").val().toLowerCase();
        $('#'+id).removeClass('hidden').addClass('active');
   });
});