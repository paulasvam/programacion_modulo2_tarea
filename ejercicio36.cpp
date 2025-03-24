#include <iostream>
int main() {
    
int numero1,numero2;

std::cout << "Ingresar primer numero: ";
std::cin >> numero1;

std::cout << "Ingresar segundo numero: ";
std::cin >> numero2;

int suma = numero1 + numero2;
int producto = numero1 * numero2;

std::cout << "La suma de los dos numeros es igual a: " << suma << std::endl;
std::cout << "El producto de la suma de los dos numeros es igual a: " << producto << std::endl;
    return 0;
}