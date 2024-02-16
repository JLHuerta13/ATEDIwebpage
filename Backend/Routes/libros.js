const express = require('express')
const libros = express.Router();

libros.get("/",(req,res)=>{
    res.status(201).json({code:201,message:"Hola libros"});
});

module.exports = libros