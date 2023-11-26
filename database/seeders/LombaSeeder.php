<?php

namespace Database\Seeders;

use App\Models\Lomba;
use App\Models\KategoriLomba;
use Illuminate\Database\Seeder;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriIDs = KategoriLomba::pluck('id_kategori_lomba')->toArray();

        // for ($i = 0; $i < 8; $i++) {

        // }

        // Lomba 1 - Technology
        Lomba::create([
            'nama' => 'InnoTech Challenge',
            'deskripsi' => 'Sebuah ajang kompetisi yang mengundang para pecinta teknologi untuk memperlihatkan solusi inovatif mereka. Dalam keberanian menghadapi arus perkembangan yang terus berubah di dunia teknologi, kami mengajak Anda bergabung, membuka pintu bagi kreativitas yang tak terbatas. Dalam dunia yang selalu berkembang pesat ini, inilah waktunya untuk memamerkan ide-ide cemerlang dan kontribusi berharga Anda. Mari bersama-sama menjelajahi batas-batas kreativitas, menemukan solusi-solusi yang menginspirasi, dan menjadi bagian dari evolusi terkini dalam dunia teknologi.

            Tak hanya menjadi ajang unjuk kebolehan, kompetisi ini juga merupakan panggung bagi Anda untuk menunjukkan keberanian dan inovasi dalam menghadapi tantangan yang tak pernah berhenti. Setiap langkah yang Anda ambil di dalamnya adalah langkah menuju pemahaman lebih mendalam tentang potensi Anda dan peran Anda dalam menciptakan masa depan teknologi yang lebih baik. Jangan biarkan kesempatan ini terlewatkan begitu saja. Mari bersama-sama menciptakan solusi inovatif yang tidak hanya mengubah dunia teknologi, tetapi juga membawa dampak positif yang luar biasa pada masyarakat dan lingkungan di sekitar kita.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Tech Enthusiasts Community',
            'link_gambar' => 'https://i.ytimg.com/vi/YAfMWxSSVVM/maxresdefault.jpg',
            'id_kategori_lomba' => $kategoriIDs[0 % count($kategoriIDs)],
        ]);

        // Lomba 2 - Technology
        Lomba::create([
            'nama' => 'Coding Championship',
            'deskripsi' => 'Panggilan kepada seluruh pencinta pemrograman! Mari ikut serta dalam Coding Championship kami untuk memamerkan keterampilan pemrograman dan kemampuan dalam memecahkan masalah. Tantangan-tantangan seru menanti Anda di dalam kompetisi ini. Ini adalah kesempatan emas bagi para pemrogram untuk mengeksplorasi dan menunjukkan keahlian mereka dalam dunia pemrograman yang dinamis dan penuh inovasi.

            Coding Championship bukan sekadar ajang perlombaan, tetapi juga panggung di mana para peserta dapat mengasah keterampilan pemrograman mereka melalui tantangan-tantangan menarik. Ini adalah momen untuk menguji diri, berkolaborasi dengan sesama pencinta pemrograman, dan merasakan pengalaman belajar yang mendalam. Kompetisi ini dirancang tidak hanya sebagai ujian keterampilan teknis, tetapi juga sebagai wadah untuk mengeksplorasi ide-ide kreatif dan solusi inovatif di dunia pemrograman.
            
            Mari bersama-sama kita hadapi tantangan, tingkatkan kemampuan pemrograman, dan nikmati pengalaman kompetitif yang penuh gairah. Bergabunglah dalam Coding Championship kami dan tunjukkan kepada dunia betapa luar biasanya komunitas pencinta pemrograman. Dengan semangat persaingan yang sehat, mari kita jadikan Coding Championship sebagai langkah awal untuk mencapai puncak keunggulan dalam dunia pemrograman.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'CodeMaster Society',
            'link_gambar' => 'https://www.techconnectworld.com/World2023/participate/innovation/img/TCW-StartupChallenge-hero.jpg',
            'id_kategori_lomba' => $kategoriIDs[1 % count($kategoriIDs)],
        ]);

        // Lomba 3 - Business
        Lomba::create([
            'nama' => 'Startup Challenge',
            'deskripsi' => 'Para pengusaha, inilah kesempatan Anda! Bergabunglah dalam Startup Pitch Challenge dan hadirkan ide bisnis Anda di hadapan sekelompok investor berpengalaman. Ajukan pitch Anda dengan percaya diri dan wujudkan visi startup Anda menjadi kenyataan. Kompetisi ini merupakan panggung untuk menghadirkan inovasi, kreativitas, dan potensi pertumbuhan bisnis yang luar biasa di hadapan para pemodal ventura yang sudah berpengalaman.

            Startup Pitch Challenge bukan hanya tentang presentasi ide, tetapi juga tentang membangun koneksi yang berarti dalam dunia bisnis. Para peserta akan memiliki kesempatan untuk mendapatkan umpan balik berharga dari para investor yang telah sukses, memperluas jaringan mereka, dan memahami aspek-aspek penting dalam menjalankan bisnis startup. Dengan berpartisipasi dalam kompetisi ini, Anda tidak hanya mendapatkan peluang untuk mendapatkan dukungan finansial, tetapi juga memperluas pandangan bisnis Anda dan menemukan peluang kemitraan yang strategis.
            
            Mari ambil langkah berani untuk menyampaikan ide bisnis Anda dengan percaya diri dan menginspirasi. Bersama-sama, mari kita hadirkan era baru inovasi bisnis dan dorong pertumbuhan ekosistem startup di tanah air. Startup Pitch Challenge adalah pintu gerbang bagi para pengusaha untuk menjelajahi potensi maksimal bisnis mereka dan mewujudkan impian menjadi kenyataan dalam dunia bisnis yang dinamis ini.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Entrepreneurship Hub',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.32rZt_usqim6AIzIQfRJDwHaHa?rs=1&pid=ImgDetMain',
            'id_kategori_lomba' => $kategoriIDs[2 % count($kategoriIDs)],
        ]);

        // Lomba 4 - Business
        Lomba::create([
            'nama' => 'Business Simulation',
            'deskripsi' => 'Rasakan pengalaman dunia bisnis melalui Business Simulation Game kami. Dalam permainan simulasi bisnis ini, Anda akan diajak untuk membuat keputusan strategis, mengelola sumber daya, dan bersaing dengan peserta lainnya. Menguji kecerdasan bisnis Anda bukan hanya sekadar tantangan, tetapi juga peluang untuk mengembangkan pemahaman mendalam tentang dinamika bisnis dan keterampilan manajerial yang kritis.

            Dalam Business Simulation Game, peserta akan menghadapi skenario-skenario yang menantang, menghadirkan tantangan-tantangan nyata yang sering dihadapi dalam dunia bisnis. Ini adalah kesempatan untuk mengasah kemampuan analisis, pengambilan keputusan, dan pemecahan masalah yang diperlukan untuk meraih kesuksesan dalam lingkungan bisnis yang kompetitif. Melalui permainan simulasi ini, Anda akan memiliki peluang untuk mengaplikasikan pengetahuan teoritis dalam konteks praktis dan merasakan dampak langsung dari setiap keputusan yang diambil.
            
            Apakah Anda siap menguji kecerdasan bisnis Anda? Bergabunglah dalam Business Simulation Game kami dan saksikan bagaimana setiap keputusan yang Anda ambil akan memengaruhi kinerja bisnis Anda. Jangan lewatkan kesempatan ini untuk mendapatkan wawasan mendalam tentang kompleksitas dunia bisnis dan mempersiapkan diri Anda untuk menghadapi tantangan di dunia nyata.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Business Leaders Network',
            'link_gambar' => 'https://sciencehunter.id/wp-content/uploads/2021/03/IMG-20210314-WA0037.jpg',
            'id_kategori_lomba' => $kategoriIDs[3 % count($kategoriIDs)],
        ]);

        // Lomba 5 - Paper
        Lomba::create([
            'nama' => 'Research Competition',
            'deskripsi' => 'Panggilan kepada seluruh peneliti dan sarjana! Ajukan karya penelitian terbaik Anda untuk mendapatkan kesempatan memenangkan pengakuan dan hadiah. Tunjukkan keunggulan akademis Anda melalui partisipasi dalam Research Paper Competition kami! Kompetisi ini memberikan platform bagi para peneliti untuk memamerkan dedikasi mereka dalam menyusun karya-karya yang berkualitas dan inovatif, serta memberikan apresiasi yang setimpal untuk kontribusi ilmiah yang berharga.

            Dalam Research Paper Competition, para peserta akan memiliki peluang untuk mempresentasikan temuan penelitian mereka kepada para ahli dan sesama peneliti. Ini adalah kesempatan langka untuk menjembatani dunia akademis dan mendapatkan umpan balik konstruktif yang dapat memperkaya pemahaman penelitian Anda. Kompetisi ini juga memberikan wadah bagi peneliti muda untuk membangun jejaring akademis, berbagi ide, dan mendapatkan inspirasi dari teman-teman seprofesi.
            
            Jangan lewatkan kesempatan untuk menonjolkan karya penelitian terbaik Anda dan berkontribusi pada perkembangan ilmu pengetahuan. Research Paper Competition kami tidak hanya menawarkan hadiah-hadiah menarik, tetapi juga membangun platform prestisius di mana keunggulan akademis Anda dapat diakui oleh para sesama peneliti. Mari bersama-sama kita perkuat budaya penelitian dan eksplorasi ilmiah, mendorong terciptanya pemahaman baru, dan merayakan prestasi akademis yang luar biasa.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Academic Excellence Society',
            'link_gambar' => 'https://2021.iec-pyc.org/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-15-at-12.01.06.jpeg',
            'id_kategori_lomba' => $kategoriIDs[4 % count($kategoriIDs)],
        ]);

        // Lomba 6 - Paper
        Lomba::create([
            'nama' => 'Essay Writing Contest',
            'deskripsi' => 'Ekspresikan pikiran Anda melalui kata-kata! Bergabunglah dalam Essay Writing Contest kami dan berkompetisi dengan para penulis berbakat lainnya. Bagikan perspektif unik Anda mengenai topik yang diberikan dan menangkan hadiah-hadiah menarik! Kompetisi penulisan esai ini tidak hanya mengajak Anda untuk mengasah keterampilan menulis, tetapi juga memberikan wadah untuk mengekspresikan ide-ide kreatif dan pandangan pribadi Anda secara mendalam.

            Dalam Essay Writing Contest, para peserta memiliki kesempatan untuk merangkai kata-kata menjadi karya tulis yang memukau, memaparkan gagasan-gagasan yang mendalam, dan menginspirasi pembaca. Esai-esai yang dipresentasikan dalam kompetisi ini tidak hanya dinilai berdasarkan keahlian teknis, tetapi juga keautentikan pesan yang ingin disampaikan. Ini adalah panggung di mana penulis dapat menggali ide-ide baru, merangsang pemikiran kritis, dan berbagi cerita yang mampu menyentuh hati pembaca.
            
            Jangan lewatkan peluang ini untuk mengekspresikan diri Anda melalui tulisan dan meraih pengakuan atas kreativitas dan pemikiran Anda. Essay Writing Contest kami mengundang Anda untuk menjadi bagian dari komunitas penulis yang bersemangat, menciptakan karya-karya bermakna, dan merayakan keindahan bahasa dalam berbagai bentuknya. Mari bersama-sama kita jadikan kompetisi ini sebagai sarana untuk mengekspresikan keunikan kita dan merayakan keindahan sastra.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Literary Arts Society',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.KFxBa0sOAd4r39g3brC9DQHaKd?w=134&h=188&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_lomba' => $kategoriIDs[5 % count($kategoriIDs)],
        ]);

        // Lomba 7 - Public Speaking
        Lomba::create([
            'nama' => 'Oratory Excellence',
            'deskripsi' => 'Berbicaralah dengan percaya diri dan dampak! Bergabunglah dalam Oratory Excellence Challenge kami untuk memamerkan keterampilan berbicara di depan umum Anda. Sampaikan pidato-pidato yang memikat dan menawan hati para pendengar! Kompetisi keunggulan orasi ini bukan hanya ajang untuk menunjukkan keterampilan berbicara, tetapi juga peluang untuk menginspirasi, memotivasi, dan mengkomunikasikan ide-ide dengan daya pengaruh yang mendalam.

            Dalam Oratory Excellence Challenge, para peserta akan diberikan panggung untuk mengekspresikan ide-ide mereka secara lisan dengan cara yang kuat dan meyakinkan. Ini adalah kesempatan unik untuk melatih kemampuan berbicara di depan umum, menguji kelincahan berpikir, dan mengembangkan kepemimpinan verbal. Peserta tidak hanya diharapkan untuk menyampaikan pidato yang memukau, tetapi juga untuk dapat terhubung emosional dengan pendengar, menciptakan pengalaman yang tak terlupakan.
            
            Jangan lewatkan kesempatan emas ini untuk mengasah keterampilan berbicara Anda dan meningkatkan rasa percaya diri dalam berkomunikasi di depan umum. Oratory Excellence Challenge kami bukan hanya tentang pesaingan, tetapi juga tentang pengembangan diri dan kemampuan untuk memengaruhi orang lain melalui kata-kata. Mari bersama-sama kita bangun komunitas pembicara yang berkomitmen untuk berkembang dan memberikan dampak positif melalui seni berbicara yang luar biasa.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Public Speaking Society',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.1mdcvw6B8B5m0lGXMnEfZAHaEK?w=322&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_lomba' => $kategoriIDs[6 % count($kategoriIDs)],
        ]);

        // Lomba 8 - Public Speaking
        Lomba::create([
            'nama' => 'Debate Tournament',
            'deskripsi' => 'Bergabunglah dalam medan perang intelektual! Sertai Tournament Debat kami dan terlibat dalam diskusi yang merangsang pemikiran. Tunjukkan keterampilan argumentatif Anda dan berkompetisi untuk meraih gelar debater terbaik! Kompetisi debat ini bukan hanya sekadar ajang untuk menunjukkan kemampuan berbicara dan merangkai argumen, tetapi juga merupakan panggung untuk mendalami isu-isu kontemporer, memperluas pandangan, dan meningkatkan keterampilan analisis kritis.

            Dalam Tournament Debat, peserta akan diajak untuk menghadapi tantangan intelektual yang memerlukan ketajaman berpikir, pengetahuan mendalam, dan kecepatan tanggapan. Ini adalah kesempatan langka untuk berinteraksi dengan pemikiran-pemikiran yang berbeda dan belajar memahami perspektif-perspektif yang beragam. Debat bukan hanya tentang meraih kemenangan, tetapi juga tentang kemampuan untuk menyampaikan argumen secara jelas, meyakinkan, dan beretika, sehingga dapat memengaruhi pandangan orang lain.
            
            Jangan lewatkan peluang untuk menjadi bagian dari Tournament Debat kami, di mana keahlian berbicara Anda akan diuji dan dikembangkan. Turnamen ini bukan hanya tempat untuk bersaing, tetapi juga untuk membangun keterampilan komunikasi yang sangat bernilai dalam menghadapi tantangan kompleks dalam kehidupan nyata. Mari bersama-sama kita hadirkan pertarungan intelektual yang menantang dan memperkuat keterampilan berargumentasi untuk membangun pemikiran yang kritis dan memperdalam pemahaman kita akan dunia di sekitar kita.',
            'tanggal_mulai' => now(),
            'tanggal_berakhir' => now()->addDays(7),
            'penyelenggara' => 'Debaters Society',
            'link_gambar' => 'https://th.bing.com/th/id/OIP.CrvHO5MWbzoo-v544nFTZQHaHa?w=180&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'id_kategori_lomba' => $kategoriIDs[7 % count($kategoriIDs)],
        ]);
    }
}
