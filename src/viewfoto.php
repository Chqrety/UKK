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
    ?>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <article class="flex flex-col items-center w-72 cursor-pointer">
            <div class="w-full p-2 flex justify-between border-t border-x border-secondary/30 rounded-t-lg">
                <span class="font-semibold"><?= $row['Username'] ?></span>
                <span><?= $row['NamaAlbum'] ?></span>
            </div>
            <div class="w-fit h-fit overflow-hidden">
                <img src="<?= $row['LokasiFile'] ?>" alt="post" class="w-72 h-72 object-cover object-center">
            </div>
            <div class="border-b border-x border-secondary/30 rounded-b-lg w-full">
                <div class="p-2">
                    <span class="text-sm"><?= $row['DeskripsiFoto'] ?></span>
                </div>
                <div class="flex gap-x-3 text-sm p-2">
                    <div class="flex items-center">
                        <span class="material-symbols-rounded">favorite</span>
                        <span><?= $row['jumlah_like'] ?></span>
                    </div>
                    <div class="flex items-center">
                        <span class="material-symbols-rounded">chat_bubble</span>
                        <span><?= $row['jumlah_komentar'] ?></span>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>

    <?php
    // Bebaskan hasil query
    $result->free_result();

    // Tutup koneksi
    $koneksi->close();
    ?>

</section>