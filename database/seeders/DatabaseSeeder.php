<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artwork;
use App\Models\Comicteca;
use App\Models\User;
use App\Models\Volume;
use App\Models\Edition;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // usuario de desarrollo
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'a@a.com',
            'password' => Hash::make('admin123')
        ]);

        // Comicteca de administrador
        Comicteca::create([
            'user_id' => 1,
        ]);

        // crear 10 usuarios aleatorios
        foreach (range(1, 10) as $index) {
            User::factory()->create();
        }

        // -------------------------------------------------------------------------------------------------------------------

        // creación de ediciones

        // kick-ass (E1)
        Edition::create([
            'title' => 'Kick-Ass',
            'publisher' => 'OVNI PRESS',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'description' => 'Contiene: KICK-ASS #1-8 USA | 
            17 x 24 cm | 200 págs.',
            'ratingAvg' => 4,
        ]);

        // creación de volúmen kick-ass (V1)
        Volume::create([
            'title' => 'Kick-Ass',
            'number' => 1,
            'ISBN' => '9789871858408',
            'argument' => '¿Y si intentaras ser un superhéroe? ¿Qué pasa cuando una persona ordinaria, en un traje de spandex, enfrenta cara a cara al bajo mundo criminal?',
            'coverImage' => 'https://i1.whakoom.com/small/10/04/660fa81ce72a4aecbfd80d9082a5b542.jpg',
            'edition_id' => 1,
        ]);
        // creación de volúmen kick-ass (V2)
        Volume::create([
            'title' => 'Kick-Ass',
            'number' => 2,
            'ISBN' => '9789781858385',
            'argument' => 'Dave Lizewski no soñaba con ser abogado o gerente de banco. Todos tienen una sola vida, y Dave quería que la de él fuese excitante... Cuando decidió convertirse en Kick-Ass, la gente empezó a notarlo. Incluso captó la atención de dos enmascarados muy desquiciados ¡Big Daddy y Hit-Girl!',
            'coverImage' => 'https://i1.whakoom.com/small/30/31/8db4edd0ec05409c8ff4586606f8d0f9.jpg',
            'edition_id' => 1,
        ]);
        // creación de volúmen kick-ass (V3)
        Volume::create([
            'title' => 'Kick-Ass',
            'number' => 3,
            'ISBN' => '9789871858323',
            'argument' => 'Pocos superhéroes tienen un origen secreto tan tormentoso como Kick-Ass. De hecho, él y sus amigos se las ven bastante negras...¿Quien sobrevive? O mejor dicho... ¿Hay alguien que quede vivio después de todo esto? Una cosa te podemos asegurar: a varios les está esperando una buena paliza.',
            'coverImage' => 'https://i1.whakoom.com/small/16/12/06867944aa734106a056287ae6802178.jpg',
            'edition_id' => 1,
        ]);

        // Creación de artworks (kick-ass)
        Artwork::create([
            'title' => 'Kick-Ass',
            'description' => 'Comic style',
            'imgUrl' => 'https://i.pinimg.com/originals/56/5e/c9/565ec9d779ff0967dd9da5cd428a533c.jpg',
            'user_id' => 2,
            'edition_id' => 1,
        ]);
        Artwork::create([
            'title' => 'Crew',
            'description' => 'Los héroes sin poderes',
            'imgUrl' => 'https://i.pinimg.com/originals/8f/e3/c0/8fe3c0e62741459234dccf2d0b3a4d7e.jpg',
            'user_id' => 3,
            'edition_id' => 1,
        ]);
        Artwork::create([
            'title' => 'Hit Girl',
            'description' => 'By Darkone',
            'imgUrl' => 'https://cafans.b-cdn.net/images/Category_68944/subcat_119123/Hit-Girl%20by%20Greg%20Darkone%20Williams.jpg',
            'user_id' => 4,
            'edition_id' => 1,
        ]);

        // -------------------------------------------------------------------------------------------------------------------


        // Batman (E2)
        Edition::create([
            'title' => 'Batman',
            'publisher' => 'ECC ARGENTINA',
            'language' => 'Español',
            'format' => 'Grapa',
            'isStandalone' => 0,
            'description' => 'A color. 26x17cm. Recopila Batman Vol.3 #48 al 57 (Agosto de 2018 a Diciembre de 2018) de la edición USA.',
        ]);

        // creación de volúmen Batman (V1)
        Volume::create([
            'title' => 'Batman',
            'number' => 1,
            'ISBN' => '9788417644673',
            'argument' => '¡El arco argumental que sirve de preludio a la Batboda, El Padrino! Ha ocurrido lo inevitable: el Joker ha descubierto que Batman y Catwoman van a casarse. ¿Acudirá con una oferta que no podrán rechazar? El enemigo más temible del Caballero Oscuro se dispone a interrumpir una fiesta a la que no ha sido invitado, y le toca a la propia Catwoman salvar el día.',
            'coverImage' => 'https://i1.whakoom.com/small/2e/15/8b2e912c2a624e959cb7c819ad7ada9f.jpg',
            'edition_id' => 2,
        ]);
        // creación de volúmen Batman (V2)
        Volume::create([
            'title' => 'Batman',
            'number' => 2,
            'ISBN' => '9788417644673',
            'argument' => 'Ha llegado el día. ¡La boda que nunca pensaste que tendría lugar! La Batboda es real, y Bruce Wayne y Selina Kyle están preparados para pasar por el altar en un número especial conmemorativo, que cambiará para siempre el universo del Caballero Oscuro. ¿Invitados? ¡Todos sus amigos y unos pocos enemigos!.',
            'coverImage' => 'https://i1.whakoom.com/small/21/39/5143beb8003949a293c02030a584f330.jpg',
            'edition_id' => 2,
        ]);
        // creación de volúmen Batman (V3)
        Volume::create([
            'title' => 'Batman',
            'number' => 3,
            'ISBN' => '9788417665968',
            'argument' => 'Tras los impactantes sucesos de La Boda, el invierno ha llegado a Gotham. Bruce Wayne ha sido seleccionado para formar parte del jurado de un caso que involucra a uno de los mayores enemigos de Batman, Mr. Frío. ¡Para averiguar la verdad, Bruce tendrá que revisar la participación del Caballero Oscuro en los hechos! Mientras, alguien patrulla la ciudad disfrazado de Batman.',
            'coverImage' => 'https://i1.whakoom.com/small/27/3d/fe472fe8801d49d4b87c6106f2548dab.jpg',
            'edition_id' => 2,
        ]);
        // creación de volúmen Batman (V4)
        Volume::create([
            'title' => 'Batman',
            'number' => 4,
            'ISBN' => '9788417722975',
            'argument' => '¡Regresa el Dúo Dinámico original! Dick Grayson, el primer Robin, ahora conocido como Nightwing, forma equipo con su mentor, Bruce Wayne, por primera vez tras Batman "La Boda". Bienvenidos a un paseo por el muchas veces tortuoso camino de los recuerdos. Además, el asesino ruso conocido como la KGBestia ha regresado. ¡Todo parece indicar que su visita a Gotham tiene que ver con el famoso caso de Mr. Frío!.',
            'coverImage' => 'https://i1.whakoom.com/small/3e/15/51974f55cd9c4993b266f308e95471b6.jpg',
            'edition_id' => 2,
        ]);
        // creación de volúmen Batman (V5)
        Volume::create([
            'title' => 'Batman',
            'number' => 5,
            'ISBN' => '9788417787684',
            'argument' => 'Incluso para una ciudad como Gotham, la violencia que ha desplegado la KGBestia ha superado el límite tolerable. El caos se adueña del hogar de Batman en una guerra fría que esconde un secreto todavía más brutal que la verdad sobre el juicio de Mr. Frío.',
            'coverImage' => 'https://i1.whakoom.com/small/36/30/e02d41d70287416aac9f60f39c0c30c8.jpg',
            'edition_id' => 2,
        ]);

        // artworks de batman
        Artwork::create([
            'title' => 'El caballero oscuro',
            'description' => 'artwork',
            'imgUrl' => 'https://images.hdqwalls.com/wallpapers/the-batman-artwork-2020-4k-pu.jpg',
            'user_id' => 5,
            'edition_id' => 2,
        ]);
        Artwork::create([
            'title' => 'Batman',
            'description' => 'Art deko style',
            'imgUrl' => 'https://cdn.domestika.org/c_fit,dpr_auto,f_auto,t_base_params,w_820/v1630444921/content-items/008/973/973/ART-DECO-BatMan-original.jpg?1630444921',
            'user_id' => 6,
            'edition_id' => 2,
        ]);
        Artwork::create([
            'title' => 'Guasón',
            'description' => 'El bromas, pero enfermo',
            'imgUrl' => 'https://i.pinimg.com/originals/98/8a/52/988a52f16673cda12829d05210f42cbc.jpg',
            'user_id' => 7,
            'edition_id' => 2,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Dorohedoro (E3)
        Edition::create([
            'title' => 'Dorohedoro',
            'publisher' => 'IVREA ARGENTINA',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'description' => 'Edición 2 en 1 con sobrecubierta reversible. Incluye páginas a color.',
        ]);

        // creación de volúmen Dorohedoro (V1)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 1,
            'ISBN' => '9788418963261',
            'argument' => 'Un clan de hechiceros secuestra gente de las calles para usarla como conejillos de india en sus atroces experimentos con las artes oscuras. Una de sus víctimas, Kaiman, sufre un severo caso de amnesia… ¡y encima su cabeza ahora parece de lagarto! Ayudado por Nikaido, la joven propietaria del restaurante de gyoza Hungry Bug, y una extraña presencia dentro de su boca, Kaiman emprende la búsqueda del hechicero que le cagó la vida. Pero, cuando el líder de los hechiceros se entera de que un hombre-lagarto está matando a su gente, envía un equipo de “limpiadores” a The Hole, iniciando una guerra entre dos mundos.',
            'coverImage' => 'https://i1.whakoom.com/small/03/0b/4a4ca7c17e7343f5902e20660f390c5a.jpg',
            'edition_id' => 3,
        ]);
        // creación de volúmen Dorohedoro (V2)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 2,
            'ISBN' => '9788419096302',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/23/22/b37fdd7066aa4dad9e077324d9695b4e.jpg',
            'edition_id' => 3,
        ]);
        // creación de volúmen Dorohedoro (V3)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 3,
            'ISBN' => '9788419185488',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/11/09/fd23acc3e15642f9b62771d44a290c6b.jpg',
            'edition_id' => 3,
        ]);
        // creación de volúmen Dorohedoro (V4)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 4,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/21/3c/6c9543853d9f400da2e92692f5b1473f.jpg',
            'edition_id' => 3,
        ]);
        // creación de volúmen Dorohedoro (V5)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 5,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/31/15/db9bc81b2f8846f1bac2485997b78190.jpg',
            'edition_id' => 3,
        ]);
        // creación de volúmen Dorohedoro (V6)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 6,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/06/17/d2920b562e61422b8a1ff47f7406e999.jpg',
            'edition_id' => 3,
        ]);
        // creación de volúmen Dorohedoro (V7)
        Volume::create([
            'title' => 'Dorohedoro',
            'number' => 7,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/3e/2a/20f2cb4e724845a0a4df5196075f131b.jpg',
            'edition_id' => 3,
        ]);

        // Artworks de dorohedoro
        Artwork::create([
            'title' => 'Demons',
            'description' => 'dorohedoro art',
            'imgUrl' => 'https://img1.ak.crunchyroll.com/i/spire4/7b024210201748b731779ec3afd6d9fe1660914358_main.jpg',
            'user_id' => 8,
            'edition_id' => 3,
        ]);
        Artwork::create([
            'title' => 'Shin',
            'description' => 'Dorohedoro',
            'imgUrl' => 'https://wallpaperaccess.com/full/2007898.jpg',
            'user_id' => 9,
            'edition_id' => 3,
        ]);
        Artwork::create([
            'title' => 'Kaiman y Nikaido',
            'description' => 'Saludando',
            'imgUrl' => 'https://hiepsibaotap.com/wp-content/uploads/2020/02/aa87fe156bf01c0a2a3a971ef715f427ae33610dr1-1200-900v2_uhq.jpg',
            'user_id' => 10,
            'edition_id' => 3,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Sensor (E4) (Tomo Único)
        Edition::create([
            'title' => 'Sensor',
            'publisher' => 'IVREA ARGENTINA',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 1,
            'isClosed' => 1,
            'description' => null,
        ]);
        // creación de volúmen Sensor (V1)
        Volume::create([
            'title' => 'Sensor',
            'number' => 1,
            'ISBN' => null,
            'argument' => 'Kyoko Byakuya pasea sola al pie del monte Sengoku cuando se cruza con un hombre que la invita al pueblo perdido de Kiyokami. Al llegar, ¡encuentra que todo allí brilla como el oro! Cuando comienzan a relatarle la historia de ese extraño poblado, ella siente cada vez mayor conexión con el lugar. ¡¿Qué tiene esta misteriosa mujer que sin buscarlo puede hacer que el mundo entero quede a su merced?!',
            'coverImage' => 'https://i1.whakoom.com/small/37/19/0493912318794ed4b56b28976781dd3b.jpg',
            'edition_id' => 4,
        ]);

        // creacion de artwork
        Artwork::create([
            'title' => 'Junji Ito',
            'description' => 'Creepy',
            'imgUrl' => 'https://i.pinimg.com/736x/26/14/46/26144680f730a4050b1472f120a83522--junji-ito-japanese-art.jpg',
            'user_id' => 11,
            'edition_id' => 4,
        ]);
        Artwork::create([
            'title' => 'Sensor',
            'description' => 'Junji Ito Manga',
            'imgUrl' => 'https://preview.redd.it/d0l30h6jpeg71.jpg?auto=webp&s=0df1a215464b4d901a40c7f04ec3f786d03b61b2',
            'user_id' => 3,
            'edition_id' => 4,
        ]);
        Artwork::create([
            'title' => 'Sensor',
            'description' => 'Terror rural',
            'imgUrl' => 'http://www.eslahoradelastortas.com/blog/media/2021/01/tumblr_pivl3nMmTG1wva86to1_500.jpg',
            'user_id' => 6,
            'edition_id' => 4,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // What a Wonderful World! (E5) (Tomo Único)
        Edition::create([
            'title' => 'What a Wonderful World!',
            'publisher' => 'IVREA ARGENTINA',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 1,
            'isClosed' => 1,
            'description' => 'Incluye páginas a color.',
        ]);
        // creación de volúmen What a Wonderful World! (V1)
        Volume::create([
            'title' => 'What a Wonderful World!',
            'number' => 1,
            'ISBN' => null,
            'argument' => 'What a wonderful world nos muestra como nuestro mundo puede ser tan precioso como horrible, donde los altibajos son moneda corriente y lo que para algunos es ridículo para otros es sublime. Asano desarrolla diferentes historias donde la cruda realidad de la sociedad moderna se mezcla con algo de fantasía, para entender el valor de la vida sin descuidar el caos en el que vivimos.',
            'coverImage' => 'https://i1.whakoom.com/small/22/36/0fed92ff6cd84dba8dc4b26258dc9f02.jpg',
            'edition_id' => 5,
        ]);


        // -------------------------------------------------------------------------------------------------------------------

        // Sensacional Wonder Woman (E6) (Tomo Único)
        Edition::create([
            'title' => 'Sensacional Wonder Woman',
            'publisher' => 'Ovni Press',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 1,
            'isClosed' => 1,
            'description' => 'Contiene: Sensational Wonder Woman #1-7 (2021) y Sensational Wonder Woman Special #1 (2022) USA',
        ]);
        // creación de volúmen Sensacional Wonder Woman (V1)
        Volume::create([
            'title' => 'Sensacional Wonder Woman',
            'number' => 1,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/3e/21/3f726c10ece047578509bd6a6097494d.jpg',
            'edition_id' => 6,
        ]);

        // artwork
        Artwork::create([
            'title' => 'WW',
            'description' => 'Wonder Woman',
            'imgUrl' => 'https://preview.redd.it/pd16g7j2z2r71.jpg?width=640&crop=smart&auto=webp&s=4877d31d8f8eec30b2ace0686c803721eca5cd73',
            'user_id' => 4,
            'edition_id' => 6,
        ]);
        Artwork::create([
            'title' => 'Diana',
            'description' => 'Close-up',
            'imgUrl' => 'https://w0.peakpx.com/wallpaper/411/215/HD-wallpaper-wonder-woman-looking-wonder-woman-superheroes-artist-artwork-digital-art.jpg',
            'user_id' => 8,
            'edition_id' => 6,
        ]);
        Artwork::create([
            'title' => 'Black & Gold',
            'description' => 'WW variant',
            'imgUrl' => 'https://preview.redd.it/y3plgvruh9i71.jpg?auto=webp&s=7fa1c7f499994ddae0949039a5662b852d2ae66b',
            'user_id' => 6,
            'edition_id' => 6,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Mortal Kombat: Battlewave (E7)
        Edition::create([
            'title' => 'Mortal Kombat: Battlewave',
            'publisher' => 'NEWKOMIKS',
            'language' => 'Español',
            'format' => 'Grapa',
            'isStandalone' => 0,
            'isClosed' => 1,
            'description' => null,
        ]);
        // creación de volúmen Mortal Kombat: Battlewave (V1)
        Volume::create([
            'title' => 'Mortal Kombat: Battlewave',
            'number' => 1,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/16/36/42901126b9e34463aa8b6f49ebd78d1a.jpg',
            'edition_id' => 7,
        ]);
        // creación de volúmen Mortal Kombat: Battlewave (V2)
        Volume::create([
            'title' => 'Mortal Kombat: Battlewave',
            'number' => 2,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/28/32/84249ca3efc848dd9194dd6818f08cda.jpg',
            'edition_id' => 7,
        ]);
        // creación de volúmen Mortal Kombat: Battlewave (V3)
        Volume::create([
            'title' => 'Mortal Kombat: Battlewave',
            'number' => 3,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/16/01/b23e44dc12a544d58ba94dee0ce3dfac.jpg',
            'edition_id' => 7,
        ]);
        // creación de volúmen Mortal Kombat: Battlewave (V4)
        Volume::create([
            'title' => 'Mortal Kombat: Battlewave',
            'number' => 4,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/1e/05/f9a2c97d82cb445e892bc22887b31547.jpg',
            'edition_id' => 7,
        ]);
        // creación de volúmen Mortal Kombat: Battlewave (V5)
        Volume::create([
            'title' => 'Mortal Kombat: Battlewave',
            'number' => 5,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/0a/0a/2f19aa8cf4334a32901b96c54ef4c4f5.jpg',
            'edition_id' => 7,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Raiden',
            'description' => 'Dios del trueno',
            'imgUrl' => 'https://i.pinimg.com/originals/51/40/de/5140de14742b4856925ae518aa65a631.jpg',
            'user_id' => 6,
            'edition_id' => 7,
        ]);
        Artwork::create([
            'title' => 'Kitana',
            'description' => 'Mortal Kombat 11 art',
            'imgUrl' => 'https://es.gamewallpapers.com/download.php?img=wallpaper_mortal_kombat_11_fan_art_01_1920x1080.jpg',
            'user_id' => 5,
            'edition_id' => 7,
        ]);
        Artwork::create([
            'title' => 'Scorpion Rage',
            'description' => 'Fighting game',
            'imgUrl' => 'https://ae01.alicdn.com/kf/HTB1tNhTbBWD3KVjSZFsq6AqkpXaX/Q0002-Mortal-Kombat-Scorpion-Art.jpg',
            'user_id' => 11,
            'edition_id' => 7,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Así habló Kishibe Rohan (E8)
        Edition::create([
            'title' => 'Así habló Kishibe Rohan',
            'publisher' => 'IVREA ARGENTINA',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'isClosed' => 1,
            'description' => 'El autor ideó cada capítulo como un one-shot independiente. Cada uno se publicó en diferentes revistas de Shueisha a lo largo de los años sin seguir un orden cronológico específico. Esto permite apreciar la evolución de su dibujo, cada vez más estilizado y detallista, a la vez que recorrer varias temáticas de las que obsesionan al autor (y al personaje). Estas historias se recopilaron en 2013 y 2018 en dos tomos que publicaremos a principios de 2022 en formato B6 para hacer juego con los tomos de la serie principal.',
        ]);
        // creación de volúmen Así habló Kishibe Rohan (V1)
        Volume::create([
            'title' => 'Así habló Kishibe Rohan',
            'number' => 1,
            'ISBN' => '9788419185426',
            'argument' => 'El excéntrico Rohan Kishibe, el mangaka presentado en Jojo' . "'" . 's Bizarre Adventure Diamond is Unbreakable, protagoniza este manga de capítulos unitarios que narran historias en solitario, o mejor dicho, en compañía de su stand Heaven' . "'" . 's Door. Su personalidad caprichosa, arrogante y extravagante pero a la vez magnética, hacen de Rohan uno de los personajes más memorables de todas las sagas, y a los que el maestro Araki vuelve una y otra vez. No en vano este personaje es considerado por algunos como un alter ego de Araki',
            'coverImage' => 'https://i1.whakoom.com/small/1f/24/bfebb849e66743d69bdadaf0e6889012.jpg',
            'edition_id' => 8,
        ]);
        // creación de volúmen Así habló Kishibe Rohan (V2)
        Volume::create([
            'title' => 'Así habló Kishibe Rohan',
            'number' => 2,
            'ISBN' => '9788419451200',
            'argument' => 'El excéntrico Rohan Kishibe, el mangaka presentado en Jojo' . "'" . 's Bizarre Adventure Diamond is Unbreakable, protagoniza este manga de capítulos unitarios que narran historias en solitario, o mejor dicho, en compañía de su stand Heaven' . "'" . 's Door. Su personalidad caprichosa, arrogante y extravagante pero a la vez magnética, hacen de Rohan uno de los personajes más memorables de todas las sagas, y a los que el maestro Araki vuelve una y otra vez. No en vano este personaje es considerado por algunos como un alter ego de Araki',
            'coverImage' => 'https://i1.whakoom.com/small/2c/19/76047209c012423a8db8f95318962f0f.jpg',
            'edition_id' => 8,
        ]);

        Artwork::create([
            'title' => 'Jolyne Gucci',
            'description' => 'Fashion',
            'imgUrl' => 'https://i.pinimg.com/736x/6c/f3/70/6cf37009d310d0757ebb655739fdbc01.jpg',
            'user_id' => 8,
            'edition_id' => 8,
        ]);
        Artwork::create([
            'title' => 'Kishibe Rohan',
            'description' => 'Mangaka',
            'imgUrl' => 'https://image.tmdb.org/t/p/w780/tNubPqMgMC61a8PS9nUqp8ot1Df.jpg',
            'user_id' => 7,
            'edition_id' => 8,
        ]);
        Artwork::create([
            'title' => 'JJBA',
            'description' => 'Jojos',
            'imgUrl' => 'https://2.bp.blogspot.com/-dvNEAPN_IDM/XDDzOeFzI8I/AAAAAAAAAJ0/btT51TZoEKkJpwHVm9uGUHmIxj8jR70oACLcBGAs/s1600/Steamworkshop_webupload_previewfile_332969030_preview.png',
            'user_id' => 4,
            'edition_id' => 8,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Wanted (E9)
        Edition::create([
            'title' => 'Wanted',
            'publisher' => 'DEUX STUDIO',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'description' => 'El autor ideó cada capítulo como un one-shot independiente. Cada uno se publicó en diferentes revistas de Shueisha a lo largo de los años sin seguir un orden cronológico específico. Esto permite apreciar la evolución de su dibujo, cada vez más estilizado y detallista, a la vez que recorrer varias temáticas de las que obsesionan al autor (y al personaje). Estas historias se recopilaron en 2013 y 2018 en dos tomos que publicaremos a principios de 2022 en formato B6 para hacer juego con los tomos de la serie principal.',
        ]);
        // creación de volúmen Wanted (V1)
        Volume::create([
            'title' => 'Wanted',
            'number' => 1,
            'ISBN' => '9789871485499',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/24/29/992e6993659743afb337ec5495c09864.jpg',
            'edition_id' => 9,
        ]);
        // creación de volúmen Wanted (V2)
        Volume::create([
            'title' => 'Wanted',
            'number' => 2,
            'ISBN' => '7798290035934',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/3f/3e/1775b52b20154fdd8afe3a8909b2c1a0.jpg',
            'edition_id' => 9,
        ]);
        // creación de volúmen Wanted (V3)
        Volume::create([
            'title' => 'Wanted',
            'number' => 3,
            'ISBN' => '7798290035903',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/3b/0e/f1a08b3636a747f490c6f42a0c64eb03.jpg',
            'edition_id' => 9,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Wanted',
            'description' => 'Comic art',
            'imgUrl' => 'https://qph.cf2.quoracdn.net/main-qimg-d34c274d884d2f1dc571e0ead472ec20.webp',
            'user_id' => 1,
            'edition_id' => 9,
        ]);
        Artwork::create([
            'title' => 'Killer Suit',
            'description' => 'Wanted',
            'imgUrl' => 'https://img.gta5-mods.com/q90/avatars/407061/159548-2904793-emask.jpg',
            'user_id' => 5,
            'edition_id' => 9,
        ]);
        Artwork::create([
            'title' => 'Videojuego',
            'description' => 'Wanted game',
            'imgUrl' => 'https://assets-prd.ignimgs.com/2022/05/07/wanted-1651884107432.jpg',
            'user_id' => 9,
            'edition_id' => 9,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Hellboy: El Ataud Encadenado y otros relatos (E10) (Tomo Único)
        Edition::create([
            'title' => 'Hellboy: El Ataud Encadenado y otros relatos',
            'publisher' => 'Gárgola Ediciones',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 1,
            'isClosed' => 1,
            'description' => null,
        ]);
        // creación de volúmen Hellboy: El Ataud Encadenado y otros relatos (V1)
        Volume::create([
            'title' => 'Hellboy: El Ataud Encadenado y otros relatos',
            'number' => 1,
            'ISBN' => '9789876130608',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/14/3b/1f70afa43ecf4d0eb4daa6d39ea2a84e.jpg',
            'edition_id' => 10,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Hellboy',
            'description' => 'Rojo',
            'imgUrl' => 'https://i.pinimg.com/originals/3a/8d/d1/3a8dd1e595d4b451d9019330d1891959.jpg',
            'user_id' => 4,
            'edition_id' => 10,
        ]);
        Artwork::create([
            'title' => 'Pelicula',
            'description' => 'Pelicula de Guillermo del Toro',
            'imgUrl' => 'https://i.etsystatic.com/15590810/r/il/239699/2147012741/il_fullxfull.2147012741_gvit.jpg',
            'user_id' => 4,
            'edition_id' => 10,
        ]);
        Artwork::create([
            'title' => 'Rojo',
            'description' => 'HB',
            'imgUrl' => 'http://images.fandango.com/images/fandangoblog/JuanCarlosRuiz%20copy.jpg',
            'user_id' => 4,
            'edition_id' => 10,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // El puño de la Estrella del Norte (E11)
        Edition::create([
            'title' => 'El puño de la Estrella del Norte',
            'publisher' => 'PLANETA COMIC',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'description' => 'Incluye páginas a color.',
        ]);
        // creación de volúmen El puño de la Estrella del Norte (V1)
        Volume::create([
            'title' => 'El puño de la Estrella del Norte',
            'number' => 1,
            'ISBN' => '9789504975175',
            'argument' => 'Después de la Tercera Guerra Mundial, el mundo es un lugar desolado y hostil. El agua se ha convertido en el recurso más preciado y la fuerza, en la habilidad más necesaria, por eso los más fuertes dominan el mundo. Esto cambiará cuando Kenshiro, el hombre conocido como «El Puño de la Estrella Del Norte», heredero del arte marcial más poderosa jamás conocida, ayude a los indefensos pobladores a conseguir una vida más digna.',
            'coverImage' => 'https://i1.whakoom.com/small/29/23/51dda4b21b4c4045b020f8011f5eee63.jpg',
            'edition_id' => 11,
        ]);
        // creación de volúmen El puño de la Estrella del Norte (V2)
        Volume::create([
            'title' => 'El puño de la Estrella del Norte',
            'number' => 2,
            'ISBN' => '9789504975786',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/2a/1e/ff4d4c4582c34b0cbd99b3f16a65baae.jpg',
            'edition_id' => 11,
        ]);
        // creación de volúmen El puño de la Estrella del Norte (V3)
        Volume::create([
            'title' => 'El puño de la Estrella del Norte',
            'number' => 3,
            'ISBN' => '9789504976110',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/14/21/89946527d69f41d7949f803ecc1341e9.jpg',
            'edition_id' => 11,
        ]);
        // creación de volúmen El puño de la Estrella del Norte (V4)
        Volume::create([
            'title' => 'El puño de la Estrella del Norte',
            'number' => 4,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/31/02/1803c65447a74a91b18a17154bc8902e.jpg',
            'edition_id' => 11,
        ]);
        // creación de volúmen El puño de la Estrella del Norte (V5)
        Volume::create([
            'title' => 'El puño de la Estrella del Norte',
            'number' => 5,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/0d/0f/b518e88af12a4746a7eb056330693a7f.jpg',
            'edition_id' => 11,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Kenshiro',
            'description' => 'Hokuto No Ken',
            'imgUrl' => 'https://www.manga-news.com/public/2016/news_fr_01/hokuto-no-ken-ex-libris-kaze-manga.jpg',
            'user_id' => 7,
            'edition_id' => 11,
        ]);
        Artwork::create([
            'title' => 'Hokuto No Ken',
            'description' => 'Mad Max style',
            'imgUrl' => 'https://www.playerone.vg/wp-content/uploads/2021/03/hokuto-no-ken-manga-spinoff-e1614977195267.png',
            'user_id' => 8,
            'edition_id' => 11,
        ]);
        Artwork::create([
            'title' => 'HNK',
            'description' => 'Estrella del norte',
            'imgUrl' => 'https://www.wallpapertip.com/wmimgs/18-186292_fist-of-the-north-star-hokuto-no-ken.jpg',
            'user_id' => 10,
            'edition_id' => 11,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Spy x Family (E12)
        Edition::create([
            'title' => 'Spy x Family',
            'publisher' => 'IVREA ARGENTINA',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'description' => 'Sobrecubierta con tinta metalizada.',
        ]);

        // creación de volúmen Spy x Family (V1)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 1,
            'ISBN' => '9788418271434',
            'argument' => 'Los países de Westalis y Ostania libran desde hace años una guerra fría donde el espionaje y los asesinatos son moneda corriente. El inigualable espía conocido como "Twilight" es el mejor agente de Westalis que tiene por objetivo encargarse del poderoso Donovan Desmond. Lo jodido del asunto es que Desmond es un ermitaño antisocial cuyas únicas apariciones públicas son en los actos escolares de su hijo. Twilight deberá acercarse al objetivo lo suficiente como para desbaratar su agenda secreta. Para eso, sólo deberá simular que es un hombre de familia... con el pequeño detalle de que sólo tiene 7 días para formar la familia ideal.',
            'coverImage' => 'https://i1.whakoom.com/small/27/24/3d347a09b5f4469d96e32a1b6511810c.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V2)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 2,
            'ISBN' => '9788418450549',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/3e/0e/8c423a13d6c44e5696b89a361d219ed7.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V3)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 3,
            'ISBN' => '978841856223500003',
            'argument' => 'Siendo miembro de la policía secreta, él y el espía Twilight se ponen a prueba mutuamente. Pero Yuri adora demasiado a su hermana, y empieza a sospechar de la veracidad de su matrimonio...¡Entonces le exige a Twilight que le demuestre que son una pareja de verdad!',
            'coverImage' => 'https://i1.whakoom.com/small/0b/33/259b8916f8aa4ca48dd822ae9b716064.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V4)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 4,
            'ISBN' => '9788418562884',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/16/2d/4c3554a38b70492d9aec51fd5b8c502d.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V5)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 5,
            'ISBN' => '9788418645754',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/2b/03/7f1390fabe6f4f36a79404304708012a.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V6)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 6,
            'ISBN' => '9788418751561',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/2c/35/6914b2c67ef54a639d83fe5e41662425.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V7)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 7,
            'ISBN' => '9788419010605',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/03/2e/bd8f286307774eef9a755631b60376ad.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V8)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 8,
            'ISBN' => '9788419306593',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/2b/04/8cdbeea7d6f54caa9b5de67d1511d950.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V9)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 9,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/34/1e/7dae79689ac340d9b174c238365f352f.jpg',
            'edition_id' => 12,
        ]);
        // creación de volúmen Spy x Family (V10)
        Volume::create([
            'title' => 'Spy x Family',
            'number' => 10,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/3f/1d/5508484a76fe402c90c69915521f5605.jpg',
            'edition_id' => 12,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Poster',
            'description' => 'Spy X Family',
            'imgUrl' => 'https://i.pinimg.com/550x/9e/a0/cd/9ea0cd1593ee1e64ede8ddc2ced75588.jpg',
            'user_id' => 8,
            'edition_id' => 12,
        ]);
        Artwork::create([
            'title' => 'Spy X Family',
            'description' => 'Artwork',
            'imgUrl' => 'https://dthezntil550i.cloudfront.net/wa/latest/wa2003132002055770008497197/1280_960/a6ec0083-b4b8-4948-9878-142434152cc5.png',
            'user_id' => 6,
            'edition_id' => 12,
        ]);
        Artwork::create([
            'title' => 'SXF Poster',
            'description' => 'Poster',
            'imgUrl' => 'https://resizing.flixster.com/oKZx6R0LR26Hy_-BwPxj05F3dsg=/ems.cHJkLWVtcy1hc3NldHMvdHZzZWFzb24vYWZmMjgxMzYtMjg5Yi00ZmVhLWEwYjctYmEyMmI4MTFjNzBjLnBuZw==',
            'user_id' => 5,
            'edition_id' => 12,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Kamen Rider Kuuga (E13)
        Edition::create([
            'title' => 'Kamen Rider Kuuga',
            'publisher' => 'OVNI PRESS',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'description' => '¡Ovni Manga publicará KAMEN RIDER KUUGA! Llega la franquicia de Kamen Rider a la Argentina de la mano de Ovni y lo hace con la edición de KUUGA, la adaptación a manga del punto de inicio de la franquicia lanzado para su 30 aniversario.',
        ]);

        // creación de volúmen Kamen Rider Kuuga (V1)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 1,
            'ISBN' => '9789877248463',
            'argument' => 'Yusuke Godai es un joven alegre y despreocupado que vuelve a Japón luego de viajar por el mundo. Kaoru Ichijo es un agente de policía que se toma su trabajo muy en serio. Estos dos hombres obsesionados con la justicia se verán implicados con un misterioso caso sobrenatural y una amenaza más allá de lo humano, y solo aquel que sea elegido por el espíritu de Kuuga tendrá la oportunidad de derrotarla. Pero, ¿quién heredará su poder? ¡Llega una nueva generación del guerrero Kamen Rider!',
            'coverImage' => 'https://i1.whakoom.com/small/22/0f/c4092e7c9ac249df88b15857523d8b0a.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V2)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 2,
            'ISBN' => '9789877248708',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/10/11/1b2284017f6642e687b82ad45843d138.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V3)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 3,
            'ISBN' => '978987724846300003',
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/09/23/762636d837814809b288789182002754.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V4)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 4,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/31/00/ccaa85447ad84242bad22565d6d04746.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V5)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 5,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/1f/2c/c5a184a43ac6453d8b13b90efda4f376.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V6)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 6,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/06/3c/eda8eff191ec4f47855d7f64448e39f9.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V7)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 7,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/0d/30/620ef5420ef14e0ca26fed06c7942cda.jpg',
            'edition_id' => 13,
        ]);
        // creación de volúmen Kamen Rider Kuuga (V8)
        Volume::create([
            'title' => 'Kamen Rider Kuuga',
            'number' => 8,
            'ISBN' => null,
            'argument' => null,
            'coverImage' => 'https://i1.whakoom.com/small/0b/04/b1b497af951a423daaf9446605388cfa.jpg',
            'edition_id' => 13,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Kamen Rider',
            'description' => 'KM',
            'imgUrl' => 'https://cdna.artstation.com/p/assets/images/images/000/523/786/large/chen-guan-yu-kamen-rider-by-kyzylhum-d8khuk4.jpg?1425568807&dl=1',
            'user_id' => 1,
            'edition_id' => 13,
        ]);
        Artwork::create([
            'title' => 'Zero-One',
            'description' => 'Kamen Rider Zero-One',
            'imgUrl' => 'https://pbs.twimg.com/media/D_Mr4jeXUAAPs4i.jpg',
            'user_id' => 2,
            'edition_id' => 13,
        ]);
        Artwork::create([
            'title' => 'Kuuga & Agito',
            'description' => 'KM',
            'imgUrl' => 'https://cdn.donmai.us/original/45/b8/45b881913b4391c2e681a1c35e226a33.jpg',
            'user_id' => 3,
            'edition_id' => 13,
        ]);

        // -------------------------------------------------------------------------------------------------------------------

        // Spider-Man (E14)
        Edition::create([
            'title' => 'Spider-Man',
            'publisher' => 'OVNI PRESS',
            'language' => 'Español',
            'format' => 'Rustica/TPB (tapa blanda)',
            'isStandalone' => 0,
            'isClosed' => 1,
            'description' => 'Tomos recopilatorios.',
        ]);

        // creación de volúmen Spider-Man (V1)
        Volume::create([
            'title' => 'Spider-Man',
            'number' => 1,
            'ISBN' => '9789871728909',
            'argument' => 'Peter Parker siempre puso su carrera como Spider-Man por encima de su vida personal, y eso le costó su trabajo, su casa y hasta el amor. ¡Pero finalmente llegó su gran momento! Este tomo recopila la primera saga completa del asombroso relanzamiento del trepamuros.',
            'coverImage' => 'https://i1.whakoom.com/small/1a/21/1c535bade4ac4d15b1fe7bde8c209ca0.jpg',
            'edition_id' => 14,
        ]);
        // creación de volúmen Spider-Man (V2)
        Volume::create([
            'title' => 'Spider-Man',
            'number' => 2,
            'ISBN' => '9789871934348',
            'argument' => 'Para detener a Spider-Slayer y su ejercito insectoido, Spider-Man sacrifica sus propios poderes. Una trágica historia que tendrá un enorme impacto en el futuro de nuestro héroe.',
            'coverImage' => 'https://i1.whakoom.com/small/0f/17/75afb93382a649efb4515bf3a33bb6e7.jpg',
            'edition_id' => 14,
        ]);
        // creación de volúmen Spider-Man (V3)
        Volume::create([
            'title' => 'Spider-Man',
            'number' => 3,
            'ISBN' => '9789871966059',
            'argument' => 'Spider-Man se alía con los Cuatro Fantásticos y con Anti-Venom (el ex villano Venom), sin saber que en el futuro serán clave para luchar contra la infestación de la "isla Araña"...',
            'coverImage' => 'https://i1.whakoom.com/small/05/28/fbb00fc5133748fe8859c5b66fbe4608.jpg',
            'edition_id' => 14,
        ]);

        // artwork
        Artwork::create([
            'title' => 'Spiderman',
            'description' => 'marvel',
            'imgUrl' => 'https://preview.redd.it/j5lrkjiizun41.jpg?width=640&crop=smart&auto=webp&s=2d9d918506e83f3d2bec8f7892706285b6c42f4d',
            'user_id' => 4,
            'edition_id' => 14,
        ]);
        Artwork::create([
            'title' => 'Peter Parker',
            'description' => 'Spiderman',
            'imgUrl' => 'https://i.pinimg.com/originals/ca/5d/18/ca5d18e760c9d328e9d0f64c67d5c134.jpg',
            'user_id' => 5,
            'edition_id' => 14,
        ]);
        Artwork::create([
            'title' => 'Goblin',
            'description' => 'Hombre Araña',
            'imgUrl' => 'https://c4.wallpaperflare.com/wallpaper/901/280/30/spiderman-goblin-hd-artwork-wallpaper-preview.jpg',
            'user_id' => 6,
            'edition_id' => 14,
        ]);

        // -------------------------------------------------------------------------------------------------------------------


        // foreach (range(1, 10) as $index) {
        //     Volume::factory()->create();
        // }

        foreach (range(1, 20) as $index) {
            Review::factory()->create();
        }
    }
}
