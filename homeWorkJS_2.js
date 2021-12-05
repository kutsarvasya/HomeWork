// homeWorkJS_2
// Перепишите функцию, используя оператор '?' или '||'
// function checkAge(age) {
//     if (age > 18) {
//         return true;
//     } else {
//         return confirm('Родители разрешили?');
//     }
// // }
function checkAge(age) {
     return age > 18?false:confirm('Родители разрешили?')
}

// console.log(checkAge(19))
// Напишите функцию min(a,b), которая возвращает меньшее из чисел a и b.
// min(2, 5) == 2
// min(3, -1) == -1
// // min(1, 1) == 1
function min (a, b) {
    if (a > b) {
        console.log(a)
    } else if (a < b) {
        console.log(b)
    } else console.log(b)
}
min(2, 5)
min(3, -1)
min(1, 1)
// // Функция pow(x,n)
// // pow(3, 2) = 3 * 3 = 9
// // pow(3, 3) = 3 * 3 * 3 = 27
// // pow(1, 100) = 1 * 1 * ...* 1 = 1
// // Напишите функцию pow(x,n), которая возвращает x в степени n. Иначе говоря, умножает x на себя n раз и возвращает результат.
function pow (x,n){
    console.log(x ** n);
}
pow(3, 2)
pow(3, 3)
pow(1, 100)
// //     Задачи
// // ОСНОВЫ JS Урок №2
// // 24
// // • Сделайте функцию inArray, которая определяет, есть в массиве элемент с заданным текстом или нет. Функция первым параметром
// // должна принимать текст элемента, а вторым - массив, в котором делается поиск. Функция должна возвращать true или false.
 function inArray (a, b){
    var flug = false;
    a.forEach(function (item, index){
        if (item.indexOf(b) !== -1){

            flug= true
        }
    })
    return flug;
}
var a = [ 'saghhj', 'lkjhhg']
console.log(inArray(a, 'sa'));

// • Дана строка. Сделайте заглавным первый символ каждого слова этой строки. Для этого сделайте вспомогательную функцию ucfirst,
//     которая будет получать строку, делать первый символ этой строки заглавным и возвращать обратно строку с заглавной первой
// буквой.
let string = 'this is new string';

function ucfirst(string){
    let arr = string.split(" ");
    var UcFirstString = ' ';
    arr.forEach(function (text,index,array)
    {
        UcFirstString += text[0].toUpperCase() + text.slice(1) + " ";
    })
    return UcFirstString;
}
console.log(ucfirst(string));
// • Сделайте функцию each, которая первым параметром принимает массив, а вторым - функцию, которая применится к каждому
// элементу массива. Функция each должна вернуть измененный массив.
var arr = [ 'asd', 'qwe', 'zxc', 'lot', 'jjjj','lllll', 'vvctffyt', 'ijijij']
function each (array, func){
    array.forEach(func)
    return array;
}

var b = function (item,index, array){
    return array[index] = item.toUpperCase();
}

var a = each(arr,b)
console.log(a)
// • Сделайте функцию each, которая первым параметром принимает массив, а вторым - массив функций, которые по очереди
// применятся к каждому элементу массива: к первому элементу массива - первая функция, ко второму - вторая и так далее пока
// функции в массиве не закончатся, после этого возьмется первая функция, вторая и так далее по кругу.
var b1 = function (item){
    console.log(item.toUpperCase());
}

var c = function (item){
    console.log( item.split(''));
}
var d = function (item){
    let tempArray = item.split('')
    console.log(tempArray.join(' '));
}
var arrayOfFunctions = [b1 , c , d];
var arr2 = [ 'asd', 'qwe', 'zxc', 'lot', 'jjjj','lllll', 'vvctffyt', 'ijijij']

function each2 (array, arrayFunc){
    let counter = 0;
    array.forEach(function (item) {
        if (counter < arrayFunc.length){
            arrayFunc[counter](item);
            counter++;
        }else {
            arrayFunc[0](item);
            counter = 1
        }
    })
}
each2(arr2, arrayOfFunctions);
// • Используя замыкание сделайте функцию, которая считает и выводит количество своих вызовов.
