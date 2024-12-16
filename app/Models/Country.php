<?php

namespace App\Models;

class Country {
  public static function all() {
    return collect(self::$countries);
  }

  public static function findByCode(string $code) {
    return collect(self::$countries)->firstWhere('code', $code);
  }

  public static function findByName(string $name) {
    return collect(self::$countries)->firstWhere('name', $name);
  }

  protected static $countries = [
    ['code' => 'AFG', 'name' => 'Afeganistão'],
    ['code' => 'ZAF', 'name' => 'África do Sul'],
    ['code' => 'ALB', 'name' => 'Albânia'],
    ['code' => 'DEU', 'name' => 'Alemanha'],
    ['code' => 'AND', 'name' => 'Andorra'],
    ['code' => 'AGO', 'name' => 'Angola'],
    ['code' => 'AIA', 'name' => 'Anguila'],
    ['code' => 'ATA', 'name' => 'Antártica'],
    ['code' => 'ATG', 'name' => 'Antígua e Barbuda'],
    ['code' => 'SAU', 'name' => 'Arábia Saudita'],
    ['code' => 'DZA', 'name' => 'Argélia'],
    ['code' => 'ARG', 'name' => 'Argentina'],
    ['code' => 'ARM', 'name' => 'Armênia'],
    ['code' => 'ABW', 'name' => 'Aruba'],
    ['code' => 'AUS', 'name' => 'Austrália'],
    ['code' => 'AUT', 'name' => 'Áustria'],
    ['code' => 'AZE', 'name' => 'Azerbaijão'],
    ['code' => 'BHS', 'name' => 'Bahamas'],
    ['code' => 'BHR', 'name' => 'Bahrein'],
    ['code' => 'BGD', 'name' => 'Bangladesh'],
    ['code' => 'BRB', 'name' => 'Barbados'],
    ['code' => 'BLR', 'name' => 'Belarus'],
    ['code' => 'BEL', 'name' => 'Bélgica'],
    ['code' => 'BLZ', 'name' => 'Belize'],
    ['code' => 'BEN', 'name' => 'Benin'],
    ['code' => 'BMU', 'name' => 'Bermudas'],
    ['code' => 'BOL', 'name' => 'Bolívia'],
    ['code' => 'BIH', 'name' => 'Bósnia e Herzegovina'],
    ['code' => 'BWA', 'name' => 'Botsuana'],
    ['code' => 'BRA', 'name' => 'Brasil'],
    ['code' => 'BRN', 'name' => 'Brunei'],
    ['code' => 'BGR', 'name' => 'Bulgária'],
    ['code' => 'BFA', 'name' => 'Burkina Faso'],
    ['code' => 'BDI', 'name' => 'Burundi'],
    ['code' => 'BTN', 'name' => 'Butão'],
    ['code' => 'CPV', 'name' => 'Cabo Verde'],
    ['code' => 'CMR', 'name' => 'Camarões'],
    ['code' => 'KHM', 'name' => 'Camboja'],
    ['code' => 'CAN', 'name' => 'Canadá'],
    ['code' => 'KAZ', 'name' => 'Cazaquistão'],
    ['code' => 'TCD', 'name' => 'Chade'],
    ['code' => 'CHL', 'name' => 'Chile'],
    ['code' => 'CHN', 'name' => 'China'],
    ['code' => 'CYP', 'name' => 'Chipre'],
    ['code' => 'VAT', 'name' => 'Cidade do Vaticano'],
    ['code' => 'SGP', 'name' => 'Cingapura'],
    ['code' => 'COL', 'name' => 'Colômbia'],
    ['code' => 'COM', 'name' => 'Comores'],
    ['code' => 'PRK', 'name' => 'Coréia do Norte'],
    ['code' => 'KOR', 'name' => 'Coréia do Sul'],
    ['code' => 'CIV', 'name' => 'Costa do Marfim'],
    ['code' => 'CRI', 'name' => 'Costa Rica'],
    ['code' => 'HRV', 'name' => 'Croácia'],
    ['code' => 'CUB', 'name' => 'Cuba'],
    ['code' => 'CUW', 'name' => 'Curaçao'],
    ['code' => 'DNK', 'name' => 'Dinamarca'],
    ['code' => 'DJI', 'name' => 'Djibouti'],
    ['code' => 'DMA', 'name' => 'Dominica'],
    ['code' => 'EGY', 'name' => 'Egito'],
    ['code' => 'SLV', 'name' => 'El Salvador'],
    ['code' => 'ARE', 'name' => 'Emirados Árabes Unidos'],
    ['code' => 'ECU', 'name' => 'Equador'],
    ['code' => 'ERI', 'name' => 'Eritreia'],
    ['code' => 'SVK', 'name' => 'Eslováquia'],
    ['code' => 'SVN', 'name' => 'Eslovênia'],
    ['code' => 'ESP', 'name' => 'Espanha'],
    ['code' => 'FSM', 'name' => 'Estados Federados da Micronésia'],
    ['code' => 'USA', 'name' => 'Estados Unidos da América'],
    ['code' => 'EST', 'name' => 'Estônia'],
    ['code' => 'SWZ', 'name' => 'Eswatini'],
    ['code' => 'ETH', 'name' => 'Etiópia'],
    ['code' => 'FJI', 'name' => 'Fiji'],
    ['code' => 'PHL', 'name' => 'Filipinas'],
    ['code' => 'FIN', 'name' => 'Finlândia'],
    ['code' => 'FRA', 'name' => 'França'],
    ['code' => 'GAB', 'name' => 'Gabão'],
    ['code' => 'GMB', 'name' => 'Gâmbia'],
    ['code' => 'GHA', 'name' => 'Gana'],
    ['code' => 'GEO', 'name' => 'Geórgia'],
    ['code' => 'SGS', 'name' => 'Geórgia do Sul e as Ilhas Sandwich do Sul'],
    ['code' => 'GIB', 'name' => 'Gibraltar'],
    ['code' => 'GRC', 'name' => 'Grécia'],
    ['code' => 'GRD', 'name' => 'Grenada'],
    ['code' => 'GRL', 'name' => 'Groenlândia'],
    ['code' => 'GLP', 'name' => 'Guadalupe'],
    ['code' => 'GUM', 'name' => 'Guam'],
    ['code' => 'GTM', 'name' => 'Guatemala'],
    ['code' => 'GGY', 'name' => 'Guernsey'],
    ['code' => 'GUY', 'name' => 'Guiana'],
    ['code' => 'GUF', 'name' => 'Guiana Francesa'],
    ['code' => 'GIN', 'name' => 'Guiné'],
    ['code' => 'GNQ', 'name' => 'Guiné Equatorial'],
    ['code' => 'GNB', 'name' => 'Guiné-Bissau'],
    ['code' => 'HTI', 'name' => 'Haiti'],
    ['code' => 'HND', 'name' => 'Honduras'],
    ['code' => 'HKG', 'name' => 'Hong Kong'],
    ['code' => 'HUN', 'name' => 'Hungria'],
    ['code' => 'YEM', 'name' => 'Iêmen'],
    ['code' => 'BVT', 'name' => 'Ilha Bouvet'],
    ['code' => 'REU', 'name' => 'Ilha da Reunião'],
    ['code' => 'IMN', 'name' => 'Ilha de Man'],
    ['code' => 'CXR', 'name' => 'Ilha de Natal'],
    ['code' => 'NFK', 'name' => 'Ilha Norfolk'],
    ['code' => 'ALA', 'name' => 'Ilhas Åland'],
    ['code' => 'CYM', 'name' => 'Ilhas Cayman'],
    ['code' => 'CCK', 'name' => 'Ilhas Cocos'],
    ['code' => 'COK', 'name' => 'Ilhas Cook'],
    ['code' => 'FRO', 'name' => 'Ilhas Faroe'],
    ['code' => 'FLK', 'name' => 'Ilhas Malvinas'],
    ['code' => 'MNP', 'name' => 'Ilhas Marianas do Norte'],
    ['code' => 'MHL', 'name' => 'Ilhas Marshall'],
    ['code' => 'UMI', 'name' => 'Ilhas Menores Distantes dos Estados Unidos'],
    ['code' => 'PCN', 'name' => 'Ilhas Pitcairn'],
    ['code' => 'SLB', 'name' => 'Ilhas Salomão'],
    ['code' => 'TCA', 'name' => 'Ilhas Turcas e Caicos'],
    ['code' => 'VGB', 'name' => 'Ilhas Virgens (Reino Unido)'],
    ['code' => 'VIR', 'name' => 'Ilhas Virgens dos Estados Unidos'],
    ['code' => 'IND', 'name' => 'Índia'],
    ['code' => 'IDN', 'name' => 'Indonésia'],
    ['code' => 'IRN', 'name' => 'Irã'],
    ['code' => 'IRQ', 'name' => 'Iraque'],
    ['code' => 'IRL', 'name' => 'Irlanda'],
    ['code' => 'ISL', 'name' => 'Islândia'],
    ['code' => 'ISR', 'name' => 'Israel'],
    ['code' => 'ITA', 'name' => 'Itália'],
    ['code' => 'JAM', 'name' => 'Jamaica'],
    ['code' => 'JPN', 'name' => 'Japão'],
    ['code' => 'JEY', 'name' => 'Jersey'],
    ['code' => 'JOR', 'name' => 'Jordânia'],
    ['code' => 'KIR', 'name' => 'Kiribati'],
    ['code' => 'XXK', 'name' => 'Kosovo'],
    ['code' => 'KWT', 'name' => 'Kuwait'],
    ['code' => 'LAO', 'name' => 'Laos'],
    ['code' => 'LSO', 'name' => 'Lesotho'],
    ['code' => 'LVA', 'name' => 'Letônia'],
    ['code' => 'LBN', 'name' => 'Líbano'],
    ['code' => 'LBR', 'name' => 'Libéria'],
    ['code' => 'LBY', 'name' => 'Líbia'],
    ['code' => 'LIE', 'name' => 'Liechtenstein'],
    ['code' => 'LTU', 'name' => 'Lituânia'],
    ['code' => 'LUX', 'name' => 'Luxemburgo'],
    ['code' => 'MAC', 'name' => 'Macau'],
    ['code' => 'MDG', 'name' => 'Madagascar'],
    ['code' => 'MYS', 'name' => 'Malásia'],
    ['code' => 'MWI', 'name' => 'Malauí'],
    ['code' => 'MDV', 'name' => 'Maldivas'],
    ['code' => 'MLI', 'name' => 'Mali'],
    ['code' => 'MLT', 'name' => 'Malta'],
    ['code' => 'MAR', 'name' => 'Marrocos'],
    ['code' => 'MTQ', 'name' => 'Martinica'],
    ['code' => 'MUS', 'name' => 'Maurício'],
    ['code' => 'MRT', 'name' => 'Mauritânia'],
    ['code' => 'MYT', 'name' => 'Mayotte'],
    ['code' => 'MEX', 'name' => 'México'],
    ['code' => 'MMR', 'name' => 'Mianmar'],
    ['code' => 'MOZ', 'name' => 'Moçambique'],
    ['code' => 'MDA', 'name' => 'Moldávia'],
    ['code' => 'MNG', 'name' => 'Mongólia'],
    ['code' => 'MNE', 'name' => 'Montenegro'],
    ['code' => 'MSR', 'name' => 'Montserrat'],
    ['code' => 'NAM', 'name' => 'Namíbia'],
    ['code' => 'NRU', 'name' => 'Nauru'],
    ['code' => 'NPL', 'name' => 'Nepal'],
    ['code' => 'NIC', 'name' => 'Nicarágua'],
    ['code' => 'NER', 'name' => 'Níger'],
    ['code' => 'NGA', 'name' => 'Nigéria'],
    ['code' => 'NIU', 'name' => 'Niue'],
    ['code' => 'MKD', 'name' => 'Norte da Macedônia'],
    ['code' => 'NOR', 'name' => 'Noruega'],
    ['code' => 'NCL', 'name' => 'Nova Caledônia'],
    ['code' => 'NZL', 'name' => 'Nova Zelândia'],
    ['code' => 'OMN', 'name' => 'Omã'],
    ['code' => 'HMD', 'name' => 'Ouvido e Ilhas McDonald'],
    ['code' => 'NLD', 'name' => 'Países Baixos'],
    ['code' => 'BES', 'name' => 'Países Baixos Caribenhos'],
    ['code' => 'PLW', 'name' => 'Palau'],
    ['code' => 'PSE', 'name' => 'Palestina'],
    ['code' => 'PAN', 'name' => 'Panamá'],
    ['code' => 'PNG', 'name' => 'Papua Nova Guiné'],
    ['code' => 'PAK', 'name' => 'Paquistão'],
    ['code' => 'PRY', 'name' => 'Paraguai'],
    ['code' => 'PER', 'name' => 'Peru'],
    ['code' => 'PYF', 'name' => 'Polinésia Francesa'],
    ['code' => 'POL', 'name' => 'Polônia'],
    ['code' => 'PRI', 'name' => 'Porto Rico'],
    ['code' => 'PRT', 'name' => 'Portugal'],
    ['code' => 'MCO', 'name' => 'Principado de Mônaco'],
    ['code' => 'QAT', 'name' => 'Qatar'],
    ['code' => 'KEN', 'name' => 'Quênia'],
    ['code' => 'KGZ', 'name' => 'Quirguizistão'],
    ['code' => 'GBR', 'name' => 'Reino Unido'],
    ['code' => 'CAF', 'name' => 'República Centro-Africana'],
    ['code' => 'COD', 'name' => 'República Democrática do Congo'],
    ['code' => 'COG', 'name' => 'República do Congo'],
    ['code' => 'DOM', 'name' => 'República Dominicana'],
    ['code' => 'ROU', 'name' => 'Romênia'],
    ['code' => 'RWA', 'name' => 'Ruanda'],
    ['code' => 'RUS', 'name' => 'Rússia'],
    ['code' => 'ESH', 'name' => 'Saara Ocidental'],
    ['code' => 'WSM', 'name' => 'Samoa'],
    ['code' => 'ASM', 'name' => 'Samoa Americana'],
    ['code' => 'SHN', 'name' => 'Santa Helena, Ascensão e Tristão da Cunha'],
    ['code' => 'LCA', 'name' => 'Santa Lúcia'],
    ['code' => 'BLM', 'name' => 'Santo Bartolomeu'],
    ['code' => 'SMR', 'name' => 'São Marino'],
    ['code' => 'MAF', 'name' => 'São Martinho'],
    ['code' => 'SPM', 'name' => 'São Pedro e Miquelon'],
    ['code' => 'STP', 'name' => 'São Tomé e Príncipe'],
    ['code' => 'VCT', 'name' => 'São Vicente e as Granadinas'],
    ['code' => 'SEN', 'name' => 'Senegal'],
    ['code' => 'SLE', 'name' => 'Serra Leoa'],
    ['code' => 'SRB', 'name' => 'Sérvia'],
    ['code' => 'SYC', 'name' => 'Seychelles'],
    ['code' => 'SXM', 'name' => 'Sint Maarten'],
    ['code' => 'SYR', 'name' => 'Síria'],
    ['code' => 'SOM', 'name' => 'Somália'],
    ['code' => 'LKA', 'name' => 'Sri Lanka'],
    ['code' => 'KNA', 'name' => 'St. Kitts e Nevis'],
    ['code' => 'SDN', 'name' => 'Sudão'],
    ['code' => 'SSD', 'name' => 'Sudão do Sul'],
    ['code' => 'SWE', 'name' => 'Suécia'],
    ['code' => 'CHE', 'name' => 'Suíça'],
    ['code' => 'SUR', 'name' => 'Suriname'],
    ['code' => 'SJM', 'name' => 'Svalbard e Jan Mayen'],
    ['code' => 'THA', 'name' => 'Tailândia'],
    ['code' => 'TWN', 'name' => 'Taiwan'],
    ['code' => 'TJK', 'name' => 'Tajiquistão'],
    ['code' => 'TZA', 'name' => 'Tanzânia'],
    ['code' => 'CZE', 'name' => 'Tcheca'],
    ['code' => 'IOT', 'name' => 'Território Britânico do Oceano Índico'],
    ['code' => 'ATF', 'name' => 'Territórios Franceses do Sul e Antártico'],
    ['code' => 'TLS', 'name' => 'Timor Leste'],
    ['code' => 'TGO', 'name' => 'Togo'],
    ['code' => 'TKL', 'name' => 'Tokelau'],
    ['code' => 'TON', 'name' => 'Tonga'],
    ['code' => 'TTO', 'name' => 'Trinidad e Tobago'],
    ['code' => 'TUN', 'name' => 'Tunísia'],
    ['code' => 'TKM', 'name' => 'Turcomenistão'],
    ['code' => 'TUR', 'name' => 'Turquia'],
    ['code' => 'TUV', 'name' => 'Tuvalu'],
    ['code' => 'UKR', 'name' => 'Ucrânia'],
    ['code' => 'UGA', 'name' => 'Uganda'],
    ['code' => 'URY', 'name' => 'Uruguai'],
    ['code' => 'UZB', 'name' => 'Uzbequistão'],
    ['code' => 'VUT', 'name' => 'Vanuatu'],
    ['code' => 'VEN', 'name' => 'Venezuela'],
    ['code' => 'VNM', 'name' => 'Vietnã'],
    ['code' => 'WLF', 'name' => 'Wallis e Futuna'],
    ['code' => 'ZMB', 'name' => 'Zâmbia'],
    ['code' => 'ZWE', 'name' => 'Zimbábue']
  ];
}