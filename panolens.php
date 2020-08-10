<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panolens</title>

    <script src="panolens/three.min.js"></script>
    <script src="panolens/panolens.min.js"></script>
   
</head>
<body>
    
    <script>
        const panorama = new PANOLENS.ImagePanorama( 'panoramas/test.jpg' );
        const viewer = new PANOLENS.Viewer();
        viewer.add( panorama );
    </script>
</body>
</html>