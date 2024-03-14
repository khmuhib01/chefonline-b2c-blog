<?php
if (!function_exists('getCountry')) {
    function getCountry()
    {
        $countries = [
            "AF" => "Afghanistan",
            "AL" => "Albania",
            "DZ" => "Algeria",
            "AS" => "American Samoa",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguilla",
            "AQ" => "Antarctica",
            "AG" => "Antigua and Barbuda",
            "AR" => "Argentina",
            "AM" => "Armenia",
            "AW" => "Aruba",
            "AU" => "Australia",
            "AT" => "Austria",
            "AZ" => "Azerbaijan",
            "BS" => "Bahamas",
            "BH" => "Bahrain",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BY" => "Belarus",
            "BE" => "Belgium",
            "BZ" => "Belize",
            "BJ" => "Benin",
            "BM" => "Bermuda",
            "BT" => "Bhutan",
            "BO" => "Bolivia",
            "BA" => "Bosnia and Herzegovina",
            "BW" => "Botswana",
            "BV" => "Bouvet Island",
            "BR" => "Brazil",
            "IO" => "British Indian Ocean Territory",
            "BN" => "Brunei Darussalam",
            "BG" => "Bulgaria",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "KH" => "Cambodia",
            "CM" => "Cameroon",
            "CA" => "Canada",
            "CV" => "Cape Verde",
            "KY" => "Cayman Islands",
            "CF" => "Central African Republic",
            "TD" => "Chad",
            "CL" => "Chile",
            "CN" => "China",
            "CX" => "Christmas Island",
            "CC" => "Cocos (Keeling) Islands",
            "CO" => "Colombia",
            "KM" => "Comoros",
            "CG" => "Congo",
            "CD" => "Congo, the Democratic Republic of the",
            "CK" => "Cook Islands",
            "CR" => "Costa Rica",
            "CI" => "Cote D'Ivoire",
            "HR" => "Croatia",
            "CU" => "Cuba",
            "CY" => "Cyprus",
            "CZ" => "Czech Republic",
            "DK" => "Denmark",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "DO" => "Dominican Republic",
            "EC" => "Ecuador",
            "EG" => "Egypt",
            "SV" => "El Salvador",
            "GQ" => "Equatorial Guinea",
            "ER" => "Eritrea",
            "EE" => "Estonia",
            "ET" => "Ethiopia",
            "FK" => "Falkland Islands (Malvinas)",
            "FO" => "Faroe Islands",
            "FJ" => "Fiji",
            "FI" => "Finland",
            "FR" => "France",
            "GF" => "French Guiana",
            "PF" => "French Polynesia",
            "TF" => "French Southern Territories",
            "GA" => "Gabon",
            "GM" => "Gambia",
            "GE" => "Georgia",
            "DE" => "Germany",
            "GH" => "Ghana",
            "GI" => "Gibraltar",
            "GR" => "Greece",
            "GL" => "Greenland",
            "GD" => "Grenada",
            "GP" => "Guadeloupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GN" => "Guinea",
            "GW" => "Guinea-Bissau",
            "GY" => "Guyana",
            "HT" => "Haiti",
            "HM" => "Heard Island and Mcdonald Islands",
            "VA" => "Holy See (Vatican City State)",
            "HN" => "Honduras",
            "HK" => "Hong Kong",
            "HU" => "Hungary",
            "IS" => "Iceland",
            "IN" => "India",
            "ID" => "Indonesia",
            "IR" => "Iran, Islamic Republic of",
            "IQ" => "Iraq",
            "IE" => "Ireland",
            "IL" => "Israel",
            "IT" => "Italy",
            "JM" => "Jamaica",
            "JP" => "Japan",
            "JO" => "Jordan",
            "KZ" => "Kazakhstan",
            "KE" => "Kenya",
            "KI" => "Kiribati",
            "KP" => "Korea, Democratic People's Republic of",
            "KR" => "Korea, Republic of",
            "KW" => "Kuwait",
            "KG" => "Kyrgyzstan",
            "LA" => "Lao People's Democratic Republic",
            "LV" => "Latvia",
            "LB" => "Lebanon",
            "LS" => "Lesotho",
            "LR" => "Liberia",
            "LY" => "Libyan Arab Jamahiriya",
            "LI" => "Liechtenstein",
            "LT" => "Lithuania",
            "LU" => "Luxembourg",
            "MO" => "Macao",
            "MK" => "Macedonia, the Former Yugoslav Republic of",
            "MG" => "Madagascar",
            "MW" => "Malawi",
            "MY" => "Malaysia",
            "MV" => "Maldives",
            "ML" => "Mali",
            "MT" => "Malta",
            "MH" => "Marshall Islands",
            "MQ" => "Martinique",
            "MR" => "Mauritania",
            "MU" => "Mauritius",
            "YT" => "Mayotte",
            "MX" => "Mexico",
            "FM" => "Micronesia, Federated States of",
            "MD" => "Moldova, Republic of",
            "MC" => "Monaco",
            "MN" => "Mongolia",
            "MS" => "Montserrat",
            "MA" => "Morocco",
            "MZ" => "Mozambique",
            "MM" => "Myanmar",
            "NA" => "Namibia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NL" => "Netherlands",
            "AN" => "Netherlands Antilles",
            "NC" => "New Caledonia",
            "NZ" => "New Zealand",
            "NI" => "Nicaragua",
            "NE" => "Niger",
            "NG" => "Nigeria",
            "NU" => "Niue",
            "NF" => "Norfolk Island",
            "MP" => "Northern Mariana Islands",
            "NO" => "Norway",
            "OM" => "Oman",
            "PK" => "Pakistan",
            "PW" => "Palau",
            "PS" => "Palestinian Territory, Occupied",
            "PA" => "Panama",
            "PG" => "Papua New Guinea",
            "PY" => "Paraguay",
            "PE" => "Peru",
            "PH" => "Philippines",
            "PN" => "Pitcairn",
            "PL" => "Poland",
            "PT" => "Portugal",
            "PR" => "Puerto Rico",
            "QA" => "Qatar",
            "RE" => "Reunion",
            "RO" => "Romania",
            "RU" => "Russian Federation",
            "RW" => "Rwanda",
            "SH" => "Saint Helena",
            "KN" => "Saint Kitts and Nevis",
            "LC" => "Saint Lucia",
            "PM" => "Saint Pierre and Miquelon",
            "VC" => "Saint Vincent and the Grenadines",
            "WS" => "Samoa",
            "SM" => "San Marino",
            "ST" => "Sao Tome and Principe",
            "SA" => "Saudi Arabia",
            "SN" => "Senegal",
            "CS" => "Serbia and Montenegro",
            "SC" => "Seychelles",
            "SL" => "Sierra Leone",
            "SG" => "Singapore",
            "SK" => "Slovakia",
            "SI" => "Slovenia",
            "SB" => "Solomon Islands",
            "SO" => "Somalia",
            "ZA" => "South Africa",
            "GS" => "South Georgia and the South Sandwich Islands",
            "ES" => "Spain",
            "LK" => "Sri Lanka",
            "SD" => "Sudan",
            "SR" => "Suriname",
            "SJ" => "Svalbard and Jan Mayen",
            "SZ" => "Swaziland",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "SY" => "Syrian Arab Republic",
            "TW" => "Taiwan, Province of China",
            "TJ" => "Tajikistan",
            "TZ" => "Tanzania, United Republic of",
            "TH" => "Thailand",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trinidad and Tobago",
            "TN" => "Tunisia",
            "TR" => "Turkey",
            "TM" => "Turkmenistan",
            "TC" => "Turks and Caicos Islands",
            "TV" => "Tuvalu",
            "UG" => "Uganda",
            "UA" => "Ukraine",
            "AE" => "United Arab Emirates",
            "GB" => "United Kingdom",
            "US" => "United States",
            "UM" => "United States Minor Outlying Islands",
            "UY" => "Uruguay",
            "UZ" => "Uzbekistan",
            "VU" => "Vanuatu",
            "VE" => "Venezuela",
            "VN" => "Viet Nam",
            "VG" => "Virgin Islands, British",
            "VI" => "Virgin Islands, U.s.",
            "WF" => "Wallis and Futuna",
            "EH" => "Western Sahara",
            "YE" => "Yemen",
            "ZM" => "Zambia",
            "ZW" => "Zimbabwe"
        ];
        return $countries;
    }
}

