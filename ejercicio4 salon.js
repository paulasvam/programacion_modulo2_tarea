let dia = 4;
let nombredia;

switch (dia) { 
    case 1:
        nombredia = "Lunes";
        break;
    case 2:
        nombredia = "Martes";
        break;
    case 3:
        nombredia = "Miercoles";
        break;
    case 4:
        nombredia = "Jueves";
        break;
    case 5:
        nombredia = "Viernes";
        break;
    case 6:
        nombredia = "Sabado";
        break;
    case 7:
        nombredia = "Domingo";
        break;
    default:
    nombredia = "Dia invalido";
}
console.log(nombredia);