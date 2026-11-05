
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sa’dan To’barana Smart Tourism</title>
</head>
<body>
    <header>
        <h1>Sa’dan To’barana</h1>
        <p>Smart Tourism Experience</p>
    </header>

    <main>
        <h2>Selamat Datang di Sa’dan To’barana</h2>

        <p>
            Jelajahi keindahan destinasi, budaya, sejarah,
            dan kekayaan tenun Sa’dan To’barana.
        </p>

        <p>
            Kode Treatment:
            
        </p>

        <hr>

        <h3>Jelajahi Destinasi</h3>

        <p>Informasi destinasi wisata akan tersedia di sini.</p>

        <h3>Budaya dan Sejarah</h3>

        <p>Kenali budaya dan sejarah masyarakat setempat.</p>

        <h3>Informasi Tenun</h3>

        <p>Pelajari kekayaan tenun tradisional Sa’dan To’barana.</p>

        <h3>Aktivitas Wisata</h3>

        <p>Temukan aktivitas yang dapat dilakukan selama berkunjung.</p>

        <h3>Lokasi</h3>

        <p>Informasi lokasi dasar destinasi wisata.</p>

        <form action="{{ route('experiment.complete') }}" method="POST">
            @csrf
            <button type="submit">Selesai dan Isi Kuesioner</button>
        </form>
    </main>
</body>
</html>
