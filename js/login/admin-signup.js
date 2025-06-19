/* Transition Scripts */

var sectionNo = 1;
function nextSection() {
    if (sectionNo < 6 ) {
        currentSectionName = "section" + sectionNo;
        var currentSection = document.getElementById(currentSectionName);
        sectionNo++;
        nextSectionName = "section" + sectionNo;
        var nextSection = document.getElementById(nextSectionName);
        currentSection.style.animation = "leaving-to-left 0.6s";
        setTimeout(function() {
            currentSection.style.display = "none";
        },500);
        setTimeout(function() {
            nextSection.style.animation = "coming-from-right 0.6s";
        },600);
        setTimeout(function() {
            nextSection.style.display = "block";
        },700);
    }
    else if (sectionNo == 6) {
        tSections = createNewSections();
    }
    if (sectionNo >= 6 && sectionNo < tSections) {
        currentSectionName = "section" + sectionNo;
        var currentSection = document.getElementById(currentSectionName);
        sectionNo++;
        nextSectionName = "section" + sectionNo;
        var nextSection = document.getElementById(nextSectionName);
        currentSection.style.animation = "leaving-to-left 0.6s";
        setTimeout(function() {
            currentSection.style.display = "none";
        },500);
        setTimeout(function() {
            nextSection.style.animation = "coming-from-right 0.6s";
        },600);
        setTimeout(function() {
            nextSection.style.display = "block";
        },700);
    }
    else if (sectionNo >= 7 && sectionNo >= tSections) {
        var form = document.getElementById('form-tag');
        $.ajax({
            type: "POST",
            url: "./new-admin.php",
            data: {
                highlightArray: selectedHighlightArray,
                facilityArray: selectedFacilityArray,
                nofPolicy: nofPolicy,
                typesOfRooms: typesOfRooms
            },
            success: function(response) {
                form.submit();
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        })
    }
}

function prevSection() {
    if (sectionNo != 1 && sectionNo != 7) {
        currentSectionName = "section" + sectionNo;
        var currentSection = document.getElementById(currentSectionName);
        sectionNo--;
        prevSectionName = "section" + sectionNo;
        var prevSection = document.getElementById(prevSectionName);
        currentSection.style.animation = "leaving-to-right 0.6s";
        setTimeout(function() {
            currentSection.style.display = "none";
        },500);
        setTimeout(function() {
            prevSection.style.animation = "coming-from-left 0.6s";
        },600);
        setTimeout(function() {
            prevSection.style.display = "block";
        },700);
    }
}

/* Section 1 */

function showPlaceList(placeList,input) {
    var list = document.getElementById('place-list');
    for (var i = 0, liLimit = 0; (i < placeList.length) && (liLimit < 10); i++) {
        var li = document.createElement('li');
        li.innerText = placeList[i];
        list.appendChild(li);
        li.addEventListener("click", function() {
            input.value = this.textContent;
            while (list.firstChild) {
                list.removeChild(list.firstChild);
            }
            list.style.display = list.hasChildNodes() ? 'block' : 'none';
            locationArray = input.value.split(",");
            town = "";
            district = "";
            state = "";
            if (locationArray.length == 3) {
                town = locationArray[0];
                district = locationArray[1];
                state = locationArray[2];
            }
            else if (locationArray.length == 2) {
                district = locationArray[0];
                state = locationArray[1];
            }
            else {
                state = locationArray[0];
            }
        });
        liLimit++;
    }
    list.style.display = list.hasChildNodes() ? 'block' : 'none';
}

function showAutocompleteForPlaceList() {
    var input = document.getElementById('town');
    var list = document.getElementById('place-list');
    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }
    list.style.display = list.hasChildNodes() ? 'block' : 'none';
    if (input.value) {
        var placeList;
        $.ajax({
            type: "POST",
            url: "../abhijithac1603.wixstudio.io/search_place.php",
            data: {search: input.value},
            success: function(data) {
                placeList = JSON.parse(data);
                showPlaceList(placeList,input);
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        })
    }
}

/* Section 2 */

function checkFiles(input) {
    if (input.files.length < 4) {
        let carouselInner = document.getElementById('carousel-inner');
        let carouselIndicators = document.getElementById('carousel-indicators');
        alert("You can only upload at least 4 images.");
        input.value = "";
        while (carouselInner.firstChild) {
            carouselInner.removeChild(carouselInner.firstChild);
        }
        while (carouselIndicators.firstChild) {
            carouselIndicators.removeChild(carouselIndicators.firstChild);
        }
        document.querySelector('#section2 .default-image').style.display = "block";
        document.getElementById("upload-img-label").innerHTML = "Upload Images"
    }
    else {
        var files = input.files;
        if (files) {
            for (let i = 0; i < input.files.length; i++) {
                var file = files[i];
                var reader = new FileReader();
                reader.onload = function(e) {
                    if (i == 0) {
                        const carouselItem = document.createElement('div');
                        carouselItem.classList.add('carousel-item', 'active');
                        carouselItem.style.backgroundImage = "url('" + e.target.result + "')";
                        document.getElementById('carousel-inner').appendChild(carouselItem);

                        const button = document.createElement('button');
                        button.setAttribute('type', 'button');
                        button.setAttribute('data-bs-target', '#myCarousel');
                        button.setAttribute('data-bs-slide-to', i);
                        button.classList.add('active');
                        button.setAttribute('aria-current', 'true');
                        button.setAttribute('aria-label', ('Slide ' + (i + 1)));
                        document.getElementById('carousel-indicators').appendChild(button);
                    }
                    else {
                        const carouselItem = document.createElement('div');
                        carouselItem.classList.add('carousel-item');
                        carouselItem.style.backgroundImage = "url('" + e.target.result + "')";
                        document.getElementById('carousel-inner').appendChild(carouselItem);

                        const button = document.createElement('button');
                        button.setAttribute('type', 'button');
                        button.setAttribute('data-bs-target', '#myCarousel');
                        button.setAttribute('data-bs-slide-to', i);
                        button.setAttribute('aria-label', ('Slide ' + (i + 1)));
                        document.getElementById('carousel-indicators').appendChild(button);
                    }
                }
                reader.readAsDataURL(file);
            }
        }
        document.querySelector('#section2 .default-image').style.display = "none";
        document.getElementById("upload-img-label").innerHTML = "Update Images"
    }
}

function rcImageUpdate(input,rcNo) {
    if (input.files.length < 3) {
        let carouselInner = document.getElementById('carousel-inner-'+rcNo);
        let carouselIndicators = document.getElementById('carousel-indicators-'+rcNo);
        alert("You can only upload at least 3 images.");
        input.value = "";
        while (carouselInner.firstChild) {
            carouselInner.removeChild(carouselInner.firstChild);
        }
        while (carouselIndicators.firstChild) {
            carouselIndicators.removeChild(carouselIndicators.firstChild);
        }
        document.querySelector('#section' + sectionNo + ' .default-image').style.display = "block";
        document.getElementById("upload-img-label-"+rcNo).innerHTML = "Upload Images";
    }
    else {
        var files = input.files;
        if (files) {
            for (let i = 0; i < input.files.length; i++) {
                var file = files[i];
                var reader = new FileReader();
                reader.onload = function(e) {
                    if (i == 0) {
                        const carouselItem = document.createElement('div');
                        carouselItem.classList.add('carousel-item', 'active');
                        carouselItem.style.backgroundImage = "url('" + e.target.result + "')";
                        document.getElementById('carousel-inner-'+rcNo).appendChild(carouselItem);

                        const button = document.createElement('button');
                        button.setAttribute('type', 'button');
                        button.setAttribute('data-bs-target', '#myCarousel-'+rcNo);
                        button.setAttribute('data-bs-slide-to', i);
                        button.classList.add('active');
                        button.setAttribute('aria-current', 'true');
                        button.setAttribute('aria-label', ('Slide ' + (i + 1)));
                        document.getElementById('carousel-indicators-'+rcNo).appendChild(button);
                    }
                    else {
                        const carouselItem = document.createElement('div');
                        carouselItem.classList.add('carousel-item');
                        carouselItem.style.backgroundImage = "url('" + e.target.result + "')";
                        document.getElementById('carousel-inner-'+rcNo).appendChild(carouselItem);

                        const button = document.createElement('button');
                        button.setAttribute('type', 'button');
                        button.setAttribute('data-bs-target', '#myCarousel-'+rcNo);
                        button.setAttribute('data-bs-slide-to', i);
                        button.setAttribute('aria-label', ('Slide ' + (i + 1)));
                        document.getElementById('carousel-indicators-'+rcNo).appendChild(button);
                    }
                }
                reader.readAsDataURL(file);
            }
        }
        document.querySelector('#section' + sectionNo + ' .default-image').style.display = "none";
        document.getElementById("upload-img-label-"+rcNo).innerHTML = "Update Images"
    }
}

/* Section 3 */

function changeLocation() {
    var iframeStr = document.getElementById('glocation');
    var setLocation = document.getElementById('glocation-frame');
    let containsIframe = /<iframe.*?>/.test(iframeStr.value);

    if (containsIframe) {
        setLocation.innerHTML = iframeStr.value;
    } else {
        alert("The string does not contain an iframe.");
        iframeStr.value = "";
    }
}

/* Section 4 */

var highlightItems = [[6,"Tents"],[10,"Beach volleyball"],[11,"Bicycle rentals"],[14,"Climbing wall"],[17,"Diving"],[18,"Fishing"],[20,"Games room"],[21,"Golf course"],[25,"Kids club"],[26,"Mini golf"],[27,"Movie theater"],[31,"Rock climbing"],[32,"Scuba diving"],[35,"Swimming pool"],[36,"Tennis courts"],[37,"Volleyball courts"],[38,"Water park"],[40,"Yoga classes"],[41,"Bars"],[46,"Poolside bars"],[48,"ATM"],[49,"Babysitting services"],[50,"Beauty salon"],[54,"Currency exchange"],[55,"Doctor on call"],[58,"Hair salon"],[59,"Internet cafe"],[60,"Laundry service"],[61,"Library"],[62,"Luggage storage"],[64,"Medical clinic"],[66,"Nightclub"],[67,"Free parking"],[70,"Igloos"],[75,"Fireplaces"],[78,"Ocean views"],[80,"Private gardens"],[82,"Smart TVs"],[83,"Bungee jumping"],[85,"Hot air ballooning"],[87,"Skydiving"],[88,"Whitewater rafting"],[96,"Childrens pool"],[97,"Family movie nights"],[98,"Playground"],[101,"Botanical garden"],[103,"Movie nights under the stars"],[107,"Basketball courts"],[111,"Cricket pitch"],[113,"Gym"],[114,"Mini golf course"],[116,"Scuba diving lessons"],[118,"Rafting"],[121,"Glass-bottom boat tours"],[127,"Bicycle"],[129,"Free Wi-Fi"],[130,"Air conditioning"],[131,"Airport transfer"],[132,"Private beach"]];
var facilityItems = [[1,"Bungalows"],[2,"Cabanas"],[3,"Cottages"],[4,"Lodges"],[5,"Overwater bungalows"],[6,"Tents"],[7,"Treehouses"],[8,"Archery"],[9,"Art classes"],[10,"Beach volleyball"],[11,"Bicycle rentals"],[12,"Boating"],[13,"Bowling"],[14,"Climbing wall"],[15,"Cooking classes"],[16,"Dance lessons"],[17,"Diving"],[18,"Fishing"],[19,"Fitness center"],[20,"Games room"],[21,"Golf course"],[22,"Guided hikes"],[23,"Horseback riding"],[24,"Kayaking"],[25,"Kids club"],[26,"Mini golf"],[27,"Movie theater"],[28,"Mountain biking"],[29,"Paddleboarding"],[30,"Parasailing"],[31,"Rock climbing"],[32,"Scuba diving"],[33,"Snorkeling"],[34,"Surfing lessons"],[35,"Swimming pool"],[36,"Tennis courts"],[37,"Volleyball courts"],[38,"Water park"],[39,"Windsurfing"],[40,"Yoga classes"],[41,"Bars"],[42,"Buffet restaurants"],[43,"Fine dining restaurants"],[44,"Food trucks"],[45,"In-room dining"],[46,"Poolside bars"],[47,"Room service"],[48,"ATM"],[49,"Babysitting services"],[50,"Beauty salon"],[51,"Boutique"],[52,"Business center"],[53,"Concierge service"],[54,"Currency exchange"],[55,"Doctor on call"],[56,"Gift shop"],[57,"Grocery store"],[58,"Hair salon"],[59,"Internet cafe"],[60,"Laundry service"],[61,"Library"],[62,"Luggage storage"],[63,"Massage services"],[64,"Medical clinic"],[65,"Newspapers"],[66,"Nightclub"],[67,"Free parking"],[68,"Capsule hotels"],[69,"Glamping tents"],[70,"Igloos"],[71,"Riads"],[72,"Yurts"],[73,"Balconies"],[74,"Bathtubs"],[75,"Fireplaces"],[76,"Hammocks"],[77,"Jacuzzis"],[78,"Ocean views"],[79,"Outdoor showers"],[80,"Private gardens"],[81,"Rooftop terraces"],[82,"Smart TVs"],[83,"Bungee jumping"],[84,"Canyoning"],[85,"Hot air ballooning"],[86,"Paragliding"],[87,"Skydiving"],[88,"Whitewater rafting"],[89,"Cooking demonstrations"],[90,"Dance performances"],[91,"Language classes"],[92,"Local craft workshops"],[93,"Museum visits"],[94,"Traditional music shows"],[95,"Arcade"],[96,"Childrens pool"],[97,"Family movie nights"],[98,"Playground"],[99,"Splash pad"],[100,"Teen lounge"],[101,"Botanical garden"],[102,"Meditation classes"],[103,"Movie nights under the stars"],[104,"Open-air cinema"],[105,"Spa treatments"],[106,"Stargazing tours"],[107,"Basketball courts"],[108,"Forest bathing"],[109,"Bike tours"],[110,"Underground spa"],[111,"Cricket pitch"],[112,"Fitness classes"],[113,"Gym"],[114,"Mini golf course"],[115,"Treetop dining"],[116,"Scuba diving lessons"],[117,"Snorkeling trips"],[118,"Rafting"],[119,"Animal encounters"],[120,"Water skiing"],[121,"Glass-bottom boat tours"],[122,"Specialty Restaurants"],[123,"Gluten-free menus"],[124,"Halal food"],[125,"Kosher food"],[126,"Vegan and vegetarian options"],[127,"Bicycle"],[128,"Eco-Friendly Practices"],[129,"Free Wi-Fi"],[130,"Air conditioning"],[131,"Airport transfer"],[132,"Private beach"],[133,"24-hour front desk"],[134,"Great Breakfast"],[135,"Restaurant"],[136,"Private bathroom"],[137,"Daily housekeeping"],[138,"Childrens Park"],[139,"Non-smoking rooms"],[140,"Coffee shop"],[141,"Steamroom"],[142,"Hiking"],[143,"Yoga room"]];
var selectedHighlightArray = [];
var selectedFacilityArray = [];

function showAutocompleteForHighlight() {
    var input = document.getElementById('highlights');
    var filter = input.value.toUpperCase();
    var list = document.getElementById('highlight-list');

    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }

    for (var i = 0, nofR = 0; (i < highlightItems.length) && (nofR < 10); i++) {
        var textValue = highlightItems[i][1];
        if ((filter) && (textValue.toUpperCase().indexOf(filter) > -1)) {
            var li = document.createElement('li');
            li.innerText = textValue;
            li.setAttribute('data-hidden-value', highlightItems[i][0]);
            list.appendChild(li);
            li.addEventListener("click", function() {
                highlightValue = this.getAttribute('data-hidden-value');
                selectedHighlightArray.push(highlightValue);
                selectHighlight(this.textContent);
            });
            nofR++;
        }
    }

    list.style.display = list.hasChildNodes() ? 'block' : 'none';
}

