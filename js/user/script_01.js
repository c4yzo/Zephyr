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
            $("#date-in-label").hide();
        }
    });

    // Initialize second date picker with minDate set to the day after tomorrow
    var dayAfterTomorrow = new Date();
    dayAfterTomorrow.setDate(dayAfterTomorrow.getDate() + 2);
    var formattedDayAfterTomorrow = $.datepicker.formatDate('mm/dd/yy', dayAfterTomorrow);
    $("#date-out").datepicker({
        minDate: formattedDayAfterTomorrow,
        onSelect: function(selectedDate) {
            $("#date-out-label").hide();
        }
    });
});

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
    var input = document.getElementById('place-searchbox');
    var list = document.getElementById('place-list');
    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }
    list.style.display = list.hasChildNodes() ? 'block' : 'none';
    if (input.value) {
        var placeList;
        $.ajax({
            type: "POST",
            url: "../php/place_search.php",
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

function setList(Callby) {
    var selectNofAdults = document.getElementById('selectNofAdults');
    var selectNofChildren = document.getElementById('selectNofChildren');
    var selectNofAdultsText = document.getElementById('select2-chosen-1');
    var selectNofChildrenText = document.getElementById('select2-chosen-2');
    var temp = 0;
    if (Callby == "rooms" || Callby == "children") {
        temp = selectNofAdults.value;
        if (Callby == "rooms") {
            nofChildren = 0;
        } else {
            nofChildren = selectNofChildren.value;
        }
        while (selectNofAdults.firstChild) {
            selectNofAdults.removeChild(selectNofAdults.firstChild);
        }
        maxAdults = 5-nofChildren;
        for (let i = 1; i <= maxAdults; i++) {
            newOption = document.createElement('option');
            newOption.text = i;
            newOption.value = i;
            if (newOption.value == temp) {
                newOption.selected = true;
            }
            selectNofAdults.add(newOption);
        }
        var selectedOption = selectNofAdults.options[selectNofAdults.selectedIndex];
        selectNofAdultsText.textContent = selectedOption.textContent;
    }
    if (Callby == "rooms" || Callby == "adults") {
        temp = selectNofChildren.value;
        if (Callby == "rooms") {
            nofAdults = 1;
        } else {
            nofAdults = selectNofAdults.value;
        }
        while (selectNofChildren.firstChild) {
            selectNofChildren.removeChild(selectNofChildren.firstChild);
        }
        maxChildren = 5-nofAdults;
        for (let i = 0; i <= maxChildren; i++) {
            newOption = document.createElement('option');
            newOption.text = i;
            newOption.value = i;
            if (newOption.value == temp) {
                newOption.selected = true;
            }
            selectNofChildren.add(newOption);
        }
        var selectedOption = selectNofChildren.options[selectNofChildren.selectedIndex];
        selectNofChildrenText.textContent = selectedOption.textContent;
    }
}

function searchResort() {
    Loc = $('#place-searchbox').val();
    Checkin = $('#date-in').val();
    Checkout = $('#date-out').val();
    Rooms = 1;
    Adults = $('#selectNofAdults').val();
    Children = $('#selectNofChildren').val();
    if (!Loc) {
        alert("Please enter a destination");
    }
    else {
        $.ajax({
            type: "POST",
            url: "../user/update.php",
            data: {
                location: Loc,
                checkin: Checkin,
                checkout: Checkout,
                rooms: Rooms,
                adults: Adults,
                children: Children
            },
            success: function(response) {
                window.location.href = './resorts/';
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        })
    }
}