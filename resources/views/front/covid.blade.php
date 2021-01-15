@extends('layouts.front')

@section('content')
<section class="breadcrumbs">

    <div class="container">  
          
        <div class="d-flex justify-content-between align-items-center">
        
            <h2>Covid-19</h2>
        
            <ol>
        
                <li><a href="/">Home</a></li>
        
                <li>Covid-19</li>
        
            </ol>
        
        </div>

    </div>

</section>

<section id="services" class="blog py-3">
    
    <div class="container">
    
        <div class="section-title">
   
            <h2>Informasi Covid-19</h2>
         
          </div> 

        <div class="row">
    
            <div class="entry mx-auto d-block mb-0">
              
                <marquee>

                    @foreach ($iddata as $iddata)
                    
                    Update covid-19 terbaru di Indonesia, <strong>Positif: {{ $iddata['positif'] }}</strong> | <strong>Sembuh: {{ $iddata['sembuh'] }}</strong> | <strong>Meninggal: {{ $iddata['meninggal'] }}</strong>
                
                    @endforeach

                </marquee>

            </div>
    
        </div>
    
    </div>
  
</section>


<section class="blog">

    <div class="container">  

        <div class="row">

            <div class="entry table-responsive mx-auto d-block mb-0">

                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Positif</th>
                            <th scope="col">Sembuh</th>
                            <th scope="col">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($data as $datas)   
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $datas['attributes']['Provinsi'] }}</td>
                            <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                            <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                            <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</section>

