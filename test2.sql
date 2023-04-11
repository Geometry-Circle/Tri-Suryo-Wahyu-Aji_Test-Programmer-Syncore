-- Menampilkan data member yang berada pada provinsi sumatera utara dan dalam satu kabupaten
    SELECT * FROM mst_member WHERE id;

-- Menampilkan data provinsi yang tidak ada dalam data member
    SELECT * FROM mst_provinsi WHERE id_provinsi NOT IN(SELECT id_provinsi FROM mst_member);

-- Menampilkan data kabupaten yang tidak ada dalam data member
    SELECT * FROM mst_kabupaten WHERE id_kabupaten NOT IN(SELECT id_kabupaten FROM mst_member);

-- Menampilkan data kecamatan yang tidak ada dalam data member
    SELECT * FROM mst_kecamatan WHERE id_kecamatan NOT IN(SELECT id_kecamatan FROM mst_member);

-- Menampilkan nama member yang terdapat di Kab. Simalungun
    SELECT nama FROM mst_member WHERE id_kabupaten = '12.08';

-- Menampilkan jumlah data instansi pada Kab. Bireuen dan Kab. Bener Meriah
    SELECT COUNT(*) FROM mst_instansi WHERE kode_kabupaten IN ('11.11', '11.17');

-- Menampilkan data member yang berawalan huruf “M”
    SELECT * FROM mst_member WHERE name LIKE "M%";

-- Menampilkan alamat email yang mempunyai karakter “no” dan terdapat di provinsi Sumatera Utara
    SELECT email FROM mst_member WHERE email LIKE '%no%' AND id_provinsi = '12';

-- Menampilkan data member yang mempunyai kode instansi “2004”
    SELECT * FROM mst_member WHERE kode_instansi LIKE '%2004%';

-- Menampilkan data member yang mempunyai karakter kode kecamatan “.08.”
    SELECT * FROM mst_member WHERE id_kecamatan LIKE '%.08.%';
