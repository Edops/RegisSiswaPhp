

function daftarFunciton() {

    // clear pesan 
    document.getElementById("txtHint").innerHTML = "";

    // disable button
    document.getElementById("tomboldaftar").disabled = true;
    $("#prosesdaftar").show();
    var isinisn = document.getElementById("idnisn").value;
    var isinama = document.getElementById("idnama").value;

    


    //document.getElementById("txtHint").innerHTML = isinisn+isinama;
    insertdata(isinisn,isinama);
}

function insertdata(isinisn,isinama) {
    if (isinisn == "" || isinama == "") {
        document.getElementById("txtHint").innerHTML = "Data tidak bolehkosong";
        document.getElementById("tomboldaftar").disabled = false;
        $("#prosesdaftar").hide();
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tomboldaftar").disabled = false;
                $("#prosesdaftar").hide();
                document.getElementById("txtHint").innerHTML = this.responseText;

            }
        };
        xmlhttp.open("GET","insert.php?nisn="+isinisn+"&nama="+isinama,true);
        xmlhttp.send();
    }
}