if (!function_exists('getDistricts')) {
    function getDistricts()
    {
        $districts = [
            ['name' => 'Comilla','bn_name' => 'কুমিল্লা'],
            ['name' => 'Feni','bn_name' => 'ফেনী',],
            ['name' => 'Brahmanbaria','bn_name' => 'ব্রাহ্মণবাড়িয়া'],
            ['name' => 'Rangamati','bn_name' => 'রাঙ্গামাটি'],
            ['name' => 'Noakhali','bn_name' => 'নোয়াখালী'],
            ['name' => 'Chandpur','bn_name' => 'চাঁদপুর'],
            ['name' => 'Lakshmipur','bn_name' => 'লক্ষ্মীপুর'],
            ['name' => 'Chattogram','bn_name' => 'চট্টগ্রাম'],
            ['name' => 'Coxsbazar','bn_name' => 'কক্সবাজার'],
            ['name' => 'Khagrachhari','bn_name' => 'খাগড়াছড়ি'],
            ['name' => 'Bandarban','bn_name' => 'বান্দরবান'],
            ['name' => 'Sirajganj','bn_name' => 'সিরাজগঞ্জ'],
            ['name' => 'Pabna','bn_name' => 'পাবনা'],
            ['name' => 'Bogura','bn_name' => 'বগুড়া'],
            ['name' => 'Rajshahi','bn_name' => 'রাজশাহী'],
            ['name' => 'Natore','bn_name' => 'নাটোর'],
            ['name' => 'Joypurhat','bn_name' => 'জয়পুরহাট'],
            ['name' => 'Chapainawabganj','bn_name' => 'চাঁপাইনবাবগঞ্জ'],
            ['name' => 'Naogaon','bn_name' => 'নওগাঁ'],
            ['name' => 'Jashore','bn_name' => 'যশোর'],
            ['name' => 'Satkhira','bn_name' => 'সাতক্ষীরা'],
            ['name' => 'Meherpur','bn_name' => 'মেহেরপুর'],
            ['name' => 'Narail','bn_name' => 'নড়াইল'],
            ['name' => 'Chuadanga','bn_name' => 'চুয়াডাঙ্গা'],
            ['name' => 'Kushtia','bn_name' => 'কুষ্টিয়া'],
            ['name' => 'Magura','bn_name' => 'মাগুরা'],
            ['name' => 'Khulna','bn_name' => 'খুলনা'],
            ['name' => 'Bagerhat','bn_name' => 'বাগেরহাট'],
            ['name' => 'Jhenaidah','bn_name' => 'ঝিনাইদহ'],
            ['name' => 'Jhalakathi','bn_name' => 'ঝালকাঠি'],
            ['name' => 'Patuakhali','bn_name' => 'পটুয়াখালী'],
            ['name' => 'Pirojpur','bn_name' => 'পিরোজপুর'],
            ['name' => 'Barisal','bn_name' => 'বরিশাল'],
            ['name' => 'Bhola','bn_name' => 'ভোলা'],
            ['name' => 'Barguna','bn_name' => 'বরগুনা'],
            ['division_id' => '5','name' => 'Sylhet','bn_name' => 'সিলেট'],
            ['name' => 'Moulvibazar','bn_name' => 'মৌলভীবাজার'],
            ['name' => 'Habiganj','bn_name' => 'হবিগঞ্জ'],
            ['name' => 'Sunamganj','bn_name' => 'সুনামগঞ্জ'],
            ['name' => 'Narsingdi','bn_name' => 'নরসিংদী'],
            ['name' => 'Gazipur','bn_name' => 'গাজীপুর'],
            ['name' => 'Shariatpur','bn_name' => 'শরীয়তপুর'],
            ['name' => 'Narayanganj','bn_name' => 'নারায়ণগঞ্জ'],
            ['name' => 'Tangail','bn_name' => 'টাঙ্গাইল'],
            ['name' => 'Kishoreganj','bn_name' => 'কিশোরগঞ্জ'],
            ['name' => 'Manikganj','bn_name' => 'মানিকগঞ্জ'],
            ['name' => 'Dhaka','bn_name' => 'ঢাকা'],
            ['name' => 'Munshiganj','bn_name' => 'মুন্সিগঞ্জ'],
            ['name' => 'Rajbari','bn_name' => 'রাজবাড়ী'],
            ['name' => 'Madaripur','bn_name' => 'মাদারীপুর'],
            ['name' => 'Gopalganj','bn_name' => 'গোপালগঞ্জ'],
            ['name' => 'Faridpur','bn_name' => 'ফরিদপুর'],
            ['name' => 'Panchagarh','bn_name' => 'পঞ্চগড়'],
            ['name' => 'Dinajpur','bn_name' => 'দিনাজপুর'],
            ['name' => 'Lalmonirhat','bn_name' => 'লালমনিরহাট'],
            ['name' => 'Nilphamari','bn_name' => 'নীলফামারী'],
            ['name' => 'Gaibandha','bn_name' => 'গাইবান্ধা'],
            ['name' => 'Thakurgaon','bn_name' => 'ঠাকুরগাঁও'],
            ['name' => 'Rangpur','bn_name' => 'রংপুর'],
            ['name' => 'Kurigram','bn_name' => 'কুড়িগ্রাম'],
            ['name' => 'Sherpur','bn_name' => 'শেরপুর'],
            ['name' => 'Mymensingh','bn_name' => 'ময়মনসিংহ'],
            ['name' => 'Jamalpur','bn_name' => 'জামালপুর'],
            ['name' => 'Netrokona','bn_name' => 'নেত্রকোণা']
        ];
        return $districts;
    }
}

