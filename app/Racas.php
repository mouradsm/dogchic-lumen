<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Racas extends Model
{
    protected static $racas =   [
        'Affenpinscher',
        'Afghan Hound',
        'Airedale Terrier',
        'Akita',
        'Akita Americano',
        'American Pit Bull Terrier',
        'American Staffordshire Terrier',
        'Australian Shepherd',
        'Basenji',
        'Basset Fulvo da Bretanha',
        'Basset Hound',
        'Beagle',
        'Beagle-Harrier',
        'Bearded Collie',
        'Bedlington Terrier',
        'Bernese Mountain Dog',
        'Bichon Bolonhês',
        'Bichon Frisé',
        'Bichon Havanês',
        'Boerboel',
        'Boiadeiro de Entlebuch',
        'Border Collie',
        'Border Terrier',
        'Borzoi',
        'Boston Terrier',
        'Bouvier de Flandres',
        'Boxer',
        'Braco Alemão Pelo Curto',
        'Braco Alemão Pelo Duro',
        'Braco Italiano',
        'Buldogue Americano',
        'Buldogue Francês',
        'Buldogue Inglês',
        'Bull Terrier',
        'Bullmastiff',
        'Cairn Terrier',
        'Cane Corso',
        'Cão de Crista Chinês',
        'Cão de Santo Humberto',
        'Cão D’água Espanhol',
        'Cão D’água Português',
        'Cão Lobo Checoslovaco',
        'Cão Pelado Mexicano',
        'Cão Pelado Peruano',
        'Cavalier King Charles Spaniel',
        'Cesky Terrier',
        'Chesapeake Bay Retriever',
        'Chihuahua',
        'Chin',
        'Chow-chow Pelo Curto',
        'Chow-chow Pelo Longo',
        'Cirneco do Etna',
        'Clumber Spaniel',
        'Cocker Spaniel Americano',
        'Cocker Spaniel Inglês',
        'Collie pelo longo',
        'Coton de Tulear',
        'Dachshund Teckel - Pelo Curto',
        'Dálmata',
        'Dandie Dinmont Terrier',
        'Dobermann',
        'Dogo Argentino',
        'Dogo Canário',
        'Dogue Alemão',
        'Dogue de Bordeaux',
        'Elkhound Norueguês Cinza',
        'Fila Brasileiro',
        'Flat-Coated Retriever',
        'Fox Terrier Pelo Duro',
        'Fox Terrier Pelo Liso',
        'Foxhound Inglês',
        'Galgo Espanhol',
        'Golden Retriever',
        'Grande Münsterländer',
        'Greyhound',
        'Griffon Belga',
        'Griffon de Bruxelas',
        'Husky Siberiano',
        'Ibizan Hound',
        'Irish Soft Coated Wheaten Terrier',
        'Irish Wolfhound',
        'Jack Russell Terrier',
        'Kerry Blue Terrier',
        'Komondor',
        'Kuvasz',
        'Labrador Retriever',
        'Lagotto Romagnolo',
        'Lakeland Terrier',
        'Leonberger',
        'Lhasa Apso',
        'Malamute do Alasca',
        'Maltês',
        'Mastiff',
        'Mastim Espanhol',
        'Mastino Napoletano',
        'Mudi',
        'Nordic Spitz',
        'Norfolk Terrier',
        'Norwich Terrier',
        'Old English Sheepdog',
        'Papillon',
        'Parson Russell Terrier',
        'Pastor Alemão',
        'Pastor Beauceron',
        'Pastor Belga',
        'Pastor Bergamasco',
        'Pastor Branco Suíço',
        'Pastor Briard',
        'Pastor da Ásia Central',
        'Pastor de Shetland',
        'Pastor dos Pirineus',
        'Pastor Maremano Abruzês',
        'Pastor Polonês',
        'Pastor Polonês da Planície',
        'Pequeno Basset Griffon da Vendéia',
        'Pequeno Cão Leão',
        'Pequeno Lebrel Italiano',
        'Pequinês',
        'Perdigueiro Português',
        'Petit Brabançon',
        'Pharaoh Hound',
        'Pinscher Miniatura',
        'Podengo Canário',
        'Podengo Português',
        'Pointer Inglês',
        'Poodle Anão',
        'Poodle Médio',
        'Poodle Standard',
        'Poodle Toy',
        'Pug',
        'Puli',
        'Pumi',
        'Rhodesian Ridgeback',
        'Rottweiler',
        'Saluki',
        'Samoieda',
        'São Bernardo',
        'Schipperke',
        'Schnauzer',
        'Schnauzer Gigante',
        'Schnauzer Miniatura',
        'Scottish Terrier',
        'Sealyham Terrier',
        'Setter Gordon',
        'Setter Inglês',
        'Setter Irlandês Vermelho',
        'Setter Irlandês Vermelho e Branco',
        'Shar-pei',
        'Shiba',
        'Shih-Tzu',
        'Silky Terrier Australiano',
        'Skye Terrier',
        'Smoushond Holandês',
        'Spaniel Bretão',
        'Spinone Italiano',
        'Spitz Alemão Anão',
        'Spitz Finlandês',
        'Spitz Japonês Anão',
        'Springer Spaniel Inglês',
        'Stabyhoun',
        'Staffordshire Bull Terrier',
        'Terra Nova',
        'Terrier Alemão de caça Jagd',
        'Terrier Brasileiro',
        'Terrier Irlandês de Glen do Imaal',
        'Terrier Preto da Rússia',
        'Tibetan Terrier',
        'Tosa Inu',
        'Vira-Latas',
        'Vizsla',
        'Volpino Italiano',
        'Weimaraner',
        'Welsh Corgi Cardigan',
        'Welsh Corgi Pembroke',
        'Welsh Springer Spaniel',
        'Welsh Terrier',
        'West Highland White Terrier',
        'Whippet',
        'Yorkshire Terrier'
    ];


    /*public static function all(array $columns = array())
    {
        return static::$racas;

    }*/

    public static function getRaca($index){
        return static::$racas[$index];
    }
}