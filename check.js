$(document).ready(function () {

    function getCheck(id, id__, color) {
        let content = '<div class="d-flex align-items-center">' +
            '<input id="' + id__ + '" class="me-2" type="checkbox" checked="true">' +
            '<label for="' + id__ + '" class="text-'+color+'"><small>Даю согласие на обработку персональных данных</small></label>' +
            '</div>';

        $('#' + id).append(content);
    }

    getCheck("ch1", "check", 'black');
    getCheck("ch2", "checks", 'black');
});