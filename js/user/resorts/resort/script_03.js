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


function setList(Callby) {
    var selectNofRooms = document.getElementById('selectNofRooms');
    var selectNofAdults = document.getElementById('selectNofAdults');
    var selectNofChildren = document.getElementById('selectNofChildren');
    var selectNofAdultsText = document.getElementById('select2-chosen-2');
    var selectNofChildrenText = document.getElementById('select2-chosen-3');
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
        maxAdults = (selectNofRooms.value)*5-nofChildren;
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
        maxChildren = (selectNofRooms.value)*5-nofAdults;
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

function checkAvailability(RpId,RcCount) {
    var selectNofRooms = document.getElementById('selectNofRooms');
    var selectNofAdults = document.getElementById('selectNofAdults');
    var selectNofChildren = document.getElementById('selectNofChildren');
    var Rooms = selectNofRooms.value;
    var Adults = selectNofAdults.value;
    var Children = selectNofChildren.value;
    for (let i = 1; i <= RcCount; i++) {
        let buttonId = 'room-price-details_'+i;
        $.ajax({
            type: "POST",
            url: "../../../php/check_availability.php",
            data: {
                rpId: RpId,
                rcId: i,
                checkin: $('#date-in').val(),
                checkout: $('#date-out').val(),
                rooms: Rooms,
                adults: Adults,
                children: Children
            },
            success: function(data) {
                $('#' + buttonId).html(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        })    
    }
}

function bookRoom(RcId) {
    var Rooms = selectNofRooms.value;
    var Adults = selectNofAdults.value;
    var Children = selectNofChildren.value;
    Checkin = $('#date-in').val();
    Checkout = $('#date-out').val();
    if (!Checkin || !Checkout) {
        alert("Enter Check-in Check-out Dates");
    }
    else {
        $.ajax({
            type: "POST",
            url: "update.php",
            data: {
                rcId: RcId,
                checkin: Checkin,
                checkout: Checkout,
                rooms: Rooms,
                adults: Adults,
                children: Children
            },
            success: function(response) {
                window.location.href = './book/';
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        })
    }
}

function addComment() {
    var Rooms = selectNofRooms.value;
    var Adults = selectNofAdults.value;
    var Children = selectNofChildren.value;
    Checkin = $('#date-in').val();
    Checkout = $('#date-out').val();
    $.ajax({
        type: "POST",
        url: "update.php",
        data: {
            checkin: Checkin,
            checkout: Checkout,
            rooms: Rooms,
            adults: Adults,
            children: Children
        },
        success: function(response) {
            window.location.href = './comment/';
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    })
}
