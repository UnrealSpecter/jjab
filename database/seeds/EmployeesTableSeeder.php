<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Renda Blok',
                'why' => 'Ik ben Renda Blok, 22 jaar en ik kom uit Emmer-Compascuum. Ik hou van carnaval en mensen helpen. Ik ben direct en eerlijk maar heb begrip voor de problemen van mensen. Niks maakt mij blijer dan iemand stappen zien maken naar een betere toekomst voor zichzelf.',
                'who' => 'Toen Wesley met het idee kwam om een stichting te starten in juridisch advies, werd ik meteen enthousiast. Het idee om jongeren te kunnen helpen en gratis juridisch advies te geven sprak mij erg aan. Ik wil graag zoveel mogelijk jongeren helpen en hoop dan ook met de stichting de stap om hulp te vragen bij bepaalde vragen, makkelijker te maken.',
            'experience' => 'De afgelopen 4 jaar ben ik bezig geweest met mijn opleiding sociaal juridische dienstverlening aan de Hanzehogeschool in Groningen. Ik heb stage gelopen bij VNN(verslavingszorg noord-nederland) in kliniek Vossenloo in Eelde. Daar heb ik mensen begeleid met allerlei problemen op het gebied van financiën, huisvesting en justitie. Op dit moment doe ik, naast mijn werk voor de de stichting, vrijwilligerswerk bij Reclassering Nederland en een afstudeerstage bij Jimmy’s in Emmen.',
                'created_at' => '2018-03-07 22:33:48',
                'updated_at' => '2018-03-07 22:33:48',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Wesley Tabak',
                'why' => 'Ik ben Wesley Tabak. Een 19 jarige jurist die nergens voor terugdeinst. Ik leef om mensen te helpen.',
                'who' => 'ik leef voor het helpen van mensen omdat ik zelf heb meegemaakt hoe het is om hulp nodig te hebben en het niet te kunnen krijgen. Een aantal van mijn familieleden en vrienden hebben juridische problemen gekregen. Het grote probleem was, ze konden geen advocaat betalen en wisten zelf niet hoe om te gaan met de vragen die zij hadden. Toen ik ze had geholpen, konden ze eindelijk hun leven weer oppakken. De dankbaarheid die zij uitstraalden heeft mij er voor doen kiezen om voortaan mensen te helpen die anders geen hulp kunnen krijgen.',
                'experience' => 'Ik werk al een aantal jaar als vrijwilliger  bij o.a. de JongerenAdviesRaad Emmen, Wakker Emmen, de Studentenraad van het Drenthe College en nog veel meer.Nu dat ik mijn opleiding tot jurist [bijna] heb afgerond, kan ik eindelijk jongeren gratis helpen met hun juridische vragen. Zo hoop ik  ervoor te zijn om mensen te helpen die een probleem hebben met hun werkgever of de gemeente, mensen die een vraag hebben over hoe zij een eigen bedrijf op moeten starten, mensen die een woning nodig hebben, jongeren waarvan de ouders gaan scheiden en alle andere vragen die iemand kan hebben wat iets met het recht te maken hebben.',
                'created_at' => '2018-03-07 22:34:43',
                'updated_at' => '2018-03-07 22:34:43',
            ),
        ));


    }
}
