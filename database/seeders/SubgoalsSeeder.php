<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubgoalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subgoals')->insert([
           'goal_id' => '1',
            'name' => '1.1',
            'description' => 'Tegen 2030 extreme armoede uitroeien voor alle mensen wereldwijd, die met minder dan $1,25 per dag moeten rondkomen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '1',
            'name' => '1.2',
            'description' => 'Tegen 2030 het aandeel mannen, vrouwen en kinderen van alle leeftijden die volgens de nationale definities in armoede leven in al haar dimensies, minstens tot de helft terugbrengen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '1',
            'name' => '1.3',
            'description' => 'Nationaal toepasbare sociale beschermingssystemen en maatregelen implementeren voor iedereen, met inbegrip van sociale beschermingsvloeren, en tegen 2030 een aanzienlijke dekkingsgraad realiseren van de armen en de kwetsbaren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '1',
            'name' => '1.4',
            'description' => 'Er tegen 2030 voor zorgen dat alle mannen en vrouwen, in het bijzonder de armen en de kwetsbaren, gelijke rechten hebben op economische middelen, alsook toegang tot basisdiensten, eigenaarschap en controle over land en andere vormen van eigendom, nalatenschap, natuurlijke hulpbronnen, gepaste nieuwe technologie en financiële diensten, met inbegrip van microfinanciering.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '1',
            'name' => '1.5',
            'description' => 'Tegen 2030 de weerbaarheid opbouwen van de armen en van zij die zich in kwetsbare situaties bevinden en hun blootstelling aan en kwetsbaarheid voor met klimaatgerelateerde extreme gebeurtenissen en andere economische, sociale en ecologische schokken en rampen beperken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '1',
            'name' => '1.A',
            'description' => 'Zorgen voor een aanzienlijke mobilisatie van middelen afkomstig uit verschillende bronnen, ook via versterkte ontwikkelingssamenwerking, om adequate en voorspelbare middelen te voorzien voor ontwikkelingslanden, in het bijzonder de minst ontwikkelde landen, om programma’s en beleidslijnen te implementeren die een einde moeten maken aan armoede in al haar vormen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '1',
            'name' => '1.B',
            'description' => 'Solide beleidskaders creëren op nationaal, regionaal en internationaal niveau, die zijn gebaseerd op ontwikkelingsstrategieën ten gunste van de armen en het genderbeleid, om de versnelde investering te ondersteunen in acties die gericht zijn op het uitroeien van de armoede.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.1',
            'description' => 'Tegen 2030 een einde maken aan honger en voor iedereen, in het bijzonder de armen en de mensen die leven in kwetsbare situaties, met inbegrip van kinderen, toegang garanderen tot veilig, voedzaam en voldoende voedsel en dit het hele jaar lang.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.2',
            'description' => 'Tegen 2030 een einde maken aan alle vormen van malnutritie, waarbij ook tegen 2025 voldaan moet kunnen worden aan de internationaal overeengekomen doelstellingen met betrekking tot groeiachterstand en ondergewicht bij kinderen onder de 5 jaar; en eveneens tegemoetkomen aan de voedingsbehoeften van adolescente meisjes, zwangere vrouwen, vrouwen die borstvoeding geven en oudere personen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.3',
            'description' => 'Tegen 2030 de landbouwproductiviteit en de inkomens verdubbelen voor kleinschalige voedselproducenten, in het bijzonder vrouwen, inheemse bevolkingen, familieboeren, veefokkers en vissers, onder meer door een veilige en gelijke toegang tot land, andere productieve hulpbronnen en inputs, kennis, financiële diensten, markten en opportuniteiten die toegevoegde waarde bieden en ook buiten de landbouw tewerkstelling genereren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.4',
            'description' => 'Tegen 2030 duurzame voedselproductiesystemen garanderen en veerkrachtige landbouwpraktijken implementeren die de productiviteit en de productie kunnen verhogen, die helpen bij het in stand houden van ecosystemen, die de aanpassingscapaciteit verhogen in de strijd tegen klimaatverandering, extreme weersomstandigheden, droogte, overstromingen en andere rampen en die op een progressieve manier de kwaliteit van het land en de bodem verbeteren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.5',
            'description' => 'Tegen 2020 de genetische diversiteit in stand houden van zaden, cultuurgewassen en gefokte en gedomesticeerde dieren en hun in het wild levende verwanten, ook aan de hand van zaad- en plantenbanken die op een degelijke manier beheerd en gediversifieerd worden op nationaal, regionaal en internationaal niveau; en de toegang bevorderen tot het eerlijk en billijk delen van voordelen afkomstig van het gebruik van genetische hulpbronnen en daaraan gekoppelde traditionele kennis, zoals internationaal overeengekomen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.A',
            'description' => 'Verhogen van de investeringen, door versterkte internationale samenwerking, in landelijke infrastructuur, landbouwkundig onderzoek en uitgebreide diensten, technologische ontwikkeling en genetische databanken voor planten en vee om de landbouwkundige productiecapaciteit in ontwikkelingslanden, in het bijzonder in de minst ontwikkelde landen, te versterken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.B',
            'description' => 'Corrigeren en voorkomen van handelsbeperkingen en scheefgegroeide situaties op de wereldlandbouwmarkten, door onder andere tegelijk alle vormen van landbouwexportsubsidies en alle exportmaatregelen met een gelijkaardig effect af te schaffen, in overeenstemming met het mandaat van de Ontwikkelingsronde in Doha.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '2',
            'name' => '2.C',
            'description' => 'Maatregelen aannemen die de correcte werking moeten garanderen van de voedselgrondstoffenmarkten en hun afgeleiden en een snelle toegang tot marktinformatie bevorderen, met inbegrip van informatie over voedselreserves, om de extreme volatiliteit van de voedselprijzen te helpen beperken.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.1',
            'description' => 'Tegen 2030 de globale moedersterfte terugdringen tot minder dan 70 per 100.000 levendgeborenen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.2',
            'description' => 'Tegen 2030 een einde maken aan vermijdbare overlijdens van pasgeborenen en kinderen onder de 5 jaar, waarbij alle landen er moeten naar streven om het sterftecijfer van baby’s minstens tot 12 per 1000 levendgeborenen te beperken alsook het sterftecijfer van kinderen jonger dan 5 jaar eveneens in te perken tot maximum 25 per 1000 levendgeborenen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.3',
            'description' => 'Tegen 2030 een einde maken aan epidemieën zoals aids, tuberculose, malaria en verwaarloosde tropische ziekten, alsook hepatitis, door water overgebrachte ziekten en andere overdraagbare ziekten bestrijden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.4',
            'description' => 'Tegen 2030 de vroegtijdige sterfte gelinkt aan niet-overdraagbare ziekten met een derde inperken via preventie en behandeling, en mentale gezondheid en welzijn bevorderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.5',
            'description' => 'De preventie en behandeling versterken van misbruik van verslavende middelen, met inbegrip van drugsgebruik en het schadelijk gebruik van alcohol.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.6',
            'description' => 'Tegen 2020 het aantal doden en gewonden in het verkeer wereldwijd halveren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.7',
            'description' => 'Tegen 2030 universele toegang tot seksuele en reproductieve gezondheidszorgdiensten garanderen, met inbegrip van diensten voor gezinsplanning, informatie en opvoeding, en voor de integratie van reproductieve gezondheid in nationale strategieën en programma’s'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.8',
            'description' => 'Zorgen voor een universele ziekteverzekering, met inbegrip van de bescherming tegen financiële risico’s, toegang tot kwaliteitsvolle essentiële gezondheidszorgdiensten en toegang tot de veilige, doeltreffende, kwaliteitsvolle en betaalbare essentiële geneesmiddelen en vaccins voor iedereen'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.9',
            'description' => 'Tegen 2030 in aanzienlijke mate het aantal sterfgevallen en ziekten verminderen als gevolg van gevaarlijke chemicaliën en de vervuiling en besmetting van lucht, water en bodem.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.A',
            'description' => 'Waar nodig de implementatie van de kaderovereenkomst van de Wereldgezondheidsorganisatie over tabakscontrole versterken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.B',
            'description' => 'Het onderzoek en de ontwikkeling ondersteunen van vaccins en geneesmiddelen voor overdraagbare en niet-overdraagbare ziekten voor de overdraagbare en de niet-overdraagbare ziekten die in hoofdzaak ontwikkelingslanden treffen, toegang verschaffen tot betaalbare essentiële geneesmiddelen en vaccins, volgens de richtlijnen van de Verklaring van Doha aangaande het TRIPS-akkoord en Volksgezondheid.
