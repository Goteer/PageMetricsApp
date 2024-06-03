@extends('app.layout')
@section('content') 

<div>
    <h1>¡Bienvenido a PageMetrics!</h1>

    <p>Es importante para los propietarios de sitios web tener una visión clara del rendimiento de sus sitios en línea. Como desarrollador independiente apasionado por la optimización web, creé esta herramienta para facilitar el monitoreo del funcionamiento de tu sitio web en múltiples aspectos clave.</p>

    <h2>¿Qué ofrece la aplicación?</h2>
    <p>¿Te gustaría saber cómo está funcionando tu sitio web en términos de accesibilidad, buenas prácticas, y rendimiento? Todo lo que necesitas hacer es proporcionar la URL de tu sitio web.</p>

    <h2>Métricas proporcionadas:</h2>
    <ol>
        <li><strong>Accesibilidad:</strong> Evalúa la accesibilidad de tu sitio web para garantizar que todos los usuarios puedan interactuar con él de manera efectiva.</li>
        <li><strong>Buenas Prácticas:</strong> Analiza si tu sitio web sigue las mejores prácticas y estándares recomendados para un funcionamiento óptimo.</li>
        <li><strong>Rendimiento:</strong> Mide el rendimiento general de tu sitio web, identificando áreas que puedan afectar la experiencia del usuario.</li>
        <li><strong>Progressive Web App (PWA):</strong> Verifica si tu sitio web cumple con los criterios para ser considerado una Progressive Web App, lo que puede mejorar la experiencia del usuario en dispositivos móviles.</li>
        <li><strong>Search Engine Optimization (SEO):</strong> Analiza la optimización de tu sitio web para los motores de búsqueda, lo que puede ayudar a mejorar su visibilidad en línea.</li>
    </ol>

    <h2>Características adicionales:</h2>
    <ul>
        <li><strong>Compatibilidad con Móviles y Escritorio:</strong> Métricas tanto para la versión de escritorio como para la versión móvil de tu sitio web.</li>
        <li><strong>Historial de Métricas:</strong> Puedes almacenar un historial de las métricas anteriores de tu sitio web, lo que te permite realizar un seguimiento del progreso y las mejoras a lo largo del tiempo.</li>
    </ul>

    <h2>¡Comienza ahora mismo!</h2>
    <p>¡Es muy fácil empezar! Simplemente ingresa la URL de tu sitio web en el siguiente campo, o dirígete a la pagina de Análisis, y comenzará el análisis de su rendimiento en múltiples aspectos importantes.</p>
    <form><div class="form-input"><input type=text class="site-scan" id="scan_url" placeholder="Ingresa la URL de algún sitio!"></div>
        <div class="form-input"><input type="submit" value="Analizar"></div>
    </form>

</div>

@endsection 