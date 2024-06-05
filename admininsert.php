<?php
include 'config.php';

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $image = $_FILES['image'];
    $pdf = $_FILES['pdf'];

    // Validate image file extension (allow .jpg, .jpeg, and .png)
    $allowedImageExtensions = ['jpg', 'jpeg', 'png'];
    $imageExtension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

    if (!in_array($imageExtension, $allowedImageExtensions)) {
        die("Invalid image file format. Allowed formats are .jpg, .jpeg, and .png.");
    }

    // Validate PDF file extension (allow .pdf)
    $allowedPdfExtension = 'pdf';
    $pdfExtension = strtolower(pathinfo($pdf['name'], PATHINFO_EXTENSION));

    if ($pdfExtension !== $allowedPdfExtension) {
        die("Invalid PDF file format. Allowed format is .pdf.");
    }

    $img_loc = $image['tmp_name'];
    $img_name = $image['name'];
    $img_des = "uploadimage/" . $img_name;

    $pdf_loc = $pdf['tmp_name'];
    $pdf_name = $pdf['name'];
    $pdf_des = "uploadpdf/" . $pdf_name;

    move_uploaded_file($img_loc, 'uploadimage/' . $img_name);
    move_uploaded_file($pdf_loc, 'uploadpdf/' . $pdf_name);

    mysqli_query($con, "INSERT INTO records(name,genre,image,pdf) VALUES ('$name','$genre','$img_des','$pdf_des')");
} else {
    die("Form submission error.");
}

header('location:records.php');
exit;
?>
