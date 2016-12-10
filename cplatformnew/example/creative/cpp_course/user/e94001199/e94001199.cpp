#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
#include <stdlib.h>
#include <time.h>
using namespace std;
int today;
int a;
int main(){
       cout << "請輸入今天星期幾(1-7):" <<endl; 
       cin >> today;
       srand(time(0));
       a=((rand())+today)%3;
       if(a==0)
       cout << "今天喝威士忌!" << endl;
       else if(a==1)
       cout << "今天喝伏特加!" << endl;
       else
       cout << "今天喝台啤ㄅ!" << endl;

	


	
	return 0;
}