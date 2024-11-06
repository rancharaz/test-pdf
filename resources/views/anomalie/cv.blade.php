<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Anomalie</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style type="text/css">
        html {
        -webkit-print-color-adjust: exact;
        background-color: transparent;
        }
        body {
        background-color: transparent !important; /* or your desired color */
    
    }
        .primary-color {
            color: #E85222;
        }

        .anomalie-title {
            width: 555px;
        }

        .thematique_header {
            width: 23.3rem;

        }

        .danger {
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color: #E85222;
            gap: 10px
        }

        .contrainte {
            width: 23.3rem;
        }

        .loca-right {
            width: 277.5px;
        }

        .text-thematic {
            font-weight: 700;
        }

        .identifiant-header {
            background-color: #9CA0B1;
            font-weight: 700;
            width: 23.3rem;

        }

        .anomalie-info {
            font-size: 16px;
        }

        .info {
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 16px;
            /* 160% */
            letter-spacing: 0.5px;
        }

        .commune {}

        .commune-bg {
            background-color: #E85222;
            color: #FFFFFF;
            border-radius: 0px 4px 4px 0px;
            text-align: center;
            font-size: 11px;
            font-style: normal;
            font-weight: 700;
            line-height: 34px;
            padding: 0px 12px;
            align-items: center;
            align-self: stretch;
            width: 108px;
            height: 34px;
        }

        /* geo */
        .geo-one {
            img {
                width: 263px;
                height: 265px;
                border-radius: 8px;
                border: 1px solid #ccc;
            }
        }

        .geo-two {
            img {
                width: 263px;
                height: 265px;
                border-radius: 8px;
                border: 1px solid #ccc;
            }
        }

        .loca-title {
            color: #747878;
            font-size: 9px;
            font-style: normal;
            font-weight: 500;
            line-height: 16px;
            /* 177.778% */
            letter-spacing: 0.5px;
        }

        .anomalie-data {
            width: 555px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .title-section {
            color: #E85222;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: 20px;
            letter-spacing: 0.1px;
        }

        .orgine-event {
            font-size: 9px;
            color: #747878;
            font-style: normal;
            font-weight: 500;
            line-height: 16px;
            letter-spacing: 0.5px;
        }

        .origin-text {
            font-size: 10px;
            font-style: normal;
            font-weight: 400;
            line-height: 16px;
            letter-spacing: 0.4px;
        }

        .mesure-prises .text {
            font-size: 18px;
        }

        .description-msg {
            color: #444F5A;
            font-size: 10px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .niveau-title {
            font-size: 10px;
            font-style: normal;
            font-weight: 500;
            line-height: 12px;
            /* 200% */
            letter-spacing: 0.25px;
            padding-left: 3px;
        }

        .mesure-info {
            width: 555px;
            background-color: #EDEDED;
            padding: 8px;
        }

        .mesure-one {
            width: 277.5px;
        }

        .mesure-two {
            width: 277.5px;
        }

        .mesure-info-2 {
            width: 555px;
            padding: 8px;
        }

        .mesure-expo {
            width: 240px;
        }

        .mesure-expo-1 {
            width: 96px;
        }

        .mesure-expo-2 {
            width: 171px;
        }

        .footer-img {
            width: 80px;
            height: 68px;
        }
        .footer {
            background-color: #FDEFEB;
        
        }
        .qr-code {
            width: 80px;
            height: 68px;
            text-align: center;
            margin-top: 10px;
            padding: 5px;
            border-radius: 20px;
            border: 4px ##85222 solid;
        }

        .qr-code-2 {
            position: relative;
            left: 0.7rem;
            width: 42px;
            height: 42px;
            margin-top: 0;
            padding: 0.1rem;
            border-radius: 9px;
            border: 4px #E85222 solid;
        }

        .date {
            font-size: 9.13px;
            font-weight: 900;
            margin-top: 2rem;
        }

        .mesure-1 {
            img {
                width: 370px;
                height: 370px;
                border-radius: 8px;
                border: 1px solid #ccc;
            }
        }
        .icon-tick {
            display: flex;
            width: 16px;
            height: 16px;
            padding: 3px;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            position: relative;
            left: 15px;
        }
        .mesure-image {
            width: 100%;
            position: relative;
            text-align: center;
            left: 5.5rem;
        }
        .signal-subTitle {
            font-size: 8px;
            font-style: normal;
            font-weight: 600;
            line-height: 10px; /* 125% */
            letter-spacing: 0.4px;
        }
        .signal-date {
            font-size: 8px;
            font-style: normal;
            font-weight: 600;
            line-height: 10px; /* 125% */
            letter-spacing: 0.4px;
        }
        .image-commune {
            width: 86px;
            height: 32px;
            left: 9rem;
            margin-right: 8px;

        }
        .geroba-footer-logo {
            width: 81px;
            height: 31px;
            position: absolute;
            right: 28rem;
            top: 10px;
        }
        .footer-info {
            position: absolute;
            right: 1rem;
        }
        .footer-title {
            color: #F05A22;
            text-align: right;
            font-size: 10.5px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .footer-date {
            color: #171717;
            text-align: right;
            font-size: 8px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .footer-pages {
            color: #171717;
            text-align: right;
            font-size: 8px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .geo-localisation {
            border-radius: 4px;
            background: rgba(0, 0, 0, 0.60);
            padding: 8px;
            color: #FFF;
            text-align: center;
            font-size: 9px;
            font-style: normal;
            font-weight: 500;
            line-height: 16px;
            letter-spacing: 0.5px;
            width: 90px;
            top: 145px;
            position: absolute;
            margin-left: 1rem;
        }
    </style>
</head>

<body class="text-gray-800 font-sans">
    <div class="mx-auto p-6 shadow-md rounded-lg"
        style="width: 595px; height: 872px;padding: 0px 12px 0px 12px;">
        <header>

            @php
            // Set the locale to French
            setlocale(LC_TIME, 'fr_FR.UTF-8');

            // Get the current date in French format
            $currentDate = strftime('%d %B %Y');
            @endphp
            <div class="anomalie-info mt-5">
                <div class="row flex">
                    <div class="column thematique_header font-bold">
                        <div class="danger">Danger particulier </div>
                        <div class="mt-4">
                            <span>19 - Eboulis / Rocher </span>
                        </div>
                    </div>
                    <div class="column thematique_header text-right">
                        <div class="commune flex gap-36">
                            <div class="image-commune relative">
                                <img src="https://seb.gerobamaster.fr//images/objets/74/carottage/pic/new_272_10_1642746118928_1107_000000000002.png" alt="Step Right Image">
                            </div>
                            <div class="commune-bg">
                                
                                <div class="text" style="
                                position: relative;
                                color: #fff;
                                bottom: 0.1rem;">
                                    Région Réunion
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="info font-medium">
                                13/02/2024 10:00
                            </div>
                            <div class="info font-medium">
                                Signalé par Arthur Dupont
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="geo-image flex gap-14 mt-3">
                <div class="geo-one">
                    <img src="https://seb.gerobamaster.fr//images/objets/12/svd/pic/024_02_1132_000000042926.jpg"
                        alt="geroba-geo-image">
                </div>
                
                <div class="geo-two">
                    <div class="geo-localisation">
                        <div class="longitude"><span style="color: #FF7A00;font-size: 9px;"> Long: </span>-65545</div>
                        <div class="latitude"> <span style="color: #FF7A00;font-size: 9px;"> Lat: </span>-151</div>
                    </div>
                    <img src="https://seb.gerobamaster.fr//images/objets/12/svd/pic/024_02_1132_000000042925.png"
                        alt="geroba-geo-image">
                </div>
            </div>
        </header>
        <hr style="margin-top: 15px">
        <section>
            <div class="anomalie-data">
                <div class="localisation">
                    <div class="title-section">
                        Localisation
                    </div>
                    <div class="row flex">
                        <div class="column" style="width: 142.75px; height:32px;">
                            <div class="pl-1">
                                <div class="loca-title" style="font-size: 9px;">
                                    Voie
                                </div>
                                <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                    Rue du Savoir
                                </div>
                            </div>
                         {{--    <h1>CV for {{ $data['name'] }}</h1>
                            <p>ID: {{ $data['id'] }}</p>
                            <p>Details: {{ $data['email'] }}</p> 
                            <p>Body: {{ $data['body'] }}</p>  --}}
                        </div>
                        <div class="column" style="width: 142.75px; height:32px;">
                            <div class="loca-title" style="font-size: 9px;">
                                Identifiant
                            </div>
                            <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                {{ $data['id'] }}
                            </div>
                        </div>
                        <div class="column" style="width: 142.75px; height:32px;">
                            <div class="loca-title" style="font-size: 9px;">
                                Localisation physique
                            </div>
                            <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                {{ $data['email'] }}
                            </div>
                        </div>
                        <div class="column" style="width: 142.75px; height:32px;">
                            <div class="loca-title" style="font-size: 9px;">
                                Sens
                            </div>
                            <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                Croissant
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    {{-- --}}
                    <div class="row flex">
                        <div class="column" style="width: 142.75px; ">
                            <div class="loca-title" style="font-size: 9px;">
                                Lieu de référence
                            </div>
                            <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                Rue du Savoir
                            </div>
                        </div>
                        <div class="column" style="width: 142.75px;">
                            <div class="loca-title" style="font-size: 9px;">
                                PR + Abscisse
                            </div>
                            <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                N1A-S0-PR43-602
                            </div>
                        </div>
                        <div class="column" style="width: 142.75px;">
                            <div class="loca-title" style="font-size: 9px;">
                                Subdivision
                            </div>
                            <div class="localisation-content" style="font-size: 10px; font-weight: 700;">
                                4324dasds
                            </div>
                        </div>
                        <div class="column border-1" style="width: 142.75px;">
                            <textarea id="message" style="width: 142.75px;height:40px;"
                                class="description-msg block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Description"></textarea>
                        </div>
                    </div>
                    {{-- <div class="localisation-info flex">
                        <ul class="loca-right">
                            @if(isset($data['event_datas']))
                            @if(isset($data['event_datas']['localisation']))
                            <li class="font-bold">Voie</li>
                            <li>{{ $data['event_datas']['localisation']['voie'] }} </li>
                            @else
                            <p>---</p>
                            @endif

                            @else
                            <p>---</p>
                            @endif
                            <li class="font-bold">Sens</li>
                            <li>{{ $data['event_datas']['localisation']['sens'] }} </li>
                            <li class="font-bold">PR + Abscisse</li>
                            <li>{{ $data['event_datas']['localisation']['pr']}} + {{ $data['obj_datas']['sens']}}
                            </li>
                        </ul>
                        <ul class="loca-left">
                            <li class="font-bold">Localisation physique</li>
                            <li>---</li>
                            <li class="font-bold">Lieu de référence</li>
                            <li>---</li>
                            <textarea id="message" style="width: 261px"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Description"></textarea>
                        </ul>
                    </div> --}}

                </div>
            </div>
            <hr>
            <div class="anomalie-origine">
                <div class="title-section font-bold">
                    Origine
                </div>
                <div class="orgine-event font-bold pl-1">
                    Origine de l'évènement
                </div>
                <span class="pl-1 pb-2 origin-text">Accident</span>
            </div>
            <hr class="mt-4">
        </section>
        <section>
            <div class="slider flex mt-3">
                <div class="contrainte">
                    <div class="title-section text-xl font-bold">
                        Contraintes d'exploitation
                    </div>
                    <div class="progress-bar flex pt-2 pb-2">
                        <div class="circle rounded-md"
                            style="width:12px;height:12px;background-color:#FF9432;margin-right: 3px;"></div>
                        <div class="niveau-title"> Niveau: /4 </div>
                    </div>
                    <textarea id="message" style="width: 261px;"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Commentaires"></textarea>
                </div>
                <div class="urgence">
                    <div class="title-section text-xl font-bold ">
                        Urgence d'intervention
                    </div>
                    <div class="progress-bar flex pt-2 pb-2">
                        <div class="circle rounded-md"
                            style="width:12px;height:12px;background-color:#FA4040;margin-right: 3px;"></div>
                        <div class="niveau-title">
                            Niveau: /4 </div>
                    </div>
                    <textarea id="message" style="width: 261px;"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Commentaires"></textarea>
                </div>
            </div>
        </section>
        <hr style="margin-top: 15px; margin-bottom:3px;">
        <section style="width: 571px;">
            <div class="signalement-stepper text-center">
                <div class="title-section text-xl font-bold mb-4 text-left">
                    Suivi de l'avancement du signalement
                </div>
                <div class="stepper" style="">
                    <div class="stepper-wrapper flex text-center gap-8" style="align-items:flex-start; margin-right: 63px; margin-left: 63px;">
                        <div class="item-start">
                            <div class="signal-icon text-white">
                               <div class="icon-tick">
                               <img src="https://seb.gerobamaster.fr//images/objets/74/carottage/pic/large/new_272_10_1642746118928_1107_000000000001.png" alt="Step Right Image">
                            </div> 
                            </div>
                            <div class="signal-subTitle">
                                Signalement
                            </div>
                            <div class="signal-date">
                                13/02/24
                            </div>
                        </div>
                        <div class="border-t-2 border-black-500 w-40 mt-4"></div>
                        <div class="item-alert">
                            <div class="signal-icon">
                                ⚠
                            </div>
                            <div class="signal-subTitle">
                               Traitement à définir
                            </div>
                            <div class="signal-date">
                                13/02/24
                            </div>
                        </div>
                        <div class="border-t-2 border-black-500 w-40 mt-4"></div>
                        <div class="item-finish">
                            <div class="signal-icon">
                                ⚠
                            </div>
                            <div class="signal-subTitle">
                                Résolution à définir
                            </div>
                            <div class="signal-date">
                                13/02/24
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="footer flex gap-36"  style="padding-top: 6px;padding-bottom: 6px;width:595px;position: relative;right: 12px;top: 14px;">
{{--                 <div class="qr-code-2">
                    {!! QrCode::size(30)->generate('https://www.geroba.fr') !!}
                </div> --}}
                <div class="geroba-footer-logo" style="width:81px; height: 31px;">
                    <img src="https://seb.gerobamaster.fr//resources/gerobav2/static/media/geroba%20H.677baaa32ff89cc552dd.png"
                    alt="geroba-geo-image">
                    <p style="font-size: 7px; padding-left: 2.3rem;">www.geroba.fr</p>
                </div>
                <div class="footer-info">
                    <div class="footer-title">Fiche anomalie</div>
                    <div class="footer-date">16 Juillet</div>
                    <div class="footer-pages">Page 1 sur 2</div>
                </div>
                
            </div>
            
        </section>
    </div>
    {{-- --}}
{{--     <div class="mx-auto p-6 bg-white shadow-md rounded-lg mt-10" style="width: 640px">
        <div class="border-2 border-/grey-500 rounded-md" style="width: 590px; padding: 1rem;">
            <header>/
                <div class="anomalie-info mt-5">
                    <div class="row flex">
                        <div class="column thematique_header font-bold">
                            19 - Eboulis / Rocher
                        </div>
                        <div class="column thematique_header text-right">
                            <div class="info font-medium">
                                13/02/2024 10:00
                            </div>
                            <div class="info font-normal">
                                Signalé par Arthur Dupont
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mesure-prises">
                    <div class="text font-bold">
                        Mesures prises
                    </div>
                </div>
                <div class="mesure-info flex gap-4 mt-3">
                    <div class="mesure-one">
                        <div class="title font-bold">Mesure de résolution</br> </div>
                        <span>{{ $data['datas']['mesures_resolution'][0]}}</span>
                    </div>
                    <div class="mesure-two">
                        <div class="mesure-one">
                            Suggestion d'une mesure à prendre</br>
                            Réparer le muret
                        </div>
                    </div>
                </div>
                <div class="mesure-info-2 flex gap-4 mt-3">
                    <div class="mesure-expo">
                        <div class="title font-bold">1 - Mesure d'exploitation</br> </div>
                        <span>{{ $data['datas']['mesures_exploitation'][0]}}</span>
                    </div>
                    <div class="mesure-expo-1">
                        <div class="mesure">
                            Date de pose</br>
                            13/02/2024
                        </div>
                    </div>
                    <div class="mesure-expo-2">
                        <div class="mesure">
                            Posé par</br>
                            Arthur Dupont
                        </div>
                    </div>
                </div>
            </header>
            <section>
                <div class="mesure-image  gap-4 mt-3 text-center">
                    <div class="mesure-1">
                        <img src="https://dev7.gerobamaster.fr//images/objets/12/svd/pic/new109_1575291413.jpg"
                            alt="geroba-geo-image">
                    </div>
                </div>

            </section>
        </div>
        <div class="footer mt-10 flex gap-36">
            <div class="qr-code-2">{!! QrCode::size(50)->generate('https://www.geroba.fr') !!}</div>
            <div class="date font-bold w-40">{{ $currentDate }}</div>
            <div class="footer-img">
                <img src="https://dev7.gerobamaster.fr/images/gerobav2big.png" alt="geroba-geo-image">
                <p style="font-size: 12px">www.geroba.fr</p>
            </div>
        </div>
        <div class="bg-blue-500 w-24 h-50 mt-5 text-center cursor-pointer text-white rounded-md hover:bg-blue-400">
            <a href="{{ url('/pdf-anomalie') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Download
            </a>
        </div>
    </div> --}}
</body>

</html>