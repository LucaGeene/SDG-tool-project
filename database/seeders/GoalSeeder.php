<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goals')->insert([
            'title' => 'Doel 1: Geen armoede',
            'color' => '#e5243b',
            'header' => 'Beëindig armoede overal en in al haar vormen',
            'description' => 'Het eerste doel gaat over het beëindigen van armoede. Volgens de Verenigde Naties ook meteen het belangrijkste doel. Niemand mag in 2030 nog in extreme armoede leven. Onder de millenniumdoelen betekende extreme armoede dat iemand minder dan 1,25 dollar per dag te besteden heeft.
                              De Wereldbank heeft deze grens in 2015 verlegd naar 1,90 dollar per dag. In 2012 leefde 12,8 procent van de wereldbevolking onder de grens van 1,90 dollar. Dit zijn 896 miljoen mensen. In 1990 leefde nog 37 procent van de wereldbevolking, of 1,95 miljard mensen onder deze grens.
                              De verwachting is dat dit aantal in 2015 is gedaald naar 9,5 procent of 702 miljoen mensen van de wereldbevolking.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 2: Geen honger',
            'color' => '#DDA83A',
            'header' => 'Beëindig honger en promoot duurzame landbouw',
            'description' => 'In 2030 mag niemand op de wereld meer honger lijden. Iedereen moet toegang hebben tot veilig, voedzaam en voldoende voedsel, het hele jaar door. Volgens het Wereldvoedselprogramma hebben op dit moment 795 miljoen mensen niet genoeg voedsel om een gezond en actief leven te leiden.
                              Dit is ongeveer een op de negen mensen wereldwijd. In sub-Sahara Afrika lijden naar verhouding de meeste mensen honger, een op de vier mensen in deze regio is ondervoed. Ook sterft bijna de helft (45 procent) van de kinderen die voor hun vijfde komen te overlijden aan malnutritie.
                              En wereldwijd gaan nog steeds 66 miljoen basisschoolkinderen met honger naar school. '
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 3: Goede gezondheid en welzijn',
            'color' => '#4c9f38',
            'header' => 'Verzeker een goede gezondheid en promoot welvaart voor alle leeftijden',
            'description' => '“Gezondheid is essentieel voor duurzame ontwikkeling”, stellen de Verenigde Naties. Doel drie gaat over gezondheid en welzijn voor iedereen van jong tot oud. Volgens de Wereldgezondheidsorganisatie daalde het kindersterftecijfer in 2015 met 53 procent ten opzichte van 1990.
                              Toch sterven er elk jaar nog steeds zes miljoen kinderen voor hun vijfde levensjaar. Het merendeel van deze kinderen wonen in Azië en sub-Sahara Afrika. Vier van de vijf kinderen die voor hun vijfde levensjaar overlijden komen uit deze regio’s.
                              Moedersterfte is in 2015 ten opzichte van 1990 met 44 procent gedaald, aldus de Wereldgezondheidsorganisatie. Maar ook hier kunnen nog stappen worden gezet. Moedersterfte is in ontwikkelingslanden nog steeds 14 keer hoger dan in ontwikkelde landen.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 4: Kwaliteitsonderwijs',
            'color' => '#c5192d',
            'header' => 'Verzeker gelijke toegang tot kwaliteitsvol onderwijs en bevorder levenslang leren voor iedereen',
            'description' => 'Met name door de millenniumdoelen is er op het gebied van onderwijs de laatste jaren veel verbeterd, vooral voor vrouwen en meisjes. Op dit moment gaat 91 procent van de kinderen in ontwikkelingslanden naar de basisschool. Het aantal kinderen dat niet naar school gaat is ten opzichte van 2000 gehalveerd: van 100 miljoen in 2000 naar 57 miljoen in 2015.
                              Maar er valt nog veel winst te behalen. Vijftig procent van de kinderen met een basisschoolleeftijd die niet naar school gaan, wonen in conflictgebieden. En wereldwijd kunnen 103 miljoen jongeren nog niet lezen of schrijven.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 5: Gendergelijkheid',
            'color' => '#ff3a21',
            'header' => 'Bereik gendergelijkheid en empowerment voor alle vrouwen en meisjes',
            'description' => 'In de Universele Verklaring voor de Rechten van de Mens is vastgesteld dat mannen en vrouwen dezelfde rechten hebben. Toch is dit niet voldoende. “Gelijkheid tussen mannen en vrouwen is niet alleen een mensenrecht, maar ook de basis voor een vreedzame, welvarende en duurzame wereld”, aldus de Verenigde Naties.
                              Maar in de praktijk blijkt dat vrouwen en meisjes nog vaak achtergesteld worden ten opzichte van mannen en jongens. Dit vijfde doel stelt dat in 2030 vrouwen en mannen ook in de praktijk gelijke rechten moeten hebben op faciliteiten als onderwijs, gezondheidszorg en werk.
                              Daarnaast moeten vrouwen en mannen gelijk vertegenwoordigd zijn in politieke en economische besluitvorming.'
        ]);
        DB::table('goals')->insert([
            'title' => 'Doel 6: Schoon water en sanitair',
            'color' => '#26bde2',
            'header' => 'Verzeker toegang tot duurzaam beheer van water en sanitatie voor iedereen',
            'description' => 'Schoon drinkwater en goede en schone sanitaire voorzieningen hebben een positieve invloed op andere Global Goals zoals voedselveiligheid, onderwijs en gezondheid. Schoon drinkwater zorgt voor minder infecties en schone toiletten op scholen zorgen ervoor dat meer meisjes naar school gaan, ook als ze ongesteld zijn.
                              Er is genoeg schoon drinkwater voor iedereen op de wereld, maar door problemen zoals een slechte infrastructuur of economie, sterven er elk jaar nog miljoenen mensen aan ziekten die veroorzaakt worden door vervuild drinkwater of slechte hygiëne.

                              Sinds 1990 hebben 2,6 miljard mensen toegang gekregen tot schoon drinkwater, maar 1,8 miljard mensen halen hun drinkwater nog steeds uit vervuilde bronnen. Daarnaast kunnen 2,4 miljard mensen op de wereld nog geen gebruik maken van schone toiletten en ander sanitair.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 7: Betaalbare en duurzame energie',
            'color' => '#fcc30b',
            'header' => 'Verzeker toegang tot betaalbare, betrouwbare, duurzame en moderne energie voor iedereen',
            'description' => 'We hebben energie nodig voor onze welvaart en ons welzijn; om te leven, wonen en werken. De maatschappij zou zich niet zo kunnen ontwikkelen zoals het nu doet zonder energie. Daarom is het belangrijk dat iedereen gebruik kan maken van energie, vinden de Verenigde Naties.
                              Een op de vijf mensen heeft op dit moment nog geen toegang tot energie. Maar tegelijkertijd is energie ook een van de grootste problemen van deze eeuw. We halen te veel energie uit kolen, olie en gas. Deze grondstoffen raken een keer op en de brandstof veroorzaakt klimaatverandering.
                              Ten minste 60 procent van de uitstoot van broeikasgassen wordt veroorzaakt door energie.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 8: Waardig werk en economische groei',
            'color' => '#a21942',
            'header' => 'Bevorder aanhoudende, inclusieve en duurzame economische groei, volledige en productieve tewerkstelling en waardig werk voor iedereen',
            'description' => 'In veel landen betekent het hebben van een baan niet automatisch dat je aan armoede kunt ontsnappen. Dit moet anders. Daarom richt doel acht zich op fatsoenlijk werk voor iedereen en duurzame en inclusieve economische groei. Dit betekent dat iedereen die kan werken de mogelijkheid moet hebben om te kunnen werken, onder goede werkomstandigheden.
                              Deze banen moeten economische groei stimuleren zonder het milieu aan te tasten.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 9: Industrie, innovatie en infrastructuur',
            'color' => '#fd6925',
            'header' => 'Bouw veerkrachtige infrastructuur, bevorder inclusieve en duurzame industrialisering en stimuleer innovatie',
            'description' => 'Bij infrastructuur moeten we denken aan transport, wegen, irrigatie, energie en informatie-, en communicatietechnologie. Om verbeteringen aan te brengen in onderwijs, gezondheidszorg of het drinkwater, is infrastructuur noodzakelijk. Zonder wegen of transport is het voor kinderen uit afgelegen dorpen bijvoorbeeld veel moeilijker om naar school te gaan.
                              In veel ontwikkelingslanden ontbreekt deze fundamentele infrastructuur.

                              Zonder infrastructuur is het moeilijker om een baan te krijgen, zaken te doen, informatie te ontvangen en brood te halen. Oftewel, door een betere infrastructuur is het makkelijker om andere doelen te bereiken en gaat de levenskwaliteit omhoog.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 10: Ongelijkheid verminderen',
            'color' => '#dd1367',
            'header' => 'Dring ongelijkheid in en tussen landen terug',
            'description' => 'Inkomensongelijkheid tussen landen is de laatste jaren verminderd. Maar ongelijkheid binnen landen is alleen maar groter geworden. Tussen 1990 en 2010 is de inkomensongelijkheid binnen ontwikkelingslanden met 11 procent toegenomen. Maar ook binnen ontwikkelde landen is de inkomensongelijkheid toegenomen.
                              Het idee dat economische vooruitgang niet genoeg is om armoede te bestrijden, wordt wereldwijd steeds meer ondersteund. Economische groei moet inclusief zijn. Oftewel, iedereen moet er bij betrokken worden. En als we het hebben over economische groei, moeten we ook aandacht hebben voor sociale aspecten en het milieu. '
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 11: Duurzame steden en gemeenschappen',
            'color' => '#fd9d24',
            'header' => 'Maak steden en menselijke nederzettingen inclusief, veilig, veerkrachtig en duurzaam',
            'description' => 'De helft van de wereldbevolking, zo’n 3,5 miljard mensen, woont in de stad. En de verwachting is dat dat aantal alleen maar toeneemt: in 2030 woont mogelijk bijna 60 procent van alle mensen wereldwijd in stedelijk gebied. Vrijwel al deze verstedelijking, 95 procent, vindt plaats in ontwikkelingslanden. Helaas bevat die groei van ‘stedelijk gebied’ ook sloppenwijken.
                              Nu wonen er al 823 miljoen mensen in die sloppenwijken, maar dat aantal zal blijven groeien.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 12: Verantwoorde consumptie en productie',
            'color' => '#BE8A2D',
            'header' => 'Verzeker duurzame consumptie- en productiepatronen',
            'description' => 'Zorg voor duurzaam beheer en efficiënt gebruik van natuurlijke hulpbronnen. Het produceren van onze goederen moet met het oog op de groeiende wereldbevolking veel handiger: ‘meer produceren met minder’. Zo moet het gebruik van vervuilende energiebronnen teruggeschroefd, want ondanks de technologische vooruitgang zullen OECD-landen naar schatting nog 35 procent meer energie verbruiken in 2020.
                              We moeten zorgen dat het kleine percentage aan drinkwater dat er is – maar drie procent van de wereldwatervoorraad is zoet water – minder vaak vervuild en verspild wordt. Op het gebied van voedselproductie moet de verdeling beter. Terwijl er bijna 800 miljoen mensen honger hebben, is er in sommige delen van de wereld juist te veel (ongezond) eten, wat zorgt voor hart- en vaatziekten.
                              Naar schatting haalt ongeveer een derde van wat de wereld produceert aan voedsel, ons bord niet. Het doel is om in 2030 voedselverspilling gehalveerd te hebben.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 13: Klimaatactie',
            'color' => '#3f7e44',
            'header' => 'Neem dringend actie om klimaatverandering en haar impact te bestrijden',
            'description' => 'Ieder land op ieder continent heeft te maken met klimaatverandering. De opwarming van de aarde heeft nu al invloed op het dagelijks leven en het inkomen van miljoenen mensen wereldwijd en dat zal in de toekomst alleen maar toenemen. Droogte, overstromingen en extreme stormen komen vaker voor door klimaatverandering.
                              Broeikasgassen die wij uitstoten zorgen ervoor dat de temperatuur op aarde snel stijgt. Dit zorgt ervoor dat het Poolijs smelt en het zeeniveau stijgt. Arme mensen die nu al het meest kwetsbaar zijn, krijgen het eerst met de gevolgen te maken. Vaak zijn zij afhankelijk van landbouw in gebieden die gevoelig zijn voor extreme omstandigheden.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 14: Leven in het water',
            'color' => '#0a97d9',
            'header' => 'Behoud en maak duurzaam gebruik van de oceanen, de zeeën en de maritieme hulpbronnen',
            'description' => 'Oceanen zijn met hun temperatuur, hun stromingen en hun onderzeese leven de motor van mondiale systemen die de aarde bewoonbaar maken voor mensen. Ze bedekken drie kwart van het aardoppervlak. Ons drinkwater, ons weer, klimaat, de kusten, veel van ons eten en zelfs de lucht die we inademen zijn afhankelijk van de zee.
                              Oceanen en zeeën absorberen 30 procent van de totale CO2, en het fytoplankton zorgt voor 50 procent van onze zuurstof. Door de eeuwen heen zijn oceanen en zeeën cruciaal gebleven voor handel en transport.
                              De huidige waarde van economische activiteit op zee wordt geschat op 3 tot 6 biljoen dollar. Nu nog dragen oceanen en zeeën 90 procent van al het transport, en via onderzeese kabels 95 procent van de mondiale telecommunicatie. Visserij en aquacultuur verschaffen voor 4,3 miljard mensen ruim 15 procent van hun dierlijke eiwitconsumptie.
                              Zonder zorgvuldig beheer van deze essentiële mondiale hulpbron is er geen duurzame toekomst mogelijk.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 15: Leven op het land',
            'color' => '#56c02b',
            'header' => 'Bescherm, herstel en bevorder het duurzaam gebruik van ecosystemen, beheer bossen duurzaam, bestrijd woestijnvorming en landdegradatie en draai het terug en roep het verlies aan biodiversiteit een halt toe',
            'description' => 'Bossen bedekken 30 procent van het landoppervlak van de aarde. Naast dat ze belangrijk zijn voor de voedselveiligheid en het bieden van onderdak, zijn ze ook essentieel voor het vechten tegen klimaatverandering, het beschermen van de biodiversiteit en vormen ze het leefgebied van inheemse bevolkingsgroepen. We verliezen jaarlijks 13 miljoen hectare bos, terwijl de landaantasting zorgt voor woestijnvorming van 3,6 miljard hectare aan land.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 16: Vrede, justitie en sterke publieke diensten',
            'color' => '#00689d',
            'header' => 'Bevorder vreedzame en inclusieve samenlevingen met het oog op duurzame ontwikkeling, verzeker toegang tot justitie voor iedereen en creëer op alle niveaus doeltreffende, verantwoordelijke en open instellingen',
            'description' => 'Binnen de millenniumdoelen was er nauwelijks aandacht voor, maar nu is vrijwel iedereen het erover eens dat zonder er vrede, veiligheid en rechtvaardigheid bijna geen ontwikkeling mogelijk is. Corruptie, diefstal en belastingontwijking kost ontwikkelingslanden 1,26 miljard dollar per jaar. Geld dat goed gebruikt kan worden voor armoedebestrijding of om kinderen naar school te laten gaan.
                              En de helft van basisschoolleerlingen in conflictgebieden verlaat school zonder diploma. Vrede, veiligheid en rechtvaardigheid zorgen voor ontwikkeling, en andersom. Ze versterken elkaar.'
        ]);

        DB::table('goals')->insert([
            'title' => 'Doel 17: Partnerschap om de doelen te bereiken',
            'color' => '#19486a',
            'header' => 'Versterk de implementatiemiddelen en revitaliseer het wereldwijd partnerschap voor duurzame ontwikkeling',
            'description' => '“De duurzame ontwikkelingsdoelen zijn een to-do lijst voor mensen en de planeet, en een blauwdruk voor succes”, zei VN-Secretaris-Generaal Ban ki-Moon bij de lancering van de SDGs. “We zullen ook een nieuw mondiaal partnerschap nodig hebben”, aldus Ban ki-Moon. “We hebben actie nodig van iedereen, overal. Zeventien Duurzame Ontwikkelingsdoelen zijn onze gids.”
                              Om alle doelen te behalen in 2030 moeten regeringen, bedrijven, burgers en organisaties samenwerken. Het gaat daarbij vooral om technologie, kennisoverdracht, handel, data, beleidscoherentie en financiële stromen. De officiële ontwikkelingshulp (ODA) bedroeg 135,2 miljard dollar in 2014, het hoogste niveau ooit. De schuldenlast van de ontwikkelingslanden blijft stabiel op ongeveer 3 procent van de exportinkomsten.
                              Het aantal internetgebruikers in Afrika bijna verdubbeld in de afgelopen vier jaar, maar meer dan 4 miljard mensen maken geen gebruik van het internet en 90 procent van hen woont in ontwikkelingslanden.

                              Een succesvolle agenda voor duurzame ontwikkeling vereist partnerschappen tussen regeringen, het bedrijfsleven en het maatschappelijk middenveld. Gezamenlijke principes en waarden, een gedeelde visie en gedeelde doelen zijn nodig op mondiaal, regionaal, nationaal en lokaal niveau.'
        ]);
    }
}
