#include <iostream>

int main() {
    int numero;
    int suma = 0;

    std::cout << "Ingrese una serie de números (ingrese un número negativo o cero para terminar):" << std::endl;

    while (true) {
        std::cout << "Número: ";
        std::cin >> numero;

        if (numero <= 0) {
            break;
        }

        suma += numero;
    }

    std::cout << "La suma de los números positivos ingresados es: " << suma << std::endl;

    return 0;
}