document.getElementById('cetakBtn').addEventListener('click', function() {
    var detailPembelianPrint = document.getElementById('detailPembelianPrint');
    var originalContents = document.body.innerHTML;
    var printContents = detailPembelianPrint.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
});