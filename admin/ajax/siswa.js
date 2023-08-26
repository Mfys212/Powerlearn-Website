$(document).ready(function(){
    app = {
        show: function(){
            $("tbody").load('siswa_set.php', {type: 'view'}, function(response){
                $("tbody").html(response);
            })		
        }
    }
    app.show()
})

function form_edit(id){
    app = {
        show: function(){  
            $("#form").load('siswa_set.php', {siswa_id: id}, function(response){
                $("#form").html(response);
            })		
        }
    }
    app.show()
}

function edit(){
    var formDat = new FormData($( "#siswaedit" )[0]);
    $.ajax({
        type: 'POST',
        url: "siswa_set.php?type=edit",
        data: formDat,
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false,
        success: function() {
            $("tbody").load('siswa_set.php', {type: 'view'}, function(response){
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
            url: "siswa_set.php?hapus="+id,
            data: id,
            success: function() {
                $("tbody").load('siswa_set.php', {type: 'view'}, function(response){
                    $("tbody").html(response);
                })	
            }
        });
    }
}
