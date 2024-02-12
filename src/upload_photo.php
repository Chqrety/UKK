<?php
include('cek_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Gallery</title>

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- link icon -->
    <!-- no fill -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,1,0" />

    <!-- fill -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- import costum css -->
    <link rel="stylesheet" href="costum.css">

</head>

<body>
    <header>
        <?php
        $currentPage = 'photo';
        include('navbar.php');
        ?>
    </header>
    <section class="px-56 py-10">
        <div class="mb-20">
            <span class="font-bold text-2xl">Upload Foto</span>
        </div>
        <form method="POST" action="process_upload_photo.php">
            <div class="flex mb-5">
                <div class="basis-1/2">
                    <div class="flex flex-col max-w-xl mb-5">
                        <label class="font-semibold pb-1">Judul Foto</label>
                        <input type="text" placeholder="masukkan judul foto" name="JudulFoto" class="border-2 border-secondary/50 w-full rounded-lg py-1 px-2" required>
                    </div>
                    <div class="flex flex-col max-w-xl mb-5">
                        <label class="font-semibold pb-1">Deskripsi Foto</label>
                        <input type="text" placeholder="masukkan deskripsi foto" name="DeskripsiFoto" class="border-2 border-secondary/50 w-full rounded-lg py-1 px-2" required>
                    </div>
                    <div class="flex flex-col max-w-xl">
                        <label class="font-semibold pb-1">Album</label>
                        <select name="AlbumId" class="border-2 border-secondary/50 w-full rounded-lg py-1 px-2 mb-5">
                            <option disabled selected>Pilih Album</option>
                            <option value="1">Album 1</option>
                        </select>
                    </div>
                </div>
                <div class="basis-1/2">
                    <div class="flex justify-center items-center w-full h-full">
                        <div class="border-2 border-secondary/50 border-dashed rounded-lg cursor-pointer w-full h-96 relative">
                            <div id="previewContainer" class="flex flex-col items-center justify-center gap-4 text-secondary/70 w-full h-full">
                                <span class="material-symbols-rounded text-7xl">
                                    info
                                </span>
                                <span class="font-semibold">Preview Image</span>
                            </div>
                            <input type="file" id="fileInput" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer" onchange="handleFileSelect()">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <a href="album.php">
                    <button type="button" class="flex items-center bg-red-500 py-2 px-6 text-white rounded gap-2">
                        <span class="material-symbols-rounded align-middle">
                            arrow_back_ios_new
                        </span>
                        <span>Kembali</span>
                    </button>
                </a>
                <button type="submit" class="flex items-center bg-ascentBlack py-2 px-6 text-white rounded gap-2">
                    <span>Buat</span>
                    <span class="material-symbols-outlined">
                        add_photo_alternate
                    </span>
                </button>
            </div>
        </form>
    </section>

    <script>
        function handleFileSelect() {
            const fileInput = document.getElementById('fileInput');
            const previewContainer = document.getElementById('previewContainer');
            const selectedFile = fileInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    // Tampilkan gambar sebagai preview
                    previewContainer.innerHTML = `
                    <img src="${e.target.result}" alt="preview" class="h-full rounded-lg">
                `;
                };

                reader.readAsDataURL(selectedFile);
            }
        }
    </script>
</body>

</html>