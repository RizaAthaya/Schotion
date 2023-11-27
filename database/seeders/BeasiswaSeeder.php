<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use App\Models\KategoriBeasiswa;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriIDs = KategoriBeasiswa::pluck('id_kategori_beasiswa')->toArray();

        // for ($i = 0; $i < 5; $i++) {
        // }
        Beasiswa::create([
            'nama' => 'Beasiswa SDA',
            'deskripsi' => 'Beasiswa SDA untuk Future-Ready Generation </br>

            “Senantiasa di sisi Anda” merupakan komitmen SDA yang bukan hanya ditujukan bagi nasabah, namun juga bagi seluruh stakeholders. Sejak 1999, SDA berkontribusi bagi pemberdayaan masyarakat dan pembangunan berkelanjutan di bidang pendidikan melalui pemberian Beasiswa Bakti SDA. Beasiswa ini diperuntukkan bagi #GenerasiPastiBisa Indonesia yang memiliki semangat untuk membangun negeri dan menjadi pemimpin bangsa di masa depan. 
            </br>
            Selaras dengan salah satu value SDA, yaitu continuous pursuit of excellence, kami membuka kesempatan bagi mahasiswa/i Indonesia berprestasi, baik di bidang akademis, maupun non-akademis, yang memiliki semangat untuk terus mengasah kemampuan dan kompetensi diri untuk mempersiapkan diri menjadi generasi penerus bangsa di bidang apapun yang diminati dan ditekuni. Setiap tahunnya, SDA memberikan bantuan berupa dana pendidikan dan program pengembangan bagi mahasiswa/i dari berbagai perguruan tinggi di Indonesia untuk mencapai impian.
            </br>
            Apakah kamu future-ready generation yang kami cari? Pendaftaran program Beasiswa Bakti SDA 2024 sudah dibuka dengan periode pendaftaran 10-23 Oktober 2023.   ',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(30),
            'penyelenggara' => 'SDA',
            'link_gambar' => 'https://th.bing.com/th/id/OIP._GwvvgQt6WuziQVmLDPUQAAAAA?rs=1&pid=ImgDetMain',
            'id_kategori_beasiswa' => $kategoriIDs[1 % count($kategoriIDs)],
        ]);

        Beasiswa::create([
            'nama' => 'Beasiswa BCA',
            'deskripsi' => 'Beasiswa Bakti BCA untuk Future-Ready Generation 

            “Senantiasa di sisi Anda” merupakan komitmen BCA yang bukan hanya ditujukan bagi nasabah, namun juga bagi seluruh stakeholders. Sejak 1999, BCA berkontribusi bagi pemberdayaan masyarakat dan pembangunan berkelanjutan di bidang pendidikan melalui pemberian Beasiswa Bakti BCA. Beasiswa ini diperuntukkan bagi #GenerasiPastiBisa Indonesia yang memiliki semangat untuk membangun negeri dan menjadi pemimpin bangsa di masa depan. 
            
            Selaras dengan salah satu value BCA, yaitu continuous pursuit of excellence, kami membuka kesempatan bagi mahasiswa/i Indonesia berprestasi, baik di bidang akademis, maupun non-akademis, yang memiliki semangat untuk terus mengasah kemampuan dan kompetensi diri untuk mempersiapkan diri menjadi generasi penerus bangsa di bidang apapun yang diminati dan ditekuni. Setiap tahunnya, BCA memberikan bantuan berupa dana pendidikan dan program pengembangan bagi mahasiswa/i dari berbagai perguruan tinggi di Indonesia untuk mencapai impian.
            
            Apakah kamu future-ready generation yang kami cari? Pendaftaran program Beasiswa Bakti BCA 2024 sudah dibuka bulan Oktober 2023.   ',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(30),
            'penyelenggara' => 'BCA',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.fxuk_j5pV84R-xa8t9dCMgHaHX?w=208&h=207&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_beasiswa' => $kategoriIDs[2 % count($kategoriIDs)],
        ]);
        
        // Beasiswa 2 - Local
        Beasiswa::create([
            'nama' => 'Beasiswa Unggulan',
            'deskripsi' => 'Program Beasiswa Unggulan bertujuan untuk memberikan pengakuan dan dukungan kepada mahasiswa berprestasi serta berdedikasi dalam mencapai keunggulan di berbagai bidang. Dengan komitmen untuk mendorong perkembangan tidak hanya dalam aspek akademis, tetapi juga non-akademis, program beasiswa ini merangkul visi inklusif untuk membentuk individu yang tidak hanya unggul secara intelektual, tetapi juga memiliki keterampilan dan keahlian di luar lingkup kurikulum akademis.

            Beasiswa ini tidak hanya menyediakan dukungan finansial, tetapi juga menawarkan pelatihan keterampilan yang relevan dengan kebutuhan masa depan. Dengan cara ini, tujuan utama program ini adalah membantu mahasiswa tidak hanya untuk mencapai prestasi akademis yang tinggi tetapi juga untuk mengasah dan mengembangkan kemampuan dan potensi mereka di luar batas kelas.
            
            Pendaftaran untuk program Beasiswa Unggulan akan dibuka mulai tanggal 15 November hingga 30 November 2023. Ini memberikan peluang kepada mahasiswa berbakat untuk mengajukan diri dan menjadi bagian dari komunitas yang mendukung pertumbuhan pribadi dan profesional mereka. Dengan demikian, program ini menjadi langkah awal yang signifikan bagi mereka yang bercita-cita untuk mencapai keunggulan dalam perjalanan pendidikan mereka.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now(),
            'penyelenggara' => 'Pusat Unggulan Pendidikan',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.yliR-T0Mm1YApZ6Qsg7rmwAAAA?w=275&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_beasiswa' => $kategoriIDs[4 % count($kategoriIDs)],
        ]);

        // Beasiswa 3 - Local
        Beasiswa::create([
            'nama' => 'Beasiswa Kreatifitas',
            'deskripsi' => 'Beasiswa Kreativitas Muda adalah wadah bagi mahasiswa muda untuk mengembangkan dan mengekspresikan kreativitas serta inovasi mereka. Program ini bertujuan memberikan dukungan penuh terhadap gagasan-gagasan unik dan kreatif yang dimiliki oleh mahasiswa. Melalui program ini, mahasiswa memiliki kesempatan untuk mewujudkan proyek-proyek inovatif mereka dan meraih potensi maksimal dari kreativitas yang mereka miliki.

            Beasiswa ini tidak hanya memberikan pendanaan, tetapi juga memberikan bimbingan langsung dari para ahli di bidangnya. Dengan adanya dukungan ini, mahasiswa dapat mengasah ide-ide kreatif mereka, mengatasi tantangan yang mungkin mereka hadapi, dan mengembangkan proyek mereka menjadi kontribusi yang berarti dalam bidang yang mereka tekuni.
            
            Pendaftaran untuk Beasiswa Kreativitas Muda akan tetap terbuka hingga tanggal 15 Desember 2023. Ini memberikan waktu yang cukup bagi mahasiswa kreatif untuk mengeksplorasi dan merinci proyek-proyek mereka dengan seksama. Program ini menciptakan lingkungan yang mendukung dan memfasilitasi pertumbuhan ide-ide inovatif, menciptakan generasi mahasiswa yang tidak hanya berpikir di luar kotak, tetapi juga berani mewujudkan ide-ide mereka menjadi kenyataan.',
            'tanggal_mulai' => now()->addDays(10),
            'tanggal_berakhir' => now()->addDays(40),
            'penyelenggara' => 'Yayasan Kreatif Indonesia',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.El_AiimwUglRUqD1q1_d6AHaEc?w=260&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_beasiswa' => $kategoriIDs[6 % count($kategoriIDs)],
        ]);

        // Beasiswa 4 - Local
        Beasiswa::create([
            'nama' => 'Beasiswa Sosial Pribadi',
            'deskripsi' => 'Beasiswa Sosial Pribadi merupakan panggilan bagi mahasiswa yang menunjukkan komitmen luar biasa terhadap transformasi positif dalam ranah sosial. Program ini khusus dirancang untuk individu yang tidak hanya terlibat sebagai peserta, melainkan juga sebagai agen aktif dalam kegiatan sosial yang menghasilkan dampak positif yang nyata dalam masyarakat. Beasiswa ini menjadi sarana bagi mahasiswa yang telah membuktikan diri sebagai pionir perubahan, dengan tekad yang kuat untuk meningkatkan kualitas hidup sesama dan memberikan kontribusi berarti di berbagai lapisan masyarakat.

            Beasiswa Sosial Pribadi bukan sekadar bantuan finansial; ini juga merupakan pengakuan atas peran integral mahasiswa dalam menginspirasi perubahan sosial. Program ini memberikan penghargaan kepada mereka yang dengan tekun berusaha memahami dan mengatasi tantangan sosial di sekitarnya, membawa visi untuk menciptakan masyarakat yang lebih inklusif dan berkelanjutan.
            
            Pendaftaran untuk beasiswa ini akan dibuka mulai tanggal 1 Desember hingga 20 Desember 2023. Rentang waktu ini memberikan peluang bagi mahasiswa dengan dedikasi sosial tinggi untuk mengajukan diri dan menguraikan kontribusi mereka dalam mewujudkan dampak positif. Dengan demikian, program ini menciptakan panggung bagi mahasiswa yang tidak hanya meraih prestasi akademis, melainkan juga membentuk warisan kemanusiaan yang bernilai.',
            'tanggal_mulai' => now()->addDays(15),
            'tanggal_berakhir' => now()->addDays(45),
            'penyelenggara' => 'Komunitas Peduli Bersama',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.DwQPBoMh95t75jmBblqfcAAAAA?w=288&h=192&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_beasiswa' => $kategoriIDs[8 % count($kategoriIDs)],
        ]);

        // Beasiswa 5 - Overseas
        Beasiswa::create([
            'nama' => 'International Excellence',
            'deskripsi' => 'The International Excellence Scholarship presents a remarkable opportunity for exceptionally talented students to embark on an enriching academic journey abroad. Tailored for those who demonstrate exceptional academic prowess and a keen desire to explore global perspectives, this scholarship not only opens doors to international educational experiences but also offers crucial financial support to facilitate the pursuit of knowledge on a global scale.

            Beyond financial assistance, the International Excellence Scholarship serves as a gateway to extensive international academic networks. Recipients of this scholarship gain access to a vibrant community of scholars, researchers, and professionals, providing a unique chance to collaborate, exchange ideas, and engage in cross-cultural dialogues that extend beyond the confines of traditional academic boundaries.
            
            Applications for the International Excellence Scholarship are welcomed from January 5 to January 25, 2024. This designated timeframe allows aspiring students to meticulously prepare and submit their applications, ensuring that those who are truly dedicated to academic excellence and global learning have ample time to showcase their qualifications and aspirations. In essence, this scholarship is not just an opportunity for education abroad; it is a catalyst for building a global academic legacy and fostering connections that transcend geographical distances.',
            'tanggal_mulai' => now()->addDays(20),
            'tanggal_berakhir' => now()->addDays(50),
            'penyelenggara' => 'Global Education Foundation',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.UhY2xClj-MOlhYHG84CW7AHaEU?rs=1&pid=ImgDetMain',
            'id_kategori_beasiswa' => $kategoriIDs[3 % count($kategoriIDs)],
        ]);
    }
}
