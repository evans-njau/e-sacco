// Adding trips dynamically
/*const addTripForm = document.getElementById("addTripForm");
const tripsTable = document.getElementById("tripsTable").querySelector("tbody");

addTripForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const tripName = document.getElementById("tripName").value;
    const tripDate = document.getElementById("tripDate").value;
    const tripSeats = document.getElementById("tripSeats").value;

    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${tripName}</td>
        <td>${tripDate}</td>
        <td>${tripSeats}</td>
        <td><button class="btn btn-danger btn-sm" onclick="deleteTrip(this)">Delete</button></td>
    `;

    tripsTable.appendChild(row);
    addTripForm.reset();
});

// Delete a trip
function deleteTrip(button) {
    const row = button.closest("tr");
    row.remove();
}*/
