window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var ss = $(".basic").select2({
        tags: true,
    });

    window.livewire.on('reloadClassCSs', function() {
        var ss = $(".basic").select2({
            tags: true,
        });
        $('.mensaje').css('display', 'none');
    });

    window.livewire.on('ciudad-add', msj => {
        var ss = $(".basic").select2({
            tags: true,
        });
        $('#exampleModal').modal('hide');
    });

    window.livewire.on('persona-up', msj => {
        $('#referente').css('display', 'block');
    });

    window.livewire.on('referente-up', msj => {
        $('#solicitud').css('display', 'block');
        // $('#referente').css('display', 'none');
    });

}, false);


function ver_referentes(){
    $('#referente').css('display', 'block');
}


$(".ph-number").inputmask({mask:"(9999) 999-999"});
$("#plazo").inputmask({mask:"99"});
