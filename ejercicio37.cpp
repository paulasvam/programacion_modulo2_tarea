#include <iostream>
int main() {
    
    int inicial, final;
    
    std::cout <<"Ingresar el numero inicial del rango:";
    std::cin >> inicial;
    
    std::cout <<"Ingresar el numero final del rango:";
    std::cin >> final;
    
    for (int i = inicial; i <= final; i++) {
        if (i % 2 == 0) {
            std::cout << i << " ";
        }
    }
    return 0;
}