De Verklaring bevestigt het recht van ontwikkelingslanden om ten volle gebruik te maken van de bepalingen van de Overeenkomst aangaande de Handelsaspecten van de Intellectuele Eigendom (TRAIPR) die ruimte laat voor de bescherming van de volksgezondheid; en, in het bijzonder, het verschaffen van toegang tot geneesmiddelen voor iedereen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.C',
            'description' => 'De financiering van de gezondheidszorg aanzienlijk opvoeren, net als de aanwerving, de ontwikkeling, de opleiding en het lange tijd in dienst houden van gezondheidswerkers in ontwikkelingslanden, in het bijzonder in de minst ontwikkelde landen en de kleine eilandstaten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '3',
            'name' => '3.D',
            'description' => 'De capaciteit van alle landen versterken, in het bijzonder die van de ontwikkelingslanden, met betrekking tot systemen voor vroegtijdige waarschuwing, risicovermindering en het beheer van nationale en globale gezondheidsrisico’s.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.1',
            'description' => 'Er tegen 2030 voor zorgen dat alle meisjes en jongens op een vrije, billijke en kwalitatief hoogstaande manier lager en middelbaar onderwijs kunnen afwerken, wat moet kunnen leiden tot relevante en doeltreffende leerresultaten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.2',
            'description' => 'Er tegen 2030 voor zorgen dat alle meisjes en jongens in hun vroege kindertijd toegang hebben tot een kwalitatieve ontwikkeling, zorg en opvoeding voorafgaand aan de lagere school zodat ze klaar zijn voor het basisonderwijs.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.3',
            'description' => 'Tegen 2030 gelijke toegang garanderen voor alle vrouwen en mannen tot betaalbaar en kwaliteitsvol technisch, beroeps- en hoger onderwijs, met inbegrip van de universiteit.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.4',
            'description' => 'Tegen 2030 het aantal jongeren en volwassenen met relevante vaardigheden, met inbegrip van technische en beroepsvaardigheden, voor tewerkstelling, degelijke jobs en ondernemerschap aanzienlijk opdrijven.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.5',
            'description' => 'Tegen 2030 genderongelijkheden wegwerken in het onderwijs en zorgen voor gelijke toegang tot alle niveaus inzake onderwijs en beroepsopleiding voor de kwetsbaren, met inbegrip van mensen met een handicap, inheemse bevolkingen en kinderen in kwetsbare situaties.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.6',
            'description' => 'Er tegen 2030 voor zorgen dat alle jongeren en een groot aantal volwassenen, zowel mannen als vrouwen, geletterd en rekenvaardig zijn.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.7',
            'description' => 'Er tegen 2030 voor zorgen dat alle leerlingen kennis en vaardigheden verwerven die nodig zijn om duurzame ontwikkeling te bevorderen, onder andere via vorming omtrent duurzame ontwikkeling en duurzame levenswijzen, mensenrechten, gendergelijkheid, de bevordering van een cultuur van vrede en geweldloosheid, wereldburgerschap en de waardering van culturele diversiteit en van de bijdrage van de cultuur tot de duurzame ontwikkeling.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.A',
            'description' => 'Bouwen en verbeteren van onderwijsfaciliteiten die aandacht hebben voor kinderen, mensen met een beperking en gendergelijkheid en die een veilige, geweldloze, inclusieve en doeltreffende leeromgeving bieden voor iedereen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.B',
            'description' => 'Tegen 2020 het aantal studiebeurzen wereldwijd en substantieel verhogen dat beschikbaar is voor ontwikkelingslanden, in het bijzonder de minst ontwikkelde landen, de kleine eilandstaten en de Afrikaanse landen, voor toegang tot het hoger onderwijs, met inbegrip van beroepsopleiding en programma’s omtrent informatie en communicatietechnologie, techniek, ingenieurswezen en wetenschappen, in ontwikkelde landen en andere ontwikkelingslanden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '4',
            'name' => '4.C',
            'description' => 'Tegen 2030 op aanzienlijke wijze de toevloed verhogen van gekwalificeerde leraren, ook via internationale samenwerking voor lerarenopleidingen in ontwikkelingslanden, in het bijzonder in de minst ontwikkelde landen en de kleine eilandstaten.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.1',
            'description' => 'Een einde maken aan alle vormen van discriminatie jegens vrouwen en meisjes, overal.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.2',
            'description' => 'Alle vormen van geweld tegen vrouwen en meisjes in de openbare en de privésfeer uitroeien, ook inzake vrouwenhandel en seksuele en andere soorten uitbuiting.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.3',
            'description' => 'Uit de wereld helpen van alle schadelijke praktijken, zoals kind-, vroege en gedwongen huwelijken en vrouwelijke genitale verminking.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.4',
            'description' => 'Erkennen en naar waarde schatten van onbetaalde zorg en thuiswerk door het voorzien van openbare diensten, infrastructuur en een sociaal beschermingsbeleid en door de bevordering van gedeelde verantwoordelijkheden binnen het gezin en de familie, zoals dat nationaal van toepassing is.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.5',
            'description' => 'Verzekeren van de volledige en doeltreffende deelname van vrouwen en voor gelijke kansen inzake leiderschap op alle niveaus van de besluitvorming in het politieke, economische en openbare leven.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.6',
            'description' => 'Verzekeren van universele toegang tot seksuele en reproductieve gezondheidszorg en reproductieve rechten zoals overeengekomen in het kader van het Actieprogramma van de Internationale Conferentie over Bevolking en Ontwikkeling en het Peking-Actieplatform en de slotdocumenten van hun desbetreffende conferenties.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.A',
            'description' => 'Hervormingen doorvoeren waarbij vrouwen gelijke rechten krijgen op economische middelen, naast toegang tot eigenaarschap en controle over land en andere vormen van eigendom, financiële diensten, erfenissen en natuurlijke hulpbronnen, in overeenstemming met nationaal recht.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.B',
            'description' => 'Het gebruik doen toenemen van innovatieve technologie, in het bijzonder de informatie- en communicatietechnologie, om te komen tot een grotere zelfredzaamheid van vrouwen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '5',
            'name' => '5.C',
            'description' => 'Een gezond beleid en afdwingbare wetgeving goedkeuren en versterken voor de bevordering van gendergelijkheid en de zelfredzaamheid van alle vrouwen en meisjes op alle niveaus.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.1',
            'description' => 'Tegen 2030 komen tot een universele en gelijke toegang tot veilig en betaalbaar drinkwater voor iedereen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.2',
            'description' => 'Tegen 2030 komen tot toegang tot gepaste en degelijke sanitaire voorzieningen en hygiëne voor iedereen en een einde maken aan openbare ontlasting, waarbij speciale aandacht wordt besteed aan de behoeften van vrouwen en meisjes en mensen in kwetsbare situaties.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.3',
            'description' => 'Tegen 2030 de waterkwaliteit verbeteren door verontreiniging te beperken, de lozing van gevaarlijke chemicaliën en materialen een halt toe te roepen en de uitstoot ervan tot een minimum te beperken waarbij ook het aandeel van onbehandeld afvalwater wordt gehalveerd en recyclage en veilige hergebruik wereldwijd aanzienlijk worden verhoogd.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.4',
            'description' => 'Tegen 2030 in aanzienlijke mate de efficiëntie van het watergebruik verhogen in alle sectoren en het duurzaam winnen en verschaffen van zoetwater garanderen om een antwoord te bieden op de waterschaarste en om het aantal mensen dat af te rekenen heeft met waterschaarste, aanzienlijk te verminderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.5',
            'description' => 'Tegen 2030 het geïntegreerde beheer van de waterhulpbronnen implementeren op alle niveaus, ook via gerichte grensoverschrijdende samenwerking.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.6',
            'description' => 'Tegen 2020 de op water gebaseerde ecosystemen beschermen en herstellen, met inbegrip van bergen, bossen, moerassen, rivieren, grondwaterlagen en meren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.A',
            'description' => 'Tegen 2030 de internationale samenwerking en de capaciteitsopbouwende ondersteuning uitbreiden voor de ontwikkelingslanden voor activiteiten die betrekking hebben op water en sanitaire voorzieningen en programma’s, met inbegrip van technologieën voor waterwinning, ontzilting, waterefficiëntie, afvalwaterzuivering, recyclage en hergebruik.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '6',
            'name' => '6.B',
            'description' => 'De deelname versterken en ondersteunen van plaatselijke gemeenschappen bij de verbetering van het waterbeheer en van de sanitaire voorzieningen.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '7',
            'name' => '7.1',
            'description' => 'Tegen 2030 universele toegang tot betaalbare, betrouwbare en moderne energiediensten garanderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '7',
            'name' => '7.2',
            'description' => 'Tegen 2030 in aanzienlijke mate het aandeel hernieuwbare energie in de globale energiemix verhogen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '7',
            'name' => '7.3',
            'description' => 'Tegen 2030 de globale snelheid van verbetering in energie-efficiëntie verdubbelen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '7',
            'name' => '7.A',
            'description' => 'Tegen 2030 de internationale samenwerking verhogen om toegang te vergemakkelijken tot onderzoek en technologie inzake schone energie, met inbegrip van de hernieuwbare energie, de energiedoeltreffendheid en de geavanceerde en schonere fossiele brandstoffentechnologie, en de investering promoten in energie-infrastructuur en schone energietechnologie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '7',
            'name' => '7.B',
            'description' => 'Tegen 2030 de infrastructuur uitbreiden en de technologie upgraden om moderne en duurzame energiediensten te kunnen aanbieden aan alle ontwikkelingslanden, in het bijzonder de minst ontwikkelde landen, de kleine eilandstaten en door land ingesloten ontwikkelingslanden, in overeenstemming met hun respectieve steunprogramma’s.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.1',
            'description' => 'De economische groei per capita in stand houden in overeenstemming met de nationale omstandigheden en, in het bijzonder, minstens 7% aangroei van het bruto binnenlands product per jaar in de minst ontwikkelde landen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.2',
            'description' => 'Tot meer economische productiviteit komen door diversificatie, technologische modernisatie en innovatie, ook door de klemtoon te leggen op sectoren met hoge toegevoegde waarde en arbeidsintensieve sectoren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.3',
            'description' => 'Bevorderen van op ontwikkeling toegespitste beleidslijnen die productieve activiteiten ondersteunen, alsook de creatie van waardige jobs, ondernemerschap, creativiteit en innovatie, en de formalisering en de groei aanmoedigen van micro-, kleine en middelgrote ondernemingen, ook via toegang tot financiële diensten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.4',
            'description' => 'Tegen 2030 geleidelijk aan de wereldwijde efficiëntie, productie en consumptie van hulpbronnen verbeteren en streven naar de ontkoppeling van economische groei en achteruitgang van het milieu, volgens het 10-jarig Programmakader voor Duurzame Consumptie en Productie, waarbij de ontwikkelde landen de leiding nemen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.5',
            'description' => 'Tegen 2030 komen tot een volledige en productieve tewerkstelling en waardig werk voor alle vrouwen en mannen, ook voor jonge mensen en personen met een handicap, alsook een gelijk loon voor werk van gelijke waarde.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.6',
            'description' => 'Tegen 2020 het aandeel aanzienlijk terugschroeven van jongeren die niet aan het werk zijn, geen onderwijs volgen en niet met een opleiding bezig zijn.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.7',
            'description' => 'Onmiddellijke en effectieve maatregelen nemen om gedwongen arbeid uit de wereld te helpen, een einde te maken aan moderne slavernij en mensensmokkel en het verbod en de afschaffing van de ergste vormen van kinderarbeid veiligstellen, met inbegrip van het rekruteren en inzetten van kindsoldaten, en tegen 2025 een einde stellen aan kinderarbeid in al haar vormen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.8',
            'description' => 'De arbeidsrechten beschermen en veilige en gezonde werkomgevingen bevorderen voor alle werknemers, met inbegrip van migrantenarbeiders, in het bijzonder vrouwelijke migranten, en zij die zich in precaire werkomstandigheden bevinden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.9',
            'description' => 'Tegen 2030 beleidslijnen uitwerken en implementeren ter ondersteuning van het duurzaam toerisme dat jobs creëert en plaatselijke cultuur en producten bevordert.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.10',
            'description' => 'Versterken van de mogelijkheden van de plaatselijke financiële instellingen om toegang tot het bankwezen, de verzekeringen en financiële diensten voor allen aan te moedigen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.A',
            'description' => 'Verhogen van de Aid for Trade voor ontwikkelingslanden, in het bijzonder de minst ontwikkelde landen, ook via het verbeterde geïntegreerde kader voor handelsgerelateerde bijstand aan de minst ontwikkelde landen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '8',
            'name' => '8.B',
            'description' => 'Tegen 2020 een globale strategie voor jongerentewerkstelling ontwikkelen en die operationeel maken en het Globale Jobs-pact van de Internationale Arbeidsorganisatie implementeren.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.1',
            'description' => 'Ontwikkelen van kwalitatieve, betrouwbare, duurzame en veerkrachtige infrastructuur, met inbegrip van regionale en grensoverschrijdende infrastructuur, ter ondersteuning van de economische ontwikkeling en het menselijk welzijn, met klemtoon op een betaalbare en billijke toegang voor iedereen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.2',
            'description' => 'Bevorderen van inclusieve en duurzame industrialisering en, tegen 2030, het aandeel in de werkgelegenheid en het bruto binnenlands product van de industrie aanzienlijk doen toenemen, in overeenstemming met de nationale omstandigheden, en dat aandeel verdubbelen in de minst ontwikkelde landen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.3',
            'description' => 'De toegang vergroten van kleinschalige industriële en andere ondernemingen, in het bijzonder in de ontwikkelingslanden, tot financiële diensten, inclusief betaalbare kredietverlening, alsook hun integratie in waardeketens en markten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.4',
            'description' => 'Tegen 2030 de infrastructuur moderniseren en industrieën aanpassen om hen duurzaam te maken, waarbij de focus ligt op een grotere doeltreffendheid bij het gebruik van hulpbronnen en van schonere en milieuvriendelijke technologieën en industriële processen, waarbij alle landen de nodige actie ondernemen volgens hun eigen respectieve mogelijkheden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.5',
            'description' => 'Verbeteren van het wetenschappelijk onderzoek, moderniseren van de technologische capaciteiten van industriesectoren in alle landen, in het bijzonder in ontwikkelingslanden, waarbij ook tegen 2030 innovatie wordt aangemoedigd en op aanzienlijke wijze het aantal onderzoeks- en ontwikkelingswerkers per miljoen inwoners wordt verhoogd en waarbij ook meer wordt uitgegeven aan publiek en privaat onderzoek en ontwikkeling.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.A',
            'description' => 'De duurzame en veerkrachtige ontwikkeling van infrastructuur mogelijk maken in ontwikkelingslanden aan de hand van extra financiële, technologische en technische steun aan Afrikaanse landen, de minst ontwikkelde landen, de door land ingesloten ontwikkelingslanden en de kleine eilandstaten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.B',
            'description' => 'Ondersteunen van de binnenlandse technologische ontwikkeling, onderzoek en innovatie in ontwikkelingslanden, ook door een gunstig beleidsklimaat te garanderen voor, onder andere, industriële diversificatie en waardetoevoeging aan handelsproducten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '9',
            'name' => '9.C',
            'description' => 'In aanzienlijke mate de toegang verhogen tot informatie- en communicatietechnologie en streven naar het verschaffen van universele en betaalbare toegang tot internet in de minst ontwikkelde landen tegen 2020.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.1',
            'description' => 'Tegen 2030 geleidelijk tot een inkomenstoename van de onderste 40% van de bevolking komen tegen een ritme dat hoger ligt dan het nationale gemiddelde, en die toename ook in stand houden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.2',
            'description' => 'Tegen 2030 de sociale, economische en politieke inclusie van iedereen mogelijk maken en bevorderen, ongeacht leeftijd, geslacht, handicap, ras, etniciteit, herkomst, godsdienst of economische of andere status.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.3',
            'description' => 'Gelijke kansen verzekeren en ongelijkheden wegwerken, ook door het afvoeren van discriminerende wetten, beleidslijnen en praktijken en door het bevorderen van de geschikte wetgeving, beleidslijnen en acties in dit opzicht.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.4',
            'description' => 'Beleid voeren dat geleidelijk tot een grotere gelijkheid leidt, in het bijzonder inzake fiscaliteit, lonen en sociale bescherming.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.5',
            'description' => 'De regulering en monitoring verbeteren van de globale financiële markten en instellingen en de implementatie versterken van dergelijke reguleringen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.6',
            'description' => 'Een verbeterde vertegenwoordiging verzekeren en een beter gehoor geven aan de ontwikkelingslanden bij de besluitvorming in mondiale, internationale economische en financiële instellingen om te komen tot meer doeltreffende, geloofwaardige, verantwoordelijke en legitieme instellingen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.7',
            'description' => 'Een ordelijke, veilige, regelmatige en verantwoordelijke migratie en mobiliteit van mensen mogelijk maken, ook via de implementatie van geplande en degelijk beheerde migratiebeleidslijnen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.A',
            'description' => 'Het beginsel implementeren van speciale en gedifferentieerde behandeling voor ontwikkelingslanden, in het bijzonder de minst ontwikkelde landen, in overeenstemming met de overeenkomsten van de Wereldhandels-organisatie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.B',
            'description' => 'Officiële ontwikkelingsbijstand en financiële stromen aanmoedigen, met inbegrip van directe buitenlandse investeringen, voor staten waar de behoefte het grootst is, in het bijzonder in de minst ontwikkelde landen, de Afrikaanse landen, de kleine eilandstaten en de door land ingesloten ontwikkelingslanden, in overeenstemming met hun nationale plannen en programma’s.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '10',
            'name' => '10.C',
            'description' => 'Tegen 2030 de transactiekosten van overschrijvingen van migranten reduceren tot minder dan 3% en transfer vanuit landen met kosten hoger dan 5% elimineren.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.1',
            'description' => 'Tegen 2030 voor iedereen toegang voorzien tot adequate, veilige en betaalbare huisvesting en basisdiensten, en sloppenwijken verbeteren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.2',
            'description' => 'Tegen 2030 toegang voorzien tot veilige, betaalbare, toegankelijke en duurzame vervoerssystemen voor iedereen, waarbij de verkeersveiligheid verbeterd wordt, met name door het openbaar vervoer uit te breiden, met aandacht voor de behoeften van mensen in kwetsbare situaties, vrouwen, kinderen, personen met een handicap en ouderen'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.3',
            'description' => 'Tegen 2030 inclusieve en duurzame stadsontwikkeling en capaciteit opbouwen voor participatieve, geïntegreerde en duurzame planning en beheer van menselijke nederzettingen in alle landen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.4',
            'description' => 'De inspanningen verhogen om het culturele en natuurlijke erfgoed van de wereld te beschermen en veilig te stellen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.5',
            'description' => 'Tegen 2030 het aantal doden en getroffenen aanzienlijk verminderen en in aanzienlijke mate de rechtstreekse economische impact op het bruto binnenlands product terugschroeven dat veroorzaakt wordt door rampen, met inbegrip van rampen die met water verband houden, waarbij de klemtoon ligt op het beschermen van de armen en van mensen in kwetsbare situaties.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.6',
            'description' => 'Tegen 2030 de nadelige milieu-impact van steden per capita reduceren, ook door bijzondere aandacht te besteden aan de luchtkwaliteit en aan het gemeentelijk en ander afvalbeheer.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.7',
            'description' => 'Tegen 2030 universele toegang voorzien tot veilige, inclusieve en toegankelijke, groene en openbare ruimtes, in het bijzonder voor vrouwen en kinderen, ouderen en personen met een handicap.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.A',
            'description' => 'Positieve economische, sociale en ecologische verbanden ondersteunen tussen stedelijke, voorstedelijke en landelijke gebieden door de nationale en regionale ontwikkelingsplanning te versterken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.B',
            'description' => 'Tegen 2020 het aantal steden en menselijke nederzettingen aanzienlijk verhogen die geïntegreerde beleidslijnen en plannen goedkeuren en implementeren inzake inclusie, doeltreffendheid van hulpbronnengebruik, mitigatie en adaptatie aan klimaatverandering, weerbaarheid tegen rampen, en in overeenstemming met het kader van Sendai voor rampenrisicovermindering 2015-2030 een holistisch ramprisicobeheer ontwikkelen en implementeren op alle niveaus.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '11',
            'name' => '11.C',
            'description' => 'De minst ontwikkelde landen steunen, ook via financiële en technische bijstand, in het opbouwen van duurzame en veerkrachtige gebouwen waarbij gebruik wordt gemaakt van lokale materialen.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.1',
            'description' => 'Het 10-jarig Programmakader inzake Duurzame Consumptie- en Productiepatronen implementeren, waarbij alle landen actie ondernemen, en waarbij de ontwikkelde landen de leiding nemen, rekening houdend met de ontwikkeling en de mogelijkheden van de ontwikkelingslanden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.2',
            'description' => 'Tegen 2030 het duurzame beheer en het efficiënte gebruik van natuurlijke hulpbronnen realiseren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.3',
            'description' => 'Tegen 2030 de voedselverspilling in winkels en bij consumenten per capita halveren en voedselverlies reduceren in de productie- en bevoorradingsketens, met inbegrip van verliezen na de oogst.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.4',
            'description' => 'Tegen 2020 komen tot een vanuit milieuvriendelijk beheer van chemicaliën en van alle afval gedurende hun hele levenscyclus, in overeenstemming met afgesproken nationale kaderovereenkomsten, en de uitstoot aanzienlijk beperken in lucht, water en bodem om hun negatieve invloeden op de menselijke gezondheid en het milieu zoveel mogelijk te beperken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.5',
            'description' => 'Tegen 2030 de afvalproductie aanzienlijk beperken via preventie, vermindering, recyclage en hergebruik.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.6',
            'description' => 'Bedrijven aanmoedigen, in het bijzonder grote en transnationale bedrijven, om duurzame praktijken aan te nemen en duurzaamheidsinformatie te integreren in hun rapporteringscyclus.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.7',
            'description' => 'Duurzame praktijken bij overheidsopdrachten bevorderen in overeenstemming met nationale beleidslijnen en prioriteiten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.8',
            'description' => 'Tegen 2030 garanderen dat mensen overal beschikken over relevantie informatie over en zich bewust zijn van duurzame ontwikkeling en levensstijlen die in harmonie zijn met de natuur.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.A',
            'description' => 'Ondersteunen van ontwikkelingslanden ter versterking van hun wetenschappelijke en technologische mogelijkheden om de richting uit te gaan van meer duurzame consumptie- en productiepatronen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.B',
            'description' => 'Ontwikkelen en implementeren van instrumenten om de impact te monitoren van duurzame ontwikkeling op duurzaam toerisme dat werkgelegenheid creëert en de plaatselijke cultuur en producten promoot.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '12',
            'name' => '12.C',
            'description' => 'Inefficiënte subsidies voor fossiele brandstoffen die afval producerende consumptie aanmoedigen rationaliseren, door storende marktinvloeden uit de wereld te helpen, in overeenstemming met de nationale omstandigheden, ook door het belastingsysteem te herstructureren en deze schadelijke subsidies te laten uitdoven, waar deze bestaan, waarbij rekening wordt gehouden met de specifieke noden en omstandigheden in de ontwikkelingslanden en waarbij de mogelijke negatieve invloeden worden geminimaliseerd op hun ontwikkeling op een manier die de armen en de getroffen gemeenschappen beschermt.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '13',
            'name' => '13.1',
            'description' => 'De veerkracht en het aanpassingsvermogen versterken van met klimaat in verband te brengen gevaren en natuurrampen in alle landen.

