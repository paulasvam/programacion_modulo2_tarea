#include <iostream>
int main() {
    
int numero1,numero2;

std::cout << "Ingresar primer numero: ";
std::cin >> numero1;

std::cout << "Ingresar segundo numero: ";
std::cin >> numero2;

int resta = numero1 - numero2;

std::cout << "La resta es igual a: " << resta << std::endl;
    return 0;
}