<h1>Daftar Pelayanan</h1>
@foreach ($pelayanans as $layanan)
<div>
    <h2>{{ $layanan->nama }}</h2>
    <p>{{ $layanan->deskripsi }}</p>
    @if ($layanan->ikon)
    <img src="{{ asset('storage/' . $layanan->ikon) }}" width="100">
    @endif
</div>
@endforeach