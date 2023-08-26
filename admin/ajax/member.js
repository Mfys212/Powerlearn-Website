$(document).ready(function(){
    app = {
        show: function(){
            $("tbody").load('member_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })		
        }
    }
    app.show()
})

function tambah(){
    var data = $('#membertambah').serialize();
    // var formData = new FormData($( "#kelastambah" )[0]);
    $.ajax({
        type: 'POST',
        url: "member_set.php?type=tambah",
        data: data,
        success: function() {
            $("tbody").load('member_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        }
    });
}

function form_edit(id){
    app = {
        show: function(){  
            $("#form").load('member_set.php', {member_id: id}, function(response){
                $("#form").html(response);
            })		
        }
    }
    app.show()
}

function edit(){
    var data = $('#memberedit').serialize();
    // var formDat = new FormData($( "#kelasedit" )[0]);
    $.ajax({
        type: 'POST',
        url: "member_set.php?type=edit",
        data: data,
        success: function() {
            $("tbody").load('member_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })	
        },
        error: function(){
            alert("error");
        }
    });
}

function form_delete(id){
    if(confirm("Yakin Akan Hapus Data ?")){
        $.ajax({
            type: 'GET',
            url: "member_set.php?hapus="+id,
            data: id,
            success: function() {
                $("tbody").load('member_set.php', {type: 'view'}, function(response){
                    $("tbody").html(response);
                })	
            }
        });
    }
}
