#include <iostream>

int main() {
    int numero;

    std::cout << "Introduce un número para ver su tabla de multiplicar: ";
    std::cin >> numero;

    std::cout << "Esta es la tabla de multiplicar del numero " << numero << ":\n";
    for (int i = 1; i <= 10; i++) {

        std::cout << numero << " x " << i << " = " << numero * i << std::endl;
    }

    return 0;
}