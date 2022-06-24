#include <iostream>

using namespace std;
class vehicle {

public:

     vehicle() {
        cout << "this is a vehicle from constructor " << endl;
            }
void car(){
    cout << "this is a car from function" << endl;
        }

};
///inheritance

class car: public vehicle {
};

int main()
{
    car object;
    return 0;
}
