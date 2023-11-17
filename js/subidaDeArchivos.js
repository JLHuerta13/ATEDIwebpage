window.onload = init;

var headers = {};
var url = "http://localhost:3000/subir-archivos"

function init() {
    if(localStorage.getItem("token")) {
        headers = {
            headers: {
            'Authorization': "bearer " + localStorage.getItem("token")
            }
        }
        subidaDeArchivos();
    } else{
        window.location.href = "loginAdmin.html";
    }
} 

function subidaDeArchivos(){
    axios.get(url,headers).then( function(res){
        console.log(res);
    }).catch(function(err){
        console.log(err);
    });
}