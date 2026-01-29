@extends("layouts.app")
@section("content")

<a href="/jurusan/create" class="btn btn-primary mb-3">+ jurusan</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody id="jurusanTable">
    @forelse($jurusan as $j)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $j->nama_jurusan }}</td>
      <td>
        <a href="/jurusan/edit/{{ $j->id }}" class="btn btn-warning">Edit</a>

        <form action="/jurusan/delete/{{ $j->id }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
      </td>
    </tr>
    @empty
    <tr id="empty-row">
      <td colspan="3" class="text-center text-danger">Tidak ada data.</td>
    </tr>
    @endforelse

    <tr id="no-results" style="display: none;">
      <td colspan="3" class="text-center text-danger">Data jurusan tidak ditemukan.</td>
    </tr>
  </tbody>
</table>
@endsection

<script>
  // 1. Dengerin setiap kali ada jari yang angkat dari keyboard (keyup)
  document.addEventListener('keyup', function (e) {

  // 2. Cek apakah yang diketik itu beneran di kotak "searchInput"
  if (e.target && e.target.id === 'searchInput') {

  // 3. Ambil teks yang kamu ketik, ubah ke huruf kecil biar gak ribet sama kapital
  const filter = e.target.value.toLowerCase();

  // 4. Pilih tempat tabelnya (tbody)
  const tableBody = document.getElementById('jurusanTable');

  // 5. Ambil semua baris (tr), TAPI abaikan baris pesan "tidak ada data"
  const rows = tableBody.querySelectorAll('tr:not(#no-results):not(#empty-row)');

  // 6. Siapkan baris khusus yang isinya tulisan "Data tidak ditemukan"
  const noResultsRow = document.getElementById('no-results');

  // 7. Penanda (indikator) buat tau ada data yang cocok atau nggak
  let adaDataYangCocok = false;

  // 8. Cek barisnya satu-satu (looping)
  rows.forEach(row => {
  // Ambil isi kolom ke-2 (Nama Jurusan)
  const kolomJurusan = row.querySelector('td:nth-child(2)');

  if (kolomJurusan) {
  // Ambil teks asli di dalam kolom itu (misal: "Rekayasa Perangkat Lunak")
  const namaJurusan = kolomJurusan.textContent || kolomJurusan.innerText;

  // 9. COCOKKAN: Apakah teks di tabel mengandung kata yang kamu ketik?
  if (namaJurusan.toLowerCase().includes(filter)) {
  row.style.display = "";      // Kalau cocok, tetap tampilkan
  adaDataYangCocok = true;     // Tandai kalau ada yang ketemu
  } else {
  row.style.display = "none";  // Kalau gak cocok, sembunyikan barisnya
  }
  }
  });

  // 10. Terakhir, kalau SAMA SEKALI gak ada yang cocok & kotak search gak kosong
  if (!adaDataYangCocok && filter !== "") {
  noResultsRow.style.display = "";     // Munculkan tulisan "Data tidak ditemukan"
  } else {
  noResultsRow.style.display = "none";  // Sembunyikan tulisannya kalau ada data/kosong
  }
  }
  });
</script>