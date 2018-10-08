
    <div id="form">
        <div class="background"></div>
        <div class="recommendation">
            <div class="head">
                <img src="tieng_taybannha/avata.png" alt="avatar" style="width: 80px;"/>
                <p>Hola, me llamo Thom</p>
            </div>
        </div>
        <div class="text">
            <p>
                Llevo más de 4 años trabajando en Luxury Travel como consultora de viajes.“Tenemos una sola vida por vivir”, entonces siempre aprecio y disfruto de cada pequeñita cosa que me la ha pasado bien en la vida. Me gusta viajar, escuchar todas las necesidades de los clientes, diseñar un recorrido maravilloso y acompañar con ellos durante el viaje.
            </p>
            <p>
                Por favor, rellene el siguiente formulario y le responderemos dentro de las 24 horas.
            </p>
        </div>
        <!--group-form-->
        <form class="container" method="post" action="control.php" id="submit_form">

            <div class="row">
                <div class="col-md-4">
                    <!--first_name-->
                    <div class="label">
                        <label for="first_name">Nombre completo</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <input type="text" id="first_name" name="first_name" required oninvalid="setCustomValidity('Apellido es obligatorio')" oninput="setCustomValidity('')">
                    </div>
                </div>

                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="email">Email</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Email no es en el formato correcto')" oninput="setCustomValidity('')">
                    </div>
                </div>

                <div class="clear-fix"></div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <!--telephone-->
                    <div class="label">
                        <label for="phone">Teléfono</label>
                        <p class="red">(*) (Te devolvemos la llamada gratis)</p>
                    </div>
                    <div class="input">
                        <input type="tel" id="phone" name="telephone" required oninvalid="setCustomValidity('Teléfono es obligatorio')" oninput="setCustomValidity('')">

                    </div>
                </div>
                <div class="col-md-4">

                    <!--nationality-->
                    <!--chua_lam-->
                    <div class="label">
                        <label for="nationality">Nacionalidad</label>

                    </div>
                    <div class="input">
                        <select  class="form-control bfh-countries custom_input" data-country="US" name="countries"></select>
                    </div>
                </div>

                <div class="col-md-4">
                    <!--last_name-->
                    <div class="label">
                        <label for="last_name">Fecha de nacimiento</label>
                    </div>
                    <div class="input">
                        <input type="text" class="last_name_unit" id="last_name1" name="last_name1" placeholder="Día" style="width: 25%;">
                        <input type="text" class="last_name_unit" id="last_name2" name="last_name2" placeholder="Mes" style="width: 25%;">
                        <input type="text" class="last_name_unit" id="last_name3" name="last_name3" placeholder="Año" style="width: 25%;">
                    </div>
                </div>

                <div class="clear-fix"></div>
            </div>
            <div class="margin15"></div>

            <div class=" row">

                <div class="input">
                    <!--destinations-->
                    <div class="item label">
                        <label for="destinations">Destinos</label>
                        <p class="red">(*)</p>
                    </div>
                    <!--1.vn-->
                    <div class="item">
                        <input type="checkbox" id="vietnam" value="vietnam" calss="softappver" name="destinations[]">
                        <label for="vietnam">Vietnam</label>
                    </div>

                    <!--2.cam-->
                    <div class="item">
                        <input type="checkbox" id="cambodia" value="cambodia" calss="softappver" name="destinations[]">
                        <label for="cambodia">Camboya</label>

                    </div>
                    <!--3.lao-->
                    <div class="item">
                        <input type="checkbox" id="laos" value="laos" calss="softappver" name="destinations[]">
                        <label for="laos">Laos</label>

                    </div>
                    <!--4.mya-->
                    <div class="item">
                        <input type="checkbox" id="myanmar" value="myanmar" calss="softappver" name="destinations[]">
                        <label for="myanmar">Myanmar</label>

                    </div>
                    <!--5.thai-->
                    <div class="item">
                        <input type="checkbox" id="thailand" value="thailand" calss="softappver" name="destinations[]">
                        <label for="thailand">Tailandia</label>

                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="duration">Duración del viaje</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <input type="text" id="duration"  placeholder="14 noches" name="duration" required oninvalid="setCustomValidity('Duración del viaje es obligatorio')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="departure">Fecha de llegada</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <div id="date_input" class="bfh-datepicker " data-format="y-m-d" data-date="today" data-name="date" required oninvalid="setCustomValidity('Fecha de llegada es obligatorio')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="flexible">¿Usted es flexible en la fecha?</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <select class="selectpicker" name="flexible">
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="row">
                <div class="col-md-9 ">
                    <div class="row">
                        <div class="col-md-4">
                            <!--email-->
                            <div class="label">
                                <label for="people">Número de pasajeros</label>
                                <p class="red">(*)</p>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="Adultos" id="people" name="adult" required oninvalid="setCustomValidity('Adulto es obligatorio')" oninput="validity.valid||(value='');" min="1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!--email-->
                            <div class="label">
                                <label >&nbsp;</label>
                                <p class="red"></p>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="Niños mayores de 12 años" name="children_above" min="0" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!--email-->
                            <div class="label">
                                <label>&nbsp;</label>
                                <p class="red"></p>
                            </div>
                            <div class="input">
                                <input type="number" placeholder="Niños menores de 12 años" name="children_below" min="0" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="travel">Estilo del viaje</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <select class="selectpicker" multiple name="travel_style[]" required oninvalid="setCustomValidity('Estilo del viaje es obligatorio')" onchange="setCustomValidity('')">
                            <option >Vacación en playa</option>
                            <option selected>Cultura</option>
                            <option >Historia</option>
                            <option >Con visitasmástípicas</option>
                            <option >Fuera de caminos trillados</option>
                            <option >Luna del miel</option>
                            <option selected>Naturaleza</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="accommodation">Categoría de alojamiento</label>
                        <p class="red">(*)</p>
                    </div>
                    <div class="input">
                        <select class="selectpicker" name="start">
                            <option>3 estrellas</option>
                            <option selected>4 estrellas</option>
                            <option>5 estrellas</option>
                            <option>de Lujo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--email-->
                    <div class="label">
                        <label for="budget">Presupuesto</label>
                        <p class="red"></p>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="USD por persona" name="budget">
                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="label">
                        <label for="holiday">Otras informaciones
                            (Lugares que prefiere conocer y actividades que quiere hacer, etc)</label>
                        <p class="red"></p>
                    </div>
                    <div class="input">
                        <textarea rows="6" placeholder=" Los lugares que quiere conocer, las actividades que quiere hacer…" id='holiday' name="holiday"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="cappcha" >
                    <div  class="form-group">
                        <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                        <div class="g-recaptcha" data-sitekey="6Le0-xsUAAAAAEXbN_NoWxbzyuLKmwpH1-rK-6TV"></div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="tour_src" name="tour_src" value=""/>
            <input type="hidden" id="tour_href" name="tour_href" value=""/>
            <input type="hidden" id="tour_text" name="tour_text" value=""/>
            <input type="hidden" id="last_name" name="last_name" value="">

            <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
            ?>
            <input type="hidden" id="country_code" name="country_code" value="<?php echo $details->geoplugin_countryCode;?>">
            <?php
            $countryArray = array(
                'AD'=>array('name'=>'ANDORRA','code'=>'376'),
                'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'),
                'AF'=>array('name'=>'AFGHANISTAN','code'=>'93'),
                'AG'=>array('name'=>'ANTIGUA AND BARBUDA','code'=>'1268'),
                'AI'=>array('name'=>'ANGUILLA','code'=>'1264'),
                'AL'=>array('name'=>'ALBANIA','code'=>'355'),
                'AM'=>array('name'=>'ARMENIA','code'=>'374'),
                'AN'=>array('name'=>'NETHERLANDS ANTILLES','code'=>'599'),
                'AO'=>array('name'=>'ANGOLA','code'=>'244'),
                'AQ'=>array('name'=>'ANTARCTICA','code'=>'672'),
                'AR'=>array('name'=>'ARGENTINA','code'=>'54'),
                'AS'=>array('name'=>'AMERICAN SAMOA','code'=>'1684'),
                'AT'=>array('name'=>'AUSTRIA','code'=>'43'),
                'AU'=>array('name'=>'AUSTRALIA','code'=>'61'),
                'AW'=>array('name'=>'ARUBA','code'=>'297'),
                'AZ'=>array('name'=>'AZERBAIJAN','code'=>'994'),
                'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','code'=>'387'),
                'BB'=>array('name'=>'BARBADOS','code'=>'1246'),
                'BD'=>array('name'=>'BANGLADESH','code'=>'880'),
                'BE'=>array('name'=>'BELGIUM','code'=>'32'),
                'BF'=>array('name'=>'BURKINA FASO','code'=>'226'),
                'BG'=>array('name'=>'BULGARIA','code'=>'359'),
                'BH'=>array('name'=>'BAHRAIN','code'=>'973'),
                'BI'=>array('name'=>'BURUNDI','code'=>'257'),
                'BJ'=>array('name'=>'BENIN','code'=>'229'),
                'BL'=>array('name'=>'SAINT BARTHELEMY','code'=>'590'),
                'BM'=>array('name'=>'BERMUDA','code'=>'1441'),
                'BN'=>array('name'=>'BRUNEI DARUSSALAM','code'=>'673'),
                'BO'=>array('name'=>'BOLIVIA','code'=>'591'),
                'BR'=>array('name'=>'BRAZIL','code'=>'55'),
                'BS'=>array('name'=>'BAHAMAS','code'=>'1242'),
                'BT'=>array('name'=>'BHUTAN','code'=>'975'),
                'BW'=>array('name'=>'BOTSWANA','code'=>'267'),
                'BY'=>array('name'=>'BELARUS','code'=>'375'),
                'BZ'=>array('name'=>'BELIZE','code'=>'501'),
                'CA'=>array('name'=>'CANADA','code'=>'1'),
                'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','code'=>'61'),
                'CD'=>array('name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE','code'=>'243'),
                'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','code'=>'236'),
                'CG'=>array('name'=>'CONGO','code'=>'242'),
                'CH'=>array('name'=>'SWITZERLAND','code'=>'41'),
                'CI'=>array('name'=>'COTE D IVOIRE','code'=>'225'),
                'CK'=>array('name'=>'COOK ISLANDS','code'=>'682'),
                'CL'=>array('name'=>'CHILE','code'=>'56'),
                'CM'=>array('name'=>'CAMEROON','code'=>'237'),
                'CN'=>array('name'=>'CHINA','code'=>'86'),
                'CO'=>array('name'=>'COLOMBIA','code'=>'57'),
                'CR'=>array('name'=>'COSTA RICA','code'=>'506'),
                'CU'=>array('name'=>'CUBA','code'=>'53'),
                'CV'=>array('name'=>'CAPE VERDE','code'=>'238'),
                'CX'=>array('name'=>'CHRISTMAS ISLAND','code'=>'61'),
                'CY'=>array('name'=>'CYPRUS','code'=>'357'),
                'CZ'=>array('name'=>'CZECH REPUBLIC','code'=>'420'),
                'DE'=>array('name'=>'GERMANY','code'=>'49'),
                'DJ'=>array('name'=>'DJIBOUTI','code'=>'253'),
                'DK'=>array('name'=>'DENMARK','code'=>'45'),
                'DM'=>array('name'=>'DOMINICA','code'=>'1767'),
                'DO'=>array('name'=>'DOMINICAN REPUBLIC','code'=>'1809'),
                'DZ'=>array('name'=>'ALGERIA','code'=>'213'),
                'EC'=>array('name'=>'ECUADOR','code'=>'593'),
                'EE'=>array('name'=>'ESTONIA','code'=>'372'),
                'EG'=>array('name'=>'EGYPT','code'=>'20'),
                'ER'=>array('name'=>'ERITREA','code'=>'291'),
                'ES'=>array('name'=>'SPAIN','code'=>'34'),
                'ET'=>array('name'=>'ETHIOPIA','code'=>'251'),
                'FI'=>array('name'=>'FINLAND','code'=>'358'),
                'FJ'=>array('name'=>'FIJI','code'=>'679'),
                'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','code'=>'500'),
                'FM'=>array('name'=>'MICRONESIA, FEDERATED STATES OF','code'=>'691'),
                'FO'=>array('name'=>'FAROE ISLANDS','code'=>'298'),
                'FR'=>array('name'=>'FRANCE','code'=>'33'),
                'GA'=>array('name'=>'GABON','code'=>'241'),
                'GB'=>array('name'=>'UNITED KINGDOM','code'=>'44'),
                'GD'=>array('name'=>'GRENADA','code'=>'1473'),
                'GE'=>array('name'=>'GEORGIA','code'=>'995'),
                'GH'=>array('name'=>'GHANA','code'=>'233'),
                'GI'=>array('name'=>'GIBRALTAR','code'=>'350'),
                'GL'=>array('name'=>'GREENLAND','code'=>'299'),
                'GM'=>array('name'=>'GAMBIA','code'=>'220'),
                'GN'=>array('name'=>'GUINEA','code'=>'224'),
                'GQ'=>array('name'=>'EQUATORIAL GUINEA','code'=>'240'),
                'GR'=>array('name'=>'GREECE','code'=>'30'),
                'GT'=>array('name'=>'GUATEMALA','code'=>'502'),
                'GU'=>array('name'=>'GUAM','code'=>'1671'),
                'GW'=>array('name'=>'GUINEA-BISSAU','code'=>'245'),
                'GY'=>array('name'=>'GUYANA','code'=>'592'),
                'HK'=>array('name'=>'HONG KONG','code'=>'852'),
                'HN'=>array('name'=>'HONDURAS','code'=>'504'),
                'HR'=>array('name'=>'CROATIA','code'=>'385'),
                'HT'=>array('name'=>'HAITI','code'=>'509'),
                'HU'=>array('name'=>'HUNGARY','code'=>'36'),
                'ID'=>array('name'=>'INDONESIA','code'=>'62'),
                'IE'=>array('name'=>'IRELAND','code'=>'353'),
                'IL'=>array('name'=>'ISRAEL','code'=>'972'),
                'IM'=>array('name'=>'ISLE OF MAN','code'=>'44'),
                'IN'=>array('name'=>'INDIA','code'=>'91'),
                'IQ'=>array('name'=>'IRAQ','code'=>'964'),
                'IR'=>array('name'=>'IRAN, ISLAMIC REPUBLIC OF','code'=>'98'),
                'IS'=>array('name'=>'ICELAND','code'=>'354'),
                'IT'=>array('name'=>'ITALY','code'=>'39'),
                'JM'=>array('name'=>'JAMAICA','code'=>'1876'),
                'JO'=>array('name'=>'JORDAN','code'=>'962'),
                'JP'=>array('name'=>'JAPAN','code'=>'81'),
                'KE'=>array('name'=>'KENYA','code'=>'254'),
                'KG'=>array('name'=>'KYRGYZSTAN','code'=>'996'),
                'KH'=>array('name'=>'CAMBODIA','code'=>'855'),
                'KI'=>array('name'=>'KIRIBATI','code'=>'686'),
                'KM'=>array('name'=>'COMOROS','code'=>'269'),
                'KN'=>array('name'=>'SAINT KITTS AND NEVIS','code'=>'1869'),
                'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','code'=>'850'),
                'KR'=>array('name'=>'KOREA REPUBLIC OF','code'=>'82'),
                'KW'=>array('name'=>'KUWAIT','code'=>'965'),
                'KY'=>array('name'=>'CAYMAN ISLANDS','code'=>'1345'),
                'KZ'=>array('name'=>'KAZAKSTAN','code'=>'7'),
                'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','code'=>'856'),
                'LB'=>array('name'=>'LEBANON','code'=>'961'),
                'LC'=>array('name'=>'SAINT LUCIA','code'=>'1758'),
                'LI'=>array('name'=>'LIECHTENSTEIN','code'=>'423'),
                'LK'=>array('name'=>'SRI LANKA','code'=>'94'),
                'LR'=>array('name'=>'LIBERIA','code'=>'231'),
                'LS'=>array('name'=>'LESOTHO','code'=>'266'),
                'LT'=>array('name'=>'LITHUANIA','code'=>'370'),
                'LU'=>array('name'=>'LUXEMBOURG','code'=>'352'),
                'LV'=>array('name'=>'LATVIA','code'=>'371'),
                'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','code'=>'218'),
                'MA'=>array('name'=>'MOROCCO','code'=>'212'),
                'MC'=>array('name'=>'MONACO','code'=>'377'),
                'MD'=>array('name'=>'MOLDOVA, REPUBLIC OF','code'=>'373'),
                'ME'=>array('name'=>'MONTENEGRO','code'=>'382'),
                'MF'=>array('name'=>'SAINT MARTIN','code'=>'1599'),
                'MG'=>array('name'=>'MADAGASCAR','code'=>'261'),
                'MH'=>array('name'=>'MARSHALL ISLANDS','code'=>'692'),
                'MK'=>array('name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','code'=>'389'),
                'ML'=>array('name'=>'MALI','code'=>'223'),
                'MM'=>array('name'=>'MYANMAR','code'=>'95'),
                'MN'=>array('name'=>'MONGOLIA','code'=>'976'),
                'MO'=>array('name'=>'MACAU','code'=>'853'),
                'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','code'=>'1670'),
                'MR'=>array('name'=>'MAURITANIA','code'=>'222'),
                'MS'=>array('name'=>'MONTSERRAT','code'=>'1664'),
                'MT'=>array('name'=>'MALTA','code'=>'356'),
                'MU'=>array('name'=>'MAURITIUS','code'=>'230'),
                'MV'=>array('name'=>'MALDIVES','code'=>'960'),
                'MW'=>array('name'=>'MALAWI','code'=>'265'),
                'MX'=>array('name'=>'MEXICO','code'=>'52'),
                'MY'=>array('name'=>'MALAYSIA','code'=>'60'),
                'MZ'=>array('name'=>'MOZAMBIQUE','code'=>'258'),
                'NA'=>array('name'=>'NAMIBIA','code'=>'264'),
                'NC'=>array('name'=>'NEW CALEDONIA','code'=>'687'),
                'NE'=>array('name'=>'NIGER','code'=>'227'),
                'NG'=>array('name'=>'NIGERIA','code'=>'234'),
                'NI'=>array('name'=>'NICARAGUA','code'=>'505'),
                'NL'=>array('name'=>'NETHERLANDS','code'=>'31'),
                'NO'=>array('name'=>'NORWAY','code'=>'47'),
                'NP'=>array('name'=>'NEPAL','code'=>'977'),
                'NR'=>array('name'=>'NAURU','code'=>'674'),
                'NU'=>array('name'=>'NIUE','code'=>'683'),
                'NZ'=>array('name'=>'NEW ZEALAND','code'=>'64'),
                'OM'=>array('name'=>'OMAN','code'=>'968'),
                'PA'=>array('name'=>'PANAMA','code'=>'507'),
                'PE'=>array('name'=>'PERU','code'=>'51'),
                'PF'=>array('name'=>'FRENCH POLYNESIA','code'=>'689'),
                'PG'=>array('name'=>'PAPUA NEW GUINEA','code'=>'675'),
                'PH'=>array('name'=>'PHILIPPINES','code'=>'63'),
                'PK'=>array('name'=>'PAKISTAN','code'=>'92'),
                'PL'=>array('name'=>'POLAND','code'=>'48'),
                'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','code'=>'508'),
                'PN'=>array('name'=>'PITCAIRN','code'=>'870'),
                'PR'=>array('name'=>'PUERTO RICO','code'=>'1'),
                'PT'=>array('name'=>'PORTUGAL','code'=>'351'),
                'PW'=>array('name'=>'PALAU','code'=>'680'),
                'PY'=>array('name'=>'PARAGUAY','code'=>'595'),
                'QA'=>array('name'=>'QATAR','code'=>'974'),
                'RO'=>array('name'=>'ROMANIA','code'=>'40'),
                'RS'=>array('name'=>'SERBIA','code'=>'381'),
                'RU'=>array('name'=>'RUSSIAN FEDERATION','code'=>'7'),
                'RW'=>array('name'=>'RWANDA','code'=>'250'),
                'SA'=>array('name'=>'SAUDI ARABIA','code'=>'966'),
                'SB'=>array('name'=>'SOLOMON ISLANDS','code'=>'677'),
                'SC'=>array('name'=>'SEYCHELLES','code'=>'248'),
                'SD'=>array('name'=>'SUDAN','code'=>'249'),
                'SE'=>array('name'=>'SWEDEN','code'=>'46'),
                'SG'=>array('name'=>'SINGAPORE','code'=>'65'),
                'SH'=>array('name'=>'SAINT HELENA','code'=>'290'),
                'SI'=>array('name'=>'SLOVENIA','code'=>'386'),
                'SK'=>array('name'=>'SLOVAKIA','code'=>'421'),
                'SL'=>array('name'=>'SIERRA LEONE','code'=>'232'),
                'SM'=>array('name'=>'SAN MARINO','code'=>'378'),
                'SN'=>array('name'=>'SENEGAL','code'=>'221'),
                'SO'=>array('name'=>'SOMALIA','code'=>'252'),
                'SR'=>array('name'=>'SURINAME','code'=>'597'),
                'ST'=>array('name'=>'SAO TOME AND PRINCIPE','code'=>'239'),
                'SV'=>array('name'=>'EL SALVADOR','code'=>'503'),
                'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','code'=>'963'),
                'SZ'=>array('name'=>'SWAZILAND','code'=>'268'),
                'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','code'=>'1649'),
                'TD'=>array('name'=>'CHAD','code'=>'235'),
                'TG'=>array('name'=>'TOGO','code'=>'228'),
                'TH'=>array('name'=>'THAILAND','code'=>'66'),
                'TJ'=>array('name'=>'TAJIKISTAN','code'=>'992'),
                'TK'=>array('name'=>'TOKELAU','code'=>'690'),
                'TL'=>array('name'=>'TIMOR-LESTE','code'=>'670'),
                'TM'=>array('name'=>'TURKMENISTAN','code'=>'993'),
                'TN'=>array('name'=>'TUNISIA','code'=>'216'),
                'TO'=>array('name'=>'TONGA','code'=>'676'),
                'TR'=>array('name'=>'TURKEY','code'=>'90'),
                'TT'=>array('name'=>'TRINIDAD AND TOBAGO','code'=>'1868'),
                'TV'=>array('name'=>'TUVALU','code'=>'688'),
                'TW'=>array('name'=>'TAIWAN, PROVINCE OF CHINA','code'=>'886'),
                'TZ'=>array('name'=>'TANZANIA, UNITED REPUBLIC OF','code'=>'255'),
                'UA'=>array('name'=>'UKRAINE','code'=>'380'),
                'UG'=>array('name'=>'UGANDA','code'=>'256'),
                'US'=>array('name'=>'UNITED STATES','code'=>'1'),
                'UY'=>array('name'=>'URUGUAY','code'=>'598'),
                'UZ'=>array('name'=>'UZBEKISTAN','code'=>'998'),
                'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','code'=>'39'),
                'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'),
                'VE'=>array('name'=>'VENEZUELA','code'=>'58'),
                'VG'=>array('name'=>'VIRGIN ISLANDS, BRITISH','code'=>'1284'),
                'VI'=>array('name'=>'VIRGIN ISLANDS, U.S.','code'=>'1340'),
                'VN'=>array('name'=>'VIET NAM','code'=>'84'),
                'VU'=>array('name'=>'VANUATU','code'=>'678'),
                'WF'=>array('name'=>'WALLIS AND FUTUNA','code'=>'681'),
                'WS'=>array('name'=>'SAMOA','code'=>'685'),
                'XK'=>array('name'=>'KOSOVO','code'=>'381'),
                'YE'=>array('name'=>'YEMEN','code'=>'967'),
                'YT'=>array('name'=>'MAYOTTE','code'=>'262'),
                'ZA'=>array('name'=>'SOUTH AFRICA','code'=>'27'),
                'ZM'=>array('name'=>'ZAMBIA','code'=>'260'),
                'ZW'=>array('name'=>'ZIMBABWE','code'=>'263')
            );

            $before_telephone = $countryArray[$details->geoplugin_countryCode]['code'];
            ?>
            <input type="hidden" id="before_telephone" name="before_telephone" value="+<?php echo $before_telephone;?>:">

            <button id="submit" style="display:none;">Enviar petición</button>

        </form>

        <div class="clear-fix"></div>
        <!--group-form_chua_xong-->
        <div class="button inquiry">
            <a class="btn-rectangle" style="cursor: pointer;">Enviar petición</a>
        </div>

    </div>