function showAutocompleteForFacility() {
    var input = document.getElementById('facilities');
    var filter = input.value.toUpperCase();
    var list = document.getElementById('facility-list');

    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }

    for (var i = 0, nofR = 0; (i < facilityItems.length) && (nofR < 10); i++) {
        var textValue = facilityItems[i][1];
        if ((filter) && (textValue.toUpperCase().indexOf(filter) > -1)) {
            var li = document.createElement('li');
            li.innerText = textValue;
            li.setAttribute('data-hidden-value', facilityItems[i][0]);
            list.appendChild(li);
            li.addEventListener("click", function() {
                facilityValue = this.getAttribute('data-hidden-value');
                selectedFacilityArray.push(facilityValue);
                selectFacility(this.textContent);
            });
            nofR++;
        }
    }

    list.style.display = list.hasChildNodes() ? 'block' : 'none';
}

function selectHighlight(highlightName) {
    var input = document.getElementById('highlights');
    var selectedHighlights = document.getElementById('selected-highlights');

    var divM = document.createElement('div');
    var divS = document.createElement('div');
    var divSSL = document.createElement('div');
    var divSSR = document.createElement('div');
    var nameHighlightspan = document.createElement('span');
    var removeHighlightBtn = document.createElement('button');

    divM.classList.add('col');
    divM.classList.add('align-c');
    divS.classList.add('div-s');
    divSSL.classList.add('div-s-s-l');
    divSSR.classList.add('div-s-s-r');
    nameHighlightspan.classList.add('text-content');
    removeHighlightBtn.classList.add('remove-btn');

    nameHighlightspan.innerHTML = highlightName;

    divSSL.appendChild(nameHighlightspan);
    divSSR.appendChild(removeHighlightBtn);
    divS.appendChild(divSSL);
    divS.appendChild(divSSR);
    divM.appendChild(divS);
    selectedHighlights.appendChild(divM);

    if (checkOverflow(nameHighlightspan)) {
        nameHighlightspan.classList.add('scrolling-text');
    }
    
    input.value = "";
    showAutocompleteForHighlight();
    input.focus();
}