<section class="blog">

    <div class="container">  

        <div class="row">

            <div class="entry mx-auto d-block mb-0">

                <strong>Pengertian Coronavirus</strong>
                <p>
                    Coronavirus atau virus corona merupakan keluarga besar virus yang menyebabkan infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu. Banyak orang terinfeksi virus ini, setidaknya satu kali dalam hidupnya.
                </p>
                <strong>Faktor Risiko Infeksi Coronavirus</strong>  
                <p>
                    Siapa pun dapat terinfeksi virus corona. Akan tetapi, bayi dan anak kecil, serta orang dengan kekebalan tubuh yang lemah lebih rentan terhadap serangan virus ini. Selain itu, kondisi musim juga mungkin berpengaruh. Contohnya, di Amerika Serikat, infeksi virus corona lebih umum terjadi pada musim gugur dan musim dingin. 

                    Di samping itu, seseorang yang tinggal atau berkunjung ke daerah atau negara yang rawan virus corona, juga berisiko terserang penyakit ini. Misalnya, berkunjung ke Tiongkok, khususnya kota Wuhan, yang pernah menjadi wabah COVID-19 yang bermulai pada Desember 2019.
    
                </p>
                
                <strong>Penyebab Infeksi Coronavirus</strong>  
                <p>
                    Infeksi coronavirus disebabkan oleh virus corona itu sendiri. Kebanyakan virus corona menyebar seperti virus lain pada umumnya, seperti: 
                </p>
                <li>Percikan air liur pengidap (bantuk dan bersin).</li>
                <li>Menyentuh tangan atau wajah orang yang terinfeksi.</li>
                <li>Menyentuh mata, hidung, atau mulut setelah memegang barang yang terkena percikan air liur pengidap virus corona.</li>
                <li>Tinja atau feses (jarang terjadi)</li>
                <br>
                <p>
                    Khusus untuk COVID-19, masa inkubasi belum diketahui secara pasti. Namun, rata-rata gejala yang timbul setelah 2-14 hari setelah virus pertama masuk ke dalam tubuh. Di samping itu, metode transmisi COVID-19 juga belum diketahui dengan pasti. Awalnya, virus corona jenis COVID-19 diduga bersumber dari hewan. Virus corona COVID-19 merupakan virus yang beredar pada beberapa hewan, termasuk unta, kucing, dan kelelawar. 
                </p>

                <p>
                    Sebenarnya virus ini jarang sekali berevolusi dan menginfeksi manusia dan menyebar ke individu lainnya. Namun, kasus di Tiongkok kini menjadi bukti nyata kalau virus ini bisa menyebar dari hewan ke manusia. Bahkan, kini penularannya bisa dari manusia ke manusia. 
                </p>

                <strong>Gejala Infeksi Coronavirus</strong>  
                <p>
                    Virus corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada jenis virus corona yang menyerang, dan seberapa serius infeksi yang terjadi. Berikut beberapa gejala virus corona yang terbilang ringan:
                </p>

                <li>Hidung beringus.</li>
                <li>Sakit kepala.</li>
                <li>Batuk.</li>
                <li>Sakit tenggorokan.</li>
                <li>Demam.</li>
                <li>Merasa tidak enak badan.</li>

                <br>

                <p>
                    Hal yang perlu ditegaskan, beberapa virus corona dapat menyebabkan gejala yang parah. Infeksinya dapat berubah menjadi bronkitis dan pneumonia (disebabkan oleh COVID-19), yang mengakibatkan gejala seperti:
                </p>

                <li>Demam yang mungkin cukup tinggi bila pasien mengidap pneumonia.</li>
                <li>Batuk dengan lendir.</li>
                <li>Sesak napas.</li>
                <li>Nyeri dada atau sesak saat bernapas dan batuk.</li>
                <br>
                <p>
                    Infeksi bisa semakin parah bila menyerang kelompok individu tertentu. Contohnya, orang dengan penyakit jantung atau paru-paru, orang dengan sistem kekebalan yang lemah, bayi, dan lansia. 
                </p>

                <strong>Diagnosis Infeksi Coronavirus</strong>  
                <p>
                    Untuk mendiagnosis infeksi virus corona, dokter akan mengawali dengan anamnesis atau wawancara medis. Di sini dokter akan menanyakan seputar gejala atau keluhan yang dialami pasien. Selain itu, dokter juga akan melakukan pemeriksaan fisik, dan pemeriksaan darah untuk membantu menegakkan diagnosis.
                </p>

                <p>
                    Dokter mungkin juga akan melakukan tes dahak, mengambil sampel dari tenggorokan, atau spesimen pernapasan lainnya. Untuk kasus yang diduga infeksi novel coronavirus, dokter akan melakukan swab tenggorokan, DPL, fungsi hepar, fungsi ginjal, dan PCT/CRP.
                </p>

                <strong>Komplikasi Infeksi Coronavirus</strong>  
                <p>
                    Virus corona yang menyebabkan penyakit SARS bisa menimbulkan komplikasi pneumonia, dan masalah pernapasan parah lainnya bila tak ditangani dengan cepat dan tepat. Selain itu, SARS juga bisa menyebabkan kegagalan pernapasan, gagal jantung, hati, dan kematian.
                </p>

                <p>
                    Hampir sama dengan SARS, novel coronavirus juga bisa menimbulkan komplikasi yang serius. Infeksi virus ini bisa menyebabkan pneumonia, sindrom pernapasan akut, gagal ginjal, dan bahkan kematian.
                </p>

                <strong>
                    Pengobatan Infeksi Coronavirus    
                </strong>  
                <p>
                    Tak ada perawatan khusus untuk mengatasi infeksi virus corona. Umumnya pengidap akan pulih dengan sendirinya. Namun, ada beberapa upaya yang bisa dilakukan untuk meredakan gejala infeksi virus corona. Contohnya:
                </p>

                <li>Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun.</li>
                <li>Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk.</li>
                <li>Perbanyak istirahat.</li>
                <li>Perbanyak asupan cairan tubuh.</li>
                <li>Jika merasa khawatir dengan gejala yang dialami, segeralah hubungi penyedia layanan kesehatan terdekat.</li>
                <br>
                <p>
                    Khusus untuk virus corona yang menyebabkan penyakit serius, seperti SARS, MERS, atau infeksi COVID-19, penanganannya akan disesuaikan dengan penyakit yang diidap dan kondisi pasien. 
                </p>

                <p>
                    Bila pasien mengidap infeksi novel coronavirus, dokter akan merujuk ke RS Rujukan yang telah ditunjuk oleh Dinkes (Dinas Kesehatan) setempat. Bila tidak bisa dirujuk karena beberapa alasan, dokter akan melakukan:
                </p>

                <li>Isolasi</li>
                <li>Serial foto toraks sesuai indikasi.</li>
                <li>Terapi simptomatik.</li>
                <li>Terapi cairan.</li>
                <li>Ventilator mekanik (bila gagal napas)</li>
                <li>Bila ada disertai infeksi bakteri, dapat diberikan antibiotik.</li>

                <br>
                
               <strong> Pencegahan Infeksi Coronavirus</strong> 
                <p>
                    Sampai saat ini belum ada vaksin untuk mencegah infeksi virus corona. Namun, setidaknya ada beberapa cara yang bisa dilakukan untuk mengurangi risiko terjangkit virus ini. Berikut upaya yang bisa dilakukan: 
                </p>
                
                <li>Sering-seringlah mencuci tangan dengan sabun dan air selama 20 detik hingga bersih.</li>
                <li>Hindari menyentuh wajah, hidung, atau mulut saat tangan dalam keadaan kotor atau belum dicuci.</li>
                <li>Hindari kontak langsung atau berdekatan dengan orang yang sakit.</li>
                <li>Hindari menyentuh hewan atau unggas liar.</li> 
                <li>Membersihkan dan mensterilkan permukaan benda yang sering digunakan.</li> 
                <li>Tutup hidung dan mulut ketika bersin atau batuk dengan tisu. Kemudian, buanglah tisu dan cuci tangan hingga bersih. </li>
                <li>Jangan keluar rumah dalam keadaan sakit.</li>
                <li>Kenakan masker dan segera berobat ke fasilitas kesehatan ketika mengalami gejala penyakit saluran napas. </li>
                
                <br>

                <p>
                    Selain itu, kamu juga bisa perkuat sistem kekebalan tubuh dengan konsumsi vitamin dan suplemen sebagai bentuk pencegahan dari virus ini. Temukan berbagai produk pencegahan Corona yang kamu butuhkan di Halodoc. 
                </p>

                <br>

                <strong>Source:</strong> <a href="https://www.halodoc.com/kesehatan/coronavirus" target="_blank" rel="noopener noreferrer"><i>halodoc.com/kesehatan/coronavirus</i></a>
                
            </div>

        </div>

    </div>

</section>

@endsection