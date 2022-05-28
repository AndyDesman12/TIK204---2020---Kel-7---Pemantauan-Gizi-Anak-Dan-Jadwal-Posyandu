function getBotResponse(input) {
    //rock paper scissors
    if (input == "cara mencegah stunting") {
        return 'Penuhi Nutrisi Selama Kehamilan,Penuhi Nutrisi Si Kecil dengan Optimal,Mempratikkan Kebersihan yang Benar,Mengatasi Anak yang Susah Makan,Konsultasi dengan Tim Pelayanan Kesehatan'
    } else if (input == "imunisasi anak") {
        return 'Untuk imunisasi dasar lengkap, bayi berusia kurang dari 24 jam diberikan imunisasi Hepatitis B (HB-0), /nusia 1 bulan diberikan (BCG dan Polio 1), usia 2 bulan diberikan (DPT-HB-Hib 1 dan Polio 2), usia 3 bulan diberikan (DPT-HB-Hib 2 dan Polio 3), usia 4 bulan diberikan (DPT-HB-Hib 3, Polio 4 dan IPV atau Polio suntik), dan usia 9 bulan diberikan (Campak atau MR)'
    }
    else if (input == "berat badan anak") {
        return 'Pilih Makanan Berkalori Tinggi, Tambah Asupan Lemak, Tingkatkan Karbohidrat Kalori dari Minuman, Atur Minum saat Makan, Atur Jadwal Makan, Perbanyak Porsi Makan dan Kombinasi Makanan Seimbang'

    }
     
    if (input == "hello") {
        return "Hai!";
    } 
    else if (input == "goodbye") {
        return "Sampai Jumpa";
    } 
    
    else if(input == "bye"){
        return "Sampai Jumpa"
    }
    else if(input == "terima kasih"){
        return "Sama - sama"
    }
    else if(input == "sampai jumpa"){
        return "Bye! Terima Kasih"
    }
    else if(input == "hai"){
        return "Hallo!"
    }
    else if(input == "halo"){
        return "Hai!"
    }
    else if(input == "Heart clicked!"){
        return "Terima Kasih Banyak"
    }
    else {
        return 'Mohon Maaf, untuk informasi lebih lanjut silahkan hubungi dokter di halaman Kontak Dokter atau kunjungi Posyandu terdekat'}

}
