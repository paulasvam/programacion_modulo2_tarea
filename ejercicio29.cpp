#include <iostream>
int main() {
    
int numero1,numero2;

std::cout << "Ingresar primer numero: ";
std::cin >> numero1;

std::cout << "Ingresar segundo numero: ";
std::cin >> numero2;

int multiplicacion = numero1 * numero2;

std::cout << "La multiplicacion es igual a: " << multiplicacion << std::endl;
    return 0;
}