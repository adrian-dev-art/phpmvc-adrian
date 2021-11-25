$(function(){

    $('.tampilModalUbah').on('click',function(){
        $('#formModalLabel').html("Change Student's Data");
        $('.modal-footer button[type=submit]').html("Change Data");
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        })



    })
    
    $('.tombolTambahData').on('click',function(){
        $('#formModalLabel').html("Add Student's Data");
        $('.modal-footer button[type=submit]').html("Add Data");
    })

})