if (!function_exists('getCategories')) {
    function getCategories()
    {
        $getCategories = \App\Models\admin\Categorie::where('status', '1')->get();
        return $getCategories;
    }
}

if (!function_exists('getSideBarCategories')) {
    function getSideBarCategories()
    {
        $getCategories = \App\Models\admin\Categorie::where('status', '1')->orderBy('sort')->get();
        return $getCategories;
    }
}

if (!function_exists('getRecentPosts')) {
    function getRecentPosts()
    {
        $getRecentPosts = \App\Models\admin\PostContent::where('status', 'publish')->orderBy('id','desc')->limit(5)->get();
        return $getRecentPosts;
    }
}

if (!function_exists('getRecentRandomPosts')) {
    function getRecentRandomPosts()
    {
        $getRecentRandomPosts = \App\Models\admin\PostContent::where('status', 'publish')->inRandomOrder()->limit(4)->get();
        return $getRecentRandomPosts;
    }
}

if (!function_exists('getCategoryName')) {
    function getCategoryName($cat_id)
    {
        $response = \App\Models\admin\Categorie::select('name')->where(['status' => '1', 'id' => $cat_id])->first();
        $cat_name = 'uncategorized';
        if (isset($response)) {
            $cat_name = $response->name;
        }
        return $cat_name;
    }
}