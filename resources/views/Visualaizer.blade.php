<!-- resources/views/pdf/visualizador.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Visualizador de PDF</title>
    <style>
        #viewerContainer {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>


<div id="viewerContainer" style="display: flex;">
    <iframe id="pdfViewer" src="{{ asset('pdf/mind.pdf') }}" style="width: 50%; height: 100%; border: none;"></iframe>
    <div style="width: 50%; padding: 20px;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">FELICIDADES</h5>
                <div class="tags">
                    <span class="badge badge-primary">Tag 1</span>
                    <span class="badge badge-secondary">Tag 2</span>
                    <span class="badge badge-success">Tag 3</span>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
    
    <script src="{{ asset('js/pdfjs-dist/build/pdf.js') }}"></script>
    <script>
        const pdfPath = 'ruta/hacia/tu/archivo.pdf'; // Ruta hacia tu archivo PDF
        const loadingTask = pdfjsLib.getDocument(pdfPath);
        loadingTask.promise.then(function(pdf) {
            pdf.getPage(1).then(function(page) {
                const scale = 1.5;
                const viewport = page.getViewport({ scale: scale });
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
                document.getElementById('viewerContainer').appendChild(canvas);
            });
        });
    </script>
</body>
</html>
