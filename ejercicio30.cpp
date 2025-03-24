#include <iostream>
int main() {
    
int numero1,numero2;

std::cout << "Ingresar primer numero: ";
std::cin >> numero1;

std::cout << "Ingresar segundo numero: ";
std::cin >> numero2;

int division = numero1 / numero2;

if (numero1 <= 0){
    std::cout << "No puede ingresar 0 o un numero menor a este"<< std::endl;
} else if (numero2 <= 0){
    std::cout << "No puede ingresar 0 o un numero menor a este"<< std::endl;
} else{
    std::cout << "La division es igual a: " << division << std::endl;
}
    return 0;
}