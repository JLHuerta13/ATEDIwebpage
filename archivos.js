// Lista de archivos (simulación)

  const archivos = [
    { nombre: 'Cuento infantil 1', descripcion: 'Literatura - Bellas Artes', tipo: 'pdf', ruta: './material_atedi/ARCHIVOS EN PDF/BELLAS ARTES/Literatura/Anonimo - Cuentos Infantiles/cuento01.pdf' },
    { nombre: 'Cuento infantil 2', descripcion: 'Literatura - Bellas Artes', tipo: 'pdf', ruta: './material_atedi/ARCHIVOS EN PDF/BELLAS ARTES/Literatura/Anonimo - Cuentos Infantiles/cuento02.pdf'},
    { nombre: 'El poder de la palabra', descripcion: 'Literatura - Bellas Artes', tipo: 'doc', ruta: './material_atedi/ARCHIVOS EN WORD/BELLAS ARTES/Literatura/Anonimo - el poder de la palabra/el poder de la palabra.doc'},
    { nombre: 'El relato - Parte 1', descripcion: 'Audiolibro', tipo: 'mp3', ruta: './material_atedi/audiolibros/01-el relato.mp3'},
  ];
  
  // Función para generar la lista de archivos
  function mostrarArchivos() {
    const contenedor = document.getElementById('contenedorArchivos');
    const lista = document.createElement('ul');
  
    archivos.forEach(archivo => {
      const listItem = document.createElement('li');
      const enlace = document.createElement('a');
      const descripcion = document.createElement('p');
      const abrir = document.createElement('a');
      const descargar = document.createElement('a');
  
      enlace.href = archivo.ruta;
      enlace.textContent = archivo.nombre;
  
      descripcion.textContent = archivo.descripcion;
  
      abrir.href = archivo.ruta;
      abrir.textContent = 'Abrir archivo';
      abrir.classList.add('abrir');
  
      descargar.href = archivo.ruta;
      descargar.textContent = 'Descargar';
      descargar.classList.add('descargar');
      descargar.setAttribute('download', '');
  
      listItem.appendChild(enlace);
      listItem.appendChild(descripcion);
      listItem.appendChild(abrir);
      listItem.appendChild(descargar);
  
      lista.appendChild(listItem);
    });
  
    contenedor.appendChild(lista);
  }
  
  // Llamar a la función para mostrar los archivos al cargar la página
  window.onload = mostrarArchivos;