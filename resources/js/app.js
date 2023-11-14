require('./bootstrap');
import 'jquery';
import 'select2';

// Inisialisasi Select2
$(document).ready(function () {
    $('.select2').select2({
        placeholder: 'Pilih opsi',
        allowClear: true,
    });
});