function selectFacility(facilityName) {
    var input = document.getElementById('facilities');
    var selectedFacilities = document.getElementById('selected-facilities');

    var divM = document.createElement('div');
    var divS = document.createElement('div');
    var divSSL = document.createElement('div');
    var divSSR = document.createElement('div');
    var nameFacilityspan = document.createElement('span');
    var removeFacilityBtn = document.createElement('button');

    divM.classList.add('col');
    divM.classList.add('align-c');
    divS.classList.add('div-s');
    divSSL.classList.add('div-s-s-l');
    divSSR.classList.add('div-s-s-r');
    nameFacilityspan.classList.add('text-content');
    removeFacilityBtn.classList.add('remove-btn');

    nameFacilityspan.innerHTML = facilityName;

    divSSL.appendChild(nameFacilityspan);
    divSSR.appendChild(removeFacilityBtn);
    divS.appendChild(divSSL);
    divS.appendChild(divSSR);
    divM.appendChild(divS);
    selectedFacilities.appendChild(divM);

    if (checkOverflow(nameFacilityspan)) {
        nameFacilityspan.classList.add('scrolling-text');
    }

    input.value = "";
    showAutocompleteForFacility();
    input.focus();
}

function checkOverflow(element) {
    return element.scrollWidth > element.clientWidth;
}

