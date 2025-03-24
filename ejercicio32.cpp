#include <iostream>
int main() {
    
double numero1,numero2,numero3;

std::cout << "Ingresar primer numero: ";
std::cin >> numero1;

std::cout << "Ingresar segundo numero: ";
std::cin >> numero2;

std::cout << "Ingresar tercer numero: ";
std::cin >> numero3;

double promedio = (numero1+numero2+numero3)/3;

std::cout << "El promedio de los 3 numeros ingresados es igual a: " << promedio << std::endl;
    return 0;
}