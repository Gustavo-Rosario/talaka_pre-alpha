$(visit);

function visit(){
    var idP = parseInt($("#projectID").html());
    var server = document.URL;
    var url = "https://"+server.split("/")[2]+"/exec/pagecon/visit/"+idP;
    $.ajax({
        url: url,
        method: "GET",
        async: true,
        headers:{"content-type":"application/json"},
        contentType: "application/json",
        processData: false,
    });
}