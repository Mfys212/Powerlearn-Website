$(document).ready(function(){
    app = {
        show: function(){
            $("tbody").load('jenis_member_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })		
        }
    }
    app.show()
})

function tambah(){
    var data = $('#jenismembertambah').serialize();
    // var formData = new FormData($( "#kelastambah" )[0]);
    $.ajax({
        type: 'POST',
        url: "jenis_member_set.php?type=tambah",
        data: data,
        success: function() {
            $("tbody").load('jenis_member_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        }
    });
}

function form_edit(id){
    app = {
        show: function(){  
            $("#form").load('jenis_member_set.php', {jenis_member_id: id}, function(response){
                $("#form").html(response);
            })		
        }
    }
    app.show()
}

function edit(){
    var data = $('#jenismemberedit').serialize();
    // var formDat = new FormData($( "#kelasedit" )[0]);
    $.ajax({
        type: 'POST',
        url: "jenis_member_set.php?type=edit",
        data: data,
        success: function() {
            $("tbody").load('jenis_member_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        },
        error: function(){
            alert("error");
        }
    });
}

function form_delete(id){
    if(confirm("Yakin Akan Hapus Data ? (Data member pada kategori ini akan terhapus juga)")){
        $.ajax({
            type: 'GET',
            url: "jenis_member_set.php?hapus="+id,
            data: id,
            success: function() {
                $("tbody").load('jenis_member_set.php', {type: 'view'}, function(response){
                    $("tbody").html(response);
                })	
            }
        });
    }
}
