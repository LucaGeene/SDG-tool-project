<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds with the Educations of the HZ.
     * All non full-time educations are commented.
     *
     * @return void
     */
    public function run()
    {

        DB::table('education')->insert([
            'name' => 'Bedrijfskunde',
            'description' => 'Met jouw kennis op het gebied van economie, management en recht los je bedrijfskundige vraagstukken makkelijk op na de opleiding  Bedrijfskunde.',
            'url' => 'https://hz.nl/opleidingen/bedrijfskunde'
        ]);
        DB::table('education')->insert([
            'name' => 'Bouwkunde',
            'description' => 'Wil jij leren hoe gebouwen worden ontworpen en gebouwd? Kies dan voor de opleiding Bouwkunde aan de HZ.',
            'url' => 'https://hz.nl/opleidingen/bouwkunde'
        ]);
        DB::table('education')->insert([
            'name' => 'Chemie',
            'description' => 'Chemie is experimenteren, onderzoeken en analyseren. Zorg ervoor dat ziektes niet meer levensbedreigend zijn of los moordzaken op met DNA-analyse. Help jij straks de wereld vooruit?',
            'url' => 'https://hz.nl/opleidingen/chemie'
        ]);
        DB::table('education')->insert([
            'name' => 'Civiele Techniek',
            'description' => 'Wil jij bruggen, havens, dijken of sluizen bouwen? Met de opleiding Civiele Techniek word je opgeleid tot een technisch expert in de weg- en waterbouw.',
            'url' => 'https://hz.nl/opleidingen/civiele-techniek'
        ]);
        DB::table('education')->insert([
            'name' => 'Commerciële Economie',
            'description' => 'Als commercieel econoom weet je hoe je iets moet verkopen. Je bent commercieel ingesteld en weet hoe je jouw idee zo aantrekkelijk mogelijk nationaal en intenationaal in de markt zet.',
            'url' => 'https://hz.nl/opleidingen/commerciele-economie'
        ]);
        DB::table('education')->insert([
            'name' => 'Communicatie',
            'description' => 'Ben je graag creatief bezig met tekst, beeld en video? En wil je alles weten over hoe je mensen het beste bereikt met jouw boodschap? Dan is de opleiding Communicatie iets voor jou!',
            'url' => 'https://hz.nl/opleidingen/communicatie'
        ]);
        DB::table('education')->insert([
            'name' => 'Engineering',
            'description' => 'Alles om je heen is ontwikkeld dankzij Engineering. Ontwerp jij straks toepassingen of apparaten voor thuis, de zorg of de industrie die het leven en werken makkelijker maken?',
            'url' => 'https://hz.nl/opleidingen/engineering'
        ]);
        DB::table('education')->insert([
            'name' => 'Finance & Control (Bedrijfseconomie)',
            'description' => 'Als bedrijfseconoom weet je precies wat er gebeurt op financieel gebied binnen jouw organisatie.',
            'url' => 'https://hz.nl/opleidingen/finance-control'
        ]);
        DB::table('education')->insert([
            'name' => 'Global Project and Change Management [NIEUW]',
            'description' => 'Raken de thema’s vitaliteit, voeding, energie en water jou? En wil jij graag bijdragen aan een duurzame wereld? De bachelor Global Project &amp; Change Management biedt jou een internationale uitdaging.',
            'url' => 'https://hz.nl/opleidingen/global-project-change-management'
        ]);
        DB::table('education')->insert([
            'name' => 'HBO-ICT',
            'description' => 'Een serie kijken op Netflix, een Tikkie sturen, even whatsappen of inchecken met je OV-kaart? Allemaal mogelijk dankzij ICT!',
            'url' => 'https://hz.nl/opleidingen/hbo-ict'
        ]);
        DB::table('education')->insert([
            'name' => 'Human Resource Management',
            'description' => "Werk is voor veel mensen een belangrijk onderdeel van hun leven. Als HRM'er begeleid je mensen bij alle aspecten van hun loopbaan.",
            'url' => 'https://hz.nl/opleidingen/human-resource-management'
        ]);
        DB::table('education')->insert([
            'name' => 'International Business',
            'description' => 'Droom je van een internationale carrière in het bedrijfsleven? Met  de Engelstalige opleiding International Business aan de HZ doe je niet alleen uitgebreide internationale ervaring op, maar bouw je ook een sterk netwerk op.',
            'url' => 'https://hz.nl/opleidingen/international-business'
        ]);
        DB::table('education')->insert([
            'name' => 'Leraar Basisonderwijs',
            'description' => 'De leerkracht is belangrijk voor de ontwikkeling van een kind. Wat kinderen met jou in de les leren, vormt de basis voor de rest van hun leven. Sta jij straks als juf of meester voor de klas?',
            'url' => 'https://hz.nl/opleidingen/leraar-basisonderwijs'
        ]);
        DB::table('education')->insert([
            'name' => 'Logistics Engineering',
            'description' => 'Bij de opleiding Logistics Engineering leer je alles over alle vormen logistiek, of het nou gaat om mensen of distributie. Ga jij straks  wereldwijd aan de slag?',
            'url' => 'https://hz.nl/opleidingen/logistics-engineering'
        ]);
        DB::table('education')->insert([
            'name' => 'Maritiem Officier',
            'description' => 'Als Maritiem Officier is de haven of de zee jouw thuis. Je vindt werken met schepen fantastisch. Ben jij die zeeman of vrouw? Kies dan voor de opleiding Maritiem Officier.',
            'url' => 'https://hz.nl/opleidingen/maritiem-officier'
        ]);
        DB::table('education')->insert([
            'name' => 'Pedagogiek',
            'description' => 'Geef jij graag advies en wil je werken met kinderen en hun opvoeders? Als pedagoog verdiep je je in alles wat te maken heeft met de opvoeding en ontwikkeling van kinderen en jongeren.',
            'url' => 'https://hz.nl/opleidingen/pedagogiek'
        ]);
        DB::table('education')->insert([
            'name' => 'Social Work',
            'description' => 'Je wilt graag iets voor mensen betekenen en hebt een sterk inlevingsvermogen. Als mensen hulp of steun nodig hebben weten ze jou te vinden. Herken jij jezelf? Kies voor Social Work.',
            'url' => 'https://hz.nl/opleidingen/social-work-voltijd'
        ]);
        DB::table('education')->insert([
            'name' => 'Sportkunde',
            'description' => 'Ben jij een sportief type en wil je van je passie je werk maken? Sportkunde leidt je op tot die sportprofessional, die straks alles weet over sport en beweging en dit op anderen over brengt.',
            'url' => 'https://hz.nl/opleidingen/sportkunde'
        ]);
        DB::table('education')->insert([
            'name' => 'Technische Bedrijfskunde',
            'description' => 'Tijdens de Engelstalige opleiding Technische Bedrijfskunde leer je techniek, management en economie zo in te zetten dat je in staat bent productieprocessen te verbeteren of organisaties winstgevend of milieuvriendelijker te maken.',
            'url' => 'https://hz.nl/opleidingen/technische-bedrijfskunde'
        ]);
        DB::table('education')->insert([
            'name' => 'Tourism Management',
            'description' => 'Ontdek je graag nieuwe bestemmingen en culturen en spreken vrije tijd, een gezonde levensstijl, reizen en gastvrijheid je aan? Kies dan voor de Engelstalige opleiding Tourism Management en ontwikkel jezelf in de toeristische- en hospitality sector.',
            'url' => 'https://hz.nl/opleidingen/tourism-management'
        ]);
        DB::table('education')->insert([
            'name' => 'Verpleegkunde (HBO-V)',
            'description' => 'Als verpleegkundige werk je met veel mensen van jong tot oud en van ziek tot gezond. Wil jij hen de best mogelijke zorg verlenen? Kies dan voor de opleiding Verpleegkunde (HBO-V).',
            'url' => 'https://hz.nl/opleidingen/verpleegkunde'
        ]);
        DB::table('education')->insert([
            'name' => 'Verpleegkunde & Verloskunde',
            'description' => 'Je werkt graag met mensen, van jong tot oud. Je ziet jezelf zowel als verpleegkundige en verloskundige aan de slag gaan. Kies dan voor de combi-opleiding Verpleegkunde & Verloskunde.',
            'url' => 'https://hz.nl/opleidingen/verpleegkunde-vroedkunde'
        ]);
        DB::table('education')->insert([
            'name' => 'Watermanagement',
            'description' => 'Zorg jij ervoor dat we overal ter wereld droge voeten houden, zonder dat we het milieu uit het oog verliezen?  Bij de opleiding Watermanagement kies je een track die bij jou past: Aquatische Ecotechnologie, Delta Management of Spatial Planning & Design!',
            'url' => 'https://hz.nl/opleidingen/watermanagement'
        ]);
    }
}
