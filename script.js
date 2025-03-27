
$(document).ready(function () {
    function carregarAlunos() {
        $.ajax({
            url: 'get_alunos.php',
            type: 'GET',
            success: function (data) {
                $('#tabela-alunos').html(data);
            }
        });
    }
    carregarAlunos();
    $('#search').on('keyup', function () {
        let value = $(this).val().toLowerCase();
        $('#tabela-alunos tr').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});