// var -> function
// let -> block
// const -> block
















// ------------------------------------------------------------------
// voorbeeld
// function sayHello() {
//     for (var i = 0; i < 5; i++){
//         console.log(i);
//     }
// }
//
// sayHello();
// // kan je niet overschrijven
// const x = 1;
// x = 2;
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// // 1
// const person = {
//     name: 'Mosh',
//     walk: function () {},
//     talk() {} // het zelfde als regel 7
// };
//
//
// person.talk();
// person.name = '';
//
// const targetMember = 'name'
// person[targetMember.value] = 'John';
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// // 2 (this oplossing en problemen)
// const person = {
//     name: 'Mosh',
//     walk() {
//         console.log(this);
//     }
// };
//
// person.walk();
//
// // const walk = person.walk;
// // console.log(walk) // functie zichtbaar
// // walk(); // undefined
//
// // fix
// const walk = person.walk.bind(person);
// walk();
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// voordeel van de arrow function
// 1
// const square = function (number){
//     return number * number;
// }

// verschil

// const square = number => number * number;
// console.log(square(5));
//
// 2
// const jobs = [
//     {id: 1, isActive: true},
//     {id: 2, isActive: true},
//     {id: 3, isActive: false},
// ];
//
// const activeJobs = jobs.filter(function(job) { return job.isActive})
//
// // verschil
//
// const activeJobs = jobs.filter(job => job.isActive);


// begin en fout
// const person = {
//     talk() {
//
//         setTimeout(function () {
//             console.log("this", this)
//         }, 1000)
//     }
// }
//
// person.talk();

// oplossing 1 van vroeger
// const person = {
//     talk() {
//
//         var self = this;
//
//         setTimeout(function () {
//             console.log("self", self)
//         }, 1000)
//     }
// }
//
// person.talk();


// oplossing 2 met arrow function
// const person = {
//     talk() {
//
//         setTimeout(() => {
//             console.log("this", this)
//         }, 1000)
//     }
// };
//
// person.talk();
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// werken met map

// code 1
// const colors = ['red', 'green', 'blue']
// const items = colors.map(function (color) {
//     return '<li>' + color + '</li>'
// });

// verschil

// code 2
// const colors = ['red', 'green', 'blue']
// const items = colors.map(color => '<li>' + color + '</li>');
// or
// const items = colors.map(color => `<li>${color}</li>`);
//
// console.log(items)


// const address = {
//     street: '',
//     city: '',
//     country: '',
// }
//
// // 1
// const street = address.street;
// const city = address.city;
// const country = address.country;
//
// // or
//
// // 2
// const  { street, city, country} = address;
// // or 1 object
// const  { street: str} = address;
// ------------------------------------------------------------------












