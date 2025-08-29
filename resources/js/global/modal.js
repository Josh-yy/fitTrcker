export function initModal(){

    $(document).ready(function(){
        $("[data-open-modal]").on("click", function(){
            console.log('button click')
            var targetId = $(this).data('open-modal');
            $("#" + targetId).addClass('open')
        })

        $("[data-close-modal]").on("click", function(){
            var targetId = $(this).data('close-modal');
            $("#" + targetId).removeClass('open')
        })
    });
}