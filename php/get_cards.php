<?php
    $location = $_POST['location'];
    $town = $_POST['town'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $currentLat = $_POST['currentLat'];
    $currentLon = $_POST['currentLon'];
    include './connection.php';

    function getMainDetails($dbName) {
        global $con;
        $db_data = mysqli_query($con,"SELECT Name,Full_Address,Rating,Nof_Rating,Rating_Summary FROM Details;");
        $tabledata = mysqli_fetch_row($db_data);
        $rName = $tabledata[0];
        $rAddress = $tabledata[1];
        $rRating = $tabledata[2];
        $rNofRating = $tabledata[3];
        $rRatingSummary = $tabledata[4];
        $rRatingDetails = [$rRating,$rNofRating,$rRatingSummary];
        $db_data = mysqli_query($con,"SELECT $dbName.Facilities.Facility,ZEPHYR.Facilities.Name,$dbName.Facilities.Highlight
            FROM $dbName.Facilities
            INNER JOIN ZEPHYR.Facilities
            ON $dbName.Facilities.Facility = ZEPHYR.Facilities.Id
            LIMIT 3;");
        $rFacDetails = [];
        while($tabledata=mysqli_fetch_row($db_data)) {
            $rFacDetails = array_merge($rFacDetails, $tabledata);
        }
        $rFacilities = [];
        for ($i=0; $i < 9 ; $i+=3) {
            $rFacility = [];
            $rFacility[] = $rFacDetails[$i+1];
            if ($rFacDetails[$i+2] == 'y') {
                $rFacility[] = "../../img/facilities/FI".substr(("00".$rFacDetails[$i]),-3).".png";
            }
            else {
                $rFacility[] = "../../img/facilities/FI000.png";
            }
            $rFacilities[] = $rFacility;
        }
        $db_data = mysqli_query($con,"SELECT COUNT(*) FROM Facilities;");
        $tabledata = mysqli_fetch_row($db_data);
        $rFacCount = $tabledata[0];
        $rRemainingFac = $rFacCount - 3;
        $rFacilities[] = $rRemainingFac;
        $db_data = mysqli_query($con,"SELECT Image, Mime_Type FROM Images WHERE Id = 1;");
        $tabledata = mysqli_fetch_row($db_data);
        $rImage_data = $tabledata[0];
        $rImage_mime_type = $tabledata[1];
        $rImage = [$rImage_data,$rImage_mime_type];
        $db_data = mysqli_query($con,"SELECT Latitude, Longitude FROM `Location`;");
        $tabledata = mysqli_fetch_row($db_data);
        $latitude = $tabledata[0];
        $longitude = $tabledata[1];
        return [[$rName,$rAddress,$rRatingDetails,$rFacilities,$rImage],[$latitude,$longitude]];
    }

    function Goto_RC_T($rcId) {
        global $rooms,$con;
        $rcTName = "RC".substr(("0".strval($rcId)),-2);
        $db_data = mysqli_query($con,"SELECT COUNT(*) FROM $rcTName WHERE Priority = 0;");
        $tabledata=mysqli_fetch_row($db_data);
        if ($rooms <= $tabledata[0]) {
            return 1;
        }
    }

    function getPriceDetails($rcId) {
        global $rooms,$adults,$children,$checkin,$checkout,$con;

        if (!empty($checkin) AND !empty($checkout)) {
            $checkin_date = new DateTime($checkin);
            $checkout_date = new DateTime($checkout);
            $interval = $checkin_date->diff($checkout_date);
            $days_staying = $interval->days;
        }
        else {
            $days_staying = 1;
        }

        $db_data = mysqli_query($con,"SELECT Base_Rent,Cost_per_Adult,Cost_per_Child,Offer FROM Room_Category WHERE Id=$rcId;");
        $tabledata=mysqli_fetch_row($db_data);
        if ($tabledata[3]=="") {
            $offer = 0;
        }
        else {
            $offer = $tabledata[3];
        }
        $rent = ($rooms * $tabledata[0] + ($adults - 1) * $tabledata[1] + $children * $tabledata[2]) * $days_staying;
        $finalRent = intval(($rent * (100 - $offer)) / 100);
        return [$rent,$finalRent,$offer];
    }

    function Goto_R_DB($dbId) {
        global $con;
        $dbName = "R".(dechex($dbId));
        mysqli_select_db($con,$dbName);
        $db_data = mysqli_query($con,"SELECT Id,Name FROM Room_Category;");
        $rRcDetails = [];
        while($tabledata=mysqli_fetch_row($db_data)) {
            $rcId = $tabledata[0];
            $available = Goto_RC_T($rcId);
            $rRcDetail = [];
            if ($available) {
                $rcName = $tabledata[1];
                $priceDetails = getPriceDetails($rcId);
                $rRcDetail[] = $rcName;
                $rRcDetail[] = $priceDetails;
                $rRcDetails[] = $rRcDetail;
            }
        }
        if ($available) {
            $mainDetails = getMainDetails($dbName);
            $resortDetail = array_merge($mainDetails[0], [$rRcDetails], [$mainDetails[1]]);
        }
        return $resortDetail;
    }

    function sortCards(&$resortCards) {
        $sorting_method = 3;
        $n = count($resortCards);
        switch ($sorting_method) {
            case 1:
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($resortCards[$j][1][2][1] < $resortCards[$j+1][1][2][1]) {
                            $temp = $resortCards[$j];
                            $resortCards[$j] = $resortCards[$j+1];
                            $resortCards[$j+1] = $temp;
                        }
                    }
                }
                break;
            case 2:
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($resortCards[$j][1][5][1][1] > $resortCards[$j+1][1][5][1][1]) {
                            $temp = $resortCards[$j];
                            $resortCards[$j] = $resortCards[$j+1];
                            $resortCards[$j+1] = $temp;
                        }
                    }
                }
                break;
            case 3:
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($resortCards[$j][1][2][0] < $resortCards[$j+1][1][2][0]) {
                            $temp = $resortCards[$j];
                            $resortCards[$j] = $resortCards[$j+1];
                            $resortCards[$j+1] = $temp;
                        }
                    }
                }
                break;
            default:
                # code...
                break;
        }
    }

    function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        $earthRadius = 6371; // in kilometers
        $latDiff = deg2rad($lat2 - $lat1);
        $lonDiff = deg2rad($lon2 - $lon1);
        $a = sin($latDiff / 2) * sin($latDiff / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($lonDiff / 2) * sin($lonDiff / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;
        if ($distance < 10) {
            // If distance is less than 10 km, show one decimal place
            $distance = number_format($distance, 1);
        } else {
            // If distance is 10 km or greater, show as integer
            $distance = number_format($distance, 0);
        }
        return $distance;
    }

    function printCards($resortCards) {
        global $currentLat, $currentLon;
        $repeatCount = count($resortCards);
        for ($i = 0; $i < $repeatCount; $i++) {
            $nofRC = count($resortCards[$i][1][5]);
            $greatestOffer = $resortCards[$i][1][5][0][1][2];
            if ($nofRC > 1) {
                for ($j = 1; $j < $nofRC; $j++) {
                    if ($resortCards[$i][1][5][$j][1][2] > $greatestOffer) {
                        $greatestOffer = $resortCards[$i][1][5][$j][1][2];
                    }
                }
                if ($nofRC == 2) {
                    $line = "{$resortCards[$i][1][5][0][0]} and {$resortCards[$i][1][5][1][0]} are Available";
                }
                else {
                    $line = "{$resortCards[$i][1][5][0][0]}, {$resortCards[$i][1][5][1][0]}, and Others Available";
                }
            }
            else {
                $line = "{$resortCards[$i][1][5][0][0]} are Available";
            }
            if ($greatestOffer > 0) {
                $line = $line." with Up to $greatestOffer% Off!";
            }

            $distance = calculateDistance($currentLat, $currentLon, $resortCards[$i][1][6][0], $resortCards[$i][1][6][1]);

            echo "
                <div id='comp-lrt6suuu' class='QOX0dS JCRlLH comp-lrt6suuu-container comp-lrt6suuu wixui-box'>
                    <div class='AG_P7Z MAs5Tr wixui-box'></div>
                    <div id='comp-lrt6suwt1' class='QOX0dS JCRlLH comp-lrt6suwt1-container comp-lrt6suwt1 wixui-box'>
                        <div class='AG_P7Z MAs5Tr wixui-box'></div>
                        <div id='comp-lrt6sux3' class='QOX0dS JCRlLH comp-lrt6sux3-container comp-lrt6sux3 wixui-box'>
                            <div class='AG_P7Z MAs5Tr wixui-box' style='display: flex;'>
                            <style>
                                .wrapper-j8v { 
                                    outline: none; 
                                    display: flex; 
                                    align-content: center; 
                                    align-items: center;
                                    font-family:Inter,sans-serif;
                                    line-height:1.2;
                                    margin-left: 10px;
                                } 
                                
                                .listing ::-webkit-scrollbar { 
                                    width: 8px;
                                } 
                                
                                .listing ::-webkit-scrollbar-thumb { 
                                    background: rgba(0,0,0,.08); 
                                    border-radius: 4px;
                                } 
                                
                                .listing ::-webkit-scrollbar-thumb:hover { 
                                    background: rgba(0,0,0,.25);
                                } 
                                
                                .listing ::-webkit-scrollbar-track { 
                                    background: transparent;
                                } 
                                
                                .is-mca { 
                                    font-weight: 600;
                                } 
                                
                                .hot-yzr { 
                                    border-radius: 2px; 
                                    padding: 3px 6px; 
                                    margin-right: 9px; 
                                    background-color: #52b520; 
                                    font-size: 12px; 
                                    color: #fff; 
                                    display: flex; 
                                    align-items: center;
                                } 
                                
                                .fa-tz7 { 
                                    background-color: #0f943c;
                                } 
                                
                                .hotelRating__rating--j21 { 
                                    cursor: pointer;
                                } 
                                
                                .hot-dah { 
                                    font-size: 12px; 
                                    color: #222;
                                } 
                                
                                .hot-9fo { 
                                    margin: 0 4px; 
                                    color: #222;
                                } 
                                
                                .hot-egw { 
                                    line-height: 14px; 
                                    margin-left: 7px; 
                                    position: relative; 
                                    top: 1px;
                                } 
                                
                                .c-2ke { 
                                    display: -webkit-inline-box; 
                                    display: -webkit-inline-flex; 
                                    display: -ms-inline-flexbox; 
                                    display: inline-flex; 
                                    -webkit-box-pack: center; 
                                    -webkit-justify-content: center; 
                                    -ms-flex-pack: center; 
                                    justify-content: center; 
                                    -webkit-align-items: center; 
                                    -webkit-box-align: center; 
                                    -ms-flex-align: center; 
                                    align-items: center;
                                } 
                                
                                svg:not(:root) { 
                                    overflow: hidden;
                                } 
                                
                                .hot-egw svg  { 
                                    vertical-align: top; 
                                    stroke: none; 
                                    stroke-width: 1; 
                                    fill: #fff; 
                                    fill-rule: evenodd; 
                                    width: 9px!important; 
                                    height: 10px!important;
                                } 
                                
                                .c-2ke svg  { 
                                    height: 100%; 
                                    width: 100%;
                                }
                            </style>
                            <div class='wrapper-j8v'>
                                <meta>
                                <span class='is-mca hot-yzr fa-tz7 hotelRating__rating--j21'>
                                <span>
                                    {$resortCards[$i][1][2][0]}
                                </span>
                                <span class='hot-egw'>
                                    <span class='c-2ke'>
                                    <svg viewBox='0 0 9 10' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M7.25 9.5a.238.238 0 01-.12-.032L4.5 7.948l-2.63 1.52a.238.238 0 01-.265-.017.271.271 0 01-.102-.26l.48-3.042-1.91-2.021a.276.276 0 01-.061-.268.255.255 0 01.197-.18l2.874-.508L4.276.646A.25.25 0 014.5.5c.094 0 .181.057.223.146l1.194 2.526 2.874.508a.255.255 0 01.197.18.275.275 0 01-.061.268l-1.91 2.021.48 3.042c.015.1-.024.201-.102.26a.242.242 0 01-.145.049z'>
                                        </path>
                                    </svg>
                                    </span>
                                </span>
                                </span>
                                <meta>
                                <meta>
                                <span class='hot-dah hotelRating__rating--j21'>
                                ({$resortCards[$i][1][2][1]} Ratings)
                                </span>
                                <span class='hot-9fo'>
                                ·
                                </span>
                                <span class='hot-dah'>
                                {$resortCards[$i][1][2][2]}
                                </span>
                            </div>
                            </div>
                        </div>
                        <div id='comp-lrt6suxb1' class='QOX0dS JCRlLH comp-lrt6suxb1-container comp-lrt6suxb1 wixui-box'>
                            <div class='AG_P7Z MAs5Tr wixui-box'></div>
                            <div id='comp-lrt6suxj' class='QOX0dS JCRlLH comp-lrt6suxj-container comp-lrt6suxj wixui-box'>
                                <div class='AG_P7Z MAs5Tr wixui-box'></div>
                                <div id='comp-lrt6suxr' data-testid='imageX' class='z4Uj6S comp-lrt6suxr wixui-image'>
                                    <wix-image id='img-comp-lrt6suxr' data-image-info='{&quot;containerId&quot;:&quot;comp-lrt6suxr&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_289737e8fd6740a4abad3ba6ae37dc5e~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;FI131.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                        data-has-ssr-src='true' class='L4tPY9'>
                                        <picture><img src='{$resortCards[$i][1][3][0][1]}' alt='' style='object-fit:cover;object-position:50% 50%'
                                            /></picture>
                                    </wix-image>
                                </div>
                                <div id='comp-lrt6suxy1' class='KcpHeO tz5f0K comp-lrt6suxy1 wixui-rich-text' data-testid='richTextElement'>
                                    <p class='font_9 wixui-rich-text__text'><span class='wixui-rich-text__text'>{$resortCards[$i][1][3][0][0]}</span></p>
                                </div>
                            </div>
                            <div id='comp-lrt6suy92' class='QOX0dS JCRlLH comp-lrt6suy92-container comp-lrt6suy92 wixui-box'>
                                <div class='AG_P7Z MAs5Tr wixui-box'></div>
                                <div id='comp-lrt6suyf' data-testid='imageX' class='z4Uj6S comp-lrt6suyf wixui-image'>
                                    <wix-image id='img-comp-lrt6suyf' data-image-info='{&quot;containerId&quot;:&quot;comp-lrt6suyf&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_f780eaebb58546568ed5195bc9a1f5a5~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;FI132.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                        data-has-ssr-src='true' class='L4tPY9'>
                                        <picture><img src='{$resortCards[$i][1][3][1][1]}' alt='' style='object-fit:cover;object-position:50% 50%'
                                            /></picture>
                                    </wix-image>
                                </div>
                                <div id='comp-lrt6suyk1' class='KcpHeO tz5f0K comp-lrt6suyk1 wixui-rich-text' data-testid='richTextElement'>
                                    <p class='font_9 wixui-rich-text__text'><span class='wixui-rich-text__text'>{$resortCards[$i][1][3][1][0]}</span></p>
                                </div>
                            </div>
                            <div id='comp-lrt6suyq1' class='QOX0dS JCRlLH comp-lrt6suyq1-container comp-lrt6suyq1 wixui-box'>
                                <div class='AG_P7Z MAs5Tr wixui-box'></div>
                                <div id='comp-lrt6suyw' data-testid='imageX' class='z4Uj6S comp-lrt6suyw wixui-image'>
                                    <wix-image id='img-comp-lrt6suyw' data-image-info='{&quot;containerId&quot;:&quot;comp-lrt6suyw&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;75fa75_510794888abe42e5b36e7c2c6c25efe7~mv2.png&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;FI129.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                                        data-has-ssr-src='true' class='L4tPY9'>
                                        <picture><img src='{$resortCards[$i][1][3][2][1]}' alt='' style='object-fit:cover;object-position:50% 50%'
                                            /></picture>
                                    </wix-image>
                                </div>
                                <div id='comp-lrt6suz31' class='KcpHeO tz5f0K comp-lrt6suz31 wixui-rich-text' data-testid='richTextElement'>
                                    <p class='font_9 wixui-rich-text__text'><span class='wixui-rich-text__text'>{$resortCards[$i][1][3][2][0]}</span></p>
                                </div>
                            </div>
                            <div id='comp-lrt6suzc2' class='QOX0dS JCRlLH comp-lrt6suzc2-container comp-lrt6suzc2 wixui-box'>
                                <div class='AG_P7Z MAs5Tr wixui-box'></div>
                                <div id='comp-lrt6suzl' class='KcpHeO tz5f0K comp-lrt6suzl wixui-rich-text' data-testid='richTextElement'>
                                    <p class='font_7 wixui-rich-text__text'><span class='wixui-rich-text__text'>+ {$resortCards[$i][1][3][3]} more</span></p>
                                </div>
                            </div>
                        </div>
                        <div class='comp-lrt6suzs3 gydiew' id='comp-lrt6suzs3' role='button' tabindex='0' aria-disabled='false'>
                            <div data-testid='linkElement' class='TFOeq0 wixui-button zKbzSQ' aria-disabled='false' onclick='gotoResortPage({$resortCards[$i][2]})'><span class='kclxHl wixui-button__label'>View Resort</span></div>
                        </div>
                        <div id='comp-lrt6sv051' class='QOX0dS JCRlLH comp-lrt6sv051-container comp-lrt6sv051 wixui-box'>
                            <div class='AG_P7Z MAs5Tr wixui-box'></div>
                            <div id='comp-lrt6sv0b' class='KcpHeO tz5f0K comp-lrt6sv0b wixui-rich-text' data-testid='richTextElement'>
                                <p class='font_7 wixui-rich-text__text'><span class='wixui-rich-text__text'>Rooms starting at just</span></p>
                            </div>
                            <div id='comp-lrt6sv0j1' class='KcpHeO tz5f0K comp-lrt6sv0j1 wixui-rich-text' data-testid='richTextElement'>
                                <h5 class='font_5 wixui-rich-text__text'><span class='wixui-rich-text__text'>₹{$resortCards[$i][1][5][0][1][1]}</span></h5>
                            </div>
                        </div>
                        <div id='comp-lrt6sv0r1' class='KcpHeO tz5f0K comp-lrt6sv0r1 wixui-rich-text' data-testid='richTextElement'>
                            <h6 style='margin-top: 5px;' class='font_6 wixui-rich-text__text'><span class='wixui-rich-text__text'><span class='wixui-rich-text__text'>{$resortCards[$i][1][0]}</span></span>
                            </h6>
                        </div>
                        <div id='comp-lrt6sv0x1' class='KcpHeO tz5f0K comp-lrt6sv0x1 wixui-rich-text' data-testid='richTextElement'>
                            <p class='font_11 wixui-rich-text__text'><span class='wixui-rich-text__text'>{$resortCards[$i][1][1]}</span></p>
                        </div>
                        <div id='comp-lrt6sv13' class='QOX0dS JCRlLH comp-lrt6sv13-container comp-lrt6sv13 wixui-box'>
                            <div class='AG_P7Z MAs5Tr wixui-box' style='display: flex; align-items: center;justify-content: center;'>
                                <p class='font_9 wixui-rich-text__text'><span class='wixui-rich-text__text'>$line</span></p>
                            </div>
                        </div>
                    </div>
                    <div id='comp-lrt6suvr' data-testid='imageX' class='z4Uj6S comp-lrt6suvr wixui-image'>
                        <wix-image id='img-comp-lrt6suvr' data-image-info='{&quot;containerId&quot;:&quot;comp-lrt6suvr&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;parallaxSpeed&quot;:1.5,&quot;sourceSets&quot;:[],&quot;imageData&quot;:{&quot;uri&quot;:&quot;55d98a_3287270d83ef4efabfdd1f52d0dc6ec2~mv2.jpg&quot;,&quot;width&quot;:3734,&quot;height&quot;:2489,&quot;alt&quot;:&quot;&quot;,&quot;name&quot;:&quot;wolfgang-hasselmann-1ICIhK-ElJs-unsplash-edited.jpg&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:0,&quot;width&quot;:3734,&quot;height&quot;:2489,&quot;svgId&quot;:&quot;&quot;,&quot;flip&quot;:&quot;none&quot;},&quot;displayMode&quot;:&quot;fill&quot;,&quot;scrollEffect&quot;:&quot;none&quot;,&quot;focalPoint&quot;:null},&quot;hasAnimation&quot;:false}'
                            data-has-ssr-src='true' class='L4tPY9'>
                            <picture><img src='data:" . $resortCards[$i][1][4][1] . ";base64," . base64_encode($resortCards[$i][1][4][0]) . "'
                                    alt='' style='object-fit:cover;object-position:50% 50%' /></picture>
                        </wix-image>
                    </div>
                    <div id='comp-lrt6suw5' class='QOX0dS JCRlLH comp-lrt6suw5-container comp-lrt6suw5 wixui-box'>
                        <div class='AG_P7Z MAs5Tr wixui-box'></div>
                        <div id='comp-lrt6suw9' class='KcpHeO tz5f0K comp-lrt6suw9 wixui-rich-text' data-testid='richTextElement'>
                            <p class='font_8 wixui-rich-text__text' style='text-align:center;'><span class='wixui-rich-text__text'>$distance km away</span></p>
                        </div>
                    </div>
                </div>
            ";
        }
    }
    if ($town!="") {
        $db_data = mysqli_query($con,"SELECT DB_Id,Public_Id FROM Resorts WHERE Town='$town' AND District='$district' AND State='$state';");
    }
    elseif ($district!="") {
        $db_data = mysqli_query($con,"SELECT DB_Id,Public_Id FROM Resorts WHERE District='$district' AND State='$state';");
    }
    else {
        $db_data = mysqli_query($con,"SELECT DB_Id,Public_Id FROM Resorts WHERE State='$state';");
    }

    while($tabledata=mysqli_fetch_row($db_data)) {
        $dbId = $tabledata[0];
        $pId = $tabledata[1];
        $resortCard = Goto_R_DB($dbId);
        if ($resortCard) {
            $resortCards[] = [$dbId,$resortCard,$pId];
        }
    }
    sortCards($resortCards);
    printCards($resortCards);
    mysqli_close($con);
?>