/* Section 5 */

var nofPolicy = 2;
function newPolicy() {
    nofPolicy++;
    var divMain = document.getElementById('div-main');
    var addPolicyDiv = document.getElementById('add-policy-div');

    var divM = document.createElement('div');
    var divS = document.createElement('div');
    var policyNo = document.createElement('h5');
    var policyNameL = document.createElement('label');
    var policyName = document.createElement('input');
    var policyDescripL = document.createElement('label');
    var policyDescrip = document.createElement('textarea');

    divM.className = "col";
    divS.className = "div-border";
    policyNo.innerHTML = "POLICY " + nofPolicy;
    policyNameL.htmlFor = "policy-name-" + nofPolicy;
    policyNameL.classList.add('form-label','label-fs-l');
    policyNameL.innerHTML = "NAME OF POLICY";
    policyName.type = "text";
    policyName.id = "policy-name-" + nofPolicy;
    policyName.name = "policy-name-" + nofPolicy;
    policyName.className = "form-control";
    policyDescripL.htmlFor = "policy-descrip-" + nofPolicy;
    policyDescripL.classList.add('form-label','label-fs-l');
    policyDescripL.innerHTML = "DESCRIPTION ABOUT POLICY";
    policyDescrip.id = "policy-descrip-" + nofPolicy;
    policyDescrip.name = "policy-descrip-" + nofPolicy;
    policyDescrip.rows = "6";
    policyDescrip.cols = "30";
    policyDescrip.className = "form-control";

    divS.append(policyNo,policyNameL,policyName,policyDescripL,policyDescrip);
    divM.appendChild(divS);
    divMain.insertBefore(divM,addPolicyDiv);
    if (nofPolicy%2 != 0) {
        addPolicyDiv.classList.replace('col-12','col');
    }
    else {
        addPolicyDiv.classList.replace('col','col-12');
    }
}

