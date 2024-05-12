<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai - Tugas Praktikum 9</title>
</head>

<body>
    @php
        $nilai = 90;
    @endphp
    {{-- struktur kendali if --}}
    @if ($nilai >= 90)
        <h1>Nilai Saya A</h1>
    @endif
    <h1>Nilai Saya {{ $nilai }} </h1>
</body>

</html>