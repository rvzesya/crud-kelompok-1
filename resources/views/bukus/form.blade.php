<div class="mb-3">
    <label class="form-label">Kode Buku</label>
    <input type="text" name="kode_buku" class="form-control" value="{{ old('kode_buku', $buku->kode_buku ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="judul" class="form-control" value="{{ old('judul', $buku->judul ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Kategori</label>
    <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $buku->kategori ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Penulis</label>
    <input type="text" name="penulis" class="form-control" value="{{ old('penulis', $buku->penulis ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Tahun Terbit</label>
    <input type="number" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $buku->tahun_terbit ?? '') }}" min="1900" max="2100" required>
</div>
<div class="mb-3">
    <label class="form-label">Jumlah</label>
    <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $buku->jumlah ?? '') }}" min="0" required>
</div>
<div class="mb-3">
    <label class="form-label">Keterangan</label>
    <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $buku->keterangan ?? '') }}</textarea>
</div>