/* Section 6 */

typesOfRooms = 0;
remainingSection = 0;
var spanTypesOfRooms = document.getElementById('types-of-rooms');
var left = document.getElementById('left');
var right = document.getElementById('right');
function add() {
    if (typesOfRooms < 10) {
        typesOfRooms++;
        remainingSection = typesOfRooms;
        spanTypesOfRooms.innerHTML = typesOfRooms;
    }
    if (typesOfRooms == 1) {
        left.classList.remove('opacity-25');
    }
    else if (typesOfRooms == 10) {
        right.classList.add('opacity-25');
    }
}

function remove() {
    if (typesOfRooms > 0) {
        typesOfRooms--;
        remainingSection = typesOfRooms;
        spanTypesOfRooms.innerHTML = typesOfRooms;
    }
    if (typesOfRooms == 0) {
        left.classList.add('opacity-25');
    }
    else if (typesOfRooms == 9) {
        right.classList.remove('opacity-25');
    }
}

/* Section 7 */

function createNewSections() {
    for (let i = 1; i <= remainingSection; i++) {
        const parentElement = document.getElementById('form-tag');
        const newSection = document.createElement('div');
        newSection.id = `section${i+6}`;
        newSection.classList.add('dynamic-sections');
        newSection.innerHTML = `
            <div id="category-${i}" class="row row-cols-2">
                <div class="col">
                    <div class="form-group">
                        <br>
                        <h3>CATEGORY ${i}</h3><br>
                        <label for="rc-name-${i}" class="form-label label-fs-l">ROOM CATEGORY NAME</label>
                        <input type="text" class="form-control" id="rc-name-${i}" name="rc-name-${i}"><br>
                        <div class="row">
                            <div class="col">
                                <label for="tno-rooms-${i}" class="form-label label-fs-l">TOTAL NUMBER OF ROOMS</label>
                                <input type="text" class="form-control" id="tno-rooms-${i}" name="tno-rooms-${i}">
                            </div>
                            <div class="col">
                                <label for="st-room-no-${i}" class="form-label label-fs-l">STARTING ROOM NUMBER</label>
                                <input type="text" class="form-control" id="st-room-no-${i}" name="st-room-no-${i}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <br><br>
                        <h4 style="height: 35px;">ROOM RATE PRICING</h4>
                        <div class="row">
                            <div class="col">
                                <label for="room-rent-${i}" class="form-label label-fs-l">ROOM RENT</label>
                                <input type="text" class="form-control" id="room-rent-${i}" name="room-rent-${i}">
                            </div>
                            <div class="col">
                                <label for="cost-adult-${i}" class="form-label label-fs-l">COST PER ADULT</label>
                                <input type="text" class="form-control" id="cost-adult-${i}" name="cost-adult-${i}">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="cost-child-${i}" class="form-label label-fs-l">COST PER CHILD</label>
                                <input type="text" class="form-control" id="cost-child-${i}" name="cost-child-${i}">
                            </div>
                            <div class="col">
                                <label for="offer-${i}" class="form-label label-fs-l">OFFER</label>
                                <input type="text" class="form-control" id="offer-${i}" name="offer-${i}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-top: 50px;">
                    <div class="form-group">
                        <h4>DETAILS OF ROOM</h4><br>
                        <div style="display: flex; align-items: center;">
                            <label for="room-size-${i}" class="form-label label-fs-l same-line" style="white-space: nowrap; margin-bottom: 0; margin-right: 10px;">ROOM SIZE : </label>
                            <input type="text" class="form-control same-line room-size" id="room-size-${i}" name="room-size-${i}">
                            <select id="room-size-unit-${i}">
                                <option value="m">m²</option>
                                <option value="ft">ft²</option>
                            </select>
                        </div><br>
                        <label for="window-view-${i}" class="form-label label-fs-l same-line">SELECT THE WINDOW VIEW : </label>
                        <select name="window-view-${i}" id="window-view-${i}">
                            <option value="City View">City View</option>
                            <option value="Garden View">Garden View</option>
                            <option value="Beach View">Beach View</option>
                            <option value="Mountain View">Mountain View</option>
                            <option value="Lake View">Lake View</option>
                            <option value="Park View">Park View</option>
                            <option value="Pool View">Pool View</option>
                            <option value="Forest View">Forest View</option>
                            <option value="Desert View">Desert View</option>
                            <option value="Skyline View">Skyline View</option>
                            <option value="River View">River View</option>
                            <option value="Village View">Village View</option>
                            <option value="Sunset View">Sunset View</option>
                            <option value="Harbor View">Harbor View</option>
                            <option value="Rural View">Rural View</option>
                            <option value="Waterfall View">Waterfall View</option>
                        </select><br><br>
                        <label for="bed-type-${i}" class="form-label label-fs-l same-line">SELECT THE TYPES AND NUMBER OF BEDS : </label>
                        <select name="bed-type-${i}" id="bed-type-${i}">
                            <option value="2 single beds or 1 double bed">2 single beds or 1 double bed</option>
                            <option value="2 single beds">2 single beds</option>
                            <option value="1 double bed">1 double bed</option>
                            <option value="1 single bed">1 single bed</option>
                            <option value="1 queen bed or 1 king bed">1 queen bed or 1 king bed</option>
                            <option value="1 king bed">1 king bed</option>
                            <option value="1 queen bed">1 queen bed</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div id="room-img-container-${i}" style="margin-top: 14px;">
                        <div class="default-image">
                            <img src="../img/default/resort.png" alt="">
                        </div>
                        <div id="rc-image-carousel-${i}" class="rc-image-carousel">
                            <div id="myCarousel-${i}" class="carousel slide mb-6" data-bs-ride="carousel">
                                <div class="carousel-indicators" id="carousel-indicators-${i}"></div>
                                <div class="carousel-inner" id="carousel-inner-${i}"></div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel-${i}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel-${i}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label id="upload-img-label-${i}" for="upload-img-${i}" class="upload-img-label" style="margin-top: 10px;">Upload Images</label>
                            <input id="upload-img-${i}" name="upload-img-${i}[]" type="file" multiple accept="image/jpeg, image/pjpeg, image/png" class="upload-img" onchange="rcImageUpdate(this,${i})">
                        </div>
                    </div>
                </div>
            </div>
        `;
        parentElement.appendChild(newSection);
    }
    return remainingSection + 6;
}

