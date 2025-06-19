$(document).ready(function() {
    // Get tomorrow's date
    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    // Initialize first date picker with minDate set to today
    $("#date-in").datepicker({
        minDate: tomorrow,
        onSelect: function(selectedDate) {
            // Get the selected date and parse it
            var date = new Date(selectedDate);
            // Add one day to the selected date
            date.setDate(date.getDate() + 1);
            // Format the next day in mm/dd/yyyy format
            var nextDay = $.datepicker.formatDate('mm/dd/yy', date);
            // Set the minDate of the second date picker to the next day
            $("#date-out").datepicker("option", "minDate", nextDay);
            $("#date-in-span").html($("#date-in").val());
        }
    });

    // Initialize second date picker with minDate set to the day after tomorrow
    var dayAfterTomorrow = new Date();
    dayAfterTomorrow.setDate(dayAfterTomorrow.getDate() + 2);
    var formattedDayAfterTomorrow = $.datepicker.formatDate('mm/dd/yy', dayAfterTomorrow);
    $("#date-out").datepicker({
        minDate: formattedDayAfterTomorrow,
        onSelect: function(selectedDate) {
            $("#date-out-span").html($("#date-out").val());
        }
    });

    $("#date-in-div").click(function() {
        $("#date-in").select();
    });

    $("#date-out-div").click(function() {
        $("#date-out").select();
    });

});

function showAddNofRoomBox() {
    current_state = document.getElementById('nofRoomBox').style.display;
    if(current_state == "none")
        document.getElementById('nofRoomBox').style.display = "block";
    else
        document.getElementById('nofRoomBox').style.display = "none";
}

var nofRooms = document.getElementById('nofRooms');
var nofAdults = document.getElementById('nofAdults');
var nofChildren = document.getElementById('nofChildren');
var pRoomBtn = document.getElementById('style-fpw5o');
var mRoomBtn = document.getElementById('style-wOoOb');
var pAdultBtn = document.getElementById('style-qEGmx');
var mAdultBtn = document.getElementById('style-eS7tR');
var pChildBtn = document.getElementById('style-6JVCB');
var mChildBtn = document.getElementById('style-Yv9Q3');
var nofRoomsDiv = document.getElementById('nof-rooms-div');
function plusRoom() {
    if (Rooms < 5) {
        Rooms++;
        nofRooms.innerHTML = Rooms;
    }
    if (Rooms > 1) {
        mRoomBtn.classList.remove('ae4e0-bg-neutral-disabled-rl7');
    }
    if (Rooms == 5) {
        pRoomBtn.classList.remove('ae4e0-bg-secondary-2g2');
        pRoomBtn.classList.add('ae4e0-bg-neutral-disabled-rl7');
    }
    nofRoomsDiv.innerText = (Rooms == 1) ? Rooms + " Room" : Rooms + " Rooms";
}
function minusRoom() {
    if (Rooms > 1) {
        Rooms--;
        nofRooms.innerHTML = Rooms;
    }
    if (Rooms == 1) {
        mRoomBtn.classList.add('ae4e0-bg-neutral-disabled-rl7');
    }
    else if (Rooms == 4) {
        pRoomBtn.classList.remove('ae4e0-bg-neutral-disabled-rl7');
        pRoomBtn.classList.add('ae4e0-bg-secondary-2g2');
    }
    nofRoomsDiv.innerText = (Rooms == 1) ? Rooms + " Room" : Rooms + " Rooms";
}

function plusAdult() {
    if (Adults < Rooms*5) {
        Adults++;
        nofAdults.innerHTML = Adults;
    }
    if (Adults > 1) {
        mAdultBtn.classList.remove('ae4e0-bg-neutral-disabled-rl7');
    }
    if (Adults == ((Rooms*5)-Children)) {
        pAdultBtn.classList.remove('ae4e0-bg-secondary-2g2');
        pAdultBtn.classList.add('ae4e0-bg-neutral-disabled-rl7');
    }
}
function minusAdult() {
    if (Adults > 1) {
        Adults--;
        nofAdults.innerHTML = Adults;
    }
    if (Adults == 1) {
        mAdultBtn.classList.remove('ae4e0-bg-secondary-2g2');
        mAdultBtn.classList.add('ae4e0-bg-neutral-disabled-rl7');
    }
    else if (Adults == (Rooms*5)-1) {
        pAdultBtn.classList.remove('ae4e0-bg-neutral-disabled-rl7');
        pAdultBtn.classList.add('ae4e0-bg-secondary-2g2');
    }
}

function plusChild() {
    if (Children < (Rooms*5)-Adults) {
        Children++;
        nofChildren.innerHTML = Children;
    }
    if (Children > 0) {
        mChildBtn.classList.remove('ae4e0-bg-neutral-disabled-rl7');
    }
    if (Children == ((Rooms*5)-Adults-1)) {
        pChildBtn.classList.remove('ae4e0-bg-secondary-2g2');
        pChildBtn.classList.add('ae4e0-bg-neutral-disabled-rl7');
    }
}
function minusChild() {
    if (Children > 0) {
        Children--;
        nofChildren.innerHTML = Children;
    }
    if (Children == 0) {
        mChildBtn.classList.remove('ae4e0-bg-secondary-2g2');
        mChildBtn.classList.add('ae4e0-bg-neutral-disabled-rl7');
    }
    else if (Children == ((Rooms*5)-Adults)-1) {
        pChildBtn.classList.remove('ae4e0-bg-neutral-disabled-rl7');
        pChildBtn.classList.add('ae4e0-bg-secondary-2g2');
    }
}

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
    var input = document.getElementById('input_comp-kbgakxea_r_comp-lrv1tpma');
    var list = document.getElementById('place-list');
    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }
    list.style.display = list.hasChildNodes() ? 'block' : 'none';
    if (input.value) {
        var placeList;
        $.ajax({
            type: "POST",
            url: "../../php/place_search.php",
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

function searchResort() {
    navigator.geolocation.getCurrentPosition((position) => {
        var currentLat = position.coords.latitude;
        var currentLon = position.coords.longitude;
        $.ajax({
            type: "POST",
            url: "../../php/get_cards.php",
            data: {
                town: town,
                district: district,
                state: state,
                checkin: $('#date-in').val(),
                checkout: $('#date-out').val(),
                rooms: Rooms,
                adults: Adults,
                children: Children,
                currentLat: currentLat,
                currentLon: currentLon
            },
            success: function(data) {
                $('#cards').html(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        })
    }, (error) => {
        console.error('Error getting current location:', error);
    });
}

function gotoResortPage(Id) {
    Checkin = $('#date-in').val();
    Checkout = $('#date-out').val();
    $.ajax({
        type: "POST",
        url: "update.php",
        data: {
            rpId: Id,
            checkin: Checkin,
            checkout: Checkout,
            rooms: Rooms,
            adults: Adults,
            children: Children
        },
        success: function(response) {
            window.location.href = './resort/';
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    })
}