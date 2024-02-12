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
        $currentPage = 'album';
        include('navbar.php');
        ?>
    </header>
    <section class="px-14 py-5">
        <?php
        include('koneksi.php');

        // Mendapatkan id album dari parameter query string
        if (isset($_GET['id'])) {
            $albumId = $_GET['id'];

            // Query untuk mengambil data album dari database
            $queryAlbum = "SELECT album.*, user.Username FROM album INNER JOIN user ON album.UserId = user.UserId WHERE album.AlbumId = $albumId";
            $resultAlbum = $koneksi->query($queryAlbum);

            // Cek apakah query album berhasil dijalankan
            if ($resultAlbum) {
                $rowAlbum = $resultAlbum->fetch_assoc();
                $albumName = $rowAlbum['NamaAlbum'];
                $username = $rowAlbum['Username'];
                $deskripsi = $rowAlbum['Deskripsi'];

                // Query untuk mengambil data foto dari album berdasarkan id album
                $queryFoto = "SELECT * FROM foto WHERE AlbumId = $albumId";
                $resultFoto = $koneksi->query($queryFoto);

                // Cek apakah query foto berhasil dijalankan
                if ($resultFoto) {
        ?>
                    <div class="mb-8 flex flex-col w-full items-center">
                        <span class="text-3xl font-semibold"><?= $albumName ?></span>
                        <span class="text-secondary/50">By <?= $username ?></span>
                        <span class="">"<?= $deskripsi ?>"</span>
                        <div class="flex gap-2 mt-5">
                            <a href="edit_album.php?id=<?= $albumId ?>" class="flex items-center text-yellow-500 gap-1 border border-yellow-500/50 rounded px-2 py-1">
                                <span class="material-symbols-outlined">edit</span>
                                <span class="font-semibold text-sm">Edit</span>
                            </a>
                            <a href="proses_hapus_album.php?id=<?= $albumId ?>" class="flex items-center text-red-500 gap-1 border border-red-500/50 rounded px-2 py-1">
                                <span class="material-symbols-outlined">delete</span>
                                <span class="font-semibold text-sm">Delete</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-5 gap-5">
                        <?php
                        // Loop untuk setiap foto hasil query
                        while ($rowFoto = $resultFoto->fetch_assoc()) {
                            $fotoPath = $rowFoto['LokasiFile'];
                            $deskripsiFoto = $rowFoto['DeskripsiFoto'];

                            // Query untuk mengambil jumlah likes dari tabel likefoto
                            $queryLikes = "SELECT COUNT(*) AS jumlah_likes FROM likefoto WHERE FotoId = " . $rowFoto['FotoId'];
                            $resultLikes = $koneksi->query($queryLikes);
                            $rowLikes = $resultLikes->fetch_assoc();
                            $jumlahLikes = $rowLikes['jumlah_likes'];

                            // Query untuk mengambil jumlah komentar dari tabel komentarfoto
                            $queryComments = "SELECT COUNT(*) AS jumlah_comments FROM komentarfoto WHERE FotoId = " . $rowFoto['FotoId'];
                            $resultComments = $koneksi->query($queryComments);
                            $rowComments = $resultComments->fetch_assoc();
                            $jumlahComments = $rowComments['jumlah_comments'];
                        ?>
                            <article class="flex flex-col items-center w-72 cursor-pointer">
                                <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
                                    <span class="font-semibold"><?= $username ?></span>
                                    <span><?= $albumName ?></span>
                                </div>
                                <div class="w-fit h-fit overflow-hidden">
                                    <img src="<?= $fotoPath ?>" alt="post.jpg" class="w-72 h-72 object-cover object-center">
                                </div>
                                <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
                                    <div class="p-2">
                                        <span class="text-sm"><?= $deskripsiFoto ?></span>
                                    </div>
                                    <div class="flex gap-x-3 text-sm p-2">
                                        <div class="flex items-center">
                                            <span class="material-symbols-rounded">favorite</span>
                                            <span><?= $jumlahLikes ?></span>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="material-symbols-rounded">chat_bubble</span>
                                            <span><?= $jumlahComments ?></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
            <?php
                        }

                        echo '</div>';
                        // Bebaskan hasil query foto
                        $resultFoto->free();
                    } else {
                        echo "Error: " . $queryFoto . "<br>" . $koneksi->error;
                    }

                    // Bebaskan hasil query album
                    $resultAlbum->free();
                } else {
                    echo "Error: " . $queryAlbum . "<br>" . $koneksi->error;
                }
            } else {
                echo "Album ID not provided.";
            }

            // Tutup koneksi ke database
            $koneksi->close();
            ?>

    </section>
</body>

</html>