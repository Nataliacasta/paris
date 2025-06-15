@extends('layouts.app')

@section('content')

<section id="hero-2" class="relative bg-heroimg2 bg-cover bg-fixed text-center py-24">
    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent drop-shadow-md">
        Crea tus propios diseños de uñas
    </h2>
</section>

<div class="flex justify-center px-4 py-12">
    <div class="w-full max-w-6xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="relative">
            <img src="{{ asset('css/images/nailhand2.png') }}" id="nailhandimg" alt="Nail Image" class="w-full h-auto block">
            <canvas id="paintCanvas" width="1000" height="600" class="absolute top-0 left-0 w-full h-auto"></canvas>
        </div>

        <div id="toolbar" class="flex flex-wrap items-center justify-center gap-4 p-4 bg-gray-100 border-t border-gray-300">
            <input type="color" id="colorPicker" class="w-12 h-12 border rounded">
            <input type="range" id="brushThicknessSlider" min="1" max="100" value="10" class="w-32">
            
            <button id="drawScribbleButton" class="bg-pink-500 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded">Pincel</button>
            <button id="drawPenButton" class="bg-pink-500 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded">Lápiz</button>
            <button id="clearButton" class="bg-pink-500 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded">Borrar</button>
            <button onclick="addImageToCanvas('{{ asset('css/images/flower.png') }}')" class="bg-pink-500 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded">Añadir flor</button>
            <button onclick="addImageToCanvas('{{ asset('css/images/heart.png') }}')" class="bg-pink-500 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded">Añadir corazón</button>
            <button id="saveButton" class="bg-pink-500 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded">Guardar</button>
        </div>
    </div>
</div>
@endsection
<script>
document.addEventListener("DOMContentLoaded", function () {
    let color = '#000000';
    let canvas = document.getElementById('paintCanvas');
    let context = canvas.getContext('2d');
    let drawingMode = 'scribble';
    let isDrawing = false;
    let radius = 10;

    // Función para obtener posición del mouse escalada correctamente
    function getMousePos(canvas, evt) {
        const rect = canvas.getBoundingClientRect();
        const scaleX = canvas.width / rect.width;
        const scaleY = canvas.height / rect.height;

        return {
            x: (evt.clientX - rect.left) * scaleX,
            y: (evt.clientY - rect.top) * scaleY
        };
    }

    document.getElementById("drawScribbleButton").addEventListener("click", function () {
        drawingMode = 'scribble';
    });

    document.getElementById("drawPenButton").addEventListener("click", function () {
        drawingMode = 'pen';
    });

    document.getElementById("brushThicknessSlider").addEventListener("input", function () {
        radius = this.value;
    });

    document.getElementById("colorPicker").addEventListener("change", function () {
        color = this.value;
    });

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        const pos = getMousePos(canvas, e);
        context.beginPath();
        context.moveTo(pos.x, pos.y);
        isDrawing = true;

        if (drawingMode === 'pen') {
            context.lineWidth = 2;
            context.strokeStyle = color;
            context.lineCap = 'round';
            context.lineTo(pos.x, pos.y);
            context.stroke();
        }
    }

    function draw(e) {
        if (!isDrawing) return;
        const pos = getMousePos(canvas, e);

        if (drawingMode === 'scribble') {
            context.lineTo(pos.x, pos.y);
            context.strokeStyle = color;
            context.lineWidth = radius * 2;
            context.stroke();
        } else if (drawingMode === 'pen') {
            context.lineTo(pos.x, pos.y);
            context.stroke();
        }
    }

    function stopDrawing() {
        isDrawing = false;
        context.closePath();
    }

    document.getElementById("clearButton").addEventListener("click", function () {
        context.clearRect(0, 0, canvas.width, canvas.height);
    });

    function addImageToCanvas(imageUrl) {
        let img = new Image();
        img.src = imageUrl;
        img.onload = function () {
            canvas.addEventListener('click', function handler(event) {
                const pos = getMousePos(canvas, event);
                context.drawImage(img, pos.x - img.width / 2, pos.y - img.height / 2);
                canvas.removeEventListener('click', handler);
            });
        };
    }

    // Hacer la función accesible desde los botones con onclick
    window.addImageToCanvas = addImageToCanvas;

    document.getElementById("saveButton").addEventListener("click", function () {
        let dataURL = canvas.toDataURL();
        let link = document.createElement('a');
        link.href = dataURL;
        link.download = 'canvas_image.png';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
});
</script>
