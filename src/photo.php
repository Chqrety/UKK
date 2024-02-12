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
    <section class="grid grid-cols-5 px-14 py-5 place-items-center gap-10">
        <a href="add_photo.php" class="h-full">
            <article class="border-2 border-secondary/50 border-dashed w-72 h-full rounded-lg">
                <div class="flex flex-col items-center justify-center gap-4 text-secondary/70 h-full">
                    <span class="material-symbols-rounded text-7xl">
                        add_circle
                    </span>
                    <span class="font-semibold">Add Photo</span>
                </div>
            </article>
        </a>
        <?php
        include('koneksi.php');

        // Ambil data dari database
        $query = "SELECT user.Username, album.NamaAlbum, foto.LokasiFile, foto.DeskripsiFoto, COUNT(likefoto.LikeID) as jumlah_like, COUNT(komentarfoto.KomentarId) as jumlah_komentar
        FROM foto
        INNER JOIN user ON foto.UserId = user.UserId
        INNER JOIN album ON foto.AlbumId = album.AlbumId
        LEFT JOIN likefoto ON foto.FotoId = likefoto.FotoId
        LEFT JOIN komentarfoto ON foto.FotoId = komentarfoto.FotoId
        GROUP BY foto.FotoId";


        $result = $koneksi->query($query);

        // Periksa apakah query berhasil dieksekusi
        if (!$result) {
            die("Error: " . $koneksi->error);
        }

        // Tampilkan data dalam artikel
        while ($row = $result->fetch_assoc()) {
            echo '<article class="flex flex-col items-center w-72 cursor-pointer">';
            echo '<div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">';
            echo '<span class="font-semibold">' . $row['Username'] . '</span>';
            echo '<span>' . $row['NamaAlbum'] . '</span>';
            echo '</div>';
            echo '<div class="w-fit h-fit overflow-hidden">';
            echo '<img src="' . $row['LokasiFile'] . '" alt="post" class="w-72 h-72 object-cover object-center">';
            echo '</div>';
            echo '<div class="border-b border-x border-secondary/30 rounded-b-lg w-full">';
            echo '<div class="p-2">';
            echo '<span class="text-sm">' . $row['DeskripsiFoto'] . '</span>';
            echo '</div>';
            echo '<div class="flex gap-x-3 text-sm p-2">';
            echo '<div class="flex items-center">';
            echo '<span class="material-symbols-rounded">favorite</span>';
            echo '<span>' . $row['jumlah_like'] . '</span>';
            echo '</div>';
            echo '<div class="flex items-center">';
            echo '<span class="material-symbols-rounded">chat_bubble</span>';
            echo '<span>' . $row['jumlah_komentar'] . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</article>';
        }

        // Bebaskan hasil query
        $result->free_result();

        // Tutup koneksi
        $koneksi->close();
        ?>
    </section>

</body>

</html>