#include <stdio.h>
#include <string>
#include <iostream>  //Basic library
using namespace std;

int main(){ 
    string ph;
    
    cout <<"請輸入待測液體之氫離子濃度(請輸入小數型式,單位為)mol/L)" << endl;
    cin >> ph;
    if(ph.empty()){
      cout << "請輸入正確的值" << endl;
    }
    else
    {
    cout << "ph值為:" << ph.size()-2 << endl;
    } 
    return 0;
	
}