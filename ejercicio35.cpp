#include <iostream>
int main() {
    
int numero1,numero2;

std::cout << "Ingresar primer numero: ";
std::cin >> numero1;

std::cout << "Ingresar segundo numero: ";
std::cin >> numero2;

if ((numero1 == numero2) && (numero1 != 0 || numero2 != 0)){
    std::cout << "Los numeros ingresados son iguales"<< std::endl;
}  else{
    std::cout << "Los numeros ingresados son diferentes"<< std::endl;
}
    return 0;
}