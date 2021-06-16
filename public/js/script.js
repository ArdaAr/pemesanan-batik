$('.goCheckout').on('click', function functionName() {
  const batik = $('#inputJenisBatik').val();
  const cara = $('#inputCaraPembuatan').val();
  const bahan = $('#inputBahan').val();
  const barang = $('#inputJenisBarang').val();
  const jumlah = $('#inputJumlah').val();

  $('#nama_pembeli').val($('#inputNama').val());
  $('#jenis_batik').val(batik);
  $('#cara_buat').val(cara);
  $('#bahan_kain').val(bahan);
  $('#jenis_barang').val(barang);
  $('#staticEmail').val($('#inputEmail').val());
  $('#telp_pembeli').val($('#inputTelp').val());
  $('#kode_pos').val($('#inputKodePos').val());
  $('#alamat_pembeli').val($('#inputAddress').val());
  $('#jumlah_beli').val(jumlah);
  $('#idpesanbatik').val(batik);
  $('#idpesanbahan').val(bahan);
  $('#idpesanbarang').val(barang);
  // set id data
  $.ajax({
    url: 'http://localhost/uasPweb/public/pesan/getDataForCart',
    data: {
      batik:batik,
      bahan:bahan,
      barang:barang
    },
    method: 'post',
    dataType: 'json',
    success: function(data) {
      $('#jenis_batik').val(data.batik.jenis);
      $('#bahan_kain').val(data.bahan.nama);
      $('#jenis_barang').val(data.barang.nama);
      const harga = ((parseInt(data.barang.harga_barang) + parseInt(data.batik.harga_jenis) + parseInt(data.bahan.harga_bahan)) * parseInt(jumlah));
      $('#perkiraanHarga').val(harga);
    }
  })

});
// console.log('123');
const dataPesan = $('.message').data('message');
if (dataPesan) {
  swal("Berhasil!", dataPesan, "success");
}
