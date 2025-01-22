enviando = false; //Obligaremos a entrar el if en el primer submit
const avatar = document.getElementById('foto');
avatar.addEventListener('change', mostrarImagen, false);

function checkSubmit() {
    if (!enviando) {
        enviando= true;
        // $('#btn_submit').css('display', 'none');
        // $('#exito').css('display', 'block');
        return true;
    } else {
        return false;
    }
}

window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var ss = $(".basic").select2({
        tags: true,
    });

    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    window.livewire.on('reloadClassCSs', function() {
        var ss = $(".basic").select2({
            tags: true,
        });
        $('#mensaje').css('display', 'none');
    });

    window.livewire.on('ciudad-add', msj => {
        var ss = $(".basic").select2({
            tags: true,
        });
        $('#exampleModal').modal('hide');
    });

    window.livewire.on('nacionalidad-add', msj => {
        var ss = $(".basic").select2({
            tags: true,
        });
        $('#nacionalidad_modal').modal('hide');
    });

}, false);

function mostrarImagen(event) {
    var formData = new FormData();
    var imagefile = document.querySelector('#foto');
    formData.append("foto", imagefile.files[0]);

    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
        var img = document.getElementById('avatar');
        img.src= event.target.result;
    }
    reader.readAsDataURL(file);

}

function cambio(){
    $('#foto').click();
}
