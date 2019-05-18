// const URLROOT = window.location.origin + "/testMvcAJAX";
// // console.log(window.location.origin + "/testMvcAJAX");
// const ul = document.getElementById("list");
// let modal = document.getElementById("modal");
// let usersList = document.getElementById("usersList");
// let myTable = document
//     .getElementById("userTable")
//     .getElementsByTagName("tbody")[0];

// console.log(myTable);

// let count = 2;

// function ajaxTest() {
//     $.ajax({
//         url: URLROOT + "/pages/getAjaxPosts",
//         method: "POST",
//         data: { start: 0, end: count },
//         success: function (resp) {
//             for (let i = 0; i < resp.length; i++) {
//                 console.log(resp[i].name);
//             }
//             count = count + 2;
//             // console.log(resp.length);
//         }
//     });
// }
// // document.querySelector("input[name=hey]").value;

// const myForm = document.getElementById("user-form");

// document.querySelector("form").addEventListener("submit", e => {
//     e.preventDefault();
//     // const formData = new FormData(e.target);
//     // // Now you can use formData.get('foo'), for example.
//     // // Don't forget e.preventDefault() if you want to stop normal form .submission
//     let fname = myForm["fname"].value;

//     $.ajax({
//         url: URLROOT + "/pages/postUserValue",
//         method: "POST",
//         data: { fname: fname },
//         success: function (resp) {
//             loadUsers();
//             modal.style.display = "none";
//         }
//     });

//     console.log(fname);

//     // console.log(input);
// });
// loadUsers();
// // Load Form
// function loadUsers() {
//     usersList.innerHTML = "";
//     $.ajax({
//         url: URLROOT + "/pages/getAllUsers",
//         method: "POST",
//         success: function (resp) {
//             for (let i = 0; i < resp.length; i++) {
//                 myTable.insertRow;
//                 // let row = myTable.insertRow(i);
//                 // let cell1 = row.insertCell(0);
//                 // let cell2 = row.insertCell(1);

//                 // cell1.innerHTML = resp[i].fname;
//                 // cell2.innerHTML = resp[i].lname;

//                 usersList.innerHTML += "<p>" + resp[i].fname + "</p>";

//                 console.log(resp[i].fname);
//             }
//             // console.log(resp.length);
//         }
//     });
// }
