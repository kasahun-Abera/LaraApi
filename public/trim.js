$(function(){
    $('input[type="text"]').keyup(function(){
        var In_value = this.value.trim();
        if(In_value.length == 0)
        {
            this.value = $.trim(this.value);
        }
    });
});
$(function(){
    $('input[type="number"]').keyup(function(){
        var In_value = this.value.trim();
        if(In_value.length == 0)
        {
            this.value = $.trim(this.value);
        }
    });
});
