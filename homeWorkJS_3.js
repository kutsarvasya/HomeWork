// • Напишите код, выполнив задание из каждого пункта отдельной строкой:
//     • Создайте пустой объект user.
// • Добавьте свойство name со значением John.
// • Добавьте свойство surname со значением Smith.
// • Измените значение свойства name на Pete.
const user ={}
user.name= 'John'
user.surname= 'Smith'
user.age = 17
user.day_of_birthday = 25
console.log(user)
user.name='Pete'
console.log(user)
// • Напишите функцию isEmpty(obj), которая возвращает true, если у объекта нет свойств, иначе false.
function isEmpty(obj){
    return  (Object.keys(obj).length === 0)
}

console.log(isEmpty(user))
// • У нас есть объект, в котором хранятся зарплаты нашей команды “let salaries = {Ivan: 1000, Dmitriy:
//         1600, Anton: 1300}”. Напишите код для суммирования всех зарплат и сохраните результат в
// переменной sum. Если объект salaries пуст, то результат должен быть 0.
let salaries = {Ivan: 1000, Dmitriy: 1600, Anton: 1300}
function totalSum (object) {
    var a = 0;
    for(let key in object) {
        a += object[key]
    }
    return a
}
var  sum = totalSum(salaries)
console.log(sum)
// • Создайте функцию multiplyNumeric(obj), которая умножает все числовые свойства объекта obj на 2.
// Обратите внимание, что multiplyNumeric не нужно ничего возвращать. Следует напрямую изменять
// объект. Используйте typeof для проверки, что значение свойства числовое.
function multiplyNumeric(obj){
    for(let key in obj) {
        if(typeof obj[key] === 'number'){
            obj[key] = obj[key]*2
        }
    }
}
multiplyNumeric(user)
console.log(user)
//     Задачи
// • Создайте класс transport и дочерние - car, motorbike, и bicycle.
//     Придумайте и опишите по несколько свойств и методов, включая
// одинаковый для всех классов метод ride() и свойство maxSpeed,
//     ограничьте максимальную скорость для объектов классов car,
//     motorbike.
class transport  {
    maxSpeed = 100
    ride (minutes){
        let minrost = this.maxSpeed/60
        return minrost * minutes
    }
}
class motorbike extends transport{
    maxSpeed = 60
    price = 1000
    constructor (color,brand) {
        super();
        this.color = color;
        this.brand = brand;
    }
    cost (){
        if(this.color === 'grin'){
            this.price =1200;
        }
        return this.price
    }
}
class car extends transport {
    maxSpeed = 90
}
class bicycle extends transport {
}
let test = new motorbike('grin', 'bmw')
var rost = test.ride(10)
console.log(test.cost())


// • Создайте массив из 6 объектов классов car, motorbike, bicycle и
// отсортируйте его от самого быстрого к самому медленному.
var arrayOfOjects = [new car(), new car(), new motorbike('green', 'bmw'), new motorbike('black','suzuki'), new bicycle(), new bicycle()];
arrayOfOjects.sort(function (a, b) {
    if (a.maxSpeed < b.maxSpeed) {
        return 1;
    }
    if (a.maxSpeed > b.maxSpeed) {
        return -1;
    }
    // a должно быть равным b
    return 0;
});
console.log(arrayOfOjects)
// • Используя прототип добавьте метод классу transport.

var d = new motorbike('red','lada')
d.ride = function (){
    console.log('qwwe')
}
d.ride()