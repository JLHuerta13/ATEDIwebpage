const express = require('express');
const app = express();

const Libros = require('./Routes/libros');
const administradores = require('./Routes/administradores');
const subidaDeArchivos = require('./Routes/subidaDeArchivos');


const auth = require('./middleware/auth');
const cors = require('./middleware/cors');



app.use(cors);
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.use("/api/v1/libros",Libros)


app.use("/admines",administradores);
app.use(auth);
app.use("/subir-archivos",subidaDeArchivos);

app.use("*",(req,res)=>{
    res.status(401).json({code:401,message:"error pagina no encontrada"});
});
app.listen(3000,() =>{
    console.log("server is running...");
});