// surat masuk
$(function () {
    $('#tambahdatamasuk').on('click', function () {
        $('#judulpopupmasuk').html('Tambah Data Surat Masuk');
        $('#tombolpopupmasuk').html('Tambah');

    });

    $('.editsuratmasuk').on('click', function () {
        $('#judulpopupmasuk').html('Ubah Data Surat Masuk');
        $('#tombolpopupmasuk').html('Ubah');
        $('#formUbahMasuk').attr('action', 'http://localhost/persuratan_skensa/OOP_skensa/public/suratmasuk/ubah');

        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/persuratan_skensa/OOP_skensa/public/suratmasuk/getubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                $('#alamatpengirim').val(data.alamat_pengirim);
                $('#nomor').val(data.nomor);
                $('#lampiran').val(data.lampiran);
                $('#lampiran').val(data.lampiran);
                $('#perihal').val(data.perihal);
                $('#dituju').val(data.dituju);
                $('#id_suratmasuk').val(data.id_suratMasuk);
            }
        });

    });


    $('#tambahdatakeluar').on('click', function () {
        $('#judulpopupkeluar').html('Tambah Data Surat Keluar');
        $('#tombolpopupkeluar').html('Tambah');

    });

    $('.editsuratkeluar').on('click', function () {
        $('#judulpopupkeluar').html('Ubah Data Surat Keluar');
        $('#tombolpopupkeluar').html('Ubah');
        $('#formUbahKeluar').attr('action', 'http://localhost/persuratan_skensa/OOP_skensa/public/suratkeluar/ubah');
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/persuratan_skensa/OOP_skensa/public/suratkeluar/getubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                $('#alamat').val(data.alamat);
                $('#nomor').val(data.nomor);
                $('#lampiran').val(data.lampiran);
                $('#lampiran').val(data.lampiran);
                $('#perihal').val(data.perihal);
                $('#dituju').val(data.dituju);
                $('#idKeluar').val(data.id_arsip);
            }
        });

    });



});
// // surat keluar
// $(function(){
//    
// });

function checkAll(tes) {
    var checkboxes = document.getElementsByTagName("input");
    if (tes.checked) {
        for (var i = 1; i <= checkboxes.length + 1; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = true;
            }
        }
    } else {
        for (var i = 1; i <= checkboxes.length + 1; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = false;
            }
        }
    }
}


var masuk = document.querySelector('.kotaksuratmasuk');
masuk.addEventListener('mouseover', function (e) {
    document.querySelector('#iconmasuk').style.fontSize = '85px';
});
masuk.addEventListener('mouseout', function (e) {
    document.querySelector('#iconmasuk').style.fontSize = '80px';
});
var keluar = document.querySelector('.kotaksuratkeluar');
keluar.addEventListener('mouseover', function (e) {
    document.querySelector('#iconkeluar').style.fontSize = '85px';
});
keluar.addEventListener('mouseout', function (e) {
    document.querySelector('#iconkeluar').style.fontSize = '80px';
});