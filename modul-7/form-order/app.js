function HargaTotal() {
    var myForm = document.pemesanan;
    var total1;
    var total2;
    var total3;
    var total4;
    var total5;
    var jumlah1 = parseInt(myForm.jumlah1.value);
    var jumlah2 = parseInt(myForm.jumlah2.value);
    var jumlah3 = parseInt(myForm.jumlah3.value);
    var jumlah4 = parseInt(myForm.jumlah4.value);
    var jumlah5 = parseInt(myForm.jumlah5.value);
    
    if(myForm.jumlah1.value == "") jumlah1=0;
    if(myForm.jumlah2.value == "") jumlah2=0;
    if(myForm.jumlah3.value == "") jumlah3=0;
    if(myForm.jumlah4.value == "") jumlah4=0;
    if(myForm.jumlah5.value == "") jumlah5=0;
    
    total1 = parseInt(myForm.harga1.value)*jumlah1;
    total2 = parseInt(myForm.harga2.value)*jumlah2;
    total3 = parseInt(myForm.harga3.value)*jumlah3;
    total4 = parseInt(myForm.harga4.value)*jumlah4;
    total5 = parseInt(myForm.harga5.value)*jumlah5;
    
    myForm.total.value = total1 + total2 + total3 + total4 + total5;
    }
    
    function diskon() {
    var myForm = document.pemesanan;
    
    if(myForm.total.value < 50000) {
    myForm.potongan.value = 0;
    }
    else {
    myForm.potongan.value = 15000;
    }
    }
    
    function TotalBayar() {
    var myForm = document.pemesanan;
    
    myForm.bayar.value = parseInt(myForm.total.value) - parseInt(myForm.potongan.value);
    }
    
    function proses() {
    HargaTotal();
    diskon();
    TotalBayar();
    }
    
    function batal() {
    var element = document.pemesanan;
    
    element.jumlah1.value = "";
    element.jumlah2.value = "";
    element.jumlah3.value = "";
    element.jumlah4.value = "";
    element.jumlah5.value = "";
    element.total.value = "";
    element.potongan.value = "";
    element.bayar.value = "";
    }