'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '13',
            'name' => '13.2',
            'description' => 'Maatregelen inzake klimaatverandering integreren in nationale beleidslijnen, strategieën en planning.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '13',
            'name' => '13.3',
            'description' => 'De opvoeding, bewustwording en de menselijke en institutionele capaciteit verbeteren met betrekking tot mitigatie, adaptatie, impactvermindering en vroegtijdige waarschuwing inzake klimaatverandering.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '13',
            'name' => '13.A',
            'description' => 'De verbintenis  uitvoeren die door de ontwikkelde landen in het kader van het Raamverdrag van de Verenigde Naties inzake Klimaatverandering genomen werd omtrent de doelstelling om tegen 2020 gezamenlijk jaarlijks $ 100 miljard bijeen te brengen uit allerlei bronnen, om tegemoet te komen aan de behoeften van de ontwikkelingslanden in de context van aanzienlijke mitigatieacties en van transparantie inzake implementatie, en om door deze kapitalisatie het Groene Klimaatfonds zo snel mogelijk volledig operationeel te maken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '13',
            'name' => '13.B',
            'description' => 'Mechanismen promoten om de capaciteit te vergroten in het kader van doeltreffende aan klimaatverandering gekoppelde planning en beheer in de minst ontwikkelde landen en de kleine eilandstaten, waarbij ook wordt gefocust op vrouwen, jongeren en lokale en gemarginaliseerde gemeenschappen.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.1',
            'description' => 'Tegen 2025 de vervuiling van de zee voorkomen en in aanzienlijke mate verminderen, in het bijzonder als gevolg van activiteiten op het land, met inbegrip van vervuiling door ronddrijvend afval en voedingsstoffen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.2',
            'description' => 'Tegen 2020 op een duurzame manier zee- en kustecosystemen beheren en beschermen om aanzienlijke negatieve gevolgen te vermijden, ook door het versterken van hun veerkracht, en actie ondernemen om deze te herstellen en om te komen tot gezonde en productieve oceanen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.3',
            'description' => 'De impact van de verzuring van de oceanen minimaliseren en aanpakken, ook via verhoogde wetenschappelijke samenwerking op alle niveaus.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.4',
            'description' => 'Tegen 2020 op een doeltreffende manier de visvangst reguleren en een einde maken aan overbevissing, aan illegale, niet-aangegeven en ongereguleerde visserij en aan destructieve visserijpraktijken, en op wetenschap gebaseerde beheerplannen implementeren, om de visvoorraden zo snel mogelijk te herstellen, op zijn minst op niveaus die een maximale duurzame opbrengst kunnen garanderen zoals bepaald door hun biologische kenmerken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.5',
            'description' => 'Tegen 2020 minstens 10% van de kust- en zeegebieden behouden, in overeenstemming met het nationale en internationale recht en gebaseerd op de beste beschikbare wetenschappelijke informatie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.6',
            'description' => 'Tegen 2020 bepaalde vormen van visserijsubsidies afschaffen die bijdragen tot overcapaciteit en overbevissing, komaf maken met subsidies die bijdragen tot illegale, niet-aangegeven en ongereguleerde visserij en geen nieuwe vergelijkbare subsidies invoeren, erkennen dat een passende en doeltreffende speciale en gedifferentieerde behandeling van de ontwikkelingslanden en van de minst ontwikkelde landen integraal deel zou moeten uitmaken van de onderhandelingen inzake visserijsubsidies van de Wereldhandelsorganisatie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.7',
            'description' => 'Tegen 2030 de economische voordelen vergroten voor kleine eilandstaten en voor de minst ontwikkelde landen van het duurzaam gebruik van mariene rijkdommen, ook via het duurzaam beheer van visserij, aquacultuur en toerisme.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.A',
            'description' => 'De wetenschappelijke kennis vergroten, onderzoekscapaciteit ontwikkelen en mariene technologie overdragen, waarbij rekening wordt gehouden met de criteria en richtlijnen van de Intergouvernementele Oceanografische Commissie inzake de overdracht van mariene technologie, om de gezondheid van de oceaan te verbeteren en de bijdrage te verruimen van de mariene biodiversiteit tot de ontwikkeling van ontwikkelingslanden, in het bijzonder kleine eilandstaten en de minst ontwikkelde landen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.B',
            'description' => 'Toegang verschaffen aan kleinschalige ambachtelijke vissers tot mariene hulpbronnen en markten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '14',
            'name' => '14.C',
            'description' => 'Het behoud en het duurzaam gebruik van oceanen en hulpbronnen versterken door het implementeren van internationaal recht zoals dat wordt weerspiegeld in het VN-Zeerechtverdrag, dat een wettelijk kader voorziet voor het behoud en het duurzaam gebruik van oceanen en hun hulpbronnen, zoals ook wordt vermeld in paragraaf 158 van ‘De toekomst die wij willen’.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.1',
            'description' => 'Tegen 2020 het behoud, herstel en het duurzaam gebruik van terrestrische en inlandse zoetwaterecosystemen en hun diensten waarborgen, in het bijzonder bossen, moeraslanden, bergen en droge gebieden, in lijn met de verplichtingen van de internationale overeenkomsten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.2',
            'description' => 'Tegen 2020 de implementatie bevorderen van het duurzaam beheer van alle soorten bossen, de ontbossing een halt toeroepen, verloederde bossen herstellen en op duurzame manier bebossing en herbebossing mondiaal opvoeren.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.3',
            'description' => 'Tegen 2030 de woestijnvorming tegengaan, aangetast land en gedegradeerde bodem herstellen, ook land dat wordt aangetast door woestijnvorming, droogte en overstromingen, en streven naar een wereld die qua landdegradatie neutraal is.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.4',
            'description' => 'Tegen 2030 het behoud garanderen van de ecosystemen in de bergen, met inbegrip van hun biodiversiteit, om hun vermogen te versterken voordelen te genereren die essentieel zijn voor duurzame ontwikkeling.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.5',
            'description' => 'Dringende en doortastende actie ondernemen om de aftakeling in te perken van natuurlijke leefgebieden, het verlies van biodiversiteit een halt toe te roepen en, tegen 2020, de met uitsterven bedreigde soorten te beschermen en hun uitsterven te voorkomen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.6',
            'description' => 'Bevorderen van het eerlijk en billijk verdelen van de voordelen die voortvloeien uit het gebruik van genetische hulpbronnen en bevorderen van gepaste toegang tot dergelijke hulpbronnen, zoals internationaal overeengekomen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.7',
            'description' => 'Dringend actie ondernemen om een einde te maken aan stroperij en de handel in beschermde planten- en diersoorten en zowel de vraag naar als het aanbod van illegale producten afkomstig van deze planten- en diersoorten aan te pakken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.8',
            'description' => 'Tegen 2020 maatregelen invoeren om de invoering van invasieve uitheemse soorten in land- en waterecosystemen te beperken en hun impact op aanzienlijke wijze te beperken, en de prioritaire soorten controleren of uitroeien.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.9',
            'description' => 'Tegen 2020 ecosysteem- en biodiversiteitswaarden integreren in nationale en plaatselijke planning, ontwikkelingsprocessen, strategieën en plannen inzake armoedebestrijding.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.A',
            'description' => 'Financiële hulpbronnen mobiliseren en aanzienlijk verhogen vanuit allerlei bronnen om de biodiversiteit en de ecosystemen te vrijwaren en op duurzame wijze te gebruiken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.B',
            'description' => 'Aanzienlijke middelen mobiliseren vanuit allerlei bronnen en op alle niveaus om duurzaam bosbeheer te financieren en gepaste stimuli te verschaffen aan ontwikkelingslanden om een dergelijk beheer te organiseren, ook voor behoud en herbebossing.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '15',
            'name' => '15.C',
            'description' => 'De wereldwijde inspanningen ter bestrijding van stroperij en illegale handel in beschermde diersoorten opvoeren, ook door verhoging van de capaciteit van plaatselijke gemeenschappen in hun streven naar kansen inzake een duurzaam bestaan.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.1',
            'description' => 'Alle vormen van geweld en de daaraan gekoppelde sterftecijfers wereldwijd aanzienlijk terugschroeven.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.2',
            'description' => 'Een einde maken aan het misbruik, de exploitatie, de handel en van alle vormen van geweld tegen en het martelen van kinderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.3',
            'description' => 'De rechtsregels bevorderen op nationaal en internationaal niveau en gelijke toegang tot het rechtssysteem voor iedereen garanderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.4',
            'description' => 'Tegen 2030 ongewettigde financiële en wapenstromen aanzienlijk indijken, het herstel en de teruggave van gestolen goederen versterken en alle vormen van georganiseerde misdaad bestrijden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.5',
            'description' => 'Op duurzame wijze komaf maken met corruptie en omkoperij in al hun vormen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.6',
            'description' => 'Doeltreffende, verantwoordelijke en transparante instellingen ontwikkelen op alle niveaus.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.7',
            'description' => 'Ontvankelijke, inclusieve, participatieve en representatieve besluitvorming op alle niveaus garanderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.8',
            'description' => 'Verruimen en versterken van de participatie van de ontwikkelingslanden in de instellingen van mondiaal bestuur.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.9',
            'description' => 'Tegen 2030 een wettelijke identiteit voorzien voor iedereen, met inbegrip van geboorteregistratie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.10',
            'description' => 'Publieke toegang tot informatie en beschermen van fundamentele vrijheden, volgens de nationale wetgeving en internationale overeenkomsten garanderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.A',
            'description' => 'Versterken van de relevante nationale instellingen, ook via internationale samenwerking, voor het opbouwen van capaciteit op alle niveaus, in het bijzonder in de ontwikkelingslanden, om geweld te voorkomen en terrorisme en misdaad te bestrijden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '16',
            'name' => '16.B',
            'description' => 'Bevorderen en afdwingen van niet-discriminerende wetten en beleidslijnen voor duurzame ontwikkeling.'
        ]);


        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.1',
            'description' => 'Versterken van de binnenlandse middelenmobilisatie (DRM), ook via internationale steun aan ontwikkelingslanden, om de binnenlandse capaciteit te verbeteren voor het innen van belastingen en andere inkomsten.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.2',
            'description' => 'Ontwikkelde landen dienen ten volle hun verbintenissen aangaande officiële ontwikkelingshulp te implementeren, waaronder ook de verbintenis van vele ontwikkelde landen om 0,7% van het bruto nationaal inkomen te besteden aan officiële ontwikkelingshulp voor ontwikkelingslanden (ODA/GNI) en 0,15% tot 0,20% ontwikkelingshulp aan de minst ontwikkelde landen; ODA-donoren worden aangemoedigd om voor zichzelf een doelstelling te bepalen om minstens 0,2% van de ODA te besteden aan de minst ontwikkelde landen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.3',
            'description' => 'Bijkomende financiële middelen voor ontwikkelingslanden mobiliseren vanuit verschillende bronnen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.4',
            'description' => 'Ontwikkelingslanden bijstaan in hun streven naar schuldhoudbaarheid op lange termijn via gecoördineerde beleidslijnen waarbij aandacht wordt besteed aan het aanmoedigen van de schuldfinanciering, de schuldverlichting en de schuldherstructurering, indien van toepassing, en de externe schuld aanpakken van arme landen met een grote schuldenlast om hun schuldencrisis in te perken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.5',
            'description' => 'Regelingen goedkeuren en uitvoeren die investeringen in de minst ontwikkelde landen moeten bevorderen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.6',
            'description' => 'Versterken van de Noord-Zuid-, de Zuid-Zuid- en de regionale en internationale trilaterale samenwerking inzake wetenschap, technologie en innovatie en vergemakkelijken van de toegang daartoe; en het delen van kennis uitbreiden volgens voorwaarden die wederzijds worden bepaald, ook via de verbeterde coördinatie tussen bestaande mechanismen, in het bijzonder op het niveau van de Verenigde Naties, en via een mondiaal mechanisme voor de facilitering van technologie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.7',
            'description' => 'De ontwikkeling, overdracht, verspreiding en verdeling van ecologische technologieën aan ontwikkelingslanden volgens gunstige voorwaarden, ook inzake gunstige en preferentiële bepalingen, zoals wederzijds overeengekomen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.8',
            'description' => 'De technologiebank en het mechanisme voor het opbouwen van wetenschappelijke, technologische en innoverende capaciteit voor de minst ontwikkelde landen volledig operationeel maken tegen 2017 en het gebruik opdrijven van de technologie die dit mogelijk moet maken, in het bijzonder de informatie- en communicatietechnologie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.9',
            'description' => 'De internationale steun verhogen voor het implementeren van doeltreffende en doelgerichte capaciteitsopbouw in ontwikkelingslanden ter ondersteuning van nationale plannen die erop gericht zijn om alle Duurzame Ontwikkelingsdoelstellingen te implementeren, ook via de Noord-Zuid-, Zuid-Zuid- en trilaterale samenwerking.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.10',
            'description' => 'Een universeel, op regels gebaseerd, open, niet-discriminerend en billijk multilateraal handelssysteem bevorderen onder de Wereldhandelsorganisatie ook via het volbrengen van de onderhandelingen onder de Ontwikkelingsagenda van Doha van deze organisatie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.11',
            'description' => 'De export van ontwikkelingslanden aanzienlijk doen toenemen, in het bijzonder met de bedoeling om het aandeel van de minst ontwikkelde landen in de mondiale export tegen 2020 te verdubbelen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.12',
            'description' => 'Tijdig de implementatie realiseren van belasting- en quotavrije markttoegang op blijvende wijze voor alle minst ontwikkelde landen, in overeenstemming met de beslissingen van de Wereldhandelsorganisatie ook door ervoor te zorgen dat de voorkeursregels die van oorsprong van toepassing zijn op import van de minst ontwikkelde landen, transparant en eenvoudig zijn en bijdragen tot het vergemakkelijken van markttoegang.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.13',
            'description' => 'De globale macro-economische stabiliteit versterken, ook via beleidscoördinatie en beleidscoherentie.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.14',
            'description' => 'Beleidscoherentie voor duurzame ontwikkeling versterken.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.15',
            'description' => 'De beleidsruimte en het leiderschap van elke land respecteren om beleidslijnen uit te werken en om duurzame ontwikkeling te implementeren om een einde te maken aan armoede.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.16',
            'description' => 'Het Globaal Partnerschap voor duurzame ontwikkeling versterken, aangevuld door partnerschappen met meerdere belanghebbenden (multi-stakeholderpartnerschappen) en kennis, expertise, technologie en financiële hulpmiddelen mobiliseren en delen met het oog op het bereiken van de Duurzame Ontwikkelingsdoelstellingen in alle landen, in het bijzonder in de ontwikkelingslanden.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.17',
            'description' => 'Doeltreffende openbare, publiek-private en maatschappelijke partnerschappen aanmoedigen en bevorderen, voortbouwend op de ervaring en het netwerk van partnerschappen.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.18',
            'description' => 'Tegen 2020 de steun voor capaciteitsopbouw verhogen aan ontwikkelingslanden, inclusief de minst ontwikkelde landen en de kleine eilandstaten, om de beschikbaarheid van hoogwaardige, actuele en betrouwbare gegevens opgedeeld naar inkomen, gender, leeftijd, ras, etnische afkomst, migratiestatus, handicap, geografische locatie en andere kenmerken relevant in een nationale context, aanzienlijk op te drijven.'
        ]);

        DB::table('subgoals')->insert([
            'goal_id' => '17',
            'name' => '17.19',
            'description' => 'Tegen 2030 voortbouwen op bestaande initiatieven om metingen te ontwikkelen met betrekking tot de vooruitgang van duurzame ontwikkeling die kunnen dienen als aanvulling op het bruto binnenlands product, en de statistische capaciteitsopbouw ondersteunen in ontwikkelingslanden.'
        ]);
    }
}
