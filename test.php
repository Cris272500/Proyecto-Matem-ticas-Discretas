<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Imagen</title>

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
    }
  </style>
</head>

<body>
  <?php if (isset($_GET['error'])) : ?>
    <p><?php echo $_GET['error'] ?></p>
  <?php endif ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">

    <!--
      <input type="file"
             name="my_image">
      <input type="submit" 
             name="submit"
             value="Upload">
  -->
    <label for="course_title">Titulo del curso:</label>
    <input type="text" name="titulo">

    <label for="course_categoria">Categoria:</label>
    <input type="text" name="categoria">

    <label for="course_duracion">Duracion:</label>
    <input type="text" name="duracion">

    <label for="course_descripcion">Descripcion</label>
    <textarea name="descripcion" rows="6" cols="50"></textarea>

    <input type="file" name="my_image">
    <input type="submit" name="submit" value="Upload">
  </form>
</body>

</html>