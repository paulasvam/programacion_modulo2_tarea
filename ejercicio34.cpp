#include <iostream>
int main() {
    
double base,altura;

std::cout << "Ingresar altura del rectangulo: ";
std::cin >> altura;

std::cout << "Ingresar base del rectangulo: ";
std::cin >> base;

double area = base * altura;

std::cout << "El area del rectangulo es igual a: " << area << std::endl;
    return 0;
}