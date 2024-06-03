@extends('app.layout')
@section('content') 

<div>
     <h2>¡Comienza ahora mismo!</h2>
    <p>Simplemente ingresa la URL de tu sitio web en el siguiente campo, selecciona al menos una de las categorías, y comenzará el análisis de su sitio web.</p>
    <form>
        <div class="form-input">
        <ul>
            <li><input type="checkbox" id="category_accessibility">Accesibilidad</li>    
            <li><input type="checkbox" id="category_best_practices">Buenas Practicas</li> 
            <li><input type="checkbox" id="category_performance">Rendimiento</li>    
            <li><input type="checkbox" id="category_PWA">Progressive Web App</li>  
            <li><input type="checkbox" id="category_SEO">Search Engine Optimization</li>       
        </ul>
        </div>
        <div class="form-input"><input type=text class="site-scan" id="scan_url" placeholder="Ingresa la URL de algún sitio!"></div>
        <div class="form-input"><input type="submit" value="Analizar"></div>
    </form>

</div>

@endsection 