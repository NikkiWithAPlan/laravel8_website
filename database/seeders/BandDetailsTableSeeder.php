<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BandDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('band_details')->insert(
            [
                'text' => '<h3 style="text-align: center; padding: 30px;">
                <a href="http://musicbackstage.hu/2019/01/21/oh-tribute-te-lesajnalt-mufajkellesz-e-nekunk/?fbclid=IwAR0WBAt0A85QdiwNSTupswWzOwGbCOF0T9XYiv4HlLyZWVXIGWsmd8lTmAg"
                   target="_blank">
                    <u>A Music Backstage ezt írta rólunk</u>
                </a>
            </h3>

            <h3 style="text-align: center; padding: 30px;">Új debreceni AC/DC tribute banda a hazai porondon</h3>
            <br><br>

            <p>Akik szeretik a veretes "old school" rockzenét, azok nyilván imádják az világhírű
                ausztrál AC/DC zenekart. Mivel a 1973 decemberében, Sydney-ben alakult legendás
                csapat újabban különböző okok miatt mostanság igen passzív, talán még nagyobb
                öröm a dalaikat elcsípni élőben, mégha egy
                "Hiteles Tribute Zenekar" előadásáról is van szó.</p>

            <p>2018 februárjában indult be a hazai AC/DC-klónok között a debreceni DC/79
                zenekar, amely 2003-ban alakult Manchesterben, angol zenészek által.
                2006 augusztusában a magyar szólóénekes, Szedlják János, alias "Róka"
                csatlakozott hozzájuk, ettől kezdve a DC/79 kiteljesedett, és elismertté vált.
                A srácok műsorukkal Anglia, Skócia, Írország és Izland városaiban turnéztak, majd
                2007-ben Magyarországra is ellátogattak, ahol 7 napos túrájukon 5 koncertet adtak a
                debreceni Lovardában és más klubokban, telt házzal.</p>

            <p>2017-ben "Róka" hazaköltözött, és áthozta az együttes nevét, az új debreceni
                tagokat alaposan kiválogatva, átalakította a zenekart. A bandában a frontember
                kísértetiesen megidézi Bon Scottot.</p>

            <p>Összeálltunk az új DC/79 zenekarral,

                és mindössze fél év alatt a koncertszínpadokon letettük névjegyünket. Augusztusban
                például a híres böszörményi Traktorhúzó Fesztiválon zenéltünk egy kamion platóján,
                menet közben, a felvonuláson. Ezt követően megtöltöttük a Debreceni Művelődési
                Központot ( IPK )-t, több ízben a Roncsbárt, és nagy tömeg előtt játszottunk a
                cívisvárosi Kossuth téren, a Pulyka napokon. Adtunk koncertet többek között a
                fővárosban, - ahol a Dürer Kertben toltuk a DC Rock N Roll-t. December végén
                pedig a Főnix Csarnokbeli Tankcsapda-koncert "After Partiján" voltunk fő produkció,
                óriási telt ház előtt.
            </p>

            <p>Jelenlegi felvételeink pillanatképet adnak a szervezőknek, rajongoknak, hogy mit is
                csinálunk. Az igazi színpadi show, egyedülálló Magyarországon, az angliai
                frontember tapasztalataim alapján!</p>

            <p>A műsorunk az AC/DC 1979-es Párizsi koncertjén alapul, amely egy teljes koncert
                sajátos hangulatát adja vissza a rajongóknak. A zenei élményt és a színpadi
                koreográfiát is teljes élethűségben tükrözi vissza a közönségnek.</p>
                '
            ]
            );
    }
}
