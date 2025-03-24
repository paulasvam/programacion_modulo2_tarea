#include <iostream>
#include <iostream>
using namespace std;

int main() {
    int num1, num2, residuo;

    std::cout << "Ingrese el primer número entero: ";
    std::cin >> num1;
    
    std::cout << "Ingrese el segundo número entero: ";
    std::cin >> num2;

    if (num2 != 0) {
        residuo = num1 % num2;
        std::cout << "El residuo de " << num1 << " dividido por " << num2 << " es: " << residuo << std::endl;
    } else {
        std::cout << "Error: No se puede dividir entre cero." << std::endl;
    }

    return 0;
}