tSections = 0;
function createNextSection(secNo) {
    if (remainingSection >= secNo - 6) {
        tSections = remainingSection + 6;
    }
}
function roomDetailSection(secNo) {
    if (secNo == 7) {
        var section6 = document.getElementById('section6');
        var section7 = document.getElementById('section7');
        section6.style.animation = "leaving-to-left 0.6s";
        setTimeout(function() {
            section6.style.display = "none";
        },500);
        setTimeout(function() {
            section7.style.animation = "coming-from-right 0.6s";
        },600);
        setTimeout(function() {
            section7.style.display = "block";
        },700);
    }
}

function paymentDetailSection(secNo) {
    if (secNo == 8) {
        var section7 = document.getElementById('section7');
        var section8 = document.getElementById('section8');
        section7.style.animation = "leaving-to-left 0.6s";
        setTimeout(function() {
            section7.style.display = "none";
        },500);
        setTimeout(function() {
            section8.style.animation = "coming-from-right 0.6s";
        },600);
        setTimeout(function() {
            section8.style.display = "block";
        },700);
    }
}

nofCategory = document.getElementById('nof-Category');
category1 = document.getElementById('category-1');
function toFirstCategory() {
    nofCategory.style.animation = "leaving-to-left 0.6s";
    setTimeout(function() {
        nofCategory.style.display = "none";
    },500);
    category1.style.animation = "coming-from-right 0.6s";
    setTimeout(function() {
        category1.style.display = "block";
    },600);
}
function toNextCategory() {
    
}