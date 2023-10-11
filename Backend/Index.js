const express = require('express')
const app = express()
const Libros = require('./Routes/libros')

app.use("/api/v1/libros",Libros)
app.use("*",(req,res)=>{
    res.status(401).json({code:401,message:"error pagina no encontrada"});
});

app.listen(3000,() =>{
    console.log("